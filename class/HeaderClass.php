<?php

class Header{
  function GetHtmlHead(){

    $styles = new Styles();
    $fileNames = array("body", "header", "normalize");
    $stylesFolder = "styles";

    $html = "<!DOCTYPE html>";
    $html .= "<head>
    <meta property='og:type' content='website'>
    <meta property='og:image' content=''>
    <meta property='og:site_name' content='Portfolio - Tommy Lizotte'>".
    $styles->getStyles($fileNames, $stylesFolder).
    "</head>";

    echo $html;

  }

  function GetBodyHeader(){

    $html = "<header>".
            "<div class='header-container'>".
              "<div class='logo-container'></div>".
                "<div class='buttons-container'>".
                "<a>Accueil</a>".
                "<a>À propos</a>".
                "<a>Compétences</a>".
                "<a>Portfolio</a>".
                "<a>Content</a>".
              "</div>".
            "</div>".
            "</header>";

    echo $html;

  }
}

?>
