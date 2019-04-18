// Dashboard - Modern
//----------------------

(function (window, document, $) {

    // //Sample toast
    setTimeout(function () {
        M.toast({ html: "Hello! Welcome to our admin page." });
    }, 2000);

    // auto loading 
    auto_load('/main', function(data){
      console.log(data);

      // input the value of dom[data-key=""]
      $('[data-key="pp_remain"]').text(data['pp']['current_remain']);
      $('[data-key="pp_total"]').text(data['pp']['current_total']);
      $('[data-key="pp_money"]').text(data['pp']['sold_money']);
      $('[data-key="pp_count"]').text(data['pp']['sold_count']);
      $('[data-key="fullz_remain"]').text(data['fullz']['current_remain']);
      $('[data-key="fullz_total"]').text(data['fullz']['current_total']);
      $('[data-key="fullz_money"]').text(data['fullz']['sold_money']);
      $('[data-key="fullz_count"]').text(data['fullz']['sold_count']);
      $('[data-key="dead_fullz_remain"]').text(data['dead_fullz']['current_remain']);
      $('[data-key="dead_fullz_total"]').text(data['dead_fullz']['current_total']);
      $('[data-key="dead_fullz_money"]').text(data['dead_fullz']['sold_money']);
      $('[data-key="dead_fullz_count"]').text(data['dead_fullz']['sold_count']);
      $('[data-key="total_money"]').text(data['pp']['sold_money']+data['fullz']['sold_money']+data['dead_fullz']['sold_money']);

      // input the value of table data-key="unfinished_table"
      // temp_html = '';
      // temp_count = data['unfinished'].length;
      // for(var i = 0; i < temp_count; i++){
      //   temp_html += '<tr><td>'+data['unfinished'][i]['uin']+'</td><td>'+data['unfinished'][i]['time']+'</td><td>'+data['unfinished'][i]['product_type']+'</td><td>'+data['unfinished'][i]['gbp']+'</td></tr>';
      // }
      // $('[data-key="unfinished_table"]').html(temp_html);
      // if(data['unfinished_counts'] > 0) $('[data-key="unfinished_detail"]').text('There are '+data['unfinished_counts']+' unfinished payment(s) now.');

      //Get the context of the Chart canvas element we want to select
    var ctx = $("#line-chart");
 
    // Chart Options
    var chartOptions = {
       responsive: true,
       maintainAspectRatio: false,
       legend: {
          position: "bottom"
       },
       hover: {
          mode: "label"
       },
       scales: {
          xAxes: [
             {
                display: true,
                gridLines: {
                   color: "#f3f3f3",
                   drawTicks: false
                },
                scaleLabel: {
                   display: true,
                   labelString: "Month"
                }
             }
          ],
          yAxes: [
             {
                display: true,
                gridLines: {
                   color: "#f3f3f3",
                   drawTicks: false
                },
                scaleLabel: {
                   display: true,
                   labelString: "Value"
                }
             }
          ]
       },
       title: {
          display: true,
          text: "Line Chart - pp, fullz, dead fullz"
       }
    };

    // date
    var today = new Date();
    var week_days = [];
    for(var i = 0; i < 7; i++){
      temp_date = new Date();
      temp_date.setDate(today.getDate() + i - 6);
      week_days[i] = (temp_date.getMonth() + 1) + '.' + temp_date.getDate();
    }

    // Chart Data
    var chartData = {
       labels: week_days,
       datasets: [
          {
             label: "PP",
             data: data['pp']['week'],
             fill: false,
             borderColor: "#e91e63",
             pointBorderColor: "#e91e63",
             pointBackgroundColor: "#FFF",
             pointBorderWidth: 2,
             pointHoverBorderWidth: 2,
             pointRadius: 4
          },
          {
             label: "Fullz",
             data: data['fullz']['week'],
             fill: false,
             borderColor: "#03a9f4",
             pointBorderColor: "#03a9f4",
             pointBackgroundColor: "#FFF",
             pointBorderWidth: 2,
             pointHoverBorderWidth: 2,
             pointRadius: 4
          },
          {
             label: "Dead Fullz",
             data: data['dead_fullz']['week'],
             fill: false,
             borderColor: "#ffc107",
             pointBorderColor: "#ffc107",
             pointBackgroundColor: "#FFF",
             pointBorderWidth: 2,
             pointHoverBorderWidth: 2,
             pointRadius: 4
          }
       ]
    };
 
    var config = {
       type: "line",
 
       // Chart Options
       options: chartOptions,
 
       data: chartData
    };
 
    // Create the chart
    var lineChart = new Chart(ctx, config);


    // polar data
    if(data['pp']['sold_money']+data['fullz']['sold_money']+data['dead_fullz']['sold_money'] == 0)
      p_a = p_b = p_c = 1;
    else{
      p_a = data['pp']['sold_money'];
      p_b = data['fullz']['sold_money'];
      p_c = data['dead_fullz']['sold_money'];
    }

    // BI-POLAR BAR CHART
    var data = {
      series: [p_a, p_b, p_c]
    };

    var sum = function (a, b) { return a + b };

    new Chartist.Pie('#ct9-chart', data, {
      labelInterpolationFnc: function (value, index) {
        if(index == 0) lab_val = 'pp: ';
        else if(index == 1) lab_val = 'fullz: ';
        else if(index == 2) lab_val = 'dead fullz: ';
        return lab_val + Math.round(value / data.series.reduce(sum) * 100) + '%';
      }
    });

    });

})(window, document, jQuery);