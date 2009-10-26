<?php
/*
 * $Id: class.weblogtrackback.php,v 1.6 2005/06/18 17:56:01 tohokuaiki Exp $
 * Copyright (c) 2005 by ITOH Takashi(http://tohokuaiki.jp/)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting
 * source code which is considered copyrighted (c) material of the
 * original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA
 *
 */
 
include_once(sprintf('%s/class/xoopstree.php', XOOPS_ROOT_PATH));
include_once(sprintf('%s/modules/%s/include/PEAR/Net/TrackBack.php', XOOPS_ROOT_PATH , $xoopsModule->dirname()));
include_once(sprintf('%s/modules/%s/include/PEAR/XML/Unserializer.php', XOOPS_ROOT_PATH , $xoopsModule->dirname()));
include_once(sprintf('%s/modules/%s/include/encode_set.inc.php', XOOPS_ROOT_PATH, $xoopsModule->dirname()));


class Weblog_Trackback_Operator extends Net_TrackBack{

    var $handler ;
	var $tb_result=array() ;
	var $user_agent = "Xoops WeBlog TrackBack System" ;

//	var $post_trackback_urls=array() ;
	var $post_trackback_data=array() ;
		
    function Weblog_Trackback_Operator() {
        $this->handler =& xoops_getmodulehandler('trackback');
    }

    function &getInstance() {
        static $instance;
        if (!isset($instance)) {
            $instance = new Weblog_Trackback_Operator();
        }
        return $instance;
    }

    function &newInstance() {
        return $this->handler->create();
    }

    function saveTrackback(&$trackback) {
        return $this->handler->insert($trackback);
    }

    function removeTrackback($blog_id,$tb_url="",$direction="") {
        $trackback =& $this->handler->create();
        $trackback->setVar('blog_id', intval($blog_id));
        if( $tb_url )
          $trackback->setVar('tb_url', $tb_url);
        if( $direction )
          $trackback->setVar('direction', $direction );
		if( $this->handler->delete( $trackback ) ){
			$this->tb_result[$tb_url] = 	"delete trackback link" ;
		}else{
			$this->tb_result[$tb_url] = 	"Can't delete trackback link" ;
		}
        return $this->handler->delete($trackback);
    }


	function Get_Trackback_Url( $entry , $old_trackbackurl ){
		// create $post_trackback_urls 
		$trackback_url_array = array() ;
		if( $entry->getVar('blog_id')==0 || ! $old_trackbackurl ){
			$trackback_url_add_array = explode( "\n" , trim($entry->getVar('ent_trackbackurl')) ) ;
			$trackback_url_del_array = array() ;
		}else{
			$old_trackbackurl_array =  array() ;
			$new_trackbackurl_array =  array() ;
			foreach( explode( "\n" , trim($old_trackbackurl) ) as $key=>$value){
				if( $value = trim($value) )
					array_push( $old_trackbackurl_array ,  $value );
			}
			foreach( explode( "\n" , trim($entry->getVar('ent_trackbackurl')) ) as $key=>$value){
				if( $value = trim($value) )
					array_push( $new_trackbackurl_array ,  $value );
			}
			$trackback_url_add_array = array_unique( array_diff( $new_trackbackurl_array , $old_trackbackurl_array ) );
			$trackback_url_del_array = array_unique( array_diff( $old_trackbackurl_array , $new_trackbackurl_array ) );
		}
		// check URL
		if( isset($trackback_url_del_array) ){
			foreach( $trackback_url_del_array as $key=>$url ){
				if( ! $this->Check_Trackback_URL($url) ){
					unset( $trackback_url_del_array[$key] ) ;
				}else{
					$trackback_url_array[$url] = "del" ;
				}
			}
		}
		if( isset($trackback_url_add_array) ){
			foreach( $trackback_url_add_array as $key=>$url ){
				if( ! $this->Check_Trackback_URL($url) ){
					unset( $trackback_url_add_array[$key] ) ;
				}else{
					$trackback_url_array[$url] = "add" ;
				}
			}
		}
		
		return $trackback_url_array ;
	}


    function Create_Trackback_Data( $entry=null , $blog_name , $blog_url ){
		if( empty($entry) )
				return true ;

		$data = array() ;
		$data['url'] = $blog_url ;
		$data['title'] = encoding_set( $entry->getVar('title' , 'n') , "UTF-8") ;
		$data['excerpt'] = $entry->getVar('contents' , 's' , $entry->getVar('blog_id') , "trackback" ) ;
//		$data['excerpt'] = encoding_set( xoops_substr(htmlspecialchars(strip_tags($data['excerpt']),ENT_QUOTES) , 0 , WEBLOG_TB_EXCERPT_NUM ) , "UTF-8");
		$data['excerpt'] = encoding_set( xoops_substr(strip_tags($data['excerpt']) , 0 , WEBLOG_TB_EXCERPT_NUM ) , "UTF-8");
		$data['blog_name'] = encoding_set( $blog_name , "UTF-8") ;

		$this->post_trackback_data = $data ;
		return true ;
	}


	function Set_Trackback_Values( &$trackback , $tb_rss_data , $trackback_url ,  $direction , $entry=null ){

		// init $tb_rss_data
		$tb_rss_key = array("blog_id","blog_name","title","description","link") ;
		foreach( $tb_rss_key as $key ){
			if( ! isset($tb_rss_data[$key]) )
				$tb_rss_data[$key] = "" ;
		}
		// blog_id
		if( $direction == "transmit" ){
			if( empty($entry) || ! $trackback_url || ! $direction )
				return false ;
			$blog_id = $entry->getVar('blog_id') ;
		}elseif( $direction == "recieved" ){
			$blog_id = $tb_rss_data['blog_id'] ;
		}else{
			return false ;
		}
		// check blog_id
		if( ! preg_match("/^\d+$/" , $blog_id) )
			return false ;

		$trackback->setVar('blog_id' , $blog_id ) ;
		$trackback->setVar('tb_url' , $trackback_url ) ;
		$trackback->setVar('blog_name' , encoding_set( $tb_rss_data['blog_name'] , _CHARSET , $tb_rss_data['encoding'] ) ) ;
		$trackback->setVar('title' , encoding_set( $tb_rss_data['title'] , _CHARSET , $tb_rss_data['encoding'] ) ) ;
		$trackback->setVar('description' , encoding_set( $tb_rss_data['description'] , _CHARSET , $tb_rss_data['encoding'] ) ) ;
		$trackback->setVar('link' , $tb_rss_data['link'] ) ;
		$trackback->setVar('direction' , $direction ) ;

		return true ;
	}


	function Check_Trackback_URL( $tb_url ){
		if( $tb_url ){
			$url_array = parse_url( $tb_url );
			if( $url_array['scheme']=='http' && $url_array['host'] && $url_array['path'] ){
				return true ;
			}else{
				return false ;
			}
		}
	}
	

	function Weblog_Post_Trackback( $trackback_url ){

		$return_from_tb_server = $this->sendPing( $trackback_url , $this->post_trackback_data , $this->user_agent , 'utf-8') ;
		if( $return_from_tb_server === true ){
			$this->tb_result[$trackback_url] = "trackback success" ;
			return true ;
		}else{
			$this->tb_result[$trackback_url] = "trackback failed" ;
			return false ;
		}
	}
	
	
	function Get_RSS_from_trackback_URL( $tb_url ){
	
		$user_agent = "Xoops Weblog module";
		if( ! empty($tb_url) ){
			$tb_url = trim( $tb_url , "?" ) ;
			$url_array = parse_url( $tb_url ) ;
			if( $url_array['scheme']=='http' && $url_array['host'] && $url_array['path'] ){
		        $params = array('method' => HTTP_REQUEST_METHOD_GET);
		        if( preg_match( "/\?/" , $url_array['path'] ) ){
					$tb_url .= "&__mode=rss" ; 
				}else{
					$tb_url .= "?__mode=rss" ;
				}
				$req =& new HTTP_Request($tb_url , $params);
		        $req->addHeader('User-Agent', $this->user_agent);
				$req->sendRequest() ;
				$request_code = $req->getResponseCode();
				if( $request_code == "200" ){
					return $req->getResponseBody() ;
				}
			}
		}
		return false ;
	}	
	
	
	function Parse_XML($xml){
		$data = array("encoding" => "" );
		if( trim($xml) ){
			foreach( explode( "\n" , $xml ) as $xml_line){
				if( preg_match( "/<\?xml.+encoding=[\"\']+([^\"]+)[\"\']+\?>/i" , $xml_line ,$match) )
					$encoding = strtoupper( $match[1] ) ;
				break ;
			}
			if( empty( $encoding )&& function_exists('mb_detect_encoding') ){
				$encoding = mb_detect_encoding($xml) ;
			}
			$Unserializer = &new XML_Unserializer() ; 
			if( $status = $Unserializer->unserialize($xml) ){
				$unserialize_data = $Unserializer->getUnserializedData() ;
				$data['encoding'] = $encoding ;
				$data['title'] = $unserialize_data['rss']['channel']['title']  ;
				$data['description'] = $unserialize_data['rss']['channel']['description']  ;
				$data['link'] = $unserialize_data['rss']['channel']['link']  ;
				return $data ;
			}
		}
		return false ;
	}
	
	
	function Xoops_Weblog_Msg(){
		$trackback_result_msg = "" ;
		foreach( $this->tb_result as $tb_url=>$result ){
			$trackback_result_msg .= $tb_url . "=&gt;" . $result . ".<br />\n" ;
		}
		return $trackback_result_msg ;
	}
	
	
}
?>