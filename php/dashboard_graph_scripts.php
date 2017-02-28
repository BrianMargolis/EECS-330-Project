<?php

if (isset($_GET["period"])) {
    $period = $_GET["period"];
} else {
    $period = 'week';
}

switch ($period) {
    case "day":
        ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Day', 'Number of songs'],
                    ['Monday', 114],
                    ['Tuesday', 78],
                    ['Wednesday', 160],
                    ['Thursday', 97],
                    ['Friday', 54],
                    ['Saturday', 25],
                    ['Sunday', 177]
                ]);

                var options = {
                    title: 'SONGS PER DAY',
                    titleTextStyle: {
                        color: '#dbdde0',
                        fontSize: 24,
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

        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script>

            var data = [
                {
                    "source": "Apple Music",
                    "frequency": 0.1

                },
                {
                    "source": "Pandora",
                    "frequency": 0.43
                },
                {
                    "source": "Spotify",
                    "frequency": 0.57
                },

            ];


            var canvas = document.getElementById("MusicSource"),
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
                return d.source;
            }));
            y.domain([0, d3.max(data, function (d) {
                return d.frequency;
            })]);

            var yTickCount = 10,
                yTicks = y.ticks(yTickCount),
                yTickFormat = y.tickFormat(yTickCount, "%");

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
            context.moveTo(-6.5, 0 + 0.5);
            context.lineTo(0.5, 0 + 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.translate(0 - 20, 0 - margin.left - 1);
            context.textAlign = "right";
            context.textBaseline = "bottom";
            context.font = "10px sans-serif";
            context.fillText("Percentage", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.source), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>

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
            context.moveTo(-6.5, 0 + 0.5);
            context.lineTo(0.5, 0 + 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.translate(0 - 50, 0 - margin.left - 1);
            context.textAlign = "right";
            context.textBaseline = "bottom";
            context.font = "10px sans-serif";
            context.fillText("Number of songs", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.genre), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>
        <?php

        break;
    case "week":
        ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Day', 'Number of songs'],
                    ['Monday', 114],
                    ['Tuesday', 78],
                    ['Wednesday', 160],
                    ['Thursday', 97],
                    ['Friday', 54],
                    ['Saturday', 25],
                    ['Sunday', 177]
                ]);

                var options = {
                    title: 'SONGS PER DAY ',
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

        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script>

            var data = [
                {
                    "source": "Apple Music",
                    "frequency": 0.06

                },
                {
                    "source": "Pandora",
                    "frequency": 0.41
                },
                {
                    "source": "Spotify",
                    "frequency": 0.54
                },

            ];


            var canvas = document.getElementById("MusicSource"),
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
                return d.source;
            }));
            y.domain([0, d3.max(data, function (d) {
                return d.frequency;
            })]);

            var yTickCount = 10,
                yTicks = y.ticks(yTickCount),
                yTickFormat = y.tickFormat(yTickCount, "%");

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
            context.moveTo(-6.5, 0 + 0.5);
            context.lineTo(0.5, 0 + 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.translate(0 - 20, 0 - margin.left - 1);
            context.textAlign = "right";
            context.textBaseline = "bottom";
            context.font = "10px sans-serif";
            context.fillText("Percentage", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.source), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>

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
            context.moveTo(-6.5, 0 + 0.5);
            context.lineTo(0.5, 0 + 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.translate(0 - 50, 0 - margin.left - 1);
            context.textAlign = "right";
            context.textBaseline = "bottom";
            context.font = "10px sans-serif";
            context.fillText("Number of songs", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.genre), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>
        <?php
        break;
    case "month":
        ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Day', 'Number of songs'],
                    ['Monday', 114],
                    ['Tuesday', 78],
                    ['Wednesday', 160],
                    ['Thursday', 97],
                    ['Friday', 54],
                    ['Saturday', 25],
                    ['Sunday', 177]
                ]);

                var options = {
                    title: 'SONGS PER DAY ',
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

        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script>

            var data = [
                {
                    "source": "Apple Music",
                    "frequency": 0.08

                },
                {
                    "source": "Pandora",
                    "frequency": 0.49
                },
                {
                    "source": "Spotify",
                    "frequency": 0.43
                },

            ];


            var canvas = document.getElementById("MusicSource"),
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
                return d.source;
            }));
            y.domain([0, d3.max(data, function (d) {
                return d.frequency;
            })]);

            var yTickCount = 10,
                yTicks = y.ticks(yTickCount),
                yTickFormat = y.tickFormat(yTickCount, "%");

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
            context.moveTo(-6.5, 0 + 0.5);
            context.lineTo(0.5, 0 + 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.translate(0 - 20, 0 - margin.left - 1);
            context.textAlign = "right";
            context.textBaseline = "bottom";
            context.font = "10px sans-serif";
            context.fillText("Percentage", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.source), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>

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
            context.moveTo(-6.5, 0 + 0.5);
            context.lineTo(0.5, 0 + 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.translate(0 - 50, 0 - margin.left - 1);
            context.textAlign = "right";
            context.textBaseline = "bottom";
            context.font = "10px sans-serif";
            context.fillText("Number of songs", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.genre), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>
        <?php
        break;
}
?>