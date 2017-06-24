# Examples Google Chart Tools

#### Some examples that serve as query for generating charts with API Google Chart Tools.

<p>Site where you can test all the functionality of the API: </p>

[Google Playground](https://developers.google.com/apis-explorer/?csw=1#p/)

#### Line Chart

<p>The line graph is made up of 2 dice, one represented in the horizontal line and one in the vertical line, these lines are also known as axes.<p>

[Line Chart](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/line-chart/index.php)

<p>In the example, we will draw a graph of lines where, on the horizontal (or X) axis, we will place the months of the year and, on the vertical axis (or Y), we will put the values spent in that month.</p>

![Line Chart](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/line-chart/img/line_chart.png)

#### Line Chart 2 Lines

<p>To compare two values and their evolution with respect to time.</p>

[Line Chart 2 Lines](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/line-chart-2-lines/index.php)

<p>Two lines have been created that will be positioned on the X axis. This will use the <strong>addColumn</strong> method. Any column added from now on will be placed on the X-axis. One is also added on the chart.</p>

![Line Chart 2 Lines](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/line-chart-2-lines/img/line-chart-2.png)

#### Bar Graphs and Columns

<p>Constructing a column chart, where each column corresponds to one month of the year. So, with the columns positioned side by side, we have a way of comparing the values.</p>

[Bar Graphs and Columns](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/bar-graphs-and-columns/index.php)

![Bar Graphs and Columns](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/bar-graphs-and-columns/img/bar-graphs-columns.png)

#### Pie Chart

<p>The information we will show in our pie chart needs to be stored somewhere and it is also necessary to inform that the chart should be able to show a type of expense and a value associated with it.</p>

[Pie Chart](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/pie-chart/index.php)

<p>The Google Chart API gives us a way to do this using a DataTable.</p>

![Pie Chart](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/pie-chart/img/pie-chart-details.png) 

#### Intensity Chart

<p>The information we will display on our Intensity Map must be stored somewhere. It is also necessary to inform that the chart should be able to show a country.</p>

[Intensity Chart](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/intensity-chart/index.php)

<p>A Google Chart API nos disponibiliza uma maneira de fazer isso usando um <strong>DataTable</strong>.</p>

![Intensity Chart](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/intensity-chart/img/intesity.png) 

<p>Geo Chart with some brazilian states:</p>

[Brazilian states](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/intensity-chart/brasil.php)

![Intensity Chart](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/intensity-chart/img/brasil.png)

#### Remote Data Source

The <strong>ChartWrapper</strong> object is used to configure the URL at which the library should fetch the data that will make up the chart.

[Remote Data Source](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/remote-data-source/index.php)

This configuration was done through the <strong>dataSourceUrl</strong> property of the object we passed as a parameter when invoking ChartWrapper. In the documentation this functionality is referenced as <strong>remote data source </strong>.

![Remote](https://github.com/ThiagoMartinsdeMelo/google-chart-tools/blob/master/intensity-chart/img/brasil.png)








