<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#cadran{
			position: relative;
			margin: auto;
			width: 250px;
			height: 250px;
			border-radius: 50%;
			border: 2px solid black;
		}
		#aiguille1{
			position: absolute;
			left: 121px;
			height: 125px;
			width: 2px;
			border-right: 2px solid red;
			transform-origin: 100% 100%;

			transform: rotate(<?php echo date('H')*30 ?>deg);
	
		

		}

		#aiguille2{
			position: absolute;
			top: 125px;
			left: 123px;
			height: 125px;
			width: 2px;
			border-right: 2px solid blue;
			transform-origin: 100% 0;

			transform: rotate(<?php echo date('i')*6 + 180 ?>deg);
		
	
		
		}

			#aiguille3{
			position: absolute;
			left: 125px;
			top: 2px;
			height: 125px;
			width: 2px;
			border-right: 2px solid green;
			transform-origin: 0 100%;

			transform: rotate(<?php echo date('s')* 6 ?>deg);

			
	
	
		}
	</style>
</head>
<body>
	<div id="cadran">
		<div id="aiguille1"></div>
		<div id="aiguille2"></div>
		<div id="aiguille3"></div>
	</div>
		<?php echo '<br><div style="width:80px;margin:auto">'.date('H : i : s').'</div>';
		
	?>
</body>
</html>
