@props(['title', 'toggled', 'num'])
<div class="container_category {{ $num ?? '' }}">
    <h5 class="title_category main_title">
        <a  {{ $attributes(['class' => '', 'href'=>'']) }}>{{ ucwords($title  ?? ' Attribut titre Oublié') }}</a>

@if ($toggled ?? false)
            <div class="menu_deroulant_div">
                <i class="fa-sharp fa-solid fa-chevron-left deroulant1"></i>
                <i class="fa-sharp fa-solid fa-chevron-left deroulant2"></i>
            </div>    
    </h5>
            {{$slot}}

@endif


</div>
       



