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
	array('Year', 'Sales', 'Expenses'),
	array('2004',  1000,      400),
	array('2005',  1170,      460),
	array('2006',  660,       1120),
	array('2007',  1030,      540)
);

/**
*	OPTIONS
*/
$options = Array(
	'title' => 'Company Performance',
	'hAxis' => Array(
		'title' => 'Year',
		'titleTextStyle' => Array('color' => 'red')
	)
);
/**
*	CHART
*/
$chart = $GoogleCharts->load( 'area' , 'chart_div' )->get( $data , $options );
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