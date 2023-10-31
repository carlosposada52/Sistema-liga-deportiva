@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">

        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="bg-transparent">

                    </div>
                    <div class="row">

                        <div id="modallargo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    LArgo
                                </div>
                            </div>
                        </div>

                        @for ($i = 0; $i < count($equipos); $i += 2)
                            <div class="row">
                                <div class="col-md-4 mx-auto p-3">
                                    <div id="targetar" class="card bg-dark shadow-lg  " 
                                       >
                                        <div class="card-body">
                                            <h5 class="card-title text-white">{{ $equipos[$i]->nombre_equipo }}</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mx-auto text-center p-3">
                                    <h1 class="display-3">VS</h1>
                                </div>

                                @if ($i + 1 < count($equipos))
                                    <div class="col-md-4 mx-auto p-3" data-bs-toggle="modal"  data-bs-target="#modallargo">
                                        <div class="card bg-dark shadow-lg">
                                            <div class="card-body">
                                                <h5 class="card-title text-white">{{ $equipos[$i + 1]->nombre_equipo }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endfor




                        

                     
                        <button class="btn btn-success  btn-sm mx-auto ">Realizar Torneo</button>
                    </div>

                </div>



                @include('layouts.footers.auth.footer')
            </div>
        @endsection

        @push('js')
            <script src="./assets/js/plugins/chartjs.min.js"></script>
            <script>
                var ctx1 = document.getElementById("chart-line").getContext("2d");

                var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

                gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
                gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
                gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
                new Chart(ctx1, {
                    type: "line",
                    data: {
                        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Mobile apps",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 0,
                            borderColor: "#fb6340",
                            backgroundColor: gradientStroke1,
                            borderWidth: 3,
                            fill: true,
                            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                            maxBarThickness: 6

                        }],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false,
                            }
                        },
                        interaction: {
                            intersect: false,
                            mode: 'index',
                        },
                        scales: {
                            y: {
                                grid: {
                                    drawBorder: false,
                                    display: true,
                                    drawOnChartArea: true,
                                    drawTicks: false,
                                    borderDash: [5, 5]
                                },
                                ticks: {
                                    display: true,
                                    padding: 10,
                                    color: '#fbfbfb',
                                    font: {
                                        size: 11,
                                        family: "Open Sans",
                                        style: 'normal',
                                        lineHeight: 2
                                    },
                                }
                            },
                            x: {
                                grid: {
                                    drawBorder: false,
                                    display: false,
                                    drawOnChartArea: false,
                                    drawTicks: false,
                                    borderDash: [5, 5]
                                },
                                ticks: {
                                    display: true,
                                    color: '#ccc',
                                    padding: 20,
                                    font: {
                                        size: 11,
                                        family: "Open Sans",
                                        style: 'normal',
                                        lineHeight: 2
                                    },
                                }
                            },
                        },
                    },
                });
            </script>
        @endpush
