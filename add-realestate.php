<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>مضيافي | اضافة عقار</title>
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
    <link rel="stylesheet" href="assets/css/fileinput.css">
    <link rel="stylesheet" href="assets/css/fileinput-rtl.css">
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
                        <h3 class="m-subheader__title ">عقارات</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <!--begin:: Widgets/Support Tickets -->
                <div class="m-portlet m-portlet--full-height user-message">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    اضافة عقار
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="m-portlet__body">
                        <form action="#" id="add_realEstate_form">
                            <h5 class="m-form__heading-title">
                                <span class="text-primary">1-</span>
                                معلومات العقار
                            </h5>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <label class="fw-500">
                                        صورة العقار الرئيسية:
                                    </label>
                                    <div class="file-loading">
                                        <input id="file-senile" name="file-senile" type="file" data-browse-on-zone-click="true" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="fw-500 d-block mt-4">
                                        صور اخرى للعقار:
                                    </label>
                                    <div class="file-loading">
                                        <input id="file-multiple" name="file-multiple" type="file" data-browse-on-zone-click="true" multiple required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-500 d-block ">
                                            الإسم:
                                        </label>
                                        <input type="text" name="name" class="form-control" placeholder="الأسم" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-500 d-block">
                                            التصنيف:
                                        </label>
                                        <select type="text" name="category_select" class="form-control" required>
                                            <option value="">
                                                اختر تصنيف العقار
                                            </option>
                                            <option value="1">
                                                1
                                            </option>
                                            <option value="2">
                                                2
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-500 d-block">
                                            حالة الحجز:
                                        </label>
                                        <select type="text" class="form-control" required>
                                            <option value="">
                                                اختر حالة الحجز
                                            </option>
                                            <option value="1">
                                                1
                                            </option>
                                            <option value="2">
                                                2
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-500 d-block">
                                            الموقع:
                                        </label>
                                        <a href="#mapmodal" class="btn btn-primary d-block w-100" data-toggle="modal" data-target="#mapmodal">
                                            اختر الموقع على الخريطة
                                            <i class="fas fa-map-marker-alt"></i>
                                        </a>
                                        <input value="" class="map-lng" name="lng" required id="lng" type="hidden">
                                        <input value="" hidden name="lat" id="lat" type="hidden">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success"  id="submit_real_form" type="submit">
                                حفظ
                            </button>
                        </form>
                    </div>
                </div>

                <!--end:: Widgets/Support Tickets -->
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
<div class="modal fade" id="mapmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map_1"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button id="save1" type="button" class="btn btn-primary" data-dismiss="modal">حفظ</button>
            </div>
        </div>
    </div>
</div>
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script src="assets/js/fileinput.min.js"></script>
<script src="assets/js/locales/ar.js"></script>
<script src="assets/js/fas/theme.js" type="text/javascript"></script>
<script src="assets/js/explorer-fas/theme.js" type="text/javascript"></script>
<script>
    $('#file-senile').fileinput({
        theme: 'fas',
        rtl:true,
        // showCaption: false,
        // dropZoneEnabled: false,
        dropZoneTitle:'صورة العقار الرئيسية',
        dropZoneClickTitle:'',
        showUpload: false,
        language: 'ar',
        overwriteInitial: false,
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png','jpeg']
    });
    $('#file-multiple').fileinput({
        theme: 'fas',
        rtl:true,
        // showCaption: false,
        // dropZoneEnabled: false,
        dropZoneTitle:'صور اخرى للعقار',
        dropZoneClickTitle:'',
        showUpload: false,
        language: 'ar',
        overwriteInitial: false,
        // maxFileSize: 4000,
        maxFilesNum: 10,
        maxFileCount: 10,
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png','jpeg']
    });
//    validation
    $("#add_realEstate_form").validate({
            ignore: "",

        });
</script>

<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(31.511153667989184, 34.93505459124765),
            zoom: 7,
        };
        var map = new google.maps.Map(document.getElementById("map_1"), mapProp);

        google.maps.event.addListener(map, 'click', function (event) {
            var lang = event.latLng.lng();
            var lat = event.latLng.lat();
            $("#lng").val(lang);
            document.getElementById("lat").value = lat;

        });

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                    icon: 'assets/images/marker.png'
                });
                google.maps.event.addListener(map, 'click', function (event) {
                    marker.setPosition(event.latLng);
                    console.log(document.getElementById("lng").value);
                    console.log(document.getElementById("lat").value);
                });
            });
        }
    }
    $("#save1").on("click", function () {
        $('#submit_real_form').click()
    });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwQWgqTGypi82vAyP97l2O5Zi_RBiVA5E&amp;callback=myMap"></script>

</body>

<!-- end::Body -->
</html>