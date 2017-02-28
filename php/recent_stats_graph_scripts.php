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
                    "frequency": 4
                },
                {
                    "genre": "Pop",
                    "frequency": 16
                },
                {
                    "genre": "Latin",
                    "frequency": 10
                },
                {
                    "genre": "Alternative",
                    "frequency": 7
                },
                {
                    "genre": "Classical",
                    "frequency": 6
                },
                {
                    "genre": "Jazz",
                    "frequency": 2
                },
                {
                    "genre": "Techno",
                    "frequency": 5
                },
                {
                    "genre": "Reggae",
                    "frequency": 5
                },
                {
                    "genre": "Heavy Metal",
                    "frequency": 2
                },
            ];


            var canvas = document.getElementById("SongsbyGenre"),
                context = canvas.getContext("2d");

            var margin = {top: 20, right: 20, bottom: 30, left: 40},
                width = canvas.width - margin.left - margin.right,
                height = canvas.height - margin.top - margin.bottom;

            var x = d3.scaleBand().rangeRound([0, width]).padding(0.1);

            var y = d3.scaleLinear().rangeRound([height, 0]);

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
            context.strokeStyle = "white";
            context.stroke();
            context.fillStyle = "white";
            context.fill();

            context.textAlign = "center";
            context.textBaseline = "top";
            x.domain().forEach(function (d) {
                context.fillText(d, x(d) + x.bandwidth() / 2, height + 6);
            });
            context.fillStyle = "white";
            context.fill();

            context.beginPath();
            yTicks.forEach(function (d) {
                context.moveTo(0, y(d) + 0.5);
                context.lineTo(-6, y(d) + 0.5);
            });
            context.strokeStyle = "white";
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
            context.strokeStyle = "white";
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
                    ['12:00 AM', 20],
                    ['1:00 AM', 5],
                    ['2:00 AM', 0],
                    ['3:00 AM', 0],
                    ['4:00 AM', 0],
                    ['5:00 AM', 0],
                    ['6:00 AM', 0],
                    ['7:00 AM', 0],
                    ['8:00 AM', 5],
                    ['9:00 AM', 12],
                    ['10:00 AM', 18],
                    ['11:00 AM', 14],
                    ['12:00 PM', 19],
                    ['1:00 PM', 17],
                    ['2:00 PM', 15],
                    ['3:00 PM', 12],
                    ['4:00 PM', 14],
                    ['5:00 PM', 16],
                    ['6:00 PM', 22],
                    ['7:00 PM', 21],
                    ['8:00 PM', 19],
                    ['9:00 PM', 19],
                    ['10:00 PM', 18],
                    ['11:00 PM', 19],
                ]);

                var options = {
                    title: 'SONGS PER TIME OF DAY',
                    titleTextStyle: {
                        color: '#dbdde0',
                        fontSize: 23,
                        bold: false
                    },
                    hAxis: { 
                        textStyle:{ color: 'white', fontName: 'Arial', fontSize: 10},
                        gridlines: { count: 5}},
                        vAxis: { baselineColor: 'white',
                        textStyle:{ color: 'white', fontName: 'Arial', fontSize: 10},
                        gridlines: {color: 'white', count: 5},
                    minValue: 0,
                        viewWindow: {
                            min: -3}},
                        curveType: 'function',
                        legend: { position: 'bottom', textStyle: {color:'white'} },
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
                    "frequency": 24
                },
                {
                    "genre": "Pop",
                    "frequency": 56
                },
                {
                    "genre": "Latin",
                    "frequency": 80
                },
                {
                    "genre": "Alternative",
                    "frequency": 50
                },
                {
                    "genre": "Classical",
                    "frequency": 10
                },
                {
                    "genre": "Jazz",
                    "frequency": 130
                },
                {
                    "genre": "Techno",
                    "frequency": 30
                },
                {
                    "genre": "Reggae",
                    "frequency": 32
                },
                {
                    "genre": "Heavy Metal",
                    "frequency": 12
                },
            ];


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
            context.strokeStyle = "white";
            context.stroke();
            context.fillStyle = "white";
            context.fill();

            context.textAlign = "center";
            context.textBaseline = "top";
            x.domain().forEach(function (d) {
                context.fillText(d, x(d) + x.bandwidth() / 2, height + 6);
            });
            context.fillStyle = "white";
            context.fill();

            context.beginPath();
            yTicks.forEach(function (d) {
                context.moveTo(0, y(d) + 0.5);
                context.lineTo(-6, y(d) + 0.5);
            });
            context.strokeStyle = "white";
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
            context.strokeStyle = "white";
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
                    ['12:00 AM', 103],
                    ['1:00 AM', 72],
                    ['2:00 AM', 0],
                    ['3:00 AM', 0],
                    ['4:00 AM', 0],
                    ['5:00 AM', 0],
                    ['6:00 AM', 0],
                    ['7:00 AM', 0],
                    ['8:00 AM', 29],
                    ['9:00 AM', 80],
                    ['10:00 AM', 37],
                    ['11:00 AM', 99],
                    ['12:00 PM', 89],
                    ['1:00 PM', 183],
                    ['2:00 PM', 164],
                    ['3:00 PM', 132],
                    ['4:00 PM', 121],
                    ['5:00 PM', 125],
                    ['6:00 PM', 122],
                    ['7:00 PM', 105],
                    ['8:00 PM', 110],
                    ['9:00 PM', 120],
                    ['10:00 PM', 89],
                    ['11:00 PM', 120],
                ]);

                var options = {
                    title: 'SONGS PER TIME OF DAY',
                    titleTextStyle: {
                        color: '#dbdde0',
                        fontSize: 23,
                        bold: false
                    },
                    hAxis: { 
                         textStyle:{ color: 'white', fontName: 'Arial', fontSize: 10},
                        gridlines: { count: 5}},
                        vAxis: { baselineColor: 'white',
                        textStyle:{ color: 'white', fontName: 'Arial', fontSize: 10},
                        gridlines: {color: 'white', count: 5},
                        minValue: 0,
                        viewWindow: {
                            min: -3
                        }
                    },
                        curveType: 'function',
                        legend: { position: 'bottom', textStyle: {color:'white'} },
                    colors: ['#50edda'],
                    backgroundColor: '#6b6b6b',
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
                    "frequency": 72
                },
                {
                    "genre": "Pop",
                    "frequency": 186
                },
                {
                    "genre": "Latin",
                    "frequency": 301
                },
                {
                    "genre": "Alternative",
                    "frequency": 211
                },
                {
                    "genre": "Classical",
                    "frequency": 34
                },
                {
                    "genre": "Jazz",
                    "frequency": 504
                },
                {
                    "genre": "Techno",
                    "frequency": 80
                },
                {
                    "genre": "Reggae",
                    "frequency": 90
                },
                {
                    "genre": "Heavy Metal",
                    "frequency": 50
                },
            ];


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
            context.strokeStyle = "white";
            context.stroke();
            context.fillStyle = "white";
            context.fill();

            context.textAlign = "center";
            context.textBaseline = "top";
            x.domain().forEach(function (d) {
                context.fillText(d, x(d) + x.bandwidth() / 2, height + 6);
            });
            context.fillStyle = "white";
            context.fill();

            context.beginPath();
            yTicks.forEach(function (d) {
                context.moveTo(0, y(d) + 0.5);
                context.lineTo(-6, y(d) + 0.5);
            });
            context.strokeStyle = "white";
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
            context.strokeStyle = "white";
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
                    ['12:00 AM', 203],
                    ['1:00 AM', 142],
                    ['2:00 AM', 0],
                    ['3:00 AM', 0],
                    ['4:00 AM', 0],
                    ['5:00 AM', 0],
                    ['6:00 AM', 0],
                    ['7:00 AM', 0],
                    ['8:00 AM', 229],
                    ['9:00 AM', 280],
                    ['10:00 AM', 237],
                    ['11:00 AM', 299],
                    ['12:00 PM', 289],
                    ['1:00 PM', 383],
                    ['2:00 PM', 364],
                    ['3:00 PM', 332],
                    ['4:00 PM', 341],
                    ['5:00 PM', 325],
                    ['6:00 PM', 312],
                    ['7:00 PM', 305],
                    ['8:00 PM', 310],
                    ['9:00 PM', 320],
                    ['10:00 PM', 289],
                    ['11:00 PM', 220],
                ]);

                var options = {
                    title: 'SONGS PER TIME OF DAY',
                    titleTextStyle: {
                        color: '#dbdde0',
                        fontSize: 23,
                        bold: false
                    },
                    hAxis: { 
                        textStyle:{ color: 'white', fontName: 'Arial', fontSize: 10},
                        gridlines: { count: 5}},
                        vAxis: { baselineColor: 'white',
                        textStyle:{ color: 'white', fontName: 'Arial', fontSize: 10},
                        gridlines: {color: 'white', count: 5},
                    minValue: 0,
                        viewWindow: {
                            min: -3
                        }},
                        curveType: 'function',
                        legend: { position: 'bottom', textStyle: {color:'white'} },
                    colors: ['#50edda'],
                    backgroundColor: '#6b6b6b',
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>
        <?php
        break;
}
?>