<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>مضيافي | تفاصيل الشكوى</title>
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
                        <h3 class="m-subheader__title ">تفاصيل الشكوى</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-12">
                        <!--begin::Portlet-->
                        <div class="m-portlet">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="fas fa-user-edit"></i>
												</span>
                                        <h3 class="m-portlet__head-text">
                                            عنوان الشكوى
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <h3 class="m-portlet__head-text text-primary">
                                        #320
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="row mb-3">
                                    <div class="col-7">
                                        <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon d-inline-block">
													<i class="fas fa-user text-light2"></i>
												</span>
                                            <h6 class="m-portlet__head-text d-inline-block ml-1">
                                                حمزة ابو عيطة
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="m-portlet__head-title text-right">
												<span class="m-portlet__head-icon d-inline-block">
													<i class="fas fa-calendar-alt text-light2"></i>
												</span>
                                            <h6 class="m-portlet__head-text d-inline-block ml-1">
                                                2019/05/24
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                </p>
                            </div>
                        </div>

                        <!--end::Portlet-->

                        <div class="m-portlet">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-chat-1"></i>
												</span>
                                        <h3 class="m-portlet__head-text">
                                            المحادثة
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-scrollable" data-scrollable="true" data-height="280"
                                     data-scrollbar-shown="true">
                                    <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
                                        <div class="m-messenger__messages m-scrollable m-scroller ps ps--active-y">
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--in">
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img/users/user4.jpg" alt="">
                                                    </div>
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                </div>
                                                                <div class="col-5 ">
                                                                    <div class="text-right m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Hi Bob. What time will be the meeting ?
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--out">
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-5 ">
                                                                    <div class=" m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="m-messenger__message-username text-right">
                                                                        مدير النظام
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Hi Hamza. It's at 2.30PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--in">
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img/users/user4.jpg" alt="">
                                                    </div>
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                </div>
                                                                <div class="col-5 ">
                                                                    <div class="text-right m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Will the development team be joining ?
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--out">
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-5 ">
                                                                    <div class=" m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="m-messenger__message-username text-right">
                                                                        مدير النظام
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Yes sure. I invited them as well
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--in">
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img/users/user4.jpg" alt="">
                                                    </div>
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                </div>
                                                                <div class="col-5 ">
                                                                    <div class="text-right m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Noted. For the Coca-Cola Mobile App project as
                                                                well ?
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--out">
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-5 ">
                                                                    <div class=" m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="m-messenger__message-username text-right">
                                                                        مدير النظام
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Yes, sure.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--out">
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-5 ">
                                                                    <div class=" m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="m-messenger__message-username text-right">
                                                                        مدير النظام
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Please also prepare the quotation for the Loop
                                                                CRM project as well.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--in">
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img/users/user4.jpg" alt="">
                                                    </div>
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 ">
                                                                    <div class="text-right m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Noted. I will prepare it.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--out">
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-5 ">
                                                                    <div class=" m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="m-messenger__message-username text-right">
                                                                        مدير النظام
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Thanks Megan. I will see you later.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-messenger__wrapper">
                                                <div class="m-messenger__message m-messenger__message--in">
                                                    <div class="m-messenger__message-pic px-0">
                                                        <img src="assets/app/media/img//users/user4.jpg" alt="">
                                                    </div>
                                                    <div class="m-messenger__message-body">
                                                        <div class="m-messenger__message-arrow"></div>
                                                        <div class="m-messenger__message-content">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 ">
                                                                    <div class="text-right m-messenger__message-username">
                                                                        منذ دقيقة
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-text">
                                                                Sure. See you in the meeting soon.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="m-portlet__foot">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 m--valign-middle">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="اكتب رد...">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i></button>
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
<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">اضافة للمميز</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    هل انت متأكد من اضافة هذا الحساب للحسابات المميزة؟
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="button" class="btn btn-success">تأكيد</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">حذف الحساب</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    هل انت متأكد من حذف هذا الحساب؟
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="button" class="btn btn-danger">تأكيد</button>
            </div>
        </div>
    </div>
</div>

<!--end::Modal-->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->
<script>
    $(document).ready(function () {
        $('.m-scrollable').animate({scrollTop: document.body.scrollHeight}, 1);
    });
</script>

</body>

<!-- end::Body -->
</html>
