
<div class="bloc_telechargement">
    <h1>Mes Téléchargements</h1>

    <div class="swiper-container">
        @foreach ($data as $dat )
        <x-customer.douwnload-bloc-item />
            
        @endforeach


    </div>
</div>