<html>
	<head>
		
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
   		<link rel="icon" href="img/as.png" type="image/icon">
		
	    <link rel="stylesheet" href="css/arsm.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		
		<title>Recuperar Password</title>
	</head>
	
	<body>

		<!--inicio del menu-->
	<body> <nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">Andrick Santos</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.php">Inicio</a></li>
	        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contacto <span class="caret"></span></a>
          <ul class="dropdown-menu">
	            <li><a href="https://andricksantos.github.io/" target="_blank">WebSite</a></li>
	            <li><a href="https://github.com/andricksantos" target="_blank">Github</a></li>
	            <li><a href="mailto:andricksantos1@gmail.com" target="_blank">Email</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#" class="disable center">ARSM</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Recuperar Password</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="index.php">Iniciar Sesi&oacute;n</a></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="email" type="email" class="form-control" name="email" placeholder="email" required>                                        
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Enviar</a>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
									</div>
								</div>
							</div>    
						</form>
					</div>                     
				</div>  
			</div>
		</div>

		<br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 

	<footer>
    	<div id="copyright">
      	Copyright&copy; 2017 - Page created by 
      	<a class="as" target="_blank" href="https://andricksantos.github.io">-
      	Andrick Santos</a> - All rights reserved</div>
      		</div>
    	</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js" ></script>
    	
    	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-103804510-1', 'auto');
        ga('send', 'pageview');
		  </script>
		  <!--<script type="text/javascript">
		      document.oncontextmenu = function(){return false;}
		  </script>-->

	</body>
</html>							