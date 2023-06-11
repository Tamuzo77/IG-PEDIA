@if (Session::has('success'))
    <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
        <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span></div>
        <p class="mb-0 flex-1">{{ session('success') }}</p><button class="btn-close" type="button"
            data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('error') || Session::has('danger'))
<div class="alert alert-danger border-2 d-flex align-items-center" role="alert">
    <div class="bg-danger me-3 icon-item"><span class="fas fa-times-circle text-white fs-3"></span></div>
    <p class="mb-0 flex-1">{{ session('error') }}</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if (Session::has('warning'))
<div class="alert alert-warning border-2 d-flex align-items-center" role="alert">
    <div class="bg-warning me-3 icon-item"><span class="fas fa-exclamation-circle text-white fs-3"></span></div>
    <p class="mb-0 flex-1">{{ session('warning') }}</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if (Session::has('info'))
<div class="alert alert-info border-2 d-flex align-items-center" role="alert">
    <div class="bg-info me-3 icon-item"><span class="fas fa-info-circle text-white fs-3"></span></div>
    <p class="mb-0 flex-1">{{ session('info') }}</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif



