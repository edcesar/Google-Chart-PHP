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
	Array('Task', 'Hours per Day'),
	Array('Work',     11),
	Array('Eat',      2),
	Array('Commute',  2),
	Array('Watch TV', 2),
	Array('Sleep',    7),
);

$options = array(
 "title"=>'My Daily Activities'
);
/**
*	CHART
*/
$chart = $GoogleCharts->load( 'pie' , 'chart_div' )->get( $data ,$options );
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