<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">    
    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['intensitymap']});
      google.setOnLoadCallback(desenhaGrafico);
      function desenhaGrafico() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', '', 'País');
        data.addColumn('number', 'Área (1000 km2)');
        data.addColumn('number', 'População (mil)');
        data.addRows(7);
        data.setValue(0, 0, 'BR'); //Brasil
        data.setValue(0, 1, 8515);
        data.setValue(0, 2, 190732);
        data.setValue(1, 0, 'CO'); //Colômbia
        data.setValue(1, 1, 1138);
        data.setValue(1, 2, 45986);
        data.setValue(2, 0, 'PE'); //Peru
        data.setValue(2, 1, 1285);
        data.setValue(2, 2, 29461);
        data.setValue(3, 0, 'UY'); //Uruguai
        data.setValue(3, 1, 176);
        data.setValue(3, 2, 3356);
        data.setValue(4, 0, 'AR'); //Argentina
        data.setValue(4, 1, 2766);
        data.setValue(4, 2, 40091);
        data.setValue(5, 0, 'VE'); //Venezuela
        data.setValue(5, 1, 912);
        data.setValue(5, 2, 29223);
        data.setValue(6, 0, 'CL'); //Chile
        data.setValue(6, 1, 756);
        data.setValue(6, 2, 17231);

        var chart = new google.visualization.IntensityMap(document.getElementById('chart_div'));

        chart.draw(data, {region: 'south_america', height: 300, width: 400});
      }
    </script>
  </head>
  <body>
    <div id="chart_div"></div>  
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </html>