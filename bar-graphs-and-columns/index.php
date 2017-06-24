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
			 	data.addColumn('number', 'Gastos');

			 	data.addRows(12);

			 	// January
			 	data.setValue(0, 0, 'Jan');
			 	data.setValue(0, 1, 14540);

			 	// February
			 	data.setValue(1, 0, 'Fev');
			 	data.setValue(1, 1, 12459);

			 	// March
			 	data.setValue(2, 0, 'Mar');
			 	data.setValue(2, 1, 15958);

			 	// April
			 	data.setValue(3, 0, 'Abr');
			 	data.setValue(3, 1, 20349);

			 	// May
			 	data.setValue(4, 0, 'Ma');
			 	data.setValue(4, 1, 23495);

			 	// June
			 	data.setValue(5, 0, 'Jun');
			 	data.setValue(5, 1, 17331);

			 	// July
			 	data.setValue(6, 0, 'Jul');
			 	data.setValue(6, 1, 12384);

			 	// August
			 	data.setValue(7, 0, 'Ago');
			 	data.setValue(7, 1, 13495);

			 	// September
			 	data.setValue(8, 0, 'Set');
			 	data.setValue(8, 1, 13999);

			 	// October
			 	data.setValue(9, 0, 'Out');
			 	data.setValue(9, 1, 20230);

			 	// November
			 	data.setValue(10, 0, 'Nov');
			 	data.setValue(10, 1, 22348);

			 	// December
			 	data.setValue(11, 0, 'Dez');
			 	data.setValue(11, 1, 21230);

			 	var valorFormatter = new google.visualization.NumberFormat({ 
			 		decimalSymbol:',', prefix:'R$ '
			 	});

			 	valorFormatter.format(data, 1); valorFormatter.format(data, 1);

			 	var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

			 	chart.draw(data, {
            		width: 900, height: 300, title: 'Gastos', vAxis: {title: 'Valor'}
            	});
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