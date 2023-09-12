<?PHP
$html = '
  <div class="container text-center" style="width: 1000px">
    <div class = flexbox>
      <img class = "circle" style = "width: 350px" src=https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Generator/Drafts/Option%20T/icon.svg>
      
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
  .flexbox{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 50px;
  }
  .circle{
  margin-top: 200px;
  }
  .names {
    margin-top: 30px;
    color: gray;
    font-family: "Metropolis light";
    font-weight: bold;
    font-size: 65px;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 12px;
  }
  .reales {
    color: gray;
    font-family: "Metropolis Medium";
    font-size: 25px;
    text-transform: uppercase;
    letter-spacing: 6px;
    text-align: center;
    margin-top: -65px;
  }
  @font-face {
    font-family: Metropolis Light;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-ExtraLight.otf")
  }
  @font-face {
    font-family: Metropolis Medium;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-Medium.otf");
  }
'; 
?>