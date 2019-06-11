$(document).ready(function() {
    alert("AGO");
    var lineChart = $("#line-chart");
    var lineData = {
        labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec"
        ],
        datasets: [
            {
                label: "Visitors Graph",
                borderColor: "#8ED9FF",
                pointRadius: 2,
                borderWidth: 1,
                backgroundColor: "#b6e2ff73",
                pointBackgroundColor: "#8ED9FF",
                data: [1, 22, 10, 27, 11, 40, 24, 18, 15, 32, 18, 5]
            },
            {
                label: "Visitors Graph",
                borderColor: "#2b52ab",
                pointRadius: 2,
                borderWidth: 1,
                backgroundColor: "#2b52ab2b",
                pointBackgroundColor: "#2b52ab",
                data: [3, 24, 17, 17, 31, 21, 44, 2, 25, 21, 27, 6]
            }
        ]
    };

    var myLineChart = new Chart(lineChart, {
        type: "line",
        data: lineData,
        options: {
            legend: {
                display: false
            },
            scales: {
                xAxes: [
                    {
                        ticks: {
                            fontSize: "11",
                            fontColor: "#969da5"
                        },
                        gridLines: {
                            color: "#f6f8fd",
                            zeroLineColor: "#f6f8fd"
                        }
                    }
                ],
                yAxes: [
                    {
                        gridLines: {
                            color: "#f6f8fd",
                            zeroLineColor: "#f6f8fd"
                        },
                        ticks: {
                            fontSize: "11",
                            fontColor: "#969da5"
                        }
                    }
                ]
            }
        }
    });
});
