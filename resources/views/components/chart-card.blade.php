@props(['data'])

<div class="p-3 w-full md:p-6 lg:px-10 bg-white rounded-lg border border-none shadow-md dark:bg-gray-800 dark:border-gray-700">
    <h4 class="font-medium text-gray-500 w-full mb-5 md:mb-8">Ringkasan Blog</h4>
    <div class="grid gap-3 md:gap-8 lg:gap-20 lg:grid-cols-3 sm:grid-cols-2">
      <div class="w-full">
        <canvas id="barChart" class="mb-2"></canvas>
        <p class="text-sm text-center text-gray-500">Total blog berdasarkan kategori</p>
    </div>
    <div>
        <canvas id="lineChart" class="mb-2"></canvas>
        <p class="text-sm text-center text-gray-500">Jumlah pembaca seminggu terakhir</p>
    </div>
    <div class="h-full">
        <canvas id="radarChart" class="mb-2"></canvas>
        <p class="text-sm text-center text-gray-500">Total durasi baca</p>
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
                backgroundColor: '#ba97ff',
                borderColor: '#a375ff',
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
            },
            plugins: {
                legend: {
                    display: false
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
                backgroundColor: '#ba97ff',
                borderColor: '#a375ff',
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
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });

    var ctx3 = document.getElementById('radarChart').getContext('2d');
    var mylineChart = new Chart(ctx3, {
        type: 'line',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['data']),
                backgroundColor: '#ba97ff',
                borderColor: '#a375ff',
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
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });

</script>