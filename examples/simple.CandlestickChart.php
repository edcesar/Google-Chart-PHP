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
	Array('Mon', 20, 28, 38, 45),
	Array('Tue', 31, 38, 55, 66),
	Array('Wed', 50, 55, 77, 80),
	Array('Thu', 77, 77, 66, 50),
	Array('Fri', 68, 66, 22, 15)
);
// Treat first row as data as well.
$GoogleCharts->firstRowAsData();

/**
*	OPTIONS
*/
$options = Array(
	'title'  => 'Correlation between life expectancy, fertility rate and population of some world countries (2010)',
	'hAxis'  => Array( 'title' => 'Life Expectancy' ),
	'vAxis'  => Array( 'title' => 'Fertility Rate' ),
	'bubble' => Array( 'textStyle' => Array('fontSize'=>11)),
);

/**
*	CHART
*/
$chart = $GoogleCharts->load( 'candlestick' , 'chart_div' )->get( $data , $options );
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