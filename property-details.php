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
            <!-- END: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">تفاصيل العقار</h3>
                    </div>
                </div>
            </div>
            <div class="m-content pb-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">
                                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--2x m-tabs-line--success"
                                    role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1"
                                           role="tab">البيانات الأساسية</a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2"
                                           role="tab">المرافق</a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3"
                                           role="tab">الخدمات</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
                    <div class="m-content pt-0">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="m-portlet m-portlet--full-height  ">
                                    <div class="m-portlet__body">
                                        <div class="m-card-profile">
                                            <div class="m-card-profile__pic">
                                                <div class="m-card-profile__pic-wrapper mt-0">
                                                    <img src="assets/images/a.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-btn-option">
                                            <a href="#" data-toggle="modal" data-target="#m_modal_5"
                                               class="btn btn-success m-btn m-btn--custom m-btn--icon d-block text-center ">
                                                <span class="m-auto">
                                                    <i class="la la-check"></i>
                                                    <span>تفعيل </span>
                                                </span>
                                            </a>
                                            <a href="#m_modal_5" data-toggle="modal" data-target="#m_modal_5"
                                               class="btn btn-warning  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                                <span class="m-auto">
                                                    <i class="la la-power-off"></i>
                                                    <span>تعطيل </span>
                                                </span>
                                            </a>
                                            <a href="#m_modal_5" data-toggle="modal" data-target="#m_modal_5"
                                               class="btn btn-accent  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                                <span class="m-auto">
                                                    <i class="la la-check-square"></i>
                                                    <span>تمكين الحجز </span>
                                                </span>
                                            </a>
                                            <a href="#m_modal_5" data-toggle="modal" data-target="#m_modal_5"
                                               class="btn btn-danger  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                                <span class="m-auto">
                                                    <i class="la la-times-circle-o"></i>
                                                    <span>ايقاف الحجز </span>
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
                                                    <div class="form-group m-form__group row">
                                                        <div class="col-12 ">
                                                            <h3 class="m-form__section">بيانات العقار الأساسية</h3>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-lg-6">
                                                            <div class="form-group m-form__group mb-4">
                                                                <label>نوع العقار:</label>
                                                                <input disabled type="text"
                                                                       class="form-control m-input m-input--square"
                                                                       value="نوع العقار">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group m-form__group mb-4">
                                                                <label>المدينة:</label>
                                                                <input disabled type="text"
                                                                       class="form-control m-input m-input--square"
                                                                       value="المدينة">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-lg-6">
                                                            <div class="form-group m-form__group mb-4">
                                                                <label>تاريخ انشاء العقار:</label>
                                                                <input disabled type="text"
                                                                       class="form-control m-input m-input--square"
                                                                       value="تاريخ انشاء العقار">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group m-form__group mb-4">
                                                                <label>رقم الترخيص:</label>
                                                                <input disabled type="text"
                                                                       class="form-control m-input m-input--square"
                                                                       value="رقم الترخيص">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-lg-6">
                                                            <div class="form-group m-form__group mb-4">
                                                                <label>امكانية الحجز:</label>
                                                                <input disabled type="text"
                                                                       class="form-control m-input m-input--square"
                                                                       value="متاح للحجز">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group m-form__group mb-4">
                                                                <label>الحالة:</label>
                                                                <input disabled type="text"
                                                                       class="form-control m-input m-input--square"
                                                                       value="مفعل">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="m-widget4 ">
                                                                <div class="m-widget4__item pl-5 pr-5 bg-light">
                                                                    <div class="m-widget4__img m-widget4__img--icon">
                                                                        <img src="assets/app/media/img/files/pdf.svg"
                                                                             alt="">
                                                                    </div>
                                                                    <div class="m-widget4__info">
                                                                        <span class="m-widget4__text">
                                                                            مستند التأكيد
                                                                        </span>
                                                                    </div>
                                                                    <div class="m-widget4__ext">
                                                                        <a href="#" class="m-widget4__icon">
                                                                            <i class="la la-download"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-lg-12">
                                                            <div class="form-group m-form__group mt-4">
                                                                <label>شروط المؤجر:</label>
                                                                <textarea disabled type="text" rows="5"
                                                                          class="form-control m-input m-input--square"
                                                                >هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-lg-12">
                                                            <div class="form-group m-form__group mt-4">
                                                                <label>التفاصيل:</label>
                                                                <textarea disabled type="text" rows="5"
                                                                          class="form-control m-input m-input--square"
                                                                >هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group ">
                                                        <div id="map" style="width:100%; height: 350px"></div>
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
                <div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more
                    recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.
                </div>
                <div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged
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

<!--begin::Modal-->
<div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تفعيل الحساب</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    هل انت متأكد من تفعيل هذا الحساب؟
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="button" class="btn btn-success">تأكيد</button>
            </div>
        </div>
    </div>
</div>

<!--end::Modal-->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->


<!--begin::Page Scripts -->
<script>

    function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwQWgqTGypi82vAyP97l2O5Zi_RBiVA5E&callback=initMap">
</script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>