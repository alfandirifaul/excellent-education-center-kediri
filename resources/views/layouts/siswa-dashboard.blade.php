<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EEC Education') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/bootstrap.min.css') }}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/file-upload.css') }}">
    <!-- file upload -->
    <link rel="stylesheet" href={{ asset('css/dashboard/plyr.css') }}>
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href={{ asset('css/dashboard/full-calendar.css') }}>
    <!-- jquery Ui -->
    <link rel="stylesheet" href={{ asset('css/dashboard/jquery-ui.css') }}>
    <!-- editor quill Ui -->
    <link rel="stylesheet" href={{ asset('css/dashboard/editor-quill.css') }}>
    <!-- apex charts Css -->
    <link rel="stylesheet" href={{ asset('css/dashboard/apexcharts.css') }}>
    <!-- calendar Css -->
    <link rel="stylesheet" href={{ asset('css/dashboard/calendar.css') }}>
    <!-- jvector map Css -->
    <link rel="stylesheet" href={{ asset('css/dashboard/jquery-jvectormap-2.0.5.css') }}>
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/main.css') }}">

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->


    <!-- ============================ Sidebar Start ============================ -->
    <x-dashboard.side-bar :user="$user"/>
    <!-- ============================ Sidebar End  ============================ -->


    <div class="dashboard-main-wrapper">

        <!-- ============================ Top Navbar Start ============================ -->
        <x-dashboard.nav-bar :user="$user"/>
        <!-- ============================ Top Navbar End ============================ -->

        @yield('content')

    </div>


    <!-- Jquery js -->
    <script src="{{ asset('js/dashboard/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('js/dashboard/boostrap.bundle.min.js') }}"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset('js/dashboard/phosphor-icon.js') }}"></script>
    <!-- file upload -->
    <script src="{{ asset('js/dashboard/file-upload.js') }}"></script>
    <!-- file upload -->
    <script src="{{ asset('js/dashboard/plyr.js') }}"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="{{ asset('js/dashboard/full-calendar.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('js/dashboard/jquery-ui.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('js/dashboard/editor-quill.js') }}"></script>
    <!-- apex charts -->
    <script src="{{ asset('js/dashboard/apexcharts.min.js') }}"></script>
    <!-- Calendar Js -->
    <script src="{{ asset('js/dashboard/calendar.js') }}"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset('js/dashboard/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset('js/dashboard/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('js/dashboard/main.js') }}"></script>


    <script>
        // ============================ Donut Chart Start ==========================
        var options = {
            series: [65.2, 25, 9.8],
            chart: {
                height: 200,
                type: 'donut',
            },
            colors: ['#3D7FF9', '#27CFA7', '#FA902F'],
            enabled: true, // Enable data labels
            formatter: function(val, opts) {
                return opts.w.config.series[opts.seriesIndex] + '%';
            },
            dropShadow: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '55%' // Fixed slice width
                    }
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        show: false
                    }
                }
            }],
            legend: {
                position: 'right',
                offsetY: 0,
                height: 230,
                show: false
            }
        };

        var chart = new ApexCharts(document.querySelector("#activityDonutChart"), options);
        chart.render();
        // ============================ Donut Chart End ==========================

        // ============================ Hour Spent Chart Start ==========================
        var options = {
            series: [{
                name: 'Study',
                data: [44, 55, 41, 50, 36, 43, 50, 44, 55, 41, 50, 36]
            }, {
                name: 'Exam',
                data: [26, 23, 20, 40, 32, 27, 30, 26, 23, 20, 40, 32]
            }],
            colors: ['#27CFA7', '#A9ECDC'],
            chart: {
                type: 'bar',
                height: 400,
                stacked: true,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: true
                }
            },
            plotOptions: {
                bar: {
                    columnWidth: "35%",
                    horizontal: false,
                    borderRadius: 10,
                    borderRadiusApplication: 'end', // 'around', 'end'
                    borderRadiusWhenStacked: 'last', // 'all', 'last'
                    dataLabels: {
                        total: {
                            enabled: false,
                            style: {
                                fontSize: '13px',
                                fontWeight: 900,
                            }
                        }
                    }
                },
            },
            dataLabels: {
                enabled: false // Disable bar labels globally
            },
            grid: {
                show: true,
                borderColor: '#d5dbe7',
                strokeDashArray: 3,
                position: 'back',
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return "$" + value + "Hr";
                    },
                    style: {
                        fontSize: "14px"
                    }
                },
            },
            legend: {
                show: false,
                position: 'top',
                offsetY: 0,
                horizontalAlign: 'start',
                markers: {
                    // shape: 'circle'
                    radius: 50,
                }
            },
            fill: {
                opacity: 1
            }
        };

        var chart = new ApexCharts(document.querySelector("#stackedColumnChart"), options);
        chart.render();
        // ============================ Hour Spent Chart Start ==========================

        // Delete Event Item
        $('.delete-btn').on('click', function() {
            $(this).closest('.event-item').addClass('d-none')
        });
    </script>

</body>

</html>
