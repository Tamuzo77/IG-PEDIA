<script src="{{ asset('admin/vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('admin/vendors/is/is.min.js') }}"></script>
<script src="{{ asset('admin/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('admin/vendors/lodash/lodash.min.js') }}"></script>
<script src="{{ asset('admin/polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
<script src="{{ asset('admin/vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/theme.js') }}"></script>

@if (request()->is('admin/dashboard'))
<script src="{{ asset('admin/vendors/chart/chart.min.js') }}"></script>
<script src="{{ asset('admin/vendors/countup/countUp.umd.js') }}"></script>
<script src="{{ asset('admin/vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('admin/assets/data/world.js') }}"></script>
<script src="{{ asset('admin/vendors/d3/d3.min.js') }}"></script>
@endif




@if (request()->is('admin/create-course') || request()->is('admin/create-category'))
<script src="{{ asset('admin/vendors/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>
<script src="{{ asset('admin/vendors/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('admin/polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
<script src="{{ asset('admin/assets/js/flatpickr.js') }}"></script>
@endif



@if (request()->is('admin/courses-list') || request()->is('admin/categories-list') )
<script src="{{ asset('admin/vendors/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('admin/vendors/glightbox/glightbox.min.js') }}"></script>

@endif
