GoogleChartPHP
------------
A simple PHP class to generate bar charts using the Google Chart API.

Example:
------------

    <?php
    $GoogleChart = new GoogleChart;
    $GoogleChart->arrayToDataTable(Array(
    	Array('Task','Today'),
    	Array('Work',12),
    	Array('Sleep',75),
    ));
    $GoogleChart->options(Array(
    	"title" => "My PieChart"
    ));
    $GoogleChart->load( 'pie' , 'my_div' )->get();
    ?>