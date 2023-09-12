<?PHP

$html = '
	<div class="container text-center" style= "width: 1000px">
		<div class ="flexbox">
			<img class="first-name-letter" src="https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Image%20Schmick%20Font/image-schmick-font-' . strtolower($finitial) . '.png">
			<img class="last-name-letter" src ="https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Image%20Schmick%20Font/image-schmick-font-' . strtolower($linitial) . '.png">
			<div class="circle">
			</div>
	</div>
		<div class="name client">
			<p>'. $fname .' '. $lname .'</p>
		</div>
	
		<div class="name properties">
			<p>properties</p>
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
		margin-top: 90px;
	}
	.client {
		color: gray;
		font-family: \'Metropolis Bold\';
		font-size: 60px;
		text-transform: uppercase;
		text-align: center;
		letter-spacing: 12px;
		font-weight: bold;
	}
	
	.properties {
		color: gray;
		font-family: \'Metropolis Regular\';
		font-size: 35px;
		text-transform: uppercase;
		letter-spacing: 6.5px;
		text-align: center;
		font-weight: lighter;
		margin-top: -70px;
	}
	
	.first-name-letter {
		height: 220px;
		margin-right: 30px;
	}
	
	.last-name-letter {
		height: 220px;
	}
	
	.circle {
		border-radius: 100%;
		background: orange;
		width: 30px;
		height: 30px;
		margin-top: 180px;
		margin-left: 40px;
	}
	
	@font-face {
		font-family: Metropolis regular;
		src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-Regular.otf");
	}
	
	@font-face {
		font-family: Metropolis regular;
		src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-Regular.otf");
	}
';
?>