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
	Array('Age', 'Weight'),
	Array(8,      12),
	Array(4,      5.5),
	Array(11,     14),
	Array(4,      5),
	Array(3,      3.5),
	Array(6.5,    7),
);

$options = array(
 "title"=>'Age vs. Weight comparison',
 "hAxis"=>Array("title"=>'Age', "minValue"=>0, "maxValue"=>15),
 "vAxis"=>Array("title"=>'Weight', "minValue"=>0, "maxValue"=>15),
 "legend"=>'none'
);
/**
*	CHART
*/
$chart = $GoogleCharts->load( 'scatter' , 'chart_div' )->get( $data ,$options );
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