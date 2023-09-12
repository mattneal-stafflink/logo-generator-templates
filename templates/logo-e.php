<?PHP
$html = '
  <div class="container" style="width: 1000px">
    <div class = "circle">
      <img  class = "circle" style = "width: 500px" src=https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Generator/Image-Circle-Logo-2023.png>
    </div>
    <div class = "names ">
      <p>'. $fname .' '. $lname .'<p>
    </div>
    <div class = "reales">
      <p> Real estate </p>
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
    background-color: transparent !important;
  }
  .names {
    color: gray;
    font-family: \'Metropolis regular\';
    font-size: 65px;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 15px;
    margin-top: 150px;
  }
  .reales{
    color: gray;
    font-family: \'Metropolis Light\';
    font-size: 40px;
    text-transform: uppercase;
    letter-spacing: 10px;
    text-align: center;
    margin-top: -85px;
  }
  .circle{
    position: relative;
    top: 10%;
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