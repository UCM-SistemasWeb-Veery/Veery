<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-ES>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-ES>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-ES"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es-ES" id="landing"> <!--<![endif]-->
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Rafael Ramirez Urbina (www.fundaseth.es)">
	<meta name="designer" content="Rafael Ramirez Urbina (www.fundaseth.es)">
	<title><?php echo 'Welcome | '.SITETITLE; ?></title> 
	<meta name="description" content="Connect with your friends — and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.">
	<link href="<?php echo css_path;?>custom.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>
<body id="welcome">
	<div id="banner" class="row">
	    <header>
	    	<div class="row">
	    		<div class="col col-4">
	          <a href="<?php echo PATH ?>"><img id="logo" src="<?php echo PATH ?>img/veryLogo.png" alt="Veery"></a>
	        </div>
	    	</div>
	    </header>
	</div>
	<div class="homepage-hero-module">
	    <div class="video-container">
	        <div class="title-container">
						<div class="col col-3 col-offset-2">
							<h1>Welcome!</h1>
							<p>Connect with your friends — and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.</p>
						</div>
						<div class="col col-4 col-offset-1">
	        		<div class="welcome-form">
	        			<h2>Returning users</h2>
	        			<div id="login-form">
	        				<form action="<?php echo PATH.'login'; ?>" method="post">
	        					<input class="btn inverse small" type="text" name="username" placeholder="Usuario">
	        					<input class="btn inverse small" type="password" name="password" placeholder="Contraseña">
										<input class="btn alternate small center" type="submit" name="submit" value="acceder">
	        				</form>
	        			</div>
	        		</div>
	        		<div class="welcome-form">
								<h2>New users</h2>
								<form id="register" action="<?php echo PATH.'users/new'; ?>" method="post">
						  		<input class="btn inverse small <?php if(!empty($data['userHandle'])){echo 'error';} ?>" type="text" name="userHandle" placeholder="<?php if(!empty($data['username'])){echo $data['userHandle'];}else{echo 'Usuario';} ?>">
						  		<input class="btn inverse small <?php if(!empty($data['userEmail'])){echo 'error';} ?>" type="text" name="userEmail" placeholder="<?php if(!empty($data['username'])){echo $data['userHandle'];}else{echo 'Email';} ?>">
									<input class="btn inverse small" type="password" name="password" placeholder="Contraseña">
									<input class="btn alternate small center" type="submit" name="submit" value="Registrarse">
								</form>	        		
							</div>	
						</div>					
	        </div>
	        <div class="filter"></div>
	        <video autoplay loop muted class="fillWidth">
	            <source src="http://veery.es/video/uptownfunk.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.</video>
	        <div class="poster">
	            <img src="http://i.huffpost.com/gen/2629078/images/o-BRUNO-MARS-UPTOWN-FUNK-facebook.jpg" alt="">
	        </div>    
	    </div>
	</div>
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript">
			/** Document Ready Functions **/
			/********************************************************************/

			$( document ).ready(function() {

			    // Resive video
			    scaleVideoContainer();

			    initBannerVideoSize('.video-container .poster img');
			    initBannerVideoSize('.video-container .filter');
			    initBannerVideoSize('.video-container video');
			        
			    $(window).on('resize', function() {
			        scaleVideoContainer();
			        scaleBannerVideoSize('.video-container .poster img');
			        scaleBannerVideoSize('.video-container .filter');
			        scaleBannerVideoSize('.video-container video');
			    });

			});

			/** Reusable Functions **/
			/********************************************************************/

			function scaleVideoContainer() {

			    var height = $(window).height();
			    var unitHeight = parseInt(height) + 'px';
			    $('.homepage-hero-module').css('height',unitHeight);

			}

			function initBannerVideoSize(element){
			    
			    $(element).each(function(){
			        $(this).data('height', $(this).height());
			        $(this).data('width', $(this).width());
			    });

			    scaleBannerVideoSize(element);

			}

			function scaleBannerVideoSize(element){

			    var windowWidth = $(window).width(),
			        windowHeight = $(window).height(),
			        videoWidth,
			        videoHeight;
			    
			    console.log(windowHeight);

			    $(element).each(function(){
			        var videoAspectRatio = $(this).data('height')/$(this).data('width'),
			            windowAspectRatio = windowHeight/windowWidth;

			        if (videoAspectRatio > windowAspectRatio) {
			            videoWidth = windowWidth;
			            videoHeight = videoWidth * videoAspectRatio;
			            $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
			        } else {
			            videoHeight = windowHeight;
			            videoWidth = videoHeight / videoAspectRatio;
			            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
			        }

			        $(this).width(videoWidth).height(videoHeight);

			        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
			        

			    });
			}  
  </script>
	</body>

	</html>  