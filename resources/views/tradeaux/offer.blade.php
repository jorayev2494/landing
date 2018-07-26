@if (isset($offers))
    <div class="container">
        <h3>We Offer</h3>
        <p>Best in the class Logistic Services</p>
        <div class="offer-grid">
            
            @foreach ($offers as $offer)                
                @if ($offer->active)
                    <div class="col-md-6 col-sm-6 offer1 slideanim">
                        <div class="offer-icon">
                            <img src="{{ asset(env('THEME')) }}/images/{{ $offer->img }}" alt="Tradeaux">
                        </div>
                        <div class="offer-info">
                            <h4>{{ $offer->name }}</h4>
                            <p>{{ str_limit($offer->text, 50 + 50 + 40) }}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endif                
            @endforeach            

            <div class="clearfix"></div>
        </div>
    </div>
@endif