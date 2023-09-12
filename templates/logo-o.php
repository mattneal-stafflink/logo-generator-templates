<?PHP
$html = '
  <div class="container">
    <div class="names">
      <p class="first-name">'. $fname .'</p>
      <p class="last-name">'. $lname .'</p>
    </div>
    <div class="circle">
      <p class="first-word">Real</p>
      <p class="last-word">Estate</p>
    </div>
  </div>
'; 

$css = '
  .container {
    width: 1000px;
    height: 1000px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .names {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
    color: gray;
    font-family:\'Metropolis Light\';
    font-size: 65px;
    font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 5px;
    word-break: break-all;
  }

  .first-name {
    margin: 0;
  }

  .last-name {
    margin: 0;
  }

  .circle {
    position: relative;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    background-color: #f8951d;
    border: 10px solid white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: right;
    margin-left: 50px;
    word-break: break-all;
  }

  .first-word {
    color: white;
    font-family: \'Metropolis Light\';
    font-size: 50px;
    font-weight: normal;
    text-transform: uppercase;
    text-align: left;
    margin: 0;
    margin-left: 80px;
  letter-spacing: 5px;
  }

  .last-word {
    color: white;
    font-family: \'Metropolis Light\';
    font-size: 50px;
    font-weight: normal;
    text-transform: uppercase;
    text-align: left;
    margin: 0;
    margin-left: 80px;
    letter-spacing: 5px;
  }
  @font-face {
    font-family: Metropolis Light;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-ExtraLight.otf")
  }
'; 
?>