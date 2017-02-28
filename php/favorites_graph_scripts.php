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
                    "decade": "20's",
                    "frequency": 18
                },
                {
                    "decade": "30's",
                    "frequency": 8
                },
                {
                    "decade": "40's",
                    "frequency": 1
                },
                {
                    "decade": "50's",
                    "frequency": 67
                },
                {
                    "decade": "60's",
                    "frequency": 49
                },
                {
                    "decade": "70's",
                    "frequency": 204
                },
                {
                    "decade": "80's",
                    "frequency": 251
                },
                {
                    "decade": "90's",
                    "frequency": 55
                },
                {
                    "decade": "2000's",
                    "frequency": 16
                },
                {
                    "decade": "2000's",
                    "frequency": 36
                },
            ];


            var canvas = document.getElementById("SongsbyDecade"),
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
                return d.decade;
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
            context.translate(0 - 20, 0 - margin.left - 1);
            context.textAlign = "right";
            context.textBaseline = "bottom";
            context.font = "10px sans-serif";
            context.fillText("Number of songs", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.decade), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>

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
            context.moveTo(-6.5, 0.5);
            context.lineTo(0.5, 0.5);
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
        <?php
        break;
    case "week":
        ?>
        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script>

            var data = [
                {
                    "decade": "20's",
                    "frequency": 18
                },
                {
                    "decade": "30's",
                    "frequency": 8
                },
                {
                    "decade": "40's",
                    "frequency": 1
                },
                {
                    "decade": "50's",
                    "frequency": 67
                },
                {
                    "decade": "60's",
                    "frequency": 49
                },
                {
                    "decade": "70's",
                    "frequency": 204
                },
                {
                    "decade": "80's",
                    "frequency": 251
                },
                {
                    "decade": "90's",
                    "frequency": 55
                },
                {
                    "decade": "2000's",
                    "frequency": 16
                },
                {
                    "decade": "2000's",
                    "frequency": 36
                },
            ];


            var canvas = document.getElementById("SongsbyDecade"),
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
                return d.decade;
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
            context.translate(0 - 20, 0 - margin.left - 1);
            context.textAlign = "right";
            context.textBaseline = "bottom";
            context.font = "10px sans-serif";
            context.fillText("Number of songs", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.decade), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>

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
            context.moveTo(-6.5, 0.5);
            context.lineTo(0.5, 0.5);
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
        <?php
        break;
    case "month":
        ?>
        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script>

            var data = [
                {
                    "decade": "20's",
                    "frequency": 18
                },
                {
                    "decade": "30's",
                    "frequency": 8
                },
                {
                    "decade": "40's",
                    "frequency": 1
                },
                {
                    "decade": "50's",
                    "frequency": 67
                },
                {
                    "decade": "60's",
                    "frequency": 49
                },
                {
                    "decade": "70's",
                    "frequency": 204
                },
                {
                    "decade": "80's",
                    "frequency": 251
                },
                {
                    "decade": "90's",
                    "frequency": 55
                },
                {
                    "decade": "2000's",
                    "frequency": 16
                },
                {
                    "decade": "2000's",
                    "frequency": 36
                },
            ];


            var canvas = document.getElementById("SongsbyDecade"),
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
                return d.decade;
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
            context.translate(0-20, 0-margin.left-1);
            context.textAlign = "right";
            context.textBaseline = "bottom";
            context.font = "10px sans-serif";
            context.fillText("Number of songs", -10, 10);
            context.restore();

            context.fillStyle = d3.rgb(80, 237, 218, 1);
            data.forEach(function (d) {
                context.fillRect(x(d.decade), y(d.frequency), x.bandwidth(), height - y(d.frequency));
            });

        </script>

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
            context.moveTo(-6.5, 0.5);
            context.lineTo(0.5, 0.5);
            context.lineTo(0.5, height + 0.5);
            context.lineTo(-6.5, height + 0.5);
            context.strokeStyle = "black";
            context.stroke();

            context.save();
            context.rotate(-Math.PI / 2);
            context.translate(0-20, 0-margin.left-1);
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
        <?php
        break;
}
?>