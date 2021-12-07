/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Apex Chart init js
*/

//  line chart datalabel
   
var options = {
    chart: {
      height: 380,
      type: 'line',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false
      }
    },
    colors: ['#556ee6', '#34c38f'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: [3, 3],
      curve: 'straight'
    },
    series: [{
      name: "High - 2018",
      data: [26, 24, 32, 36, 33, 31, 33]
    },
    {
      name: "Low - 2018",
      data: [14, 11, 16, 12, 17, 13, 12]
    }
    ],
    title: {
      text: 'Average High & Low Temperature',
      align: 'left',
      style: {
        fontWeight:  '500',
      },
    },
    grid: {
      row: {
        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.2
      },
      borderColor: '#f1f1f1'
    },
    markers: {
      style: 'inverted',
      size: 6
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
      title: {
        text: 'Month'
      }
    },
    yaxis: {
      title: {
        text: 'Temperature'
      },
      min: 5,
      max: 40
    },
    legend: {
      position: 'top',
      horizontalAlign: 'right',
      floating: true,
      offsetY: -25,
      offsetX: -5
    },
    responsive: [{
      breakpoint: 600,
      options: {
        chart: {
          toolbar: {
            show: false
          }
        },
        legend: {
          show: false
        },
      }
    }]
  }
  
  var chart = new ApexCharts(
    document.querySelector("#line_chart_datalabel"),
    options
  );
  
  chart.render();


  //  line chart datalabel

  var options = {
    chart: {
      height: 380,
      type: 'line',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false,
    }
    },
    colors: ['#556ee6', '#f46a6a', '#34c38f'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: [3, 4, 3],
      curve: 'straight',
      dashArray: [0, 8, 5]
    },
    series: [{
        name: "Session Duration",
        data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
      },
      {
        name: "Page Views",
        data: [36, 42, 60, 42, 13, 18, 29, 37, 36, 51, 32, 35]
      },
      {
        name: 'Total Visits',
        data: [89, 56, 74, 98, 72, 38, 64, 46, 84, 58, 46, 49]
      }
    ],
    title: {
      text: 'Page Statistics',
      align: 'left',
      style: {
        fontWeight:  '500',
      },
    },
    markers: {
      size: 0,

      hover: {
        sizeOffset: 6
      }
    },
    xaxis: {
      categories: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan', '08 Jan', '09 Jan',
        '10 Jan', '11 Jan', '12 Jan'
      ],
    },
    tooltip: {
      y: [{
        title: {
          formatter: function (val) {
            return val + " (mins)"
          }
        }
      }, {
        title: {
          formatter: function (val) {
            return val + " per session"
          }
        }
      }, {
        title: {
          formatter: function (val) {
            return val;
          }
        }
      }]
    },
    grid: {
      borderColor: '#f1f1f1',
    }
}

var chart = new ApexCharts(
document.querySelector("#line_chart_dashed"),
options
);

  chart.render();

//   spline_area

var options = {
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
            show: false,
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 3,
    },
    series: [{
        name: 'series1',
        data: [34, 40, 28, 52, 42, 109, 100]
    }, {
        name: 'series2',
        data: [32, 60, 34, 46, 34, 52, 41]
    }],
    colors: ['#556ee6', '#34c38f'],
    xaxis: {
        type: 'datetime',
        categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],                
    },
    grid: {
        borderColor: '#f1f1f1',
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
}

var chart = new ApexCharts(
    document.querySelector("#spline_area"),
    options
);

chart.render();

// column chart

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
            horizontal: false,
            columnWidth: '45%',
            endingShape: 'rounded'	
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Net Profit',
        data: [46, 57, 59, 54, 62, 58, 64, 60, 66]
    }, {
        name: 'Revenue',
        data: [74, 83, 102, 97, 86, 106, 93, 114, 94]
    }, {
        name: 'Free Cash Flow',
        data: [37, 42, 38, 26, 47, 50, 54, 55, 43]
    }],
    colors: ['#34c38f', '#556ee6', '#f46a6a'],
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
    },
    yaxis: {
        title: {
            text: '$ (thousands)',
            style: {
                fontWeight:  '500',
              },
        }
    },
    grid: {
        borderColor: '#f1f1f1',
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    }
}

var chart = new ApexCharts(
    document.querySelector("#column_chart"),
    options
);

chart.render();


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


// Mixed chart

var options = {
    chart: {
        height: 350,
        type: 'line',
        stacked: false,
        toolbar: {
            show: false
        }
    },
    stroke: {
        width: [0, 2, 4],
        curve: 'smooth'
    },
    plotOptions: {
        bar: {
            columnWidth: '50%'
        }
    },
    colors: ['#f46a6a', '#556ee6', '#34c38f'],
    series: [{
        name: 'Team A',
        type: 'column',
        data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
    }, {
        name: 'Team B',
        type: 'area',
        data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
    }, {
        name: 'Team C',
        type: 'line',
        data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
    }],
    fill: {
        opacity: [0.85, 0.25, 1],
        gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
        }
    },
    labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003', '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'],
    markers: {
        size: 0
    },
    xaxis: {
        type: 'datetime'
    },
    yaxis: {
        title: {
            text: 'Points',
        },
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
                if (typeof y !== "undefined") {
                    return y.toFixed(0) + " points";
                }
                return y;
  
            }
        }
    },
    grid: {
        borderColor: '#f1f1f1'
    }
  }
  
  var chart = new ApexCharts(
    document.querySelector("#mixed_chart"),
    options
  );

  chart.render();

// machine apex


  let seriesDataMachine = [
    {
      name: 'XYZ friction',
      data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
    },
    {
      name: 'SP unbaian',
      data: [0,20,0,30,0,20,0,0,0,10,0,0,10,0,0]
    },
    {
      name: 'SP bearing',
      data: [0,80,0,70,0,50,0,0,0,80,0,0,80,0,0]
    },
    {
      name: 'RULE XYZ',
      data: [0,10,0,10,0,5,0,0,0,3,0,0,8,0,0]
    },
    {
      name: 'RULE SP',
      data: [0,30,0,40,0,35,0,0,0,23,0,0,38,0,0]
    }
  ]
  
  const optionsDataMachine = {
    chart: {
      type: 'bar',
      height: '800px',
      events: {
        markerClick: function(event, chartContext, { seriesIndex, dataPointIndex, config}) {
          console.log(event);
        }
      },
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false
      },
    },
    plotOptions: {
        bar: {
            horizontal: true,
            barHeight: '100%',
            rangeBarGroupRows: false
        }
    },
    series: seriesDataMachine,
    dataLabels: {
      enabled: false,
      offsetX: -6,
      style: {
        fontSize: '12px',
        colors: ['#fff']
      }
    },
    stroke: {
      show: true,
      width: 1,
      colors: ['#fff']
    },
    tooltip: {
      shared: true,
      intersect: false
    },
    xaxis: {
      categories: [x1, x2, x3, x4, x5, x6, x7, x8, x9, x10, x11, x12, x13, x14, x15],
      max: 100
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return val + "%"
        }
      }
    },
    legend: {
      position: 'bottom'
    },
    colors: [
      "gray", "#66ccff", "#FEB019", "#FF4560", "#775DD0",
      "#3F51B5", "#546E7A", "#D4526E", "#8D5B4C", "#F86624",
      "#D7263D", "#1B998B", "#2E294E", "#F46036", "#E2C044"
    ],
    grid: {
      show: true,
      borderColor: '#90A4AE',
      strokeDashArray: 0,
      position: 'back',
      xaxis: {
          lines: {
              show: true
          }
      },   
      yaxis: {
          lines: {
              show: true
          }
      },  
      row: {
          colors: undefined,
          opacity: 0.5
      },  
      column: {
          colors: undefined,
          opacity: 0.5
      },  
      padding: {
          top: 0,
          right: 0,
          bottom: 0,
          left: 0
      },  
    },
    responsive: [
      {
        breakpoint: 1000,
        options: {
          plotOptions: {
            bar: {
              horizontal: false
            }
          },
          legend: {
            position: "bottom"
          }
        }
      }
    ]
  }

var chartMachine = new ApexCharts(
document.querySelector("#bar_chart_machine"),
optionsDataMachine
);

chartMachine.render();


//  Radial chart

var options = {
    chart: {
        height: 370,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: '22px',
                },
                value: {
                    fontSize: '16px',
                },
                total: {
                    show: true,
                    label: 'Total',
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 249
                    }
                }
            }
        }
    },
    series: [44, 55, 67, 83],
    labels: ['Computer', 'Tablet', 'Laptop', 'Mobile'],
    colors: ['#556ee6', '#34c38f', '#f46a6a', '#f1b44c'],
    
}

var chart = new ApexCharts(
    document.querySelector("#radial_chart"),
    options
);

chart.render();


// pie chart

var options = {
  chart: {
      height: 320,
      type: 'pie',
  }, 
  series: [44, 55, 41, 17, 15],
  labels: ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"],
  colors: ["#34c38f", "#556ee6","#f46a6a", "#50a5f1", "#f1b44c"],
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
  },
  responsive: [{
      breakpoint: 600,
      options: {
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }]

}

var chart = new ApexCharts(
  document.querySelector("#pie_chart"),
  options
);

chart.render();


// Donut chart

var options = {
  chart: {
      height: 320,
      type: 'donut',
  }, 
  series: [44, 55, 41, 17, 15],
  labels: ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"],
  colors: ["#34c38f", "#556ee6","#f46a6a", "#50a5f1", "#f1b44c"],
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
  },
  responsive: [{
      breakpoint: 600,
      options: {
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }]

}

var chart = new ApexCharts(
  document.querySelector("#donut_chart"),
  options
);

chart.render();

$('.apexcharts-rangebar-area').click(function(){
  window.location.href = '/charts-apex-log';
});

$('.apexcharts-text').click(function(){
  window.location.href = '/charts-echart-machine';
});