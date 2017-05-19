<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>

<style mode="text/css">
.kreis-visual {
	width: 150px; 
	height: 150px; 
	border-radius: 50%;
	border: 5px solid; 
	border-color: darkblue;
	margin-top: 2%;
	background: radial-gradient(ellipse at center, #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
	text-align: center;
}
.kreis-visual span {
	margin-top: 52px;
	display: block;
	color: white;
	font-weight: bold;
	font-size: 1.5em;
}
#rad {
	background-color: #0000ff;
	color: yellow;
}
.rechteck-visual {
	width: 150px; 
	height: 150px;
	border: 5px solid; 
	border-color: darkred;
	margin-top: 2%;
	background: radial-gradient(ellipse at center, #cc0000 39%,#ad3f00 58%);
	text-align: center;
}
.rechteck-visual span {
	margin-top: 52px;
	display: block;
	color: white;
	font-weight: bold;
	font-size: 1.5em;
}
#hoehe {
	background-color: #000030;
	color: white;
}
#breite {
	background-color: #000030;
	color: white;
}
</style>	

<div class="container">
	<div class="starter-template">	
			<h1>Flaechenberechnungsprogramm</h1>
			<p class="lead">Flaechen berechnen leicht gemacht! (mehr oder weniger)</p>
	</div>
     <div class="row">
		<div class="col-md-12">
		<h3> Flaechenberechnung </h3>
		</div>
		<div class="col-md-6">	
			<strong>Kreis</strong>
				<div class="kreis-visual">
					<span id="demo" ></span>
				</div>
			<br/><br/>
			<form>
				r = <input type="text" id="rad" placeholder="Radius (in cm)">
			</form>
			<p>Klicke auf "Berechnen" um den Flaecheninhalt des Kreises zu berechnen.</p>
			<button onclick="myFunction()">Berechnen</button>
			<script>
				function myFunction() {
					var r = $('#rad').val();
					var a1 = Math.PI * r * r;
					var a2 = Math.round(a1);
					$("#demo").html(a2);
				}	
			</script>	
		</div>
		<br/><br/>

		<div class="col-md-6">
			<strong>Rechteck</strong>
			<div class="rechteck-visual">
					<span id="demo1"></span>
			</div> 
			<br/><br/>
			<form>
				a/hoehe = <input type="text" id="hoehe" placeholder="Laenge der Seite a/h (in cm)">
				b/breite = <input type="text" id="breite" placeholder="Laenge der Seite b/breite (in cm)">
			</form>
			<p>Klicke auf "Berechnen" um den Flaecheninhalt des Rechtecks zu berechnen.</p>
			<button onclick="myFunction1()">Berechnen</button>
			<script>
				function myFunction1() {
					var a = $('#hoehe').val();
					var b = $('#breite').val();
					var a2 = a * b;
					$("#demo1").html(a2);
				}
			</script>
		</div>
	</div>
</div>

	
	</body>
</html>
