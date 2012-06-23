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
	Array('Country', 'Popularity'),
	Array('Germany', 200),
	Array('United States', 300),
	Array('Brazil', 400),
	Array('Canada', 500),
	Array('France', 600),
	Array('RU', 700),
);

/**
*	CHART
*/
$chart = $GoogleCharts->load( 'geo' , 'chart_div' )->get( $data );
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