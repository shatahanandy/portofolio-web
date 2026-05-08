@extends('layout.app')

@section('content')

@php

$labels = [
    'Alam',
    'Budaya',
    'Flora & Fauna',
    'People'
];

$data = [
    12,
    8,
    15,
    5
];

$totalFoto = array_sum($data);

$totalKategori = count($labels);

@endphp

<!-- ================= STATISTIK ================= -->
<section class="stats-section">

    <div class="stats-container">

        <!-- TITLE -->
        <div class="stats-header">

            <span>RuangPandang Analytics</span>

            <h1>
                Statistik Foto <br>
                Berdasarkan Kategori
            </h1>

            <p>
                Lihat distribusi karya yang telah diunggah
                oleh komunitas RuangPandang.
            </p>

        </div>

        <!-- CARD -->
        <div class="stats-card">

            <!-- LEFT -->
            <div class="stats-info">

                <div class="mini-stat">

                    <h3>{{ $totalFoto }}</h3>
                    <span>Total Foto</span>

                </div>

                <div class="mini-stat">

                    <h3>{{ $totalKategori }}</h3>
                    <span>Total Kategori</span>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="chart-box">

                <canvas id="myChart"></canvas>

            </div>

        </div>

    </div>

</section>

<!-- CHART JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const labels = @json($labels);

const data = @json($data);

const ctx = document.getElementById('myChart');

new Chart(ctx, {

    type: 'doughnut',

    data: {

        labels: labels,

        datasets: [{

            label: 'Jumlah Foto',

            data: data,

            borderWidth: 0,

            backgroundColor: [
                '#111111',
                '#444444',
                '#777777',
                '#AAAAAA',
                '#D6D6D6'
            ],

            hoverOffset: 12

        }]
    },

    options: {

        responsive: true,

        cutout: '60%',

        plugins: {

            legend: {

                position: 'bottom',

                labels: {

                    padding: 25,

                    font: {
                        size: 15
                    }

                }

            }

        }

    }

});

</script>

@endsection