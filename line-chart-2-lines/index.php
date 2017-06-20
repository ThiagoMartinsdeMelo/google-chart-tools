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
			 	
			 	data.addColumn('date', 'Dias');

			 	data.addRows(6);

			 	data.addColumn('number', 'Conta Corrente');
			 	data.addColumn('number', 'Conta Investimento');

			 	data.setValue(0, 0, new Date(2017, 06, 20));
			 	data.setValue(0, 1, 1023.29);
			 	data.setValue(0, 2, 210.50);

			 	data.setValue(1, 0, new Date(2017, 07, 10));
			 	data.setValue(1, 1, 908.42);
			 	data.setValue(1, 2, 490.82);

			 	data.setValue(2, 0, new Date(2017, 08, 05));
			 	data.setValue(2, 1, 852.97);
			 	data.setValue(2, 2, 450.17);

			 	data.setValue(3, 0, new Date(2017, 09, 12));
			 	data.setValue(3, 1, 1780.0);
			 	data.setValue(3, 2, 450.17);

			 	data.setValue(4, 0, new Date(2017, 10, 15));
			 	data.setValue(4, 1, 1621.69);
			 	data.setValue(4, 2, 720.81);

			 	data.setValue(5, 0, new Date(2017, 11, 08));
			 	data.setValue(5, 1, 1352.50);
			 	data.setValue(5, 2, 698.42);

			 	var formatter = new google.visualization.DateFormat({
			 		pattern: 'dd/MM/yyyy',
			 	});

			 	formatter.format(data, 0);

			 	var valorFormatter = new google.visualization.NumberFormat({
			 		decimalSymbol:',', prefix:'R$ '
			 	});

			 	valorFormatter.format(data, 1); valorFormatter.format(data, 2);

				// Create chart
				var div = document.getElementById('chart_div');

				var grafico = new google.visualization.LineChart(div);

				// Draws 770x400 chart with specified title
				grafico.draw(data, {width: 770, height: 400, title: 'Minhas Finanças'});
			 }
		</script>
    </head>
    <body>
    	<h1>Saldo das contas</h1>
    	<div id="chart_div"></div>  	
    </body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>      
</html>