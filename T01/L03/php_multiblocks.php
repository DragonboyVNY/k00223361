<html>
<head>
<title>PHP_Multiblocks</title>
</head>
<body>
<h1>This is the first PHP block</h1>
<?php
	//assign values to some variables
	$i=1;  
	$x=10;
	echo  "<p>Welcome to Web Programming";
	echo  '<p>The value of $i is'.$i.' another literal string'; //using single quote \' creates a literal string (exactyl is shown)
	echo  "<p>The value of $x is".$x; //concatenate using fullstop
?>

<h1>This is the second PHP block</h1>

<!--
<script language="php">		//notice the use of the SCRIPT tag
	//use the variables to control a loop
	while($i <= $x){
	  echo " $x*$i= " . $i*$x . "<br>";
	  $i++;
  	}  
</script>



<?php		
	while($i <= $x){
	  echo " $x*$i= " . $i*$x . "<br>";
	  $i++;
  	}  
?>
</body>
</html> 
