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
		<script type="text/javascript">
		google.load('visualization', '1', {packages:['intensitymap']});
		google.setOnLoadCallback(desenhaGrafico);

			function desenhaGrafico() {
				var data = new google.visualization.DataTable();
				data.addColumn('string', '', 'País');
				data.addColumn('number', 'Área (1000 km2)');
				data.addColumn('number', 'População (mil)');
				data.addRows(2);

				data.setValue(0, 0, 'BR');//Brasil
				data.setValue(0, 1, 8515);
				data.setValue(0, 2, 190732);

				data.setValue(1, 0, 'CO');//Colômbia
				data.setValue(1, 1, 1138);
				data.setValue(1, 2, 45986);

				var div = document.getElementById('chart_div');
				var grafico = new google.visualization.IntensityMap(div);
				grafico.draw(data, {region: 'south_america', height: 700, width: 500});
			}
		</script>
    </head>
    <body>
    	<h1>Gráfico de Itensidade</h1>
    	<div id="chart_div"></div>
    </body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>      
</html>