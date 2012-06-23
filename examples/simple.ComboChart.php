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
	Array('Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'),
	Array('2004/05',  165,      938,         522,             998,           450,      614.6),
    Array('2005/06',  135,      1120,        599,             1268,          288,      682),
    Array('2006/07',  157,      1167,        587,             807,           397,      623),
    Array('2007/08',  139,      1110,        615,             968,           215,      609.4),
    Array('2008/09',  136,      691,         629,             1026,          366,      569.6)
);

/**
*	OPTIONS
*/
$options = Array(
	'title' => 'Monthly Coffee Production by Country',
	'vAxis'	=> Array('title' => "Cups"),
	'hAxis'	=> Array('title' => "Month"),
	'seriesType' =>"bars",
	'series' => Array( 5 => Array( 'type' => "line")),
);



/**
*	CHART
*/
$chart = $GoogleCharts->load( 'combo' , 'chart_div' )->get( $data , $options );
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