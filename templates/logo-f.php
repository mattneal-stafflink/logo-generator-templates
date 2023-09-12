<?PHP
$html = '
	<div class="container text-center" style="width: 1000px">
		<div class = "flexbox">
			<div class="circle">
				<p class="initials">'. $finitial .''. $linitial .'<span class="dot">.</span></p>
			</div>
			<div class="names text-center">
				<p>'. $fname .' '. $lname .'</p>
			</div>
			<div class="reales text-center">
				<p>properties</p>
			</div>
		</div>
	</div>
'; 

$css = '
	.container {
		height: 1000px;
	}
	.flexbox {
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		top: 20%
	}
	.names {
		color: gray;
		font-family: "metropolis bold";
		font-size: 70px;
		text-transform: uppercase;
		letter-spacing: 5px;
		font-weight: bolder;
		text-align: center;
	}
	.reales {
		color: gray;
		font-family: "Metropolis regular";
		font-size: 30px;
		text-transform: uppercase;
		letter-spacing: 7px;
		margin-top: -70px;
	}
	.circle {
		position: relative;
		top: 20%;
		display: flex;
		justify-content: center;
		align-items: center;
		border: 8px solid gray;
		border-radius: 100%;
		background: rgba (0, 0, 0, 0);
		width: 350px;
		height: 350px;
	}
	.dot {
		color: orange;
	}
	.initials {
		margin-top: 170px;
		color: gray;
		font-size: 150px;
		font-family: "Visby Cf Extra Bold";
	}
	@font-face {
		font-family: Metropolis regular;
		src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-Regular.otf");
	}
	@font-face {
		font-family: Metropolis Bold;
		src: url("https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/Metropolis%20Font/Metropolis-Bold.otf");
	} 
	@font-face {
		font-family: Visby Cf Extra Bold;
		src: url(" https://ap-south-1.linodeobjects.com/image-property/public/Image%20DevOps/Logo%20Fonts/VisbyCF%20Font/VisbyCF-ExtraBold.otf");
	}
'; 
?>