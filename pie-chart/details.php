
 <html>
    <head>
        <meta http-equiv=content-type content=text/html; charset=utf-8>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script type=text/javascript src=https://www.google.com/jsapi></script>
        <script type=text/javascript>
            // carregando bibliotecas do google 
            google.load('visualization', '1', {'packages':['corechart']});
            google.setOnLoadCallback(desenhaGrafico);

            function desenhaGrafico() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Tipo do gasto');
                data.addColumn('number', 'Valor gasto');
                data.addRows(4);
                data.setValue(0, 0, 'Alimentação');
                data.setValue(0, 1, 853);
                data.setValue(1, 0, 'Combustível');
                data.setValue(1, 1, 670);
                data.setValue(2, 0, 'Família');
                data.setValue(2, 1, 457);
                data.setValue(3, 0, 'Saúde');
                data.setValue(3, 1, 460);

                // cria grafico
                var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

                // desenha grafico de 400x240 com titulo especificado
                chart.draw(data, {width: 600, height: 300, title: 'Tipos do gastos'});
                google.visualization.events.addListener(chart, 'select', mouseEventHandler);

                function mouseEventHandler(event) {
                    var selecionados = chart.getSelection();
                    var escolhido = selecionados[0].row;
                    var tipoDeGasto = data.getFormattedValue(escolhido, 0);
                    var valorGasto = data.getFormattedValue(escolhido, 1);
                    document.getElementById('msg').innerHTML = "Gasto em " + tipoDeGasto + ": R$ " + valorGasto + "<br>";
                }
            }
        </script>
    </head>
    <body>
        <h1>Gastos por mês</h1>
        <div id="chart_div"></div>
        <div id="msg"></div>
    </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>