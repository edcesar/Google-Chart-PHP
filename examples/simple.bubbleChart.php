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
	Array('ID', 'Life Expectancy', 'Fertility Rate', 'Region',     'Population'),
	Array('CAN',    80.66,              1.67,      'North America',  33739900),
	Array('DEU',    79.84,              1.36,      'Europe',         81902307),
	Array('DNK',    78.6,               1.84,      'Europe',         5523095),
	Array('EGY',    72.73,              2.78,      'Middle East',    79716203),
	Array('GBR',    80.05,              2,         'Europe',         61801570),
	Array('IRN',    72.49,              1.7,       'Middle East',    73137148),
	Array('IRQ',    68.09,              4.77,      'Middle East',    31090763),
	Array('ISR',    81.55,              2.96,      'Middle East',    7485600),
	Array('RUS',    68.6,               1.54,      'Europe',         141850000),
	Array('USA',    78.09,              2.05,      'North America',  307007000)
);

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
$chart = $GoogleCharts->load( 'bubble' , 'chart_div' )->get( $data , $options );
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