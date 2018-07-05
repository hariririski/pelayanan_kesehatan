<?php
/**
 *
 *
 * @link          https://github.com/mzm-dev
 * @demo          http://highcharts-mzm.rhcloud.com
 * @created       September 2014
 * @fb            https://www.facebook.com/zakimedia
 * @email         mohdzaki04@gmail.com
 */
$cakeDescription = "Highcharts Pie Chart";
?>
<!DOCTYPE HTML>
<html>
    <head>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                var options = {
                    chart: {
                        renderTo: 'container',
                        type: 'pie',
                        options3d: {
                            enabled: true,
                            alpha: 45,
                            beta: 0
                        }

                    },
                    title: {
                        text: 'Grafik Pelayanan Kesehatan Kecamatan'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>({point.y} Pelayanan Kesehatan)'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            depth: 35,
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}'
                            }
                        }
                    },
                    series: []
                };

                $.getJSON("<?php echo base_url(); ?>home/data_grafik_kec?id=<?php echo $_GET['id']; ?>", function(json) {
                    options.series = json;
                    chart = new Highcharts.Chart(options);
                });
            });
        </script>
        <script src="http://code.highcharts.com/highcharts.js"></script>

        <script src="http://code.highcharts.com/modules/exporting.js"></script>
    </head>
    <body>

        <div id="container" style="min-width: 100%px; height: 400px; margin: 0 auto"></div>
    </body>
</html>
