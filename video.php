<!DOCTYPE html>
<html>
<head>
	<title>video</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
body{
	padding-top: 5rem;
}
</style>

</head>
<body>
	<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
		<a class="navbar-brand" href="#">Demo webRTC</a>
	</nav>

	<div class="contrainer">
		<div class="row">
			<div class="col-sm-6">
				<h2>Réception</h2>
				<video controls id="receiver-video" width="100%" height="400px"></video>
				<p>
					<button id="start">demarrer une conversation</button>

				</p>

			</div>
			<div class="col-sm-6">
				<h2>Envoi</h2>
				<video controls id="emitter-video" width="100%" height="400px"></video>


			</div>

		</div>
	</div>
	<script src="simplePeer.js"></script>


	<script src="app.js"></script>




</body>	
</html>