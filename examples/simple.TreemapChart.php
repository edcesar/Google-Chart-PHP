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
	Array('Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'),
	Array('Global',    null,                 0,                               0),
	Array('America',   'Global',             0,                               0),
	Array('Europe',    'Global',             0,                               0),
	Array('Asia',      'Global',             0,                               0),
	Array('Australia', 'Global',             0,                               0),
	Array('Africa',    'Global',             0,                               0),
	Array('Brazil',    'America',            11,                              10),
	Array('USA',       'America',            52,                              31),
	Array('Mexico',    'America',            24,                              12),
	Array('Canada',    'America',            16,                              -23),
	Array('France',    'Europe',             42,                              -11),
	Array('Germany',   'Europe',             31,                              -2),
	Array('Sweden',    'Europe',             22,                              -13),
	Array('Italy',     'Europe',             17,                              4),
	Array('UK',        'Europe',             21,                              -5),
	Array('China',     'Asia',               36,                              4),
	Array('Japan',     'Asia',               20,                              -12),
	Array('India',     'Asia',               40,                              63),
	Array('Laos',      'Asia',               4,                               34),
	Array('Mongolia',  'Asia',               1,                               -5),
	Array('Israel',    'Asia',               12,                              24),
	Array('Iran',      'Asia',               18,                              13),
	Array('Pakistan',  'Asia',               11,                              -52),
	Array('Egypt',     'Africa',             21,                              0),
	Array('S. Africa', 'Africa',             30,                              43),
	Array('Sudan',     'Africa',             12,                              2),
	Array('Congo',     'Africa',             10,                              12),
	Array('Zair',      'Africa',             8,                               10)
);

$options = array(
	"minColor" => '#f00',
	"midColor" => '#ddd',
    "maxColor" => '#0d0',
    "headerHeight" => 15,
    "fontColor" => 'black',
    "showScale" => true
);
/**
*	CHART
*/
$chart = $GoogleCharts->load( 'tree' , 'chart_div' )->get( $data ,$options );
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