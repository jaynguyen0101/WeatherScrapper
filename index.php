<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather Scrapper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <style>

    html, body {
    	height: 100%;
    }

    .container {
      background-image: url("background.jpg");
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      padding-top: 100px;
    }

    .center {
    	text-align: center;
    }

    .green {
    	color: green;
    }

    p {
    	padding: 15px 0 15px 0;
    }

    button {
    	margin-top: 20px;
    }

    .alert {
    	margin-top: 20px;
    	display: none;
    }

    </style>

  </head>
  <body>

  <div class="container">

    <div class="row">

      <div class="col-md-6 col-md-offset-3 center">

      	<h1 class="center white">Weather Predictor</h1>

      	<p class="lead center white">Enter your city below to get a forecast weather.</p>

      	<form>

  			<div class="form-group">

  				<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..." />

  			</div>

  			<button id="findMyWeather" class="btn btn-success btn-lg center">Find My Weather</button>

		</form>

		<div id="success" class="alert alert-success">Success!</div>

		<div id="fail" class="alert alert-danger">Could not find weather data for that city.
		Please try again.</div>

		<div id="noCity" class="alert alert-danger">Enter a city.</div>

      </div>

    </div>

  </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>

    	$("#findMyWeather").click(function(event) {
    		
    		event.preventDefault();

    		$(".alert").hide();

    		if ($("#city").val()!="") {

	    		$.get("scraper.php?city="+$("#city").val(), function(data) {

	    			if (data=="") {

	    				$("#fail").fadeIn();

	    			} else {

	    				$("#success").html(data).fadeIn();

	    			}
	    		
	    		});

			} else {

				$("#noCity").fadeIn();

			}
    	
    	});

    </script>
    
  </body>
</html>
