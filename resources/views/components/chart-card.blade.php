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
        <p class="text-sm text-center text-gray-500">Total durasi baca dan jumlah blog</p>
      </div>
    </div>
</div>

{{-- {{ dd(json_encode($data)); }} --}}

{{-- <pre>
    @php
        dd($data['chart1']);
    @endphp
</pre> --}}

<script>
    const chart1 = @json($data['chart1']);
    const chart3 = @json($data['chart3']);
    console.log("Chart 1 Data in JS:", chart1);

    // Periksa apakah data ada sebelum digunakan
    var labels = chart1.labels || []; // Gunakan default array kosong
    var data = chart1.data || [];

    console.log("Data diterima:", chart1, chart3);

    var ctx = document.getElementById('barChart').getContext('2d');
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels, // @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: data, // @json($data['data']),
                backgroundColor: '#ba97ff',
                borderColor: '#a375ff',
                borderWidth: 1,
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
            labels: chart1.labels, // @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: chart1.data, // @json($data['data']),
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
    var myRadarChart = new Chart(ctx3, {
        type: 'line', // Tetap gunakan jenis "line" untuk dua garis
        data: {
            labels: chart3.labels, // @json($chartData3['labels']), // Labels dari $data2
            datasets: [
                {
                    label: 'Total Durasi Baca (Menit)', // Garis pertama
                    data: chart3.read_duration, // @json($chartData3['read_duration']), // Data dari read_duration
                    backgroundColor: 'rgba(186, 151, 255, 0.2)', // Warna transparan area
                    borderColor: '#ba97ff', // Warna garis
                    borderWidth: 2,
                    tension: 0.3, // Membuat garis halus
                },
                {
                    label: 'Jumlah Blog', // Garis kedua
                    data: chart3.blog_count, // @json($chartData3['blog_count']), // Data dari blog_count
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Warna transparan area
                    borderColor: '#ff6384', // Warna garis
                    borderWidth: 2,
                    tension: 0.3, // Membuat garis halus
                },
            ],
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        display: true,
                    },
                    title: {
                        display: true,
                        text: 'Jumlah',
                    },
                },
                x: {
                    grid: {
                        display: false,
                    },
                    title: {
                        display: true,
                        text: 'Hari (Bulan/Tanggal)',
                    },
                },
            },
            plugins: {
                legend: {
                    display: true, // Menampilkan legenda
                    position: 'top',
                },
            },
        },
    });



</script>