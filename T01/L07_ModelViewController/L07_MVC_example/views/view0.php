<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MVC</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    body{
        padding-top: 70px;
    }
</style>
</head> 


<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">MVC Example</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
				<?php foreach($menuNav as $menuItem){echo $menuItem;} //populate the navbar menu items?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </div>
</nav>



<div class="container">

<div class="row">
	<div class="col-md-3" style="background-color:white;">
		<div class="panel panel-default">
		  <div class="panel-heading"><?php echo $panelHeadLHS; ?></div>
		  <div class="panel-body">
			<?php echo $stringLHS; ?>
		  </div>
		</div>
	</div>	
	<div class="col-md-6" style="background-color:white;">
		<div class="panel panel-default">
		  <div class="panel-heading"><?php echo $panelHeadMID; ?></div>
		  <div class="panel-body">
			<?php echo $stringMID; ?>
		  </div>
		</div>
	</div>
	<div class="col-md-3" style="background-color:white;">
		<div class="panel panel-default">
		  <div class="panel-heading"><?php echo $panelHeadRHS; ?></div>
		  <div class="panel-body">
			<?php echo $stringRHS; ?>
		  </div>
		</div>
	</div>
</div>



</div>
</body>

<script><!--This script enables the tooltips-->
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


</html>                                		