<?PHP
$html = '
  <div class="container" style="width: 1000px">
    <div class="flexbox">
      <div class="box">
        <div class= "names">
          <span>'. $lname .'<span class = "circle"></span></span>
          <span>'. $fname .'</span>
        </div>
        <p class="reales">real estate</p>
      </div>
    </div>
  </div>
'; 

$css = '
  .container {
    height: 1000px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .box {
    display: flex;
    flex-direction: column;
    width: 800px;
    height: 800px;
    border: 4px solid gray;
    background: rgba (0, 0, 0, 0);
    padding: 20px;
    justify-content: space-between;
    text-align: right;
  }
  .names {
    margin-top: auto;
    margin-right: 90px;
    color: gray;
    font-family: "Metropolis Regular";
    font-size: 95px;
    text-transform: uppercase;
    letter-spacing: 5px;
    text-align: right;
    display: flex;
    flex-direction: column-reverse;
    word-wrap: break-word;
  }
  .reales {
    color: gray;
    font-family: "Metropolis Regular";
    font-size: 40px;
    text-transform: uppercase;
    letter-spacing: 5px;
    margin-right: 100px;
    margin-top: 20px;
  }
  .circle {
    display: inline-block;
    border-radius: 100%;
    background: orange;
    width: 30px;
    height: 30px;
    margin-right: -50px;
    margin-left: 20px;
  }
  @font-face {
    font-family: Metropolis regular;
    src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-Regular.otf");
  }
'; 
?>
