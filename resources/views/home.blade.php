@extends('layouts.modern')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Appointment</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body chartjs">
                        <canvas id="combo-bar-line" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('res/app-assets/vendors/js/charts/chart.min.js') }}"></script>
<script>
    var ctx = $("#combo-bar-line");
    Chart.Legend.prototype.afterFit = function() {
        this.height = this.height + 50;
    };
    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            xAxes: [{
                display: true,
                barPercentage: 0.75,
                categoryPercentage: 0.3,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: false,
                    labelString: 'Days'
                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: false,
                    labelString: 'Value'
                }
            }]
        },
        title: {
            display: false,
            text: 'Appointment Statistics'
        }
    };

    loadChart();

    var label;
    function loadChart() {
        $.ajax({
        type: "post",
        url: "{{route('post.loadChartDashboard')}}",
        data: {
            _token: '{{ csrf_token() }}',
        },
        dataType: "json",
        success: function (response) {
            label = response.label;

            var chartData = {
                labels: label,
                datasets: [{
                    type: 'line',
                    label: "Appointment",
                    data: response.Appointment,
                    borderColor: "rgb(30,159,242)",
                    backgroundColor: "transparent",
                    borderWidth: 2,
                    pointBorderColor: "#1e9ff2",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                },{
                    type: 'bar',
                    label: "Fulfilled",
                    data: response.Fulfilled,
                    backgroundColor: "#00A5A8",
                    borderColor: "transparent",
                    borderWidth: 2
                }, {
                    type: 'bar',
                    label: "Booked",
                    data: response.Booked,
                    backgroundColor: "#FF4081",
                    borderColor: "transparent",
                    borderWidth: 2
                }, {
                    type: 'bar',
                    label: "Arrived",
                    data: response.Arrived,
                    backgroundColor: "#626e82",
                    borderColor: "transparent",
                    borderWidth: 2
                }, {
                    type: 'bar',
                    label: "No Show",
                    data: response.NoShow,
                    backgroundColor: "#FF6E40",
                    borderColor: "transparent",
                    borderWidth: 2
                }, {
                    type: 'bar',
                    label: "Reschedule",
                    data: response.Reschedule,
                    backgroundColor: "#7C4DFF",
                    borderColor: "transparent",
                    borderWidth: 2
                }]
            };

            var config = {
                type: 'bar',

                // Chart Options
                options : chartOptions,

                data : chartData
            };

            // Create the chart
            var lineChart = new Chart(ctx, config);
        }
        });
    }

    // Chart Data

</script>

@endsection
