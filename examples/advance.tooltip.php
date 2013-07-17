<?php
/**
*	INCLUDE CLASS
*	Show:	https://developers.google.com/chart/interactive/docs/customizing_tooltip_content?hl=es#tooltip_actions
*/
include( dirname(dirname( __FILE__ )) . '/src/GoogleCharts.class.php' );
$GoogleCharts = new GoogleCharts;

//SET DATA
$GoogleCharts->arrayToDataTable(array(
	Array('Genre', 'Percentage of my books'),
    Array('Science Fiction', 217),
	Array('General Science', 203),
	Array('Computer Science', 175),
	Array('History', 155),
	Array('Economics & Political Science', 98),
	Array('General Fiction', 72),
	Array('Fantasy', 51),
	Array('Law', 29),
));
//SET ACTION
$GoogleCharts->setAction(Array(
      'id'		=> 'sample',
      'text'	=>	'See sample book',
      'action'	=> 'function(){
		selection = chart.getSelection();
		switch (selection[0].row)
		{
			case 0: alert("Ender\'s Game"); break;
			case 1: alert("Feynman Lectures on Physics"); break;
			case 2: alert("Numerical Recipes in JavaScript"); break;
			case 3: alert("Truman"); break;
			case 4: alert("Freakonomics"); break;
			case 5: alert("The Mezzanine"); break;
			case 6: alert("The Color of Magic"); break;
			case 7: alert("The Law of Superheroes"); break;
		}}'
));

//SET OPTIONS
$GoogleCharts->options(array(
	'tooltip'	=>	array(
		'trigger'	=>	'selection',
	),
));
/**
*	CHART
*/
$chart = $GoogleCharts->load( 'pie' , 'tooltip_action' )->get();
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
		<div id="tooltip_action" style="width: 900px; height: 500px;"></div>
		
		<!-- Javascript -->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			<?php echo $chart;?>
		</script>
	</body>
</html>