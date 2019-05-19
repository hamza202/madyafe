<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>مضيافي | المستخدمين</title>
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
                            <a href="index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/images/inline-logo-wight.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools justify-content">

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
        <div class="m-grid__item m-grid__item--fluid m-wrapper my-profile">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">تفاصيل الحجز</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">
                                <div class="profile-btn-option">
                                    <a href="#"
                                       data-toggle="modal" data-target="#m_daterangepicker_modal"
                                       class="btn btn-primary m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="la la-calendar-o"></i>
                                        <span>تعديل التاريخ</span>
                                    </span>
                                    </a>
                                </div>
                                <div class="m-portlet__body-separator"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <form class="m-form m-form--fit m-form--label-align-right">
                                        <div class="m-portlet__body">
                                            <div class="form-group m-form__group m--margin-top-10 m--hide">
                                                <div class="alert m-alert m-alert--default" role="alert">
                                                    The example form below demonstrates common HTML form elements that
                                                    receive updated styles from Bootstrap with additional classes.
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="u-name" class="col-3 col-form-label">اسم المستخدم</label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" id="u-name" type="text"
                                                           value="حمزة ابو عيطة" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="name" class="col-3 col-form-label">اسم مزود الخدمة</label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" id="name" type="text"
                                                           value="حمزة ابو عيطة" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="type" class="col-3 col-form-label">نوع الحجز</label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" id="type" type="text"
                                                           value="حمزة ابو عيطة" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="type2"
                                                       class="col-3 col-form-label">نوع العقار</label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" id="type2" type="text"
                                                           value="نوع العقار" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="code"
                                                       class="col-3 col-form-label">كود الحجز</label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" id="code" type="text"
                                                           value="9898565684" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="state"
                                                       class="col-3 col-form-label">الحالة</label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" id="state" type="text"
                                                           value="متاح" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="price"
                                                       class="col-3 col-form-label">المبلغ</label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" id="price" type="text"
                                                           value="50$" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="price"
                                                       class="col-3 col-form-label">طريقة الدفع</label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" id="price" type="text"
                                                           value="visa" disabled>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
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


<div class="modal fade" id="m_daterangepicker_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">تعديل التاريخ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-remove"></span>
                </button>
            </div>
            <form class="m-form m-form--fit m-form--label-align-right">
                <div class="modal-body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">تعديل التاريخ</label>
                        <div class=" col-md-9 col-sm-12">
                            <div class='input-group' id='m_daterangepicker_2'>
                                <input type='text' class="form-control m-input" readonly
                                       placeholder="2019-05-01 / 2019-05-15"/>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-brand m-btn" data-dismiss="modal">اغلاق</button>
                    <button type="button" class="btn btn-secondary m-btn">تأكيد</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->


</body>

<!-- end::Body -->
</html>