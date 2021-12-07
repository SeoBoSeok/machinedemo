/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Apex Chart init js
*/
function generateDayWiseTimeSeries(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = baseval;
    var y =
      Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

    series.push([x, y]);
    baseval += 86400000;
    i++;
  }
  return series;
}
//  line chart datalabel
   
var options = {
  series: [{
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 100
  })
}],
  chart: {
  id: 'fb',
  group: 'social',
  type: 'line',
  height: 300
},
colors: ['#008FFB']
};

var chart = new ApexCharts(document.querySelector("#chart-line"), options);
chart.render();

var optionsLine2 = {
  series: [{
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 30,
    max: 100
  })
}],
  chart: {
  id: 'tw',
  group: 'social',
  type: 'line',
  height: 300
},
colors: ['#546E7A']
};

var chartLine2 = new ApexCharts(document.querySelector("#chart-line2"), optionsLine2);
chartLine2.render();

var optionsArea = {
  series: [{
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
  chart: {
  id: 'yt',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#00E396']
};

var chartArea = new ApexCharts(document.querySelector("#chart-area"), optionsArea);
chartArea.render();

var optionsSmall = {
  series: [{
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
  chart: {
  id: 'ig',
  group: 'social',
  type: 'area',
  height: 300,
},
colors: ['#008FFB']
};

var chartSmall = new ApexCharts(document.querySelector("#chart-small"), optionsSmall);
chartSmall.render();

var optionsSmall2 = {
  series: [{
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
  chart: {
  id: 'li',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#546E7A']
};

var chartSmall2 = new ApexCharts(document.querySelector("#chart-small2"), optionsSmall2);
chartSmall2.render();