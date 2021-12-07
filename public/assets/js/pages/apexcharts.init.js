/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Apex Chart init js
*/

//  line chart datalabel


// column chart



// column chart with datalabels

let x1 = 'MT04302S';
let x2 = 'MT04303S';
let x3 = 'MT04301';
let x4 = 'MT04302';
let x5 = 'MT04303';
let x6 = 'MT91302';
let x7 = 'MT91303';
let x8 = 'MT91304';
let x9 = 'MT9130221';
let x10 = 'MT9130121';
let x11 = 'MT9130222';
let x12 = 'MT04302S21';
let x13 = 'MT0430321';
let x14 = 'MT0430421';
let x15 = 'MT9131121';

var options = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },
    plotOptions: {
        bar: {
            dataLabels: {
                position: 'top', // top, center, bottom
            },
        }
    },
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return val + "%";
        },
        offsetY: -22,
        style: {
            fontSize: '12px',
            colors: ["#304758"]
        }
    },
    series: [{
        name: 'Inflation',
        data: [2.5, 3.2, 5.0, 10.1, 4.2, 3.8, 3, 2.4, 4.0, 1.2, 3.5, 0.8]
    }],
    colors: ['#556ee6'],
    grid: {
        borderColor: '#f1f1f1',
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        position: 'top',
        labels: {
            offsetY: -18,

        },
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        crosshairs: {
            fill: {
                type: 'gradient',
                gradient: {
                    colorFrom: '#D8E3F0',
                    colorTo: '#BED1E6',
                    stops: [0, 100],
                    opacityFrom: 0.4,
                    opacityTo: 0.5,
                }
            }
        },
        tooltip: {
            enabled: true,
            offsetY: -35,

        }
    },
    fill: {
        gradient: {
            shade: 'light',
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: undefined,
            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [50, 0, 100, 100]
        },
    },
    yaxis: {
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false,
        },
        labels: {
            show: false,
            formatter: function (val) {
                return val + "%";
            }
        }

    },
    title: {
        text: 'Monthly Inflation in Argentina, 2002',
        floating: true,
        offsetY: 330,
        align: 'center',
        style: {
            color: '#444',
            fontWeight:  '500',
        }
    },
}

var chart = new ApexCharts(
    document.querySelector("#column_chart_datalabel"),
    options
);

chart.render();



// Bar chart

let seriesData = [
    {
      name: 'Connection',
      data: [
        {
          x: x1,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 24)),
            dateFns.getTime(dateFns.subHours(new Date(), 13))
          ]
        },
        {
          x: x1,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 3)),
            dateFns.getTime(new Date())
          ]
        },
        {
          x: x2,
          y: []
        },
        {
          x: x3,
          y: []
        },
        {
          x: x4,
          y: []
        },
        {
          x: x5,
          y: []
        },
        {
          x: x6,
          y: []
        },
        {
          x: x7,
          y: []
        },
        {
          x: x8,
          y: []
        },
        {
          x: x9,
          y: []
        },
        {
          x: x10,
          y: []
        },
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 24), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 13), "Korea/Seoul")
          ]
        },
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 12), "Korea/Seoul"),
            dateFns.getTime(new Date())
          ]
        },
        {
          x: x11,
          y: [
            dateFns.getTime(dateFns.subDays(new Date(), 1), "Korea/Seoul"),
            dateFns.getTime(dateFns.subMinutes(new Date(), 60), "Korea/Seoul")
          ]
        },
        {
          x: x12,
          y: []
        },
        {
          x: x13,
          y: []
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subDays(new Date(), 1), "Korea/Seoul"),
            dateFns.getTime(new Date())
          ]
        },
        {
          x: x15,
          y: []
        }
      ]
    },
    // George Washington
    {
      name: 'Machine Cycle',
      data: [
        {
          x: x1,
          y: [
            dateFns.getTime(dateFns.subMinutes(new Date(), 60), "Korea/Seoul"),
            dateFns.getTime((new Date(), "Korea/Seoul"))
          ]
        },
        {
          x: x1,
          y: [
            dateFns.getTime(dateFns.subMinutes(new Date(), 120), "Korea/Seoul"),
            dateFns.getTime(dateFns.subMinutes(new Date(), 90), "Korea/Seoul"),
          ]
        },
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 23), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 22), "Korea/Seoul")
          ]
        },
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 21), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 20), "Korea/Seoul"),
          ]
        },
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 18), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 16), "Korea/Seoul")
          ]
        },
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 14), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 13), "Korea/Seoul"),
          ]
        },
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 10), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 9), "Korea/Seoul")
          ]
        },
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 8), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 7), "Korea/Seoul"),
          ]
        }, 
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 6), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 5), "Korea/Seoul")
          ]
        },
        {
          x: x3,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 4), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 3), "Korea/Seoul"),
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 24), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 23), "Korea/Seoul")
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 22), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 21), "Korea/Seoul"),
          ]
        }, 
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 20), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 19), "Korea/Seoul")
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 18), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 17), "Korea/Seoul"),
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 16), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 15), "Korea/Seoul")
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 14), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 13), "Korea/Seoul"),
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 12), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 11), "Korea/Seoul")
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 10), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 9), "Korea/Seoul"),
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 8), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 7), "Korea/Seoul")
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 6), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 5), "Korea/Seoul"),
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 4), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 3), "Korea/Seoul")
          ]
        },
        {
          x: x14,
          y: [
            dateFns.getTime(dateFns.subHours(new Date(), 2), "Korea/Seoul"),
            dateFns.getTime(dateFns.subHours(new Date(), 1), "Korea/Seoul"),
          ]
        },                                   
      ]
    },
  ]
  
  let optionsData = {
    chart: {
      type: 'rangeBar',
      width: "100%",
      height: '800px',
      events: {
        selection: function(chartContext, { xaxis, yaxis }) {
          console.log('chartContext', chartContext);
        }
      },
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false
      }
    },
    animations: {
      enabled: true,
      easing: "linear",
      dynamicAnimation: {
        speed: 500
      }
    },
    plotOptions: {
      bar: {
        horizontal: true,
        barHeight: '30%',
        rangeBarGroupRows: false
      }
    },
    colors: [
      "gray", "#66ccff", "#FEB019", "#FF4560", "#775DD0",
      "#3F51B5", "#546E7A", "#D4526E", "#8D5B4C", "#F86624",
      "#D7263D", "#1B998B", "#2E294E", "#F46036", "#E2C044"
    ],
    fill: {
      type: 'solid'
    },
    series: seriesData,
    xaxis: {
      type: 'datetime'
    },
    legend: {
        position: 'bottom'
    },
    responsive: [
      {
        breakpoint: 1000,
        options: {
          plotOptions: {
            bar: {
              horizontal: true
            }
          },
          legend: {
            position: "bottom"
          }
        }
      }
    ]
  }

var options = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },
    plotOptions: {
        bar: {
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    series: [{
        data: [380, 430, 450, 475, 550, 584, 780, 1100, 1220, 1365]
    }],
    colors: ['#34c38f'],
    grid: {
        borderColor: '#f1f1f1',
    },
    xaxis: {
        categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan', 'United States', 'China', 'Germany'],
    }
}

var chart = new ApexCharts(
    document.querySelector("#bar_chart_main"),
    optionsData
);

chart.render();

$('.apexcharts-rangebar-area').click(function(){
  window.location.href = '/charts-echart-machine';
});

$('.apexcharts-text').click(function(){
  window.location.href = '/charts-apex-log';
});