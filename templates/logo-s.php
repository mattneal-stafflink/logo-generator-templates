<?PHP
$html = '
  <div class="container">
    <div class="logo-container">
      <img class="logo" src="https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Generator/Drafts/Option%20S/icon.svg">
      <div class="name-container">
        <p class="name">'. $fname .' '. $lname .'<span class = "circle"></span></p>
      </div>
    </div>
  </div>
'; 

$css = '
  .container {
    height: 1000px;
    width: 1000px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .logo-container {
    position: relative;
    width: 850px;
  }

  .name-container {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .circle {
    display: inline-block;
    border-radius: 50%;
    background-color: orange;
    width: 15px;
    height: 15px;
    margin-left: 10px;
  }

  .name {
    color: gray;
    font-family: "Metropolis Light";
    font-size: 50px;
    text-transform: uppercase;
    letter-spacing: 5px;
    white-space: nowrap;
    font-weight: bold;
  }

  .name-container {
    display: flex;
    align-items: center;
  }
  @font-face {
    font-family: Metropolis Light;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-ExtraLight.otf");
  }
'; 
?>