<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ScoreGard</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <!-- <link rel="stylesheet" href="css/styles.css?v=1.0"> -->
  <?php
echo "Hej";
  	include "classes.php";
  	include "elements.php";
  	
  	$all_elements = get_elements();
	
  	foreach ($all_elements as $key) {
  		# code...
  		echo $key -> name;
  	}


	$e1A = new Element('1A', 'Single Axel', 'Jump', '1.1');
	echo $e1A -> name;




  ?>
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <script src="js/scripts.js"></script>
</body>
</html>