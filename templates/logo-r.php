<?PHP
$html = '
  <div class="container" style="width: 1000px">  
    <div class ="flexbox">
      <img class = "circle" style = "width: 650px" src=https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Generator/Image-Single-Wave-Logo-2023.png>  
      <div class="names">    
        <p>'. $fname .' '. $lname .'</p>  
      </div>  
      <div class="reales">    
        <p>Properties</p>  
      </div>
    </div>
  </div>
'; 

$css = '
  .container {
    height: 1000px;
  }
  .flexbox {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .circle{
    margin-top: 200px;
  }
  .names {
    color: gray;
    font-family: \'Metropolis light\';
    font-size: 65px;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 15px;
  }
  .reales{
    color: gray;
    font-family: \'Metropolis Medium\';
    font-size: 25px;
    text-transform: uppercase;
    letter-spacing: 8px;
    text-align: center;
    margin-top: -60px;
  }
  
  @font-face {
    font-family: Metropolis Light;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-ExtraLight.otf");
  } 
  @font-face {
    font-family: Metropolis Medium;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-Medium.otf");
  }
'; 
?>