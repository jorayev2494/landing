@if (isset($galleries))
    <div class="gallery slideanim" id="gallery">
        <h3>Gallery</h3>
        <div class="gallery-cursual">

            <!-- Screen-Gallery-Carousel -->            
            <div id="owl-demo" class="owl-carousel text-center">
                @foreach ($galleries as $gallery)
                
                    @if ($gallery->active)
                        <div class="item">
                            <img class="lazyOwl" src="{{ asset(env('THEME')) }}/images/{{ $gallery->img }}" alt="{{ $gallery->img }}">
                        </div>
                    @endif
                        
                @endforeach
            </div>            
            <!-- //Screen-Gallery-Carousel -->
            
        </div>
    </div>
@endif
