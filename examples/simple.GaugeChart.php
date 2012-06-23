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
	Array('Label', 'Value'),
	Array('Memory', 80),
	Array('CPU', 55),
	Array('Network', 68)
);

/**
*	OPTIONS
*/
$options = Array(
	'width'		=>	400,
	'height'	=>	120,
	'redFrom'	=>	90,
	'redTo'		=>	100,
	'yellowFrom'=>	75,
	'yellowTo'	=>	90,
	'minorTicks'=>	5
);



/**
*	CHART
*/
$chart = $GoogleCharts->load( 'gauge' , 'chart_div' )->get( $data , $options );
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