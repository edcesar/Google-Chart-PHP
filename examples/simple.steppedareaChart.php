<?php
/**
*	INCLUDE CLASS
*/
include( dirname(dirname( __FILE__ )) . '/src/GoogleCharts.class.php' );
$GoogleCharts = new GoogleCharts;

/**
*	DATA
*/
$data = array(
	Array('Director (Year)',  'Rotten Tomatoes', 'IMDB'),
	Array('Alfred Hitchcock (1935)', 8.4,         7.9),
	Array('Ralph Thomas (1959)',     6.9,         6.5),
	Array('Don Sharp (1978)',        6.5,         6.4),
	Array('James Hawes (2008)',      4.4,         6.2)
);

$options = array(
	"title" => "The decline of 'The 39 Steps'",
	"vAxis" => Array("title"=>'Accumulated Rating'),
	"isStacked" => true
);
/**
*	CHART
*/
$chart = $GoogleCharts->load( 'stepped' , 'chart_div' )->get( $data ,$options );
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Google Chart</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Description" />
		<link rel="stylesheet" href="Stylesheet Location" type="text/css" />
		
	</head>
	<body>
		<h1>Google Chart</h1>
		<div id="chart_div" style="width: 900px; height: 500px;"></div>
		
		<!-- Javascript -->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			<?php echo $chart;?>
		</script>
	</body>
</html>