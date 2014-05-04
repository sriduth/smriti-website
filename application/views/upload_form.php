<!DOCTYPE html>
<html>
<head>

	<title>Upload Form</title>
	<!-- Bootstrap Js -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">

    // url of solution: http://stackoverflow.com/questions/16207575/how-to-preview-a-image-before-and-after-upload

    	function readURL(input) {
            if (input.files && X.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                   
                 	$(input).parent().parent().parent().find("#preview").attr("src",e.target.result);
                }

              	 reader.readAsDataURL(input.files[0]);
            }
        }


    </script>
    <style>
    body
    {
    	background:url("img/congruent_pentagon.png");
    	margin:0;
    	width:100%;
    }
    textarea
    {
    	min-width:100%;
    	max-width:100%;
    }
    #submit-album
    {
    	background-color: red;
    	color:white;
    	-webkit-transition: all 0.5s;
    }
    #submit-album:hover
    {
    	background-color: green;
    	-webkit-transition: all 0.5s;
    }
    #add-image-input
    {
    	color:red;
    }
    #add-image-input:hover
    {
    	color:green;
    	-webkit-transition: all 0.5s;
    }
    #page-container
    {
    	width:80%;
    	margin-left:10%;
    	margin-right:10%;
    	background:white;
    	border-radius: 10px;
    }
    #preview
    {
    	width:400px;

    }
    </style>

    <script>
    $(document).ready(function(){

    	var count = 2;

    	$("#add-image-input").click(function(){

			var content = $('<hr><div class="panel panel-default"><div class="panel-heading"><div class="panel-title"><strong><center>Image #'+count+'</center></strong></div></div><div class="panel-body"><div class="form-group"><label for="image">Choose An Image</label><input id="image" onchange="readURL(this);" class="form-control img-upload" type="file" accept="image" enctype="multipart/form-data"  readonly required></div><hr/><center><img id="preview" src="" alt="preview-image"></center><hr/><div class="form-group"><label for="image-caption">Enter a Caption</label><textarea form="album-form" id="image-caption" type="text" name="caption-'+count+'"></textarea></div></div></div>');

			$("#panels").append(content);

			count++;

    	});

    

    });
    </script>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">Admin | Home</a>
			</div> 

			<!-- Left Side of the navbar -->
			<ul class="nav navbar-nav navbar-left">
				<li><a>Upload Images</a></li>
				<li><a>Get Statistics</a></li>
			</ul>

			<!-- Right Side of the Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<li><a>Logout</a></li>
			</ul>
		</div>
	</nav>
	<!--  -->
	<div class="container-fluid" id="page-container">
		<form class="form" role="form" id="album-form">
			<!-- Get Event Name -->
			<strong><center><h3>Describe The Album</h3></center></strong>
			<div class="form-group">
				<label for="event-name" style="color:red">What is Event?</label>
				<input id="event-name" class="form-control" type="text" name="event-name" required placeholder="Enter Event Name Here"/>
			</div>

			<!-- Event Caption -->
			<div class="form-group">
				<label for="event-caption" style="color:Green">Event Caption</label>
				<textarea form="album-form" id="event-caption" class="form-control" type="text" name="event-caption" required placeholder="Enter Caption, please do a spellcheck too!"></textarea>
			</div>

			<!-- Event Location -->
			<div class="form-group">
				<label for="event-location" style="color:Pink">Where did it Happen?</label>
				<input id="event-location" class="form-control" type="text" name="event-location" required placeholder="Enter Event Location"/>
			</div>

			<!-- Event Date -->
			<div class="form-group">
				<label for="event-date" style="color:orange">Event Date?</label>
				<input id="event-date" class="form-control" type="date" name="event-date" required placeholder="Enter event date"/>
			</div>

			<!-- Event Department -->
			<div class="form-group">
				<label for="event-department">Select Department</label>
				<select class="form-control" id="event-department" name="event-department">
					<option>CSE</option>
					<option>ECE</option>
					<option>EEE</option>
					<option>EIE</option>
					<option>MECH</option>
					<option>MATH</option>
					<option>PHYSICS</option>
					<option>SHIT</option>
				</select>
			</div>

			<!-- Select Cover photo -->
			<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title"><strong><center>Cover Image</center></strong></div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="image">Choose An Image</label>
							<input id="image"  onchange="readURL(this);"class="form-control img-upload" type="file" accept="image" enctype="multipart/form-data"  readonly required>
						</div>

						<hr/>
						<center><img id="preview" src="" alt="preview-image"></center>
						<hr/>
					</div>
			</div>

			<hr/>

			<strong><center><h3>Add Images to the Album</h3></center></strong>
			<br/>

			<!-- Image Instance -->
			<div id="panels">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title"><strong><center>Image #1</center></strong></div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="image">Choose An Image</label>
							<input id="image"  onchange="readURL(this);"class="form-control img-upload" type="file" accept="image" enctype="multipart/form-data"  readonly required>
						</div>

						<hr/>
						<center><img id="preview" src="congruent_pentagon.png" alt="preview-image"></center>
						<hr/>

						<div class="form-group">
							<label for="image-caption">Enter a Caption</label>
							<textarea form="album-form" id="image-caption" type="text" name="caption-1"></textarea>
						</div>
					</div>
				</div>
			</div>

			<!-- Button to add more image input form inputs -->
			<center><a id="add-image-input" href="#add-image-input">
				<span style="font-size:5em" class="glyphicon glyphicon-plus"></span>
			</a></center>

			<hr>
			<button type="submit" id="submit-album" class="btn btn-block">Upload!</button>
			<br>
			<br>

		</form>
	</div>
</body>
</html>