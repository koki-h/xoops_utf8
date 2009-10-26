<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_CNST_LOADED' ) ) {

define( 'MYALBUM_CNST_LOADED' , 1 ) ;

// Valor sistem�tico ( �Ojo! No editar ) = System Constants (Don't Edit) 
define( "GPERM_INSERTABLE" , 1 ) ;
define( "GPERM_SUPERINSERT" , 2 ) ;
define( "GPERM_EDITABLE" , 4 ) ;
define( "GPERM_SUPEREDIT" , 8 ) ;
define( "GPERM_DELETABLE" , 16 ) ;
define( "GPERM_SUPERDELETE" , 32 ) ;
define( "GPERM_TOUCHOTHERS" , 64 ) ;
define( "GPERM_SUPERTOUCHOTHERS" , 128 ) ;
define( "GPERM_RATEVIEW" , 256 ) ;
define( "GPERM_RATEVOTE" , 512 ) ;

// Autorizaci�n global para cada grupo = Global Group Permission
define( "_ALBM_GPERM_G_INSERTABLE" , "Escribir con previa aprobaci�n" ) ;
define( "_ALBM_GPERM_G_SUPERINSERT" , "Escribir sin aprobar" ) ;
define( "_ALBM_GPERM_G_EDITABLE" , "Editar con previa aprobaci�n" ) ;
define( "_ALBM_GPERM_G_SUPEREDIT" , "Editar sin aprobar" ) ;
define( "_ALBM_GPERM_G_DELETABLE" , "Borrar con previa aprobaci�n" ) ;
define( "_ALBM_GPERM_G_SUPERDELETE" , "Borrar sin aprobar" ) ;
define( "_ALBM_GPERM_G_TOUCHOTHERS" , "Retocar o eliminar las im�genes de los dem�s con previa aprobaci�n" ) ;
define( "_ALBM_GPERM_G_SUPERTOUCHOTHERS" , "Retocar o eliminar las im�genes de los dem�s sin aprobar" ) ;
define( "_ALBM_GPERM_G_RATEVIEW" , "Ver el resultado de votos" ) ;
define( "_ALBM_GPERM_G_RATEVOTE" , "Votar" ) ;

// Caption
define( "_BL_ALBM_CAPTION_TOTAL" , "Total: " ) ;
define( "_BL_ALBM_CAPTION_GUESTNAME" , "Usuario an�nimo" ) ;
define( "_BL_ALBM_CAPTION_REFRESH" , "Renovar" ) ;
define( "_BL_ALBM_CAPTION_IMAGEXYT" , "Tama�o (tipo)" ) ;
define( "_BL_ALBM_CAPTION_CATEGORY" , "Categor�a" ) ;

}

?>
