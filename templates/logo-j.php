<?PHP
$html = '
  <div class="container" style="width: 1000px;">
    <div class="flexbox">
      <div class="lineup">
      </div>
      
      <div class="position">
        <p class="names">'. $fname .' '. $lname .'</p>
        <div class="circle">
        </div>
      </div>

      <div class="linedown">
      </div>
    </div>
    <p class="reales">Properties</p>
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
    margin-top: 10px;
  }

  .position {
    display: flex;
    align-items: center;
  }

  .names {
    color: gray;
    font-family: "Metropolis Regular";
    font-size: {{187918847__Design J text size}}px;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 5px;
    margin-right: 2px;
    white-space: nowrap;
  }

  .reales {
    position: relative;
    color: gray;
    font-family: "Metropolis Light";
    font-size: 25px;
    text-transform: uppercase;
    letter-spacing: 6px;
    text-align: center;
    margin-left: 10px;
    bottom: 90px;
  }

  .lineup {
    border-left: 4px solid gray;
    height: 120px;
    width: 120px;
    margin-right: 2px;
    border-top: 4px solid gray;
    margin-bottom: 30px;
    margin-right: -30px;  
  }

  .linedown {
    border-right: 4px solid gray;
    height: 120px;
    width: 120px;
    margin-left: 2px;
    border-bottom: 4px solid gray;
    margin-top: 100px;
    margin-left: -20px;
  }

  .circle {
    position: relative;
    border-radius: 100%;
    background: orange;
    width: {{187918847__Design J circle size }}px;
    height: {{187918847__Design J circle size }}px;
    top: {{187918847__Design J circle size }}px;
  }
  @font-face {
    font-family: Metropolis regular;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-Regular.otf");
  }
  @font-face {
    font-family: Metropolis Light;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-ExtraLight.otf");
  }
'; 
?>
