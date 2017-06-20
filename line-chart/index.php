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
			 google.load('visualization', '1', {'packages':['corechart']});
			 google.setOnLoadCallback(desenhaGrafico);

			 function desenhaGrafico()
			 {
			 	var data = new google.visualization.DataTable();
			 	
			 	data.addColumn('string', 'Mês');
			 	data.addColumn('number', 'Gastos em R$');

			 	data.addRows(5);

			 	// January data
			 	data.setValue(0, 0, 'Janeiro');
			 	data.setValue(0, 1, 20450.0);
				
				// February data
				data.setValue(1, 0, 'Fevereiro');
				data.setValue(1, 1, 21870.0)

				// March data
				data.setValue(2, 0, 'Março');
				data.setValue(2, 1, 22250.0);

				// April data
				data.setValue(3, 0, 'Abril');
				data.setValue(3, 1, 21769.0);

				// May data
				data.setValue(4, 0, 'Maio');
				data.setValue(4, 1, 23234.0);

				// Create chart
				var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

				// Draws 400x240 chart with specified title
				chart.draw(data, {width: 600, height: 300, title: 'Gastos do mês', colors: ['red']});
			 }

		</script>
    </head>
    <body>
    	<h1>Gastos por mês</h1>
    	<div id="chart_div"></div>  	
    </body>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>      
</html>