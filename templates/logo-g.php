<?PHP
$html = '
  <div class="container" style = "width: 1000px">
    <div class="flexbox">
      <p class="names">'. $fname .' '. $lname .'<span class = "circle"></span></p>
    </div>
    <p class="reales">Properties</p>
    <div class="lineup">
    </div>
    <div class="linedown">
    </div>
  </div>
'; 

$css = '
  .container {
    height: 1000px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .flexbox {
    display: flex;
    align-items: center;
  }

  .names {
    color: gray;
    font-family: "Metropolis Regular";
    font-size: {{187918847__Design G Text Size}}px;
    text-transform: {{187918847__G Font Case Identifier}};
    text-align: center;
    line-height: 1.2;
    margin-right: 21px;
  }

  .circle {
    display: inline-block;
    border-radius: 100%;
    background: orange;
    width: {{187918847__Design G circle size}}px;
    height: {{187918847__Design G circle size}}px;
    margin-left: 10px;
  }

  .reales {
    color: gray;
    font-family: "Metropolis Light";
    font-size: 28px;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    position: relative;
    right: {{187918847__Design G properties side}}px;
    bottom:  {{187918847__Design G Spacing}}px;
  }

  .lineup {
    border-left: 6px solid gray;
    height: {{187918847__Lines height Logo G}}px;
    width: {{187918847__Line Width logo G}}px;
    position: absolute;
    left: {{187918847__Line Position logo G }}%;
    margin-left: -3px;
    top: {{187918847__Design G Lineup}}%;
    border-top: 6px solid gray;
    border-right: 6px solid gray;
  }

  .linedown {
    border-right: 6px solid gray;
    height: {{187918847__Lines height Logo G}}px;
    width: {{187918847__Line Width logo G}}px;
    position: absolute;
    left: {{187918847__Line Position logo G }}%;
    margin-left: -3px;
    top: {{187918847__Design G Linedown}}%;
    border-bottom: 6px solid gray;
    border-left: 6px solid gray;
  }

  @font-face {
    font-family: Metropolis regular;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-Regular.otf");
  }
  @font-face {
    font-family: Metropolis Light;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-ExtraLight.otf")
  }
'; 
?>
