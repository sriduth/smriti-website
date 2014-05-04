<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <style>
    body
    	{
    		margin:0;
    		font-family: sans-serif;
    		background: black;
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
    	img{

    		width:350px;
    		height:350px;
    		float:left;
    		padding: 0px 0px 0px 0px;
    		-webkit-filter:brightness(0.05);
            -webkit-transition: all 2s;
    	}

    	img:hover
    	{
    		-webkit-filter: brightness(1.2);
    		-webkit-transition: all 0.2s;
    	}
        .img0{
            padding: 0px;
        }

        .album-caption{
            background-color: rgba(0, 0, 0, 0.4);
            margin-top:-39px;
            margin-bottom: 0px;
            padding: 10px;
            color: #FFFFFF;
            z-index: 100;
            position: relative;
        }
        .bold_text
        {
        	color:white!important;
        }
        #main_area
        {
        	margin:0;
        	padding: 0px 0px 0px 0px;
        }
        .cse
        {
        	width:100%;
        	height:350px;
        	background: url("img/landing/main_3.jpg");
        	-webkit-animation: 12s dept-animate alternate infinite;
        }
      	.ece
        {
        	width:100%;
        	height:350px;
        	background: url("img/landing/who_main_1.jpg");
        	-webkit-animation: 12s dept-animate alternate infinite;
        }
      	.eee
        {
        	width:100%;
        	height:350px;
        	background: url("img/landing/final_main_2.jpg");
        	-webkit-animation: 12s dept-animate linear alternate infinite;
        }

        .dept-caption
        {
			font-family: Hyperspace;
			color:white;
			font-size:10em;
			position:absolute;
			z-index:100;
			margin-left:35%;
			margin-top:5%;
        }

        @-webkit-keyframes dept-animate
        {
        	from{ background-position: 20% 30%;}
        	to {background-position: 20% 50%;}
        }
        
        </style>
</head>
<body>

    <!-- Navbar for mobile -->
    <nav class="navbar navbar-default navbar-inverted" id="menu-toggle" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-list">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Smriti</a>
            </div>

            <div class="collapse  navbar-collapse" id="collapse-list">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url('home');?>"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
                    <li><a href="<?php echo base_url('events');?>"><span class="glyphicon glyphicon-calendar">&nbsp;</span>Events</a></li>
                    <li><a href="<?php echo base_url('clubs');?>"><span class="glyphicon glyphicon-th-list">&nbsp;</span>Clubs</a></li>
                    <li><a href="<?php echo base_url('home');?>"><span class="glyphicon glyphicon-home">&nbsp;</span>About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#">Smriti</a>
                </li>
                <li class="bold_text"><a href="home.html"><span class="glyphicon glyphicon-home"></span></a>
                </li>
                <li class="bold_text"><a href="view_albums.html"><span class="glyphicon glyphicon-camera"></span></a>
                </li>
                <li class="bold_text"><a href="landing.html"><span class="glyphicon glyphicon-heart"></span></a>
                </li>
                <li class="bold_text"><a href="#"><span class="glyphicon glyphicon-phone"></span></a>
                </li>
            </ul>
        </div>


        <!-- Page content -->
        <div class="container-fluid" id="page-content-wrapper">
          	
            <!-- Keep all page content within the page-content inset div! -->
            <!-- LOLZ -->
        	
            <div id="main_area" class="page-content inset">

             <!-- Each Club must come inside a row -->
                <div class="row">
						<div class="cse">
							<div class="dept-caption">
								CSE
							</div>
						</div>		
				</div>

        		<div class="row">
						<div class="ece">
							<div class="dept-caption">
								ECE
							</div>
						</div>		
				</div>

				<div class="row">
						<div class="eee">
							<div class="dept-caption">
								EEE
							</div>
						</div>		
				</div>
                    
                  

                </div>
            </div>
        </div>

    </div>
</body>
</html>