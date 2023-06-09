<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/assets/img/favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/assets/img/favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/img/favicons/favicon-16x16.png') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicons/favicon.ico') }}">
<link rel="manifest" href="{{ asset('admin/assets/img/favicons/manifest.json') }}">
<meta name="msapplication-TileImage" content="{{ asset('admin/assets/img/favicons/mstile-150x150.png') }}">
<meta name="theme-color" content="#ffffff">
<script src="{{ asset('admin/assets/js/config.js') }}"></script>
<script src="{{ asset('admin/vendors/simplebar/simplebar.min.js') }}"></script>

<!-- ===============================================-->
<!--    Stylesheets-->
<!-- ===============================================-->
<link rel="preconnect" href="{{ asset('admin/fonts.gstatic.com/index.html') }}">
<link href="{{ asset('admin/fonts.googleapis.com/css4e0a.css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap') }}" rel="stylesheet">
<link href="{{ asset('admin/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
<link href="{{ asset('admin/assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
<link href="{{ asset('admin/assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
<link href="{{ asset('admin/assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">

@if (request()->is('admin/course-create'))
<link href="{{ asset('admin/vendors/dropzone/dropzone.min.css') }}" rel="stylesheet" id="user-style-default">
<link href="{{ asset('admin/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" id="user-style-default">
@endif
<link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet" id="user-style-default">

@if (request()->is('admin/courses-list') || request()->is('admin/categories-list') )
<link href="{{ asset('admin/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">

@endif



<script>
  var isRTL = JSON.parse(localStorage.getItem('isRTL'));
  if (isRTL) {
    var linkDefault = document.getElementById('style-default');
    var userLinkDefault = document.getElementById('user-style-default');
    linkDefault.setAttribute('disabled', true);
    userLinkDefault.setAttribute('disabled', true);
    document.querySelector('html').setAttribute('dir', 'rtl');
  } else {
    var linkRTL = document.getElementById('style-rtl');
    var userLinkRTL = document.getElementById('user-style-rtl');
    linkRTL.setAttribute('disabled', true);
    userLinkRTL.setAttribute('disabled', true);
  }
</script>
