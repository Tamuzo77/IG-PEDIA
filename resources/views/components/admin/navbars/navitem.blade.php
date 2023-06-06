@props(['separator', 'icon', 'title', 'toggled'])
<li class="nav-item">
    <!-- label-->
    @if($separator ?? false)
        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">{{ $separator}}</div>
            <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider" />
            </div>
        </div>
    @endif
    <!-- parent pages-->
        @if ($toggled ?? false)
            @php
                $st = strtolower($title ?? 'title');
            @endphp
            <a {{ $attributes(['class' =>'nav-link dropdown-indicator', 'href' => "#$st", 'role'=>'button', 'data-bs-toggle' =>'collapse', 'aria-expanded' =>'false', 'aria-controls'=>$st ]) }} >
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-{{ $icon ?? '' }}"></span></span><span class="nav-link-text ps-1">{{ $title ?? 'Title not found' }}</span></div>
            </a>
            <ul class="nav collapse" id="{{ $st }}">
                <li class="nav-item">
                    {{$slot}}<!-- more inner pages-->
                </li>
            </ul>
            @else
            <a {{ $attributes(['class' => 'nav-link', 'href'=>'', 'role'=>'button']) }} >
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-{{ $icon ?? '' }}"></span></span><span class="nav-link-text ps-1">{{ $title ?? 'Title not found' }}</span></div>
            </a>
        @endif
   
</li>