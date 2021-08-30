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
			 showGraph1();
			  showGraph2();
        });


        function showGraph()
        {
            {
                $.post("dcu-data.php",{ temperature: "temperature"},
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].time);
                        marks.push(data[i].temperature);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Dcu Building Temperature',
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
		
	
	
	 <div id="chart-container1">
        <canvas id="graphCanvas1"></canvas>
    </div>



    <script>
       

        function showGraph1()
        {
		
		// alert("jaioi");
            {
                $.post("dcu-data1.php",{ humidity: "humidity"},
                function (data)
                {
                    console.log(data);
					//alert(data);
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
                                label: 'Dcu Building humidity',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas1");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
		
		
		
		
	 <div id="chart-container1">
        <canvas id="graphCanvas2"></canvas>
    </div>



    <script>
       

        function showGraph2()
        {
		
		// alert("jaioi");
            {
                $.post("dcu-data2.php",{ humidity: "gas"},
                function (data)
                {
                    console.log(data);
					//alert(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].time);
                        marks.push(data[i].gas);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Dcu Building gas',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas2");

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