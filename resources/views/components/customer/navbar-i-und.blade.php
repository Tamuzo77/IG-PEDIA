@props(['title'])
<div class="container_under_category">
    <h5 class="title_category">
        <a  {{ $attributes(['class' => '', 'href'=>'']) }}>{{ ucwords($title ?? ' Attribut titre Oublié')  }}</a>

    </h5>
</div>