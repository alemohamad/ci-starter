<div class="page-header">
    <h1><?=$title?></h1>
</div>

<div class="container row">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", { packages: ["corechart"] });
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo $ga_results; ?>);
        var options = { title: '<?php echo $ga_title; ?>', lineWidth: 3, pointSize: 6, tooltip: { showColorCode: true }, areaOpacity: 0.05, focusTarget: 'category', fontSize: 12, hAxis: { textPosition: 'none', gridlines: { color: '#333', count: 2 } }, legend: { position: 'bottom' }, colors: ['#058DC7','#AADFF3'] };
        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div" style="width: 100%; height: 300px; margin: 0 auto; text-align: left;"></div>
    <p class="text-center"><a class="btn btn-default" href="http://www.google.com/intl/en_ALL/analytics/" target="_blank"><span class="glyphicon glyphicon-stats"></span>&nbsp; <?=lang_phrase('ga_btn')?></a></p>
    <p class="text-center small"><?=lang_phrase('ga_msg')?>: <strong><?php $this->load->config('ga_api'); echo $this->config->item('email'); ?></strong></p>
</div>
