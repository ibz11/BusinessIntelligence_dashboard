
<div class="col-md-6 my-1">
  <div class="card">
  <div class="card-body text-center">
    <strong>
      KPI1a (leading): <u>Top 5 Selling Products of the Year</u><br>
      Target for the Annual Sales per Product =   <br>
      Current Year = 2023
    </strong>
  </div>
  <div class="card-body"><canvas id="KPI1a"></canvas></div>
</div>
</div>
<div class="col-md-6 my-1">
  <div class="card">
  <div class="card-body text-center">
    <strong>
      KPI1b (lagging): <u>Monthly Sales Revenue</u><br>
      Target for the Monthly Sales Revenue =  <br>
      Current Year = 2023
    </strong>
  </div>
  <div class="card-body"><canvas id="KPI1b"></canvas></div>
</div>
</div>
<!-- You can use the following website to pick RGBA values: https://rgbacolorpicker.com/ -->
<script>
/* KPI1a */
      const kpi1a = document.getElementById('KPI1a');
    
      new Chart(kpi1a, {
        type: 'bar',
        data: {
          labels: ,
          datasets: [{
            label: 'Amount',
            data: ,
            borderWidth: 1,
            borderColor: 'rgba(54, 162, 235, 1)',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            pointStyle: 'rectRounded'
          }, {
            type: 'line',
            label: 'Target',
            data: [],
            borderWidth: 1.2,
            fill: false,
            borderColor: 'black',
            pointBackgroundColor: 'black',
            pointRadius: 0,
            pointStyle: 'line'
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: 'Amount'
              }
            },
            x: {
              title: {
                display: true,
                text: 'Product Details'
              },
              grid: {
                display: false
              }
            }
          },
          plugins: {
            tooltip: {
              intersect: false
            },
            legend: {
              position: 'bottom',
              labels : {
                usePointStyle: true
              }
            }
          },
          interaction: {
              mode: 'index'
          }
        }
      });

      /* KPI1b */
      const kpi1b = document.getElementById('KPI1b');

      new Chart(kpi1b, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 
          'August', 'September', 'October', 'November', 'December'],
          datasets: [
            {
            type: 'line',
            label: '',
            data: ,
            borderColor: 'rgba(54, 162, 235, 1)',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            pointStyle: 'rectRounded'
          }, {
            type: 'line',
            label: '',
            data: ,
            fill: false,
            borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            pointStyle: 'rectRounded'
          }, {
            type: 'line',
            label: 'Target',
            data: [],
            borderWidth: 1.2,
            fill: false,
            borderColor: 'black',
            pointBackgroundColor: 'black',
            pointRadius: 0,
            pointStyle: 'line'
          }
        ]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: 'Quantity'
              }
            },
            x: {
              title: {
                display: true,
                text: 'Month'
              },
              grid: {
                display: false
              }
            }
          },
          plugins: {
            tooltip: {
              intersect: false
            },
            legend: {
              position: 'bottom',
              labels : {
                usePointStyle: true
              }
            }
          },
          interaction: {
              mode: 'index'
          } 
        }
      });
</script>