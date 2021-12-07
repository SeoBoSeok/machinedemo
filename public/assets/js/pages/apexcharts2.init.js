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
  name: 'X',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
      min: 1,
      max: 10
    })
  }],
  xaxis: {
    type: 'datetime'
  },
  chart: {
    id: 'fb',
    group: 'social',
    type: 'line',
    height: 300
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
  colors: ['#008FFB']
};

var chart = new ApexCharts(document.querySelector("#chart-line"), options);
chart.render();

var optionsLine2 = {
  series: [{
    name: 'Y',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 0,
    max: 20
  })
}],
xaxis: {
  type: 'datetime'
},
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
    name: 'Z',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
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
    name: 'SP1',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
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
    name: 'Spindle speed',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
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

var optionsSmall3 = {
  series: [{
    name: 'Feedrate',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
  chart: {
  id: 'li',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#546E7A']
};

var chartSmall3 = new ApexCharts(document.querySelector("#chart-small3"), optionsSmall3);
chartSmall3.render();

var optionsSmall4 = {
  series: [{
    name: 'Fx',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
  chart: {
  id: 'li',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#546E7A']
};

var chartSmall4 = new ApexCharts(document.querySelector("#chart-small4"), optionsSmall4);
chartSmall4.render();

var optionsSmall5 = {
  series: [{
    name: 'Fy',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
  chart: {
  id: 'li',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#546E7A']
};

var chartSmall5 = new ApexCharts(document.querySelector("#chart-small5"), optionsSmall5);
chartSmall5.render();

var optionsSmall6 = {
  series: [{
    name: 'Fz',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
  chart: {
  id: 'li',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#546E7A']
};

var chartSmall6 = new ApexCharts(document.querySelector("#chart-small6"), optionsSmall6);
chartSmall6.render();

var optionsSmall7 = {
  series: [{
    name: 'Accel. SP X[g]',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
  chart: {
  id: 'li',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#546E7A']
};

var chartSmall7 = new ApexCharts(document.querySelector("#chart-small7"), optionsSmall7);
chartSmall7.render();

var optionsSmall8 = {
  series: [{
    name: 'Accel. SP Y[g]',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
  chart: {
  id: 'li',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#546E7A']
};

var chartSmall8 = new ApexCharts(document.querySelector("#chart-small8"), optionsSmall8);
chartSmall8.render();

var optionsSmall9 = {
  series: [{
    name: 'Accel. SP Z[g]',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
  chart: {
  id: 'li',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#546E7A']
};

var chartSmall9 = new ApexCharts(document.querySelector("#chart-small9"), optionsSmall9);
chartSmall9.render();

var optionsSmall10 = {
  series: [{
    name: 'Sound [Pa]',
  data: generateDayWiseTimeSeries(new Date().getTime(), 20, {
    min: 10,
    max: 60
  })
}],
xaxis: {
  type: 'datetime'
},
  chart: {
  id: 'li',
  group: 'social',
  type: 'area',
  height: 300
},
colors: ['#546E7A']
};

var chartSmall10 = new ApexCharts(document.querySelector("#chart-small10"), optionsSmall10);
chartSmall10.render();