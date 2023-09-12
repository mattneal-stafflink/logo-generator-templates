<?PHP
$html = '
  <div class="container" style="width: 1000px">  
    <img class = "circle" style = "width: 350px" src="https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Generator/Drafts/Option%20U/icon.svg">
    <div class = "name">
        <p>'. $fname .' '. $lname .'</p>
    </div>
    <div class = "properties">
      <p>Properties</p>
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
    color: gray;
    font-family: \'Metropolis semi-bold\';
    font-size: 70px;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 5px;
    margin-top: 180px;
  }
  .properties {
    color: gray;
    font-family: \'Metropolis semi-bold\';
    font-size: 45px;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 5px;
    margin-top: -110px;
  }
  .circle {
    position: relative; 
    top: 20%;
  }
  @font-face {
    font-family: \'Metropolis semi-bold\';
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-SemiBold.otf");
  }
'; 
?>