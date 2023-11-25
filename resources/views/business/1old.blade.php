
<div class="col-md-6 my-1">
  <div class="card">
  <div class="card-body text-center">
    <strong>
      KPI1a (leading): <u>Percentage of employees trained in AI-based tools for lung classification</u><br>
     
    </strong>
  </div>
  <div class="card-body"><canvas id="KPI1a"></canvas></div>
</div>
</div>


<div class="col-md-6 my-1">
  <div class="card">
  <div class="card-body text-center">
    <strong>
      KPI1b (lagging): <u>Time saved in lung classification<br> process after implementing AI-based tools</u><br>
    
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
  type: 'doughnut',
  data: {
    labels: [
      'Red',
      'Blue',
      'Yellow'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  },
  options: {
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