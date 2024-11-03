<x-layout>
  <x-slot:title>
    {{ $title }}
  </x-slot>
  <div class="p-4 mb-3 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
    <div class="p-6 bg-white rounded-lg border border-none shadow-md dark:bg-gray-800 dark:border-gray-700">
      <h4 class="font-medium text-gray-500 w-full mb-2">Ringkasan Blog</h4>
      <div class="grid gap-4 md:gap-6 lg:grid-cols-3 sm:grid-cols-2">
        <div class="w[]">
          <canvas id="barChart"></canvas>
        </div>
        <div>
          <canvas id="lineChart"></canvas>
        </div>
        <div>
          <canvas id="pieChart"></canvas>
        </div>
      </div>
    </div>

  <script>
      var ctx = document.getElementById('barChart').getContext('2d');
      var myBarChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: @json($data['labels']),
              datasets: [{
                  label: 'Data',
                  data: @json($data['data']),
                  backgroundColor: 'rgba(75, 192, 192, 0.2)',
                  borderColor: 'rgba(75, 192, 192, 1)',
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true,
                      grid: {
                        display: false
                      }
                  },
                  x: {
                      grid: {
                        display: false
                      }
                  }
              }
          }
      });

      var ctx2 = document.getElementById('lineChart').getContext('2d');
      var mylineChart = new Chart(ctx2, {
          type: 'line',
          data: {
              labels: @json($data['labels']),
              datasets: [{
                  label: 'Data',
                  data: @json($data['data']),
                  backgroundColor: 'rgba(75, 192, 192, 0.2)',
                  borderColor: 'rgba(75, 192, 192, 1)',
                  borderWidth: 1,
                  fill: false,
                  tension: 0.1,
              }],
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true,
                      grid: {
                        display: false
                      }
                  },
                  x: {
                      grid: {
                        display: false
                      }
                  }
              }
          }
      });

      var ctx3 = document.getElementById('pieChart').getContext('2d');
      var mylineChart = new Chart(ctx3, {
          type: 'line',
          data: {
              labels: @json($data['labels']),
              datasets: [{
                  label: 'Data',
                  data: @json($data['data']),
                  backgroundColor: 'rgba(75, 192, 192, 0.2)',
                  borderColor: 'rgba(75, 192, 192, 1)',
                  borderWidth: 1,
                  fill: false,
                  tension: 0.1,
              }],
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true,
                      grid: {
                        display: false
                      }
                  },
                  x: {
                      grid: {
                        display: false
                      }
                  }
              }
          }
      });
  </script>
  </div>
  <a href="/blogs/create" class="mt-2 px-3 py-2 bg-primary-300 text-primary-800 hover:bg-primary-100 rounded-full text-sm">
    Post A Blog
  </a>

</x-layout>