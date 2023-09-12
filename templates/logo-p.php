<?PHP
$html = '
  <div class="container" style="width: 1000px">  
    <img class = "circle" style = "width: 350px" src="https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Generator/image-double-circle-empty-middle.png">
    <div class = "line">
    </div>
    <p class = "first">'. $finitial .'</p>    
    <p class = "second">'. $linitial .'</p>    
    <p class = "name">'. $fname .' '. $lname .'<p>    
    <div class = "reales">  
      <p>Properties<p>
    </div>
  </div>
'; 

$css = '
  .container {
    height: 1000px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .name {
    margin-top: 20px;
    color: gray;
    font-family: \'Metropolis semi-bold\';
    font-size: 65px;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 15px;
  }
  .reales {
    color: gray;
    font-family: \'Metropolis light\';
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 9px;
    text-align: center;
    margin-top: -120px;
  }
  .circle {
    position: relative; 
    top: 20%
  }
  .first {
    margin-top: -100px;
    font-size: 100px;
    font-family: \'poor richard\';
    color: gray;
  }
  .second {
    margin-top: -85px;
    font-size: 100px;
    font-family: \'poor richard\';
    text-align: center;
    color: gray;
  }
  .line {
    position: relative;  
    top: 20px;
    width: 150px;
    background-color: gray;
    height: 2px;
  }
  @font-face {
    font-family: Metropolis Light;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-ExtraLight.otf");
  } 
  @font-face {
    font-family: \'Metropolis semi-bold\';
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-SemiBold.otf");
  }
  @font-face {
    font-family: poor richard;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Poor%20Richard%20Font/Poor%20Richard%20Regular.ttf");
  }
'; 
?>