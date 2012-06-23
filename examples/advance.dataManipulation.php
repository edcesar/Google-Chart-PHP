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
	Array('Watch Television', 2),
);

//SET DATA
$GoogleCharts->arrayToDataTable( $data );
// ROW
$GoogleCharts->updateRow( 1 , array('Wandering',12) );
//UPDATE COLUMN
$GoogleCharts->updateColumn( 4 , 0 , 'Watch TV' );
//APPEND ROW
$GoogleCharts->appendRow( array() );
//APPED COLUMN
$GoogleCharts->appendColumn( 5, 5);
//PREPEND COLUMN
$GoogleCharts->prependColumn( 5, 'This' );
//DELETE ROW
$GoogleCharts->deleteRow( 5 );
//DELETE COLUMN
$GoogleCharts->deleteColumn( 1 , 0 );
//PREPEND COLUMN
$GoogleCharts->prependColumn( 1 , 'Working' );


//SET OPTIONS
$GoogleCharts->options(array("title" => "The decline of 'The 39 Steps'",));
/**
*	CHART
*/
$chart = $GoogleCharts->load( 'pie' , 'chart_div' )->get();
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