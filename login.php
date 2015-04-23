<?php
	include_once('includes/constants.php');
?>
<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-ES>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-ES>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-ES"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es-ES"> <!--<![endif]-->
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Rafael Ramirez Urbina (www.fundaseth.es)">
	<meta name="designer" content="Rafael Ramirez Urbina (www.fundaseth.es)">
	<title><?php echo SITETITLE; ?></title> 
	<meta name="description" content="">
	<link href="css/custom.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div id="wrapper">
    <!-- left-sidebar -->
    <?php 
        include_once('includes/left-sidebar.php'); 
    ?>
    <!-- /#left-sidebar -->
			<div id="app-content">
        <div id="banner" class="row">
            <header>
            	<div class="row">
            		<div class="col col-4">
				          <div id="menu-button">
				              <a href="#menu-toggle" id="menu-toggle"><span></span></a>
				          </div> 
				          <a href="index.php"><img id="logo" src="img/veryLogo.png" alt="Veery"></a> 
			          </div>
			          <div class="col col-8">
	            		<div id="session-controls">
	            			<a href="registro.php" class="btn alternate small">Registro</a>	            		
	            			<div id="login">
	            				<form>
	            					<input class="btn inverse small" type="password" name="pwd" placeholder="Usuario">
	            					<input class="btn inverse small" type="password" name="pwd" placeholder="Contraseña">
	            					<input class="btn primary small center" value="Acceder"></a>
	            				</form>
	            			</div>
	            		</div>
			          </div> 		
            	</div>
            </header>
            <!-- header-->     
        </div>     
        <div class="row">    				
					<nav class="clearfix">
					    <ul>
					        <li><a class="btn inverse" href="artist_view.php">My Veery</a></li>
					        <li class="active"><a class="btn inverse active" href="index.php">Just For You</a></li>
					        <li><a class="btn inverse" href="genero_view.php">Trending</a></li>
					    </ul>
					    <a href="#" id="pull">Just For You</a>
					</nav>
				</div>	
   <div class="row">
        <div id="feed-stream" class="col col-10">
            <div class="row">
                <div class="col col-9">
                    <div id="main" class="module-panel medium">      
                        <h2 class="main-title">Red Hot Chili Peppers</h2>           
                        <a href="play_live.php" class="btn alternate shadow">Live Session</a>
                        <img src="img/rhcp.jpg">
                    </div>
                </div>

                <div class="col col-3">
                    <div class="feed-card medium">
                        <div class="feed-heading">
                            <img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/1524845_10154241712765383_1601173067664658885_n.jpg?oh=c9663f9895789582b8d271be9c52d9f1&amp;oe=55A5F107&amp;__gda__=1436292926_d4c391ef13cf7a7026e0236e7813523f" />
                            <button class="btn primary small shadow">Follow</button>
                        </div>
                        <div class="feed-figure shadow">
                            <img class="circle" src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10468344_10155058468955383_6684116020501828227_n.jpg?oh=3680b46008ae94dcf2ad8e78f2263733&amp;oe=5599B73E&amp;__gda__=1440203841_b50e3c7c5810ff78a7ab6533580947cd" />
                        </div>
                        <div class="feed-body center">
                            <h4 class="feed-header"><a href="artist_view.php">@rafaramirez</a></h4>
                            <p>OMG YOLO LOL</p>
                            <div class="show-on-hover">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus.</p>
                                <div class="social-buttons">
                                    <a href="#" class="btn alternate circle"><span class="fa fa-gears"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-heart"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-bullhorn"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="row">
                <div class="col col-4">
                    <div class="feed-card small">
                        <div class="feed-heading">
                            <img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-frc3/t31.0-8/885259_10153456543870383_194557398_o.jpg" />
                            <button class="btn primary small shadow">Follow</button>
                        </div>
                        <div class="feed-figure shadow">
                            <img class="circle" src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/21177_853927278013288_342001052454554223_n.jpg?oh=37c44d1da86e71581941c738dc8285d6&amp;oe=55A539B6&amp;__gda__=1441067384_fec66237a406396565ef13bf949af4c5" />
                        </div>
                        <div class="feed-body center">
                            <h4 class="feed-header"><a href="artist_view.php">@usher</a></h4>
                            <p>Lulz</p>
                            <div class="show-on-hover">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus.</p>
                                <div class="social-buttons">
                                    <a href="#" class="btn alternate circle"><span class="fa fa-gears"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-heart"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-bullhorn"></span></a>
                                </div>
                            </div>                                                   
                        </div>
                    </div> 
                </div>
                <div class="col col-4">
                    <div class="feed-card small">
                        <div class="feed-heading">
                            <img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/1524845_10154241712765383_1601173067664658885_n.jpg?oh=c9663f9895789582b8d271be9c52d9f1&amp;oe=55A5F107&amp;__gda__=1436292926_d4c391ef13cf7a7026e0236e7813523f" />
                            <button class="btn primary small shadow">Follow</button>
                        </div>
                        <div class="feed-figure shadow">
                            <img class="circle" src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10468344_10155058468955383_6684116020501828227_n.jpg?oh=3680b46008ae94dcf2ad8e78f2263733&amp;oe=5599B73E&amp;__gda__=1440203841_b50e3c7c5810ff78a7ab6533580947cd" />
                        </div>
                        <div class="feed-body center">
                            <h4 class="feed-header"><a href="artist_view.php">@rafaramirez</a></h4>
                            <p>OMG YOLO LOL</p>
                            <div class="show-on-hover">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus.</p>
                                <div class="social-buttons">
                                    <a href="#" class="btn alternate circle"><span class="fa fa-gears"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-heart"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-bullhorn"></span></a>
                                </div>
                            </div>                       
                        </div>
                    </div>         
                </div>
                <div class="col col-4">
                    <div class="feed-card small">
                        <div class="feed-heading">
                            <img src="img/pitbull.png" />
                            <button class="btn primary small shadow">Share</button>
                        </div>
                        <div class="feed-figure shadow">
                                <!-- <span class="fa fa-play"></span>-->
                            <img class="circle" src="https://scontent-mad.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/10606409_10204051669686377_4614721905569936789_n.jpg?oh=bcf7dc082075f5e8f28916d486744349&amp;oe=55DC5F8A" /> 
                        </div>
                        <div class="feed-body center">
                            <h4 class="feed-header title"><a href="reproduccion.php">Time of our lives</a></h4>
                            <p class="artist"><a href="artist_view.php" class="btn inverse small col col-12">Pitbull &amp; NeYo</a></p>
                            <div class="show-on-hover">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus.</p>
                                <div class="social-buttons">
                                    <a href="#" class="btn alternate circle"><span class="fa fa-gears"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-heart"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-bullhorn"></span></a>
                                    <a href="reproduccion.php" class="btn alternate circle"><span class="fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="col col-4">
                    <div class="feed-card small">
                        <div class="feed-heading">
                            <img src="https://ununsplash.imgix.net/26/camera-keys.jpg?q=75&amp;amp;fm=jpg&amp;amp;s=b919d3158053cde8e9f0e37b4876c14f" />
                            <button class="btn primary small shadow">Follow</button>
                        </div>
                        <div class="feed-figure shadow">
                            <img class="circle" src="https://scontent-mad.xx.fbcdn.net/hphotos-xfp1/v/l/t1.0-9/11050_869298949767854_8682650164709866780_n.jpg?oh=63fca59dd0f71e759348c76e3a36b8a4&amp;oe=55A63F7D" />
                        </div>
                        <div class="feed-body center">
                            <h4 class="feed-header"><a href="artist_view.php">@nachoferreras</a></h4>
                            <div class="show-on-hover">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus.</p>
                                <div class="social-buttons">
                                    <a href="#" class="btn alternate circle"><span class="fa fa-gears"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-heart"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-bullhorn"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div> 
                <div class="col col-4">
                    <div class="feed-card small">
                        <div class="feed-heading">
                            <img src="https://ununsplash.imgix.net/26/camera-keys.jpg?q=75&amp;fm=jpg&amp;s=b919d3158053cde8e9f0e37b4876c14f" />
                            <button class="btn primary small shadow">Follow</button>
                        </div>
                        <div class="feed-figure shadow">
                            <img class="circle" src="https://scontent-mad.xx.fbcdn.net/hphotos-xfp1/v/l/t1.0-9/11050_869298949767854_8682650164709866780_n.jpg?oh=63fca59dd0f71e759348c76e3a36b8a4&amp;oe=55A63F7D" />
                        </div>
                        <div class="feed-body center">
                            <h4 class="feed-header"><a href="artist_view.php">@nachoferreras</a></h4>
                            <p>LA LA LA LA</p>
                            <div class="show-on-hover">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus.</p>
                                <div class="social-buttons">
                                    <a href="#" class="btn alternate circle"><span class="fa fa-gears"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-heart"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-bullhorn"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>  
                <div class="col col-4">
                    <div class="feed-card small">
                        <div class="feed-heading">
                            <img src="https://ununsplash.imgix.net/26/camera-keys.jpg?q=75&amp;fm=jpg&amp;s=b919d3158053cde8e9f0e37b4876c14f" />
                            <button class="btn primary small shadow">Follow</button>
                        </div>
                        <div class="feed-figure shadow">
                            <img class="circle" src="https://scontent-mad.xx.fbcdn.net/hphotos-xfp1/v/l/t1.0-9/11050_869298949767854_8682650164709866780_n.jpg?oh=63fca59dd0f71e759348c76e3a36b8a4&amp;oe=55A63F7D" />
                        </div>
                        <div class="feed-body center">
                            <h4 class="feed-header"><a href="artist_view.php">@nachoferreras</a></h4>
                            <p>LA LA LA LA</p>
                            <div  class="show-on-hover">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus.</p>
                                <div class="social-buttons">
                                    <a href="#" class="btn alternate circle"><span class="fa fa-gears"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-heart"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-bullhorn"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>                                                 
            </div>
        </div>
        <?php 
            include_once('includes/right-sidebar.php');
        ?>
    </div>

<?php
    include_once('includes/footer.php');
?>

