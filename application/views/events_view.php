<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smriti - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <style type="text/css">

    	body
    	{
    		margin:0;
    		font-family:sans-serif;
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
    		-webkit-filter:brightness(0.2);
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

        #album-carousel
        {
        	padding: 2px 2px 2px 2px;
        }
        .carousel-image
        {
        	-webkit-filter: brightness(1.2);
    		-webkit-transition: all 1s;
        	width:100%;
        }
        .modal
        {
        	width:100%!important;
        }
      
    </style>

    <!-- JavaScript -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
   
</head>

<body>
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
                <li class="bold_text"><a href="home.html">Home</a>
                </li>
                <li class="bold_text"><a href="view_albums.html">Albums</a>
                </li>
                <li class="bold_text"><a href="landing.html">What is love?</a>
                </li>
                <li class="bold_text"><a href="#">Contact Us</a>
                </li>
            </ul>
        </div>



        <!-- Page content -->
        <div class="container-fluid" id="page-content-wrapper">
          	
            <!-- Keep all page content within the page-content inset div! -->
            <!-- LOLZ -->
            <!-- Topbar -->
           <!--  <div id="menu-toggle">
            &nbsp;<a class="bold_text" href="home.html"><span class="glyphicon glyphicon-home x"></span>&nbsp;Home&nbsp;</a>
            &nbsp;&nbsp;<a class="bold_text y" href="view_albums.html"><span class="glyphicon glyphicon-camera"></span>&nbsp;Albums&nbsp;</a>
            &nbsp;&nbsp;<a class="bold_text z" href="#"><span class="glyphicon glyphicon-phone"></span>&nbsp;Contact&nbsp;</a>
            </div> -->


            <!--  -->

            <div id="main_area" class="page-content inset">
                <div class="row">                    
                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
                        <img src="img/a.jpeg" class="img-responsive album-thumb" alt="Responsive image">
                    </div>
                    
                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
                        <img src="img/b.jpg" class="img-responsive" alt="Responsive image">
                    </div>

                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
                        <img src="img/c.jpg" class="img-responsive" alt="Responsive image">
                    </div>
                       <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
                        <img src="img/c.jpg" class="img-responsive" alt="Responsive image">
                    </div>
       
        		</div>

        		<div class="row">                    
                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
                        <img src="img/a.jpeg" class="img-responsive album-thumb" alt="Responsive image">
                    </div>
                    
                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
                        <img src="img/b.jpg" class="img-responsive" alt="Responsive image">
                    </div>

                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
                        <img src="img/c.jpg" class="img-responsive" alt="Responsive image">
                    </div>
                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
                        <img src="img/c.jpg" class="img-responsive" alt="Responsive image">
                    </div>
       
        		</div>
                    <div class="row">
	                 	<div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
	                        <img src="img/a.jpeg" class="img-responsive album-thumb" alt="Responsive image">
	                    </div>
	                    
	                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
	                        <img src="img/b.jpg" class="img-responsive" alt="Responsive image">
	                    </div>

	                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
	                        <img src="img/c.jpg" class="img-responsive" alt="Responsive image">
	                    </div>
	                    
	                    <div data-toggle="modal" data-target="#modal" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 img0">
	                        <img src="img/d.jpg" class="img-responsive" alt="Responsive image">
	                    </div>
                    
                    </div>
                    
                 

                </div>
            </div>
        </div>

    </div>
</body>

</html>

<div class="modal fade modal-lg" tabindex="-1" id="modal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content ">

			<div class="modal-body ">

				<div id="carousel-example-generic" id="album_carousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">

						<div class="item active">
							<img class="carousel-image img-responsive"src="img/who_main_1.jpg" alt="...">
						</div>

						<div class="item">
							<img class="carousel-image img-responsive" src="img/final_main_2.jpg" alt="...">						
						</div>

						<div class="item">
							<img class="carousel-image img-responsive"src="img/main_3.jpg" alt="...">
						</div>

					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>	
		</div>
	</div>
</div>