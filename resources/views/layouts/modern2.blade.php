<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard Travel - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="{{ asset('res/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('res/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('res/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/fonts/mobiriseicons/24px/mobirise/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}app-assets/css/pages/dashboard-travel.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('res/') }}assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark bg-cyan navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
            @include('layouts.navbar')
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="dashboard-travel.html"><i class="mbri-paper-plane"></i><span class="menu-title" data-i18n="Travel">Travel</span></a>
                </li>
                <li class=" nav-item"><a href="travel-list.html"><i class="mbri-bulleted-list"></i><span class="menu-title" data-i18n="Travel List">Travel List</span></a>
                </li>
                <li class=" nav-item"><a href="travel-detail.html"><i class="mbri-database"></i><span class="menu-title" data-i18n="Travel Detail">Travel Detail</span></a>
                </li>
                <li class=" nav-item"><a href="travel-booking.html"><i class="mbri-bootstrap"></i><span class="menu-title" data-i18n="Travel Booking">Travel Booking</span></a>
                </li>
                <li class=" nav-item"><a href="travel-payment.html"><i class="mbri-cash"></i><span class="menu-title" data-i18n="Payment Details">Payment Details</span></a>
                </li>
                <li class=" nav-item"><a href="travel-complete-order.html"><i class="mbri-success"></i><span class="menu-title" data-i18n="Complete Booking">Complete Booking</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="mbri-extension"></i><span class="menu-title" data-i18n="UI">UI</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="la la-server"></i><span data-i18n="Components">Components</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="component-alerts.html"><i></i><span data-i18n="Alerts">Alerts</span></a>
                                </li>
                                <li><a class="menu-item" href="component-callout.html"><i></i><span data-i18n="Callout">Callout</span></a>
                                </li>
                                <li><a class="menu-item" href="#"><i></i><span data-i18n="Buttons">Buttons</span></a>
                                    <ul class="menu-content">
                                        <li><a class="menu-item" href="component-buttons-basic.html"><i></i><span data-i18n="Basic Buttons">Basic Buttons</span></a>
                                        </li>
                                        <li><a class="menu-item" href="component-buttons-extended.html"><i></i><span data-i18n="Extended Buttons">Extended Buttons</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="menu-item" href="component-carousel.html"><i></i><span data-i18n="Carousel">Carousel</span></a>
                                </li>
                                <li><a class="menu-item" href="component-collapse.html"><i></i><span data-i18n="Collapse">Collapse</span></a>
                                </li>
                                <li><a class="menu-item" href="component-dropdowns.html"><i></i><span data-i18n="Dropdowns">Dropdowns</span></a>
                                </li>
                                <li><a class="menu-item" href="component-list-group.html"><i></i><span data-i18n="List Group">List Group</span></a>
                                </li>
                                <li><a class="menu-item" href="component-modals.html"><i></i><span data-i18n="Modals">Modals</span></a>
                                </li>
                                <li><a class="menu-item" href="component-pagination.html"><i></i><span data-i18n="Pagination">Pagination</span></a>
                                </li>
                                <li><a class="menu-item" href="component-navs-component.html"><i></i><span data-i18n="Navs Component">Navs Component</span></a>
                                </li>
                                <li><a class="menu-item" href="component-tabs-component.html"><i></i><span data-i18n="Tabs Component">Tabs Component</span></a>
                                </li>
                                <li><a class="menu-item" href="component-pills-component.html"><i></i><span data-i18n="Pills Component">Pills Component</span></a>
                                </li>
                                <li><a class="menu-item" href="component-tooltips.html"><i></i><span data-i18n="Tooltips">Tooltips</span></a>
                                </li>
                                <li><a class="menu-item" href="component-popovers.html"><i></i><span data-i18n="Popovers">Popovers</span></a>
                                </li>
                                <li><a class="menu-item" href="component-badges.html"><i></i><span data-i18n="Badges">Badges</span></a>
                                </li>
                                <li><a class="menu-item" href="component-pill-badges.html"><i></i><span>Pill Badges</span></a>
                                </li>
                                <li><a class="menu-item" href="component-progress.html"><i></i><span data-i18n="Progress">Progress</span></a>
                                </li>
                                <li><a class="menu-item" href="component-media-objects.html"><i></i><span data-i18n="Media Objects">Media Objects</span></a>
                                </li>
                                <li><a class="menu-item" href="component-scrollable.html"><i></i><span data-i18n="Scrollable">Scrollable</span></a>
                                </li>
                                <li><a class="menu-item" href="component-spinners.html"><i></i><span data-i18n="Spinners">Spinners</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-unlock"></i><span data-i18n="Authentication">Authentication</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="login-with-bg-image.html" target="_blank"><i></i><span>Login</span></a>
                                </li>
                                <li><a class="menu-item" href="register-with-bg-image.html" target="_blank"><i></i><span>SignIn</span></a>
                                </li>
                                <li><a class="menu-item" href="recover-password.html" target="_blank"><i></i><span>Forgot Password</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-file-text"></i><span data-i18n="Form Layouts">Form Layouts</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="form-layout-basic.html"><i></i><span data-i18n="Basic Forms">Basic Forms</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-horizontal.html"><i></i><span data-i18n="Horizontal Forms">Horizontal Forms</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-hidden-labels.html"><i></i><span data-i18n="Hidden Labels">Hidden Labels</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-form-actions.html"><i></i><span data-i18n="Form Actions">Form Actions</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-row-separator.html"><i></i><span data-i18n="Row Separator">Row Separator</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-bordered.html"><i></i><span data-i18n="Bordered">Bordered</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-striped-rows.html"><i></i><span data-i18n="Striped Rows">Striped Rows</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-striped-labels.html"><i></i><span data-i18n="Striped Labels">Striped Labels</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-paste"></i><span data-i18n="Form Wizard">Form Wizard</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="form-wizard-circle-style.html"><i></i><span data-i18n="Circle Style">Circle Style</span></a>
                                </li>
                                <li><a class="menu-item" href="form-wizard-notification-style.html"><i></i><span data-i18n="Notification Style">Notification Style</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-table"></i><span data-i18n="Bootstrap Tables">Bootstrap Tables</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="table-basic.html"><i></i><span data-i18n="Basic Tables">Basic Tables</span></a>
                                </li>
                                <li><a class="menu-item" href="table-border.html"><i></i><span data-i18n="Table Border">Table Border</span></a>
                                </li>
                                <li><a class="menu-item" href="table-sizing.html"><i></i><span data-i18n="Table Sizing">Table Sizing</span></a>
                                </li>
                                <li><a class="menu-item" href="table-styling.html"><i></i><span data-i18n="Table Styling">Table Styling</span></a>
                                </li>
                                <li><a class="menu-item" href="table-components.html"><i></i><span data-i18n="Table Components">Table Components</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-area-chart"></i><span data-i18n="Chartjs">Chartjs</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="chartjs-line-charts.html"><i></i><span data-i18n="Line charts">Line charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-bar-charts.html"><i></i><span data-i18n="Bar charts">Bar charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"><i></i><span data-i18n="Pie &amp; Doughnut charts">Pie &amp; Doughnut charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-scatter-charts.html"><i></i><span data-i18n="Scatter charts">Scatter charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-polar-radar-charts.html"><i></i><span data-i18n="Polar &amp; Radar charts">Polar &amp; Radar charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-advance-charts.html"><i></i><span data-i18n="Advance charts">Advance charts</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Statistic -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-danger">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-white text-left">
                                            <h3 class="text-white">278</h3>
                                            <span>Active Listings</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-pointer text-white font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-success">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-white text-left">
                                            <h3 class="text-white">3490</h3>
                                            <span>Hotels to Stay</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-cup text-white font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-amber">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-white text-left">
                                            <h3 class="text-white">4500</h3>
                                            <span>Airlines to Travel</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-plane text-white font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-info">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-white text-left">
                                            <h3 class="text-white">1500</h3>
                                            <span>VIP Transports</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-star text-white font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ eCommerce statistic -->

                <!-- Products sell and New Orders -->
                <div class="row match-height">
                    <div class="col-xl-8 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Total Booking</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0">
                                    <div class="row mb-1">
                                        <div class="col-6 col-md-4">
                                            <h5>Current year</h5>
                                            <h2 class="info">$1,45,490</h2>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <h5>Previous year</h5>
                                            <h2 class="text-muted">$67,690</h2>
                                        </div>
                                    </div>
                                    <div class="chartjs">
                                        <canvas id="thisYearRevenue" class="position-absolute" width="400"></canvas>
                                        <canvas id="lastYearRevenue" width="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body sales-growth-chart">
                                    <div id="monthly-sales" class="height-250"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="chart-title mb-1 text-center">
                                    <h6>Hotel Bookings Of 2018</h6>
                                </div>
                                <div class="chart-stats text-center">
                                    <a href="#" class="btn btn-sm btn-success box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Products sell and New Orders -->

                <div class="row">
                    <div id="recent-transactions" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Booking</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Invoice#</th>
                                                <th class="border-top-0">Stayed</th>
                                                <th class="border-top-0">Hotel Type</th>
                                                <th class="border-top-0">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar">
                                                    </span>
                                                    <span>Elizabeth W.</span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Resort</button>
                                                </td>
                                                <td class="text-truncate">$ 1200.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Declined</td>
                                                <td class="text-truncate"><a href="#">INV-001002</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar">
                                                    </span>
                                                    <span>Doris R.</span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-warning round">Villa</button>
                                                </td>
                                                <td class="text-truncate">$ 1850.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> Pending</td>
                                                <td class="text-truncate"><a href="#">INV-001003</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar">
                                                    </span>
                                                    <span>Megan S.</span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-success round">Apartment</button>
                                                </td>
                                                <td class="text-truncate">$ 3200.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                                <td class="text-truncate"><a href="#">INV-001004</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar">
                                                    </span>
                                                    <span>Andrew D.</span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-info round">Homestay</button>
                                                </td>
                                                <td class="text-truncate">$ 4500.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                                <td class="text-truncate"><a href="#">INV-001005</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar">
                                                    </span>
                                                    <span>Walter R.</span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Guest House</button>
                                                </td>
                                                <td class="text-truncate">$ 1500.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Analytics map based session -->
                <div class="row">
                    <div class="col-12">
                        <div class="card box-shadow-0">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col-md-9 col-12">
                                        <div id="world-map-markers" class="height-450"></div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="card-body text-center">
                                            <h4 class="card-title mb-0">top Attractions</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="pb-1">2010 to 2018</p>
                                                    <div id="sessions-browser-donut-chart" class="height-200"></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="sales pr-2 pt-2">
                                                        <div class="sales-today mb-2">
                                                            <p class="m-0">2018 <span class="success float-right"><i class="ft-arrow-up success"></i>
                                                                    6.89%</span></p>
                                                            <div class="progress progress-sm mt-1 mb-0">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sales-yesterday">
                                                            <p class="m-0">2012 <span class="danger float-right"><i class="ft-arrow-down danger"></i>
                                                                    4.18%</span></p>
                                                            <div class="progress progress-sm mt-1 mb-0">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Analytics map based session -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/modern_admin" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- script(src=app_assets_path + '/vendors/js/charts/chartist.min.js')-->
    <script src="../../../app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
    <script src="../../../app-assets/data/jvector/visitor-data.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-travel.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
