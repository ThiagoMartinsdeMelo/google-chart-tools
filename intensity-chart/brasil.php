<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
		<!-- importing the library -->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<!-- loading google libraries -->
		<script type='text/javascript'>
			google.load('visualization', '1', {'packages': ['geochart']});
			google.setOnLoadCallback(desenhaGrafico);

			function desenhaGrafico() {
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Estado');
				data.addColumn('number', 'População (hab)');
				data.addRows(3);

				data.setValue(0, 0, 'BR-SP');
				data.setValue(0, 1, 41589892);
				data.setValue(1, 0, 'BR-ES');
				data.setValue(1, 1, 3547013);
				data.setValue(2, 0, 'BR-PB');
				data.setValue(2, 1, 3999415);				

				var geochart = new google.visualization.GeoChart(document.getElementById('chart_div'));
				geochart.draw(data, {region : 'BR', resolution: 'provinces'});
			};
      </script>
    </head>
    <body>
    	<h1>Gráfico de Itensidade</h1>
    	<div id="chart_div"></div>
    </body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>      
</html>