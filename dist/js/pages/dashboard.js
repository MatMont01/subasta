/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

$(function () {

  'use strict'

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder         : 'sort-highlight',
    connectWith         : '.connectedSortable',
    handle              : '.card-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex              : 999999
  })
  $('.connectedSortable .card-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move')

  // jQuery UI sortable for the todo list
  $('.todo-list').sortable({
    placeholder         : 'sort-highlight',
    handle              : '.handle',
    forcePlaceholderSize: true,
    zIndex              : 999999
  })

  // bootstrap WYSIHTML5 - text editor
  $('.textarea').summernote()

  $('.daterange').daterangepicker({
    ranges   : {
      'Today'       : [moment(), moment()],
      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate  : moment()
  }, function (start, end) {
    window.alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
  })

  /* jQueryKnob */
  $('.knob').knob()

  // jvectormap data
  var visitorsData = {
    'US': 398, //USA
    'SA': 400, //Saudi Arabia
    'CA': 1000, //Canada
    'DE': 500, //Germany
    'FR': 760, //France
    'CN': 300, //China
    'AU': 700, //Australia
    'BR': 600, //Brazil
    'IN': 800, //India
    'GB': 320, //Great Britain
    'RU': 3000 //Russia
  }
  // World map by jvectormap
  $('#world-map').vectorMap({
    map              : 'world_en',
    backgroundColor  : 'transparent',
    regionStyle      : {
      initial: {
        fill            : 'rgba(255, 255, 255, 0.7)',
        'fill-opacity'  : 1,
        stroke          : 'rgba(0,0,0,.2)',
        'stroke-width'  : 1,
        'stroke-opacity': 1
      }
    },
    series           : {
      regions: [{
        values           : visitorsData,
        scale            : ['#ffffff', '#0154ad'],
        normalizeFunction: 'polynomial'
      }]
    },
    onRegionLabelShow: function (e, el, code) {
      if (typeof visitorsData[code] != 'undefined')
        el.html(el.html() + ': ' + visitorsData[code] + ' new visitors')
    }
  })

  // Sparkline charts
  var sparkline1 = new Sparkline($("#sparkline-1")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});
  var sparkline2 = new Sparkline($("#sparkline-2")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});
  var sparkline3 = new Sparkline($("#sparkline-3")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});

  sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021]);
  sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921]);
  sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21]);

  // The Calender
  $('#calendar').datetimepicker({
    format: 'L',
    inline: true,
    language: 'es'
  })

  // SLIMSCROLL FOR CHAT WIDGET
  $('#chat-box').overlayScrollbars({
    height: '250px'
  })

  /* Chart.js Charts */
  // Sales chart
  //var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
  var salesChartCanvas = $('#revenue-chart-canvas').get(0).getContext('2d');

  var salesChartData = {
    labels  : [],
    datasets: [
      {
        label               : 'Confirmados',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : []
      },
      {
        label               : 'Recuperados',
        backgroundColor     : 'rgba(210, 214, 222, 1)',
        borderColor         : 'rgba(210, 214, 222, 1)',
        pointRadius         : false,
        pointColor          : 'rgba(210, 214, 222, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : []
      },
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines : {
          display : false,
        }
      }],
      yAxes: [{
        gridLines : {
          display : false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  var salesChart = new Chart(salesChartCanvas, { 
      type: 'line', 
      data: salesChartData, 
      options: salesChartOptions
    }
  )
  
  // Donut Chart
  var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
  var pieData        = {
    labels: [
        'Confirmados', 
        'Recuperados',
    ],
    datasets: [
      {
        data: [],
        backgroundColor : ['#f56954', '#00a65a'],
      }
    ]
  }
  var pieOptions = {
    legend: {
      display: false
    },
    maintainAspectRatio : false,
    responsive : true,
  }
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  var pieChart = new Chart(pieChartCanvas, {
    type: 'doughnut',
    data: pieData,
    options: pieOptions      
  });
  
  // Sales graph chart
  var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
  //$('#revenue-chart').get(0).getContext('2d');

  var salesGraphChartData = {
    labels  : [],
    datasets: [
      {
        label               : 'Fallecidos',
        fill                : false,
        borderWidth         : 2,
        lineTension         : 0,
        spanGaps : true,
        borderColor         : '#efefef',
        pointRadius         : 3,
        pointHoverRadius    : 7,
        pointColor          : '#efefef',
        pointBackgroundColor: '#efefef',
        data                : []
      }
    ]
  }

  var salesGraphChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false,
    },
    scales: {
      xAxes: [{
        ticks : {
          fontColor: '#efefef',
        },
        gridLines : {
          display : false,
          color: '#efefef',
          drawBorder: false,
        }
      }],
      yAxes: [{
        ticks : {
          stepSize: 5000,
          fontColor: '#efefef',
        },
        gridLines : {
          display : true,
          color: '#efefef',
          drawBorder: false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  var salesGraphChart = new Chart(salesGraphChartCanvas, { 
      type: 'line', 
      data: salesGraphChartData, 
      options: salesGraphChartOptions
    }
  )
  
  var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
  
  /*$.ajax({
        method: "POST",
        url: base_url + "casos",
        data: { info: 'subscription' }
    }).done(function (msg) {
      //console.log(msg);
        if(msg.length > 0){
            var list = JSON.parse(msg);
            var list_date = list.fechas;
            var list_confirmados = list.confirmados;
            var list_recuperados = list.recuperados;
            salesChartData.labels = list_date;
            salesChartData.datasets[0].data = list_confirmados;
            salesChartData.datasets[1].data = list_recuperados;
            //console.log(salesChartData);
            salesChart.update();
            
            var total_c = list.total_c;
            var total_r = list.total_r;
            //console.log(pieData);
            pieData.datasets[0].data = [total_c,total_r];
            pieChart.update();
            
            var list_fallecidos = list.fallecidos;
            //console.log(salesGraphChartData);
            salesGraphChartData.labels = list_date;
            salesGraphChartData.datasets[0].data = list_fallecidos;
            salesGraphChart.update();
        }
    });*/

})
