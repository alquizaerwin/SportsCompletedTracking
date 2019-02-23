 var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "theme": "light",
  "dataProvider": [{
    "country": "USA",
    "visits": 2025
  }, {
    "country": "China",
    "visits": 1882
  }, {
    "country": "Japan",
    "visits": 1809
  }, {
    "country": "Germany",
    "visits": 1322
  }, {
    "country": "UK",
    "visits": 1122
  }, {
    "country": "France",
    "visits": 1114
  }, {
    "country": "India",
    "visits": 984
  }, {
    "country": "Spain",
    "visits": 711
  }, {
    "country": "Netherlands",
    "visits": 665
  }, {
    "country": "Russia",
    "visits": 580
  }, {
    "country": "South Korea",
    "visits": 443
  }, {
    "country": "Canada",
    "visits": 441
  }, {
    "country": "Brazil",
    "visits": 395
  }],
  "graphs": [{
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "categoryField": "country",
  "chartCursor": {
    "cursorAlpha": 0,
    "animationDuration": 0
  },
  "balloon": {
    "animationDuration": 0
  },
  "export": {
    "enabled": true,
    "beforeCapture": function() {
      var chart = this.setup.chart;
      chart.graphs[0].labelText = "[[value]]";
      chart.validateNow();
    },
    "afterCapture": function() {
      var chart = this.setup.chart;
      setTimeout(function() {
        chart.graphs[0].labelText = "";
        chart.validateNow();
      }, 10);
    }
  }
});
