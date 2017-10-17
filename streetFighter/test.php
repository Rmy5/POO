<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			label{
				display: block;
				width: 150px;
				height: 150px;
				border: 1px solid black;
			}
			#test{
				display: none;
			}
			#test:checked ~ label{
				background-color: red; 
			}
			a{
				display: block;
				width: 150px;
				height: 150px;
				border: 1px solid black;
			}
			label:checked ~ .pic{
				box-shadow: 0 0 0 10px green;
			}



			
		</style>
	</head>
	<body>
		
		

		<a href="?kjh" class="pic"><label><input type="checkbox"></label></a>
	
	</body>
</html>













