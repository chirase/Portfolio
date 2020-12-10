<?php

class Styles{

  function getStyles($fileNames, $stylesFolder = "styles"){

  $html = "";
  foreach($fileNames as $file){
   $html.= "<link href='".$stylesFolder."/".$file.".css' rel='stylesheet' type='text/css'/>";
  }

  return $html;

  }
}

?>
