<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kitsela K"> 
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <style type="text/css">
    html {
    height: 100%;
	}
	body {
		background-image: url(/background.jpg); 
		height: 100%;
	}
	.height {
	height: 100%
	}
   .block1 { 
   background-color: white;
   border-right: 1px double black;
   border-left: 1px double black;
   height: 100%;
}
	.textt {
    text-align: center;
   }
   </style>
  
  <body >
<div class="container-fluid  height"  >
	<div class="row  height">
		<div class="col-md-2"></div>
		<div class="col-md-8  block1 " >
			<img src="/cat.png"  width="150" height="165" align="left"  >
			</br></br></br>
			<p align="right">
			<a class="btn btn-default" href="/task/" role="button">Main</a>
			<a class="btn btn-default" href="/task/author" role="button">About the author</a>
			<a class="btn btn-default" href="/task/create/" role="button">Create</a> 
			</br></br></br>
			</p>
			</br></br>
			<p class="textt">
				@yield('content')
			</p>
		</div>		
	</div>
</div> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>