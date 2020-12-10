<?php

class Body{
    public function OpenBodyHome(){
      $html = "<body><div class='main'>";
      echo $html;
    }

    public function CloseBodyHome(){
      $html = "</div></body>";
      echo $html;
    }

    public function GetHomeSlider(){
      $html = "<div class='home-slider'>
        <div class='col-desc-slider'>
          <h1>Tommy Lizotte <span>Programmeur • Développeur web</span></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis bibendum lorem, id fermentum orci auctor vitae. Donec vulputate facilisis enim, id vestibulum ligula maximus vel.</p>
          <p>Aliquam blandit urna ac enim euismod mollis. Morbi venenatis eget nisl at ultrices. Aliquam et ex et risus convallis feugiat id a ex. Proin rhoncus bibendum tempus. Fusce eget ipsum mi. Pellentesque volutpat tortor sit amet urna bibendum eleifend. Morbi vehicula, dui non tincidunt finibus, elit ante pellentesque tellus, id tincidunt lectus est vitae arcu.</p>
        </div>
      </div>";
      echo  $html;
    }
}

?>
