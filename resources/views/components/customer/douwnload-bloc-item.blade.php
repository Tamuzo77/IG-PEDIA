@props(['title', 'author','img','rate', 'vues'])
<a href="" class="block_video">
    <div class="vidéo">
        <img src="{{ asset($img ?? 'storage/images/Designer-pana.png')  }}" alt="" />
    </div>
    <div class="title_author">
        <div class="title_vidéo">{{ $title ?? 'Title' }}</div>
        <div class="author">{{ $author ?? 'Author' }}</div>
    </div>
    <div class="rateUs_vues">
        <div class="stars">
            <div>{{ $rate ?? 4.5 }}</div>
            <i class="fa-solid fa-star"></i>
        </div>
        <div class="vues">({{ $vues ?? 2056400 }})</div>
    </div>
</a>