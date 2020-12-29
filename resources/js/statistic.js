jQuery(document).ready(function ($) {
    //pie chart
    var ctx = document.getElementById( "pieChart" );
    ctx.height = 300;

    var numOfMale = $(ctx).data('male');
    var numOfFemale = $(ctx).data('female');
    var numOfOther = $(ctx).data('other');

    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ numOfMale, numOfFemale, numOfOther],
                backgroundColor: [
                    "rgba(0, 123, 255,0.9)",
                    "rgba(255,192,203,0.7)",
                    "rgba(0,0,0,0.07)"
                ],
                hoverBackgroundColor: [
                    "rgba(0, 123, 255,0.9)",
                    "rgba(255,192,203,0.7)",
                    "rgba(0,0,0,0.07)"
                ]

            } ],
            labels: [
                "Nam",
                "Nữ",
                "Khác"
            ]
        },
        options: {
            responsive: true
        }
    } );

    // single bar chart
    var ctx = document.getElementById( "singelBarChart" );
    ctx.height = 150;

    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ '<3', '3-6', '6-11', '11-15', '15-18', '18-60', '>60'],
            datasets: [
                {
                    label: "Số nhân khẩu",
                    data: $(ctx).data('statistic'),
                    borderColor: "rgba(32, 0, 64, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(32, 0, 64, 0.5)"
                }
            ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                } ]
            }
        }
    } );

    //Team chart
    var ctx = document.getElementById( "team-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: $(ctx).data('years'),
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [ {
                data: $(ctx).data('num'),
                label: "Expense",
                backgroundColor: 'rgba(0,103,255,.15)',
                borderColor: 'rgba(0,103,255,0.5)',
                borderWidth: 3.5,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(0,103,255,0.5)',
            }, ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Month'
                    }
                } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    },
                } ]
            },
            title: {
                display: false,
            }
        }
    } );
});
