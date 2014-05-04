<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body
    {
    	margin:0;
    	left:0;
    	right:0;
    	font-family:sans-serif;
    }

    ::-webkit-scrollbar
    {
      width: 0px;  /* for vertical scrollbars */
      height: 0px; /* for horizontal scrollbars */
      border-radius:0px;
    }
    ::-webkit-scrollbar-track
    {
      background: grey;
    }

    ::-webkit-scrollbar-thumb
    {
       background: white;
    }
    .container-fluid
    {
    	padding:0px 0px 0px 0px!important;
    }
 
    #main-advert
    {
    	width:100%;
    	height: 100vh;
    	background: url("img/landing/main_3.jpg");
    	-webkit-filter: blur(5px);
    }
    #main-advert:hover
    {
    	-webkit-filter: none;
    	-webkit-transition: all 2s;
    }

    #message
    {
    	-webkit-filter:none;
    	top:30%;
    	left:10%;
    	font-size:100px;
    	font-family: Hyperspace;
    	position: absolute;
    	z-index:200;
    }
    #who-we-are-link
    {
    	top:70%;
    	left:47vw;
    	font-size:60px;
    	color: Black;
    	font-family: Hyperspace;
    	position: absolute;
    	z-index:200;
    }
    #who-are-we-link
    {
    	top:175vh;
    	left:47vw;
    	font-size:60px;
    	color: Black;
    	font-family: Hyperspace;
    	position: absolute;
    	z-index:200;
    }
    #who-we-are
    {
    	width:100%;
    	height:100vh;
    	background: black;
    	background: url("img/landing/who_main_1.jpg");
/*    	-webkit-filter: blur(2px);
*/    	-webkit-filter: grayscale(90%);
    }
    #who-we-are:hover
    {
    	height:100vh;
    	-webkit-filter: none;
    	-webkit-transition: all 4s;
    }
    #who-are-we
    {
    	width:100%;
    	height:100vh;
    	background: url("img/landing/final_main_2.jpg");
    }
    .center-text
    {
    	font-family:Arial;
    	font-size:3vh;
    	color:white;
    	margin-left:10vw;
    	margin-right:10vw;
    	width:80vw;
    	height:50vh;
    	
    }
    .text
    {
    	font-family:Hyperspace;
    	color:white;
    	font-size:15vh;
    }
    </style>

    <script>
	    $(function() {
	        $('a[href*=#]:not([href=#])').click(function() {
	            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	                 var target = $(this.hash);
	                 target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	                 if (target.length) {
	                 $('html,body').animate({
	                 scrollTop: target.offset().top
	                }, 500);
	                return false;
	                }
	            }
	        });
	    });
    </script>
</head>
<body>
<div class="container-fluid">
	<div id="main-advert">
		<center id="message"><b>Welcome to Smriti</b></center>
		<center id="who-we-are-link"><a href="#who-we-are"><span class="glyphicon glyphicon-plus"></span></a></center>
	</div>
	<div id="who-we-are">
		<p class="text"><strong>Who are we?</strong></p>
		<div class="center-text">
			<p>Our passion is photoraphy, also:</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			<hr>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet	</p>
		</div>
		<center id="who-are-we-link"><a href="#who-are-we"><span class="glyphicon glyphicon-plus"></span></a></center>
	</div>
	<div id="who-are-we">
		<p class="text">Who we are.</p>
	</div>
</div>
</body>
</html>