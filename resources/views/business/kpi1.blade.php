<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body">KPI1a (leading):Percentage of Doctors trained in AI-based tools for lung classification</div>
  
    <div class="card-body"><canvas id="KPI1a"></canvas></div>
    </div>
</div>
<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body">KPI1b (lagging):Time saved in lung classification process after implementing AI-based tools</div>

    <div class="card-body"><canvas id="KPI1b"></canvas></div>
    </div>
</div>
<script>
      /* KPI3a */
     let trained='{{$trained}}'
     let not_trained='{{$not_trained}}'

     let timeLess40='{{$time_lesser35}}'
     let timeOver40='{{$time_greater40}}'
      /* KPI3b */
      const kpi1a = document.getElementById('KPI1a');

      new Chart(kpi1a, {
        type: 'doughnut',
        data: {
          labels: [
            `Percentage trained ${trained}% `,
            `Percentage not trained ${not_trained}%`,
           
          ],
          datasets: [{
            label: 'Trained Doctors',
            data: [trained, not_trained],
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
      /* KPI3b */
      const kpi1b = document.getElementById('KPI1b');

      new Chart(kpi1b, {
        type: 'bar',
        data: {
          labels: [
            'service time > 40',
            'service time < 40',
          
          ],
          datasets: [{
            label: 'Time saved vs Time lost',
            data: [timeLess40, timeOver40],
            backgroundColor: [
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
              'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: 'Service time total count'
              }
            }

          
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
      }});
</script>