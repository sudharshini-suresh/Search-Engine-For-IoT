<!DOCTYPE html>
<html>
<head>
<title>DCU Building Graph</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}

#chart-container1 {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>



    <script>
        $(document).ready(function () {
            showGraph();
			
        });


        function showGraph()
        {
            {
                $.post("galway-data.php",{ humidity: "humidity"},
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].time);
                        marks.push(data[i].humidity);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Galway Building Humidity',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
		
	
</body>
</html>