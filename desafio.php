<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jQuery UI Accordion - Default functionality</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<title> Meu primeiro site em PHP! Woohoo! </title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
		<script>
		$( function() {
			$( "#accordion" ).accordion();
		});
		</script>
	</head>
		
	<body>
	
	<div id="accordion">
		<h3>DESAFIO DIO - SEÇÃO 1 </h3>
		<div>
		<p>
		Esse é o texto da primeira seção!
		</p>
			<ul>
				<li> Subtópico da primeira seção </li>
			</ul>
		</div>
		<h3>DESAFIO DIO - SEÇÃO 2 </h3>
		<div>
		<p>
		Se você precisou clicar em uma barra para ler esse texto, então
		o objetivo desse desafio foi concluído com sucesso
		</p>
			<ul>
				<li> Subtópico da segunda seção </li>
			</ul>
		</div>

	</div>
		
	</body>
	
	<script type="text/javascript">
		$(document).ready(function() {
			alert("Woohoo!");
		});

</html>	