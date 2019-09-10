<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>مضيافي | احصائيات</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Tajawal:300,400,500,700,900"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <!--<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />-->

    <link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />-->

    <link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->

    <link href="assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="assets/images/icon.png"/>
    <link rel="stylesheet" href="assets/custome.css">
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index.php" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/images/inline-logo.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->


                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <?php include 'top_bar.php' ?>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <?php include 'menu.php' ?>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">احصائيات مضيافي</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <!--begin:: Widgets/Stats-->
                <div class="m-portlet pb-3 pt-3 my-statistics">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-md-12 col-lg-6 col-xl-4">

                                <!--begin::Total Profit-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            المستخدميين
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-brand">
													1411
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-brand" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::Total Profit-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">

                                <!--begin::New Feedbacks-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            مزودي الخدمة
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-info">
													1349
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-info" role="progressbar" style="width: 100%;"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Feedbacks-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">

                                <!--begin::New Orders-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            العقارات
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-danger">
													567
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-danger" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Orders-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">

                                <!--begin::New Users-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            عدد طلبات الحجز
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-success">
													276
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-success" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Users-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <!--begin::New Users-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            عدد الحجوزات
                                        </h4><br>

                                        <span class="m-widget24__stats m--font-metal">
													276
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-metal" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::New Users-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <!--begin::New Users-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            الدفعات المالية
                                        </h4><br>

                                        <span class="m-widget24__stats m--font-warning">
													276
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-warning" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::New Users-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                <h3 class="m-portlet__head-text">
                                    الحجوزات وتوزيعها على 5 اشهر السابقة
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div id="chartdiv"></div>
                    </div>
                </div>
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                <h3 class="m-portlet__head-text">
                                    أكثر 10 مدن طلبا للحجوزات
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div id="chartdiv2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--head-overlay m-portlet--full-height financial-card  m-portlet--rounded-force">
                            <div class="m-portlet__head m-portlet__head--fit-">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text m--font-light">
                                            العائدات المالية في التطبيق
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <form action="#">
                                        <div class="form-group m-form__group mb-0">
                                            <select class="form-control year-select m-input custom-select m-input--air m-input--pill"
                                                    id="exampleSelect1">
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget27 m-portlet-fit--sides">
                                    <div class="m-widget27__pic">
                                        <img src="assets/app/media/img/bg/bg-4.jpg" alt="">
                                        <div class="m-widget27__title m--font-light">
                                            <p>المدفوعات التي تمت على التطبيق</p>
                                            <h3><span><span>$</span>256,100</span></h3>
                                        </div>
                                        <div class="m-widget27__btn">
                                            <button type="button"
                                                    class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">
                                                الأرباح: 5,000 $
                                            </button>
                                        </div>
                                    </div>
                                    <div class="m-widget27__container">

                                        <!-- begin::Nav pills -->
                                        <ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
                                            <li class="m-widget27__nav-item nav-item">
                                                <a class="nav-link active" data-toggle="pill"
                                                   href="#m_personal_income_quater_1">الربع الأول</a>
                                            </li>
                                            <li class="m-widget27__nav-item nav-item">
                                                <a class="nav-link" data-toggle="pill"
                                                   href="#m_personal_income_quater_2">الربع الثاني</a>
                                            </li>
                                            <li class="m-widget27__nav-item nav-item">
                                                <a class="nav-link" data-toggle="pill"
                                                   href="#m_personal_income_quater_3">الربع الثالث</a>
                                            </li>
                                            <li class="m-widget27__nav-item nav-item">
                                                <a class="nav-link" data-toggle="pill"
                                                   href="#m_personal_income_quater_4">الربع الرابع</a>
                                            </li>
                                        </ul>

                                        <!-- end::Nav pills -->

                                        <!-- begin::Tab Content -->
                                        <div class="m-widget27__tab tab-content m-widget27--no-padding">
                                            <div id="m_personal_income_quater_1" class="tab-pane active">
                                                <div class="row  align-items-center">
                                                    <div class="col">
                                                        <div id="m_chart_personal_income_quater_1"
                                                             class="m-widget27__chart" style="height: 160px">
                                                            <div class="m-widget27__stat"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="m-widget27__legends">
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-warning"></span>
                                                                <span class="m-widget27__legend-text">
                                                                    <span>مدفوعات: </span>
                                                                    <span>3,000$</span>
                                                                </span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                                                <span class="m-widget27__legend-text">
                                                                    <span>أرباح: </span>
                                                                    <span>5,000$</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="m_personal_income_quater_2" class="tab-pane fade">
                                                <div class="row  align-items-center">
                                                    <div class="col">
                                                        <div id="m_chart_personal_income_quater_2"
                                                             class="m-widget27__chart" style="height: 160px">
                                                            <div class="m-widget27__stat"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="m-widget27__legends">
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-warning"></span>
                                                                <span class="m-widget27__legend-text">
                                                                    <span>مدفوعات: </span>
                                                                    <span>5,000$</span>
                                                                </span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                                                <span class="m-widget27__legend-text">
                                                                    <span>أرباح: </span>
                                                                    <span>3,000$</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="m_personal_income_quater_3" class="tab-pane fade">
                                                <div class="row  align-items-center">
                                                    <div class="col">
                                                        <div id="m_chart_personal_income_quater_3"
                                                             class="m-widget27__chart" style="height: 160px">
                                                            <div class="m-widget27__stat"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="m-widget27__legends">
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-warning"></span>
                                                                <span class="m-widget27__legend-text">
                                                                    <span>مدفوعات: </span>
                                                                    <span>12,000$</span>
                                                                </span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                                                <span class="m-widget27__legend-text">
                                                                    <span>أرباح: </span>
                                                                    <span>3,000$</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="m_personal_income_quater_4" class="tab-pane fade">
                                                <div class="row  align-items-center">
                                                    <div class="col">
                                                        <div id="m_chart_personal_income_quater_4"
                                                             class="m-widget27__chart" style="height: 160px">
                                                            <div class="m-widget27__stat"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="m-widget27__legends">
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-warning"></span>
                                                                <span class="m-widget27__legend-text">
                                                                    <span>مدفوعات: </span>
                                                                    <span>5,000$</span>
                                                                </span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                                                <span class="m-widget27__legend-text">
                                                                    <span>أرباح: </span>
                                                                    <span>15,000$</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- end::Tab Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                        <h3 class="m-portlet__head-text">
                                            العقارات الأكثؤ طلبا
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="m_chart_revenue_change" class="m-widget14__chart1" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <?php include 'footer.php' ?>
</div>

<!-- end:: Page -->


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<!--end::Modal-->


<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!-- Resources -->
<script src="assets/js/core.js"></script>
<script src="assets/js/charts.js"></script>
<script src="assets/js/animated.js"></script>
<!--<script src="assets/app/js/dashboard.js"></script>-->
<!-- Chart code -->
<script>
    am4core.ready(function () {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
        var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
        chart.data = [{
            "date": "2012-07-27",
            "value": 13
        }, {
            "date": "2012-07-28",
            "value": 11
        }, {
            "date": "2012-07-29",
            "value": 15
        }, {
            "date": "2012-07-30",
            "value": 16
        }, {
            "date": "2012-07-31",
            "value": 18
        }, {
            "date": "2012-08-01",
            "value": 13
        }, {
            "date": "2012-08-02",
            "value": 22
        }, {
            "date": "2012-08-03",
            "value": 23
        }, {
            "date": "2012-08-04",
            "value": 20
        }, {
            "date": "2012-08-05",
            "value": 17
        }, {
            "date": "2012-08-06",
            "value": 16
        }, {
            "date": "2012-08-07",
            "value": 18
        }, {
            "date": "2012-08-08",
            "value": 21
        }, {
            "date": "2012-08-09",
            "value": 26
        }, {
            "date": "2012-08-10",
            "value": 24
        }, {
            "date": "2012-08-11",
            "value": 29
        }, {
            "date": "2012-08-12",
            "value": 32
        }, {
            "date": "2012-08-13",
            "value": 18
        }, {
            "date": "2012-08-14",
            "value": 24
        }, {
            "date": "2012-08-15",
            "value": 22
        }, {
            "date": "2012-08-16",
            "value": 18
        }, {
            "date": "2012-08-17",
            "value": 19
        }, {
            "date": "2012-08-18",
            "value": 14
        }, {
            "date": "2012-08-19",
            "value": 15
        }, {
            "date": "2012-08-20",
            "value": 12
        }, {
            "date": "2012-08-21",
            "value": 8
        }, {
            "date": "2012-08-22",
            "value": 9
        }, {
            "date": "2012-08-23",
            "value": 8
        }, {
            "date": "2012-08-24",
            "value": 7
        }, {
            "date": "2012-08-25",
            "value": 5
        }, {
            "date": "2012-08-26",
            "value": 11
        }, {
            "date": "2012-08-27",
            "value": 13
        }, {
            "date": "2012-08-28",
            "value": 18
        }, {
            "date": "2012-08-29",
            "value": 20
        }, {
            "date": "2012-08-30",
            "value": 29
        }, {
            "date": "2012-08-31",
            "value": 33
        }, {
            "date": "2012-09-01",
            "value": 42
        }, {
            "date": "2012-09-02",
            "value": 35
        }, {
            "date": "2012-09-03",
            "value": 31
        }, {
            "date": "2012-09-04",
            "value": 47
        }, {
            "date": "2012-09-05",
            "value": 52
        }, {
            "date": "2012-09-06",
            "value": 46
        }, {
            "date": "2012-09-07",
            "value": 41
        }, {
            "date": "2012-09-08",
            "value": 43
        }, {
            "date": "2012-09-09",
            "value": 40
        }, {
            "date": "2012-09-10",
            "value": 39
        }, {
            "date": "2012-09-11",
            "value": 34
        }, {
            "date": "2012-09-12",
            "value": 29
        }, {
            "date": "2012-09-13",
            "value": 34
        }, {
            "date": "2012-09-14",
            "value": 37
        }, {
            "date": "2012-09-15",
            "value": 42
        }, {
            "date": "2012-09-16",
            "value": 49
        }, {
            "date": "2012-09-17",
            "value": 46
        }, {
            "date": "2012-09-18",
            "value": 47
        }, {
            "date": "2012-09-19",
            "value": 55
        }, {
            "date": "2012-09-20",
            "value": 59
        }, {
            "date": "2012-09-21",
            "value": 58
        }, {
            "date": "2012-09-22",
            "value": 57
        }, {
            "date": "2012-09-23",
            "value": 61
        }, {
            "date": "2012-09-24",
            "value": 59
        }, {
            "date": "2012-09-25",
            "value": 67
        }, {
            "date": "2012-09-26",
            "value": 65
        }, {
            "date": "2012-09-27",
            "value": 61
        }, {
            "date": "2012-09-28",
            "value": 66
        }, {
            "date": "2012-09-29",
            "value": 69
        }, {
            "date": "2012-09-30",
            "value": 71
        }, {
            "date": "2012-10-01",
            "value": 67
        }, {
            "date": "2012-10-02",
            "value": 63
        }, {
            "date": "2012-10-03",
            "value": 46
        }, {
            "date": "2012-10-04",
            "value": 32
        }, {
            "date": "2012-10-05",
            "value": 21
        }, {
            "date": "2012-10-06",
            "value": 18
        }, {
            "date": "2012-10-07",
            "value": 21
        }, {
            "date": "2012-10-08",
            "value": 28
        }, {
            "date": "2012-10-09",
            "value": 27
        }, {
            "date": "2012-10-10",
            "value": 36
        }, {
            "date": "2012-10-11",
            "value": 33
        }, {
            "date": "2012-10-12",
            "value": 31
        }, {
            "date": "2012-10-13",
            "value": 30
        }, {
            "date": "2012-10-14",
            "value": 34
        }, {
            "date": "2012-10-15",
            "value": 38
        }, {
            "date": "2012-10-16",
            "value": 37
        }, {
            "date": "2012-10-17",
            "value": 44
        }, {
            "date": "2012-10-18",
            "value": 49
        }, {
            "date": "2012-10-19",
            "value": 53
        }, {
            "date": "2012-10-20",
            "value": 57
        }, {
            "date": "2012-10-21",
            "value": 60
        }, {
            "date": "2012-10-22",
            "value": 61
        }, {
            "date": "2012-10-23",
            "value": 69
        }, {
            "date": "2012-10-24",
            "value": 67
        }, {
            "date": "2012-10-25",
            "value": 72
        }, {
            "date": "2012-10-26",
            "value": 77
        }, {
            "date": "2012-10-27",
            "value": 75
        }, {
            "date": "2012-10-28",
            "value": 70
        }, {
            "date": "2012-10-29",
            "value": 72
        }, {
            "date": "2012-10-30",
            "value": 70
        }, {
            "date": "2012-10-31",
            "value": 72
        }, {
            "date": "2012-11-01",
            "value": 73
        }, {
            "date": "2012-11-02",
            "value": 67
        }, {
            "date": "2012-11-03",
            "value": 68
        }, {
            "date": "2012-11-04",
            "value": 65
        }, {
            "date": "2012-11-05",
            "value": 71
        }, {
            "date": "2012-11-06",
            "value": 75
        }, {
            "date": "2012-11-07",
            "value": 74
        }, {
            "date": "2012-11-08",
            "value": 71
        }, {
            "date": "2012-11-09",
            "value": 76
        }, {
            "date": "2012-11-10",
            "value": 77
        }, {
            "date": "2012-11-11",
            "value": 81
        }, {
            "date": "2012-11-12",
            "value": 83
        }, {
            "date": "2012-11-13",
            "value": 80
        }, {
            "date": "2012-11-14",
            "value": 81
        }, {
            "date": "2012-11-15",
            "value": 87
        }, {
            "date": "2012-11-16",
            "value": 82
        }, {
            "date": "2012-11-17",
            "value": 86
        }, {
            "date": "2012-11-18",
            "value": 80
        }, {
            "date": "2012-11-19",
            "value": 87
        }, {
            "date": "2012-11-20",
            "value": 83
        }, {
            "date": "2012-11-21",
            "value": 85
        }, {
            "date": "2012-11-22",
            "value": 84
        }, {
            "date": "2012-11-23",
            "value": 82
        }, {
            "date": "2012-11-24",
            "value": 73
        }, {
            "date": "2012-11-25",
            "value": 71
        }, {
            "date": "2012-11-26",
            "value": 75
        }, {
            "date": "2012-11-27",
            "value": 79
        }, {
            "date": "2012-11-28",
            "value": 70
        }, {
            "date": "2012-11-29",
            "value": 73
        }, {
            "date": "2012-11-30",
            "value": 61
        }, {
            "date": "2012-12-01",
            "value": 62
        }, {
            "date": "2012-12-02",
            "value": 66
        }, {
            "date": "2012-12-03",
            "value": 65
        }, {
            "date": "2012-12-04",
            "value": 73
        }, {
            "date": "2012-12-05",
            "value": 79
        }, {
            "date": "2012-12-06",
            "value": 78
        }, {
            "date": "2012-12-07",
            "value": 78
        }, {
            "date": "2012-12-08",
            "value": 78
        }, {
            "date": "2012-12-09",
            "value": 74
        }, {
            "date": "2012-12-10",
            "value": 73
        }, {
            "date": "2012-12-11",
            "value": 75
        }, {
            "date": "2012-12-12",
            "value": 70
        }, {
            "date": "2012-12-13",
            "value": 77
        }, {
            "date": "2012-12-14",
            "value": 67
        }, {
            "date": "2012-12-15",
            "value": 62
        }, {
            "date": "2012-12-16",
            "value": 64
        }, {
            "date": "2012-12-17",
            "value": 61
        }, {
            "date": "2012-12-18",
            "value": 59
        }, {
            "date": "2012-12-19",
            "value": 53
        }, {
            "date": "2012-12-20",
            "value": 54
        }, {
            "date": "2012-12-21",
            "value": 56
        }, {
            "date": "2012-12-22",
            "value": 59
        }, {
            "date": "2012-12-23",
            "value": 58
        }, {
            "date": "2012-12-24",
            "value": 55
        }, {
            "date": "2012-12-25",
            "value": 52
        }, {
            "date": "2012-12-26",
            "value": 54
        }, {
            "date": "2012-12-27",
            "value": 50
        }, {
            "date": "2012-12-28",
            "value": 50
        }, {
            "date": "2012-12-29",
            "value": 51
        }, {
            "date": "2012-12-30",
            "value": 52
        }, {
            "date": "2012-12-31",
            "value": 58
        }, {
            "date": "2013-01-01",
            "value": 60
        }, {
            "date": "2013-01-02",
            "value": 67
        }, {
            "date": "2013-01-03",
            "value": 64
        }, {
            "date": "2013-01-04",
            "value": 66
        }, {
            "date": "2013-01-05",
            "value": 60
        }, {
            "date": "2013-01-06",
            "value": 63
        }, {
            "date": "2013-01-07",
            "value": 61
        }, {
            "date": "2013-01-08",
            "value": 60
        }, {
            "date": "2013-01-09",
            "value": 65
        }, {
            "date": "2013-01-10",
            "value": 75
        }, {
            "date": "2013-01-11",
            "value": 77
        }, {
            "date": "2013-01-12",
            "value": 78
        }, {
            "date": "2013-01-13",
            "value": 70
        }, {
            "date": "2013-01-14",
            "value": 70
        }, {
            "date": "2013-01-15",
            "value": 73
        }, {
            "date": "2013-01-16",
            "value": 71
        }, {
            "date": "2013-01-17",
            "value": 74
        }, {
            "date": "2013-01-18",
            "value": 78
        }, {
            "date": "2013-01-19",
            "value": 85
        }, {
            "date": "2013-01-20",
            "value": 82
        }, {
            "date": "2013-01-21",
            "value": 83
        }, {
            "date": "2013-01-22",
            "value": 88
        }, {
            "date": "2013-01-23",
            "value": 85
        }, {
            "date": "2013-01-24",
            "value": 85
        }, {
            "date": "2013-01-25",
            "value": 80
        }, {
            "date": "2013-01-26",
            "value": 87
        }, {
            "date": "2013-01-27",
            "value": 84
        }, {
            "date": "2013-01-28",
            "value": 83
        }, {
            "date": "2013-01-29",
            "value": 84
        }, {
            "date": "2013-01-30",
            "value": 81
        }];

// Set input format for the dates
        chart.dateFormatter.inputDateFormat = "yyyy-MM-dd";

// Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.dataFields.valueY = "value";
        series.dataFields.dateX = "date";
        series.tooltipText = "{value}"
        series.strokeWidth = 2;
        series.minBulletDistance = 15;

// Drop-shaped tooltips
        series.tooltip.background.cornerRadius = 20;
        series.tooltip.background.strokeOpacity = 0;
        series.tooltip.pointerOrientation = "vertical";
        series.tooltip.label.minWidth = 40;
        series.tooltip.label.minHeight = 40;
        series.tooltip.label.textAlign = "middle";
        series.tooltip.label.textValign = "middle";

// Make bullets grow on hover
        var bullet = series.bullets.push(new am4charts.CircleBullet());
        bullet.circle.strokeWidth = 2;
        bullet.circle.radius = 4;
        bullet.circle.fill = am4core.color("#fff");

        var bullethover = bullet.states.create("hover");
        bullethover.properties.scale = 1.3;

// Make a panning cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.behavior = "panXY";
        chart.cursor.xAxis = dateAxis;
        chart.cursor.snapToSeries = series;

// Create vertical scrollbar and place it before the value axis
        chart.scrollbarY = new am4core.Scrollbar();
        chart.scrollbarY.parent = chart.leftAxesContainer;
        chart.scrollbarY.toBack();

// Create a horizontal scrollbar with previe and place it underneath the date axis
        chart.scrollbarX = new am4charts.XYChartScrollbar();
        chart.scrollbarX.series.push(series);
        chart.scrollbarX.parent = chart.bottomAxesContainer;

        chart.events.on("ready", function () {
            dateAxis.zoom({start: 0.79, end: 1});
        });

    }); // end am4core.ready()
</script>

<!--Bar chart code-->
<script>
    am4core.ready(function () {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
        var chart = am4core.create("chartdiv2", am4charts.XYChart);
        chart.scrollbarX = new am4core.Scrollbar();

// Add data
        chart.data = [{
            "country": "USA",
            "visits": 3025
        }, {
            "country": "China",
            "visits": 1882
        }, {
            "country": "Japan",
            "visits": 1809
        }, {
            "country": "Germany",
            "visits": 1322
        }, {
            "country": "UK",
            "visits": 1122
        }, {
            "country": "France",
            "visits": 1114
        }, {
            "country": "India",
            "visits": 984
        }, {
            "country": "Spain",
            "visits": 711
        }, {
            "country": "Netherlands",
            "visits": 665
        }, {
            "country": "Russia",
            "visits": 580
        }, {
            "country": "South Korea",
            "visits": 443
        }, {
            "country": "Canada",
            "visits": 441
        }];

// Create axes
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "country";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.minGridDistance = 30;
        categoryAxis.renderer.labels.template.horizontalCenter = "right";
        categoryAxis.renderer.labels.template.verticalCenter = "middle";
        categoryAxis.renderer.labels.template.rotation = 270;
        categoryAxis.tooltip.disabled = true;
        categoryAxis.renderer.minHeight = 110;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.minWidth = 50;

// Create series
        var series = chart.series.push(new am4charts.ColumnSeries());
        series.sequencedInterpolation = true;
        series.dataFields.valueY = "visits";
        series.dataFields.categoryX = "country";
        series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
        series.columns.template.strokeWidth = 0;

        series.tooltip.pointerOrientation = "vertical";

        series.columns.template.column.cornerRadiusTopLeft = 10;
        series.columns.template.column.cornerRadiusTopRight = 10;
        series.columns.template.column.fillOpacity = 0.8;

// on hover, make corner radiuses bigger
        var hoverState = series.columns.template.column.states.create("hover");
        hoverState.properties.cornerRadiusTopLeft = 0;
        hoverState.properties.cornerRadiusTopRight = 0;
        hoverState.properties.fillOpacity = 1;

        series.columns.template.adapter.add("fill", function (fill, target) {
            return chart.colors.getIndex(target.dataItem.index);
        });

// Cursor
        chart.cursor = new am4charts.XYCursor();

    }); // end am4core.ready()
</script>

<!-- income quater Chart -->
<script>
    jQuery(document).ready(function () {

        var e = function () {
            if (0 != $("#m_chart_personal_income_quater_1").length) {
                var e = new Chartist.Pie("#m_chart_personal_income_quater_1", {
                    series: [
                        {value: 40, className: "custom", meta: {color: mApp.getColor("warning")}},
                        {
                            value: 50, className: "custom", meta: {color: mApp.getColor("brand")}
                        }], labels: [1, 2]
                }, {donut: !0, donutWidth: 17, showLabel: !1});
                e.on("draw", function (e) {
                    if ("slice" === e.type) {
                        var t = e.element._node.getTotalLength();
                        e.element.attr({"stroke-dasharray": t + "px " + t + "px"});
                        var a = {
                            "stroke-dashoffset": {
                                id: "anim" + e.index,
                                dur: 1e3,
                                from: -t + "px",
                                to: "0px",
                                easing: Chartist.Svg.Easing.easeOutQuint,
                                fill: "freeze",
                                stroke: e.meta.color
                            }
                        };
                        0 !== e.index && (a["stroke-dashoffset"].begin = "anim" + (e.index - 1) + ".end"), e.element.attr({
                            "stroke-dashoffset": -t + "px",
                            stroke: e.meta.color
                        }), e.element.animate(a, !1)
                    }
                }), e.on("created", function () {
                    window.__anim21278907124 && (clearTimeout(window.__anim21278907124), window.__anim21278907124 = null), window.__anim21278907124 = setTimeout(e.update.bind(e), 15e3)
                })
            }
        };
        e(), $(document).find('a[data-toggle="pill"]').on("shown.bs.tab", function (t) {
            switch ($(t.target).attr("href")) {
                case"#m_personal_income_quater_1":
                    e();
                    break;
                case"#m_personal_income_quater_2":
                    !function () {
                        if (0 != $("#m_chart_personal_income_quater_2").length) {
                            var e = new Chartist.Pie("#m_chart_personal_income_quater_2", {
                                series: [
                                    {value: 50, className: "custom", meta: {color: mApp.getColor("warning")}},
                                    {
                                        value: 40, className: "custom", meta: {color: mApp.getColor("brand")}
                                    }],
                                labels: [1, 2]
                            }, {donut: !0, donutWidth: 17, showLabel: !1});
                            e.on("draw", function (e) {
                                if ("slice" === e.type) {
                                    var t = e.element._node.getTotalLength();
                                    e.element.attr({"stroke-dasharray": t + "px " + t + "px"});
                                    var a = {
                                        "stroke-dashoffset": {
                                            id: "anim" + e.index,
                                            dur: 1e3,
                                            from: -t + "px",
                                            to: "0px",
                                            easing: Chartist.Svg.Easing.easeOutQuint,
                                            fill: "freeze",
                                            stroke: e.meta.color
                                        }
                                    };
                                    0 !== e.index && (a["stroke-dashoffset"].begin = "anim" + (e.index - 1) + ".end"), e.element.attr({
                                        "stroke-dashoffset": -t + "px",
                                        stroke: e.meta.color
                                    }), e.element.animate(a, !1)
                                }
                            }), e.on("created", function () {
                                window.__anim212789071241111 && (clearTimeout(window.__anim212789071241111), window.__anim212789071241111 = null), window.__anim212789071241111 = setTimeout(e.update.bind(e), 15e3)
                            })
                        }
                    }();
                    break;
                case"#m_personal_income_quater_3":
                    !function () {
                        if (0 != $("#m_chart_personal_income_quater_3").length) {
                            var e = new Chartist.Pie("#m_chart_personal_income_quater_3", {
                                series: [
                                    {value: 80, className: "custom", meta: {color: mApp.getColor("warning")}},
                                    {
                                        value: 20, className: "custom", meta: {color: mApp.getColor("brand")}
                                    }], labels: [1, 2]
                            }, {donut: !0, donutWidth: 17, showLabel: !1});
                            e.on("draw", function (e) {
                                if ("slice" === e.type) {
                                    var t = e.element._node.getTotalLength();
                                    e.element.attr({"stroke-dasharray": t + "px " + t + "px"});
                                    var a = {
                                        "stroke-dashoffset": {
                                            id: "anim" + e.index,
                                            dur: 1e3,
                                            from: -t + "px",
                                            to: "0px",
                                            easing: Chartist.Svg.Easing.easeOutQuint,
                                            fill: "freeze",
                                            stroke: e.meta.color
                                        }
                                    };
                                    0 !== e.index && (a["stroke-dashoffset"].begin = "anim" + (e.index - 1) + ".end"), e.element.attr({
                                        "stroke-dashoffset": -t + "px",
                                        stroke: e.meta.color
                                    }), e.element.animate(a, !1)
                                }
                            }), e.on("created", function () {
                                window.__anim212789071241111 && (clearTimeout(window.__anim212789071241111), window.__anim212789071241111 = null), window.__anim212789071241111 = setTimeout(e.update.bind(e), 15e3)
                            })
                        }
                    }();
                    break;
                case"#m_personal_income_quater_4":
                    !function () {
                        if (0 != $("#m_chart_personal_income_quater_4").length) {
                            var e = new Chartist.Pie("#m_chart_personal_income_quater_4", {
                                series: [
                                    {value: 30, className: "custom", meta: {color: mApp.getColor("warning")}},
                                    {
                                        value: 70, className: "custom", meta: {color: mApp.getColor("brand")}
                                    }], labels: [1, 2]
                            }, {donut: !0, donutWidth: 17, showLabel: !1});
                            e.on("draw", function (e) {
                                if ("slice" === e.type) {
                                    var t = e.element._node.getTotalLength();
                                    e.element.attr({"stroke-dasharray": t + "px " + t + "px"});
                                    var a = {
                                        "stroke-dashoffset": {
                                            id: "anim" + e.index,
                                            dur: 1e3,
                                            from: -t + "px",
                                            to: "0px",
                                            easing: Chartist.Svg.Easing.easeOutQuint,
                                            fill: "freeze",
                                            stroke: e.meta.color
                                        }
                                    };
                                    0 !== e.index && (a["stroke-dashoffset"].begin = "anim" + (e.index - 1) + ".end"), e.element.attr({
                                        "stroke-dashoffset": -t + "px",
                                        stroke: e.meta.color
                                    }), e.element.animate(a, !1)
                                }
                            }), e.on("created", function () {
                                window.__anim212789071241111 && (clearTimeout(window.__anim212789071241111), window.__anim212789071241111 = null), window.__anim212789071241111 = setTimeout(e.update.bind(e), 15e3)
                            })
                        }
                    }()
            }
        });
        $("#m_chart_revenue_change").length && Morris.Donut({
            element: "m_chart_revenue_change",
            data: [{label: "شقق", value: 1000}, {label: "شاليهات", value: 1500}, {label: "فلل", value: 1300}],
            colors: [mApp.getColor("accent"), mApp.getColor("danger"), mApp.getColor("brand")]
        });

    });
</script>
<script>


</script>
</body>

<!-- end::Body -->
</html>
