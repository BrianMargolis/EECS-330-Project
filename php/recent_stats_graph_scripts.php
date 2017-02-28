<?php

if (isset($_GET["period"])) {
    $period = $_GET["period"];
} else {
    $period = 'week';
}

switch ($period) {
    case "day":
        ?>
        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script>

            var data = [
                {
                    "genre": "Rock",
                    "frequency": 114
                },
                {
                    "genre": "Pop",
                    "frequency": 46
                },
                {
                    "genre": "Latin",
                    "frequency": 10
                },
                {
                    "genre": "Alternative",
                    "frequency": 76
                },
                {
                    "genre": "Classical",
                    "frequency": 67
                },
                {
                    "genre": "Jazz",
                    "frequency": 251
                },
                {
                    "genre": "Techno",
                    "frequency": 59
                },
                {
                    "genre": "Raggae",
                    "frequency": 55
                },
                {
                    "genre": "Heavy Metal",
                    "frequency": 27
                },
            ]


            var canvas = document.getElementById("SongsbyGenre"),
                context = canvas.getContext("2d");

            var margin = {top: 20, right: 20, bottom: 30, left: 40},
                width = canvas.width - margin.left - margin.right,
                height = canvas.height - margin.top - margin.bottom;

            var x = d3.scaleBand()
                .rangeRound([0, width])
                .padding(0.1);

            var y = d3.scaleLinear()
                .rangeRound([height, 0]);

            context.translate(margin.left, margin.top);


            x.domain(data.map(function (d) {
                return d.genre;
            }));
            y.domain([0, d3.max(data, function (d) {
                return d.frequency;
            })]);

            var yTickCount = 10,
                yTicks = y.ticks(yTickCount),
                yTickFormat = y.tickFormat(yTickCount);

            context.beginPath();
            x.domain().forEach(function (d) {
                context.moveTo(x(d) + x.bandwidth() / 2, height);
                context.lineTo(x(d) + x.bandwidth() / 2, height + 6);
            });
            context.strokeStyle = "black";
            context.stroke();

            context.textAlign = "center";
            context.textBaseline = "top";
            x.domain().forEach(function (d) {
                context.fillText(d, x(d) + x.bandwidth() / 2, height + 6);
            });

            context.beginPath();
            yTicks.forEach(function (d) {
                context.moveTo(0, y(d) + 0.5);
                context.lineTo(-6, y(d) + 0.5);
            });
            context.strokeStyle = "black";
            context.stroke();

            context.textAlign = "right";
            context.textBaseline = "middle";
            yTicks.forEach(function (d) {
                context.fillText(yTickFormat(d), -9, y(d));
            });

            context.beginPath();
            context.moveTo(-6.5, 0.5);
            context.lineTo(0.5, 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.textAlign = "right";
            context.textBaseline = "top";
            context.font = "bold 10px sans-serif";
            context.fillText("Number of songs", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.genre), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Time', 'Number of songs'],
                    ['12:00 AM', 30],
                    ['1:00 AM', 0],
                    ['2:00 AM', 0],
                    ['3:00 AM', 0],
                    ['4:00 AM', 0],
                    ['5:00 AM', 0],
                    ['6:00 AM', 0],
                    ['7:00 AM', 0],
                    ['8:00 AM', 5],
                    ['9:00 AM', 12],
                    ['10:00 AM', 41],
                    ['11:00 AM', 14],
                    ['12:00 PM', 19],
                    ['1:00 PM', 35],
                    ['2:00 PM', 39],
                    ['3:00 PM', 46],
                    ['4:00 PM', 48],
                    ['5:00 PM', 16],
                    ['6:00 PM', 22],
                    ['7:00 PM', 58],
                    ['8:00 PM', 85],
                    ['9:00 PM', 113],
                    ['10:00 PM', 74],
                    ['11:00 PM', 48],
                ]);

                var options = {
                    title: 'SONGS PER TIME OF DAY',
                    titleTextStyle: {
                        color: '#dbdde0',
                        fontSize: 23,
                        bold: false
                    },
                    curveType: 'function',
                    legend: {position: 'bottom'},
                    colors: ['#50edda'],
                    backgroundColor: '#6b6b6b'
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>
        <?php

        break;
    case "week":
        ?>
        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script>

            var data = [
                {
                    "genre": "Rock",
                    "frequency": 114
                },
                {
                    "genre": "Pop",
                    "frequency": 46
                },
                {
                    "genre": "Latin",
                    "frequency": 10
                },
                {
                    "genre": "Alternative",
                    "frequency": 76
                },
                {
                    "genre": "Classical",
                    "frequency": 67
                },
                {
                    "genre": "Jazz",
                    "frequency": 251
                },
                {
                    "genre": "Techno",
                    "frequency": 59
                },
                {
                    "genre": "Raggae",
                    "frequency": 55
                },
                {
                    "genre": "Heavy Metal",
                    "frequency": 27
                },
            ]


            var canvas = document.getElementById("SongsbyGenre"),
                context = canvas.getContext("2d");

            var margin = {top: 20, right: 20, bottom: 30, left: 40},
                width = canvas.width - margin.left - margin.right,
                height = canvas.height - margin.top - margin.bottom;

            var x = d3.scaleBand()
                .rangeRound([0, width])
                .padding(0.1);

            var y = d3.scaleLinear()
                .rangeRound([height, 0]);

            context.translate(margin.left, margin.top);


            x.domain(data.map(function (d) {
                return d.genre;
            }));
            y.domain([0, d3.max(data, function (d) {
                return d.frequency;
            })]);

            var yTickCount = 10,
                yTicks = y.ticks(yTickCount),
                yTickFormat = y.tickFormat(yTickCount);

            context.beginPath();
            x.domain().forEach(function (d) {
                context.moveTo(x(d) + x.bandwidth() / 2, height);
                context.lineTo(x(d) + x.bandwidth() / 2, height + 6);
            });
            context.strokeStyle = "black";
            context.stroke();

            context.textAlign = "center";
            context.textBaseline = "top";
            x.domain().forEach(function (d) {
                context.fillText(d, x(d) + x.bandwidth() / 2, height + 6);
            });

            context.beginPath();
            yTicks.forEach(function (d) {
                context.moveTo(0, y(d) + 0.5);
                context.lineTo(-6, y(d) + 0.5);
            });
            context.strokeStyle = "black";
            context.stroke();

            context.textAlign = "right";
            context.textBaseline = "middle";
            yTicks.forEach(function (d) {
                context.fillText(yTickFormat(d), -9, y(d));
            });

            context.beginPath();
            context.moveTo(-6.5, 0.5);
            context.lineTo(0.5, 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.textAlign = "right";
            context.textBaseline = "top";
            context.font = "bold 10px sans-serif";
            context.fillText("Number of songs", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.genre), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Time', 'Number of songs'],
                    ['12:00 AM', 30],
                    ['1:00 AM', 0],
                    ['2:00 AM', 0],
                    ['3:00 AM', 0],
                    ['4:00 AM', 0],
                    ['5:00 AM', 0],
                    ['6:00 AM', 0],
                    ['7:00 AM', 0],
                    ['8:00 AM', 5],
                    ['9:00 AM', 12],
                    ['10:00 AM', 41],
                    ['11:00 AM', 14],
                    ['12:00 PM', 19],
                    ['1:00 PM', 35],
                    ['2:00 PM', 39],
                    ['3:00 PM', 46],
                    ['4:00 PM', 48],
                    ['5:00 PM', 16],
                    ['6:00 PM', 22],
                    ['7:00 PM', 58],
                    ['8:00 PM', 85],
                    ['9:00 PM', 113],
                    ['10:00 PM', 74],
                    ['11:00 PM', 48],
                ]);

                var options = {
                    title: 'SONGS PER TIME OF DAY',
                    titleTextStyle:{
                        color:'#dbdde0',
                        fontSize: 23,
                        bold: false
                    },
                    curveType: 'function',
                    legend: {position: 'bottom'},
                    colors: ['#50edda'],
                    backgroundColor: '#6b6b6b'
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>
        <?php
        break;
    case "month":
        ?>
        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script>

            var data = [
                {
                    "genre": "Rock",
                    "frequency": 114
                },
                {
                    "genre": "Pop",
                    "frequency": 46
                },
                {
                    "genre": "Latin",
                    "frequency": 10
                },
                {
                    "genre": "Alternative",
                    "frequency": 76
                },
                {
                    "genre": "Classical",
                    "frequency": 67
                },
                {
                    "genre": "Jazz",
                    "frequency": 251
                },
                {
                    "genre": "Techno",
                    "frequency": 59
                },
                {
                    "genre": "Raggae",
                    "frequency": 55
                },
                {
                    "genre": "Heavy Metal",
                    "frequency": 27
                },
            ]


            var canvas = document.getElementById("SongsbyGenre"),
                context = canvas.getContext("2d");

            var margin = {top: 20, right: 20, bottom: 30, left: 40},
                width = canvas.width - margin.left - margin.right,
                height = canvas.height - margin.top - margin.bottom;

            var x = d3.scaleBand()
                .rangeRound([0, width])
                .padding(0.1);

            var y = d3.scaleLinear()
                .rangeRound([height, 0]);

            context.translate(margin.left, margin.top);


            x.domain(data.map(function (d) {
                return d.genre;
            }));
            y.domain([0, d3.max(data, function (d) {
                return d.frequency;
            })]);

            var yTickCount = 10,
                yTicks = y.ticks(yTickCount),
                yTickFormat = y.tickFormat(yTickCount);

            context.beginPath();
            x.domain().forEach(function (d) {
                context.moveTo(x(d) + x.bandwidth() / 2, height);
                context.lineTo(x(d) + x.bandwidth() / 2, height + 6);
            });
            context.strokeStyle = "black";
            context.stroke();

            context.textAlign = "center";
            context.textBaseline = "top";
            x.domain().forEach(function (d) {
                context.fillText(d, x(d) + x.bandwidth() / 2, height + 6);
            });

            context.beginPath();
            yTicks.forEach(function (d) {
                context.moveTo(0, y(d) + 0.5);
                context.lineTo(-6, y(d) + 0.5);
            });
            context.strokeStyle = "black";
            context.stroke();

            context.textAlign = "right";
            context.textBaseline = "middle";
            yTicks.forEach(function (d) {
                context.fillText(yTickFormat(d), -9, y(d));
            });

            context.beginPath();
            context.moveTo(-6.5, 0.5);
            context.lineTo(0.5, 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.textAlign = "right";
            context.textBaseline = "top";
            context.font = "bold 10px sans-serif";
            context.fillText("Number of songs", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.genre), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Time', 'Number of songs'],
                    ['12:00 AM', 30],
                    ['1:00 AM', 0],
                    ['2:00 AM', 0],
                    ['3:00 AM', 0],
                    ['4:00 AM', 0],
                    ['5:00 AM', 0],
                    ['6:00 AM', 0],
                    ['7:00 AM', 0],
                    ['8:00 AM', 5],
                    ['9:00 AM', 12],
                    ['10:00 AM', 41],
                    ['11:00 AM', 14],
                    ['12:00 PM', 19],
                    ['1:00 PM', 35],
                    ['2:00 PM', 39],
                    ['3:00 PM', 46],
                    ['4:00 PM', 48],
                    ['5:00 PM', 16],
                    ['6:00 PM', 22],
                    ['7:00 PM', 58],
                    ['8:00 PM', 85],
                    ['9:00 PM', 113],
                    ['10:00 PM', 74],
                    ['11:00 PM', 48],
                ]);

                var options = {
                    title: 'SONGS PER TIME OF DAY',
                    titleTextStyle:{
                        color:'#dbdde0',
                        fontSize: 23,
                        bold: false
                    },
                    curveType: 'function',
                    legend: {position: 'bottom'},
                    colors: ['#50edda'],
                    backgroundColor: '#6b6b6b'
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>
        <?php
        break;
}
?>