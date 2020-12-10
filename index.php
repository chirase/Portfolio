<?php

include("class\StylesheetsClass.php");
include("class\HeaderClass.php");
include("class\BodyClass.php");

$header = new Header();

$header->GetHtmlHead();

$body = new Body();

$body->OpenBodyHome();

$header->GetBodyHeader();
$body->GetHomeSlider();

$body->CloseBodyHome();

?>

</html>
