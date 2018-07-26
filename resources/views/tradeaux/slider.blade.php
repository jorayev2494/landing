
@if ($sliders)
    
    <ul class="rslides" id="slider">
        @foreach ($sliders as $slider)
            
            @if ($slider->active)
                <li>
                    <img src="{{ asset(env('THEME')) }}/images/{{ $slider->img }}" alt="Tradeaux">
                    <div class="caption">
                        <h3>{!! $slider->text !!}</h3>
                        <p>Leading the Logistics Industry since 1874</p>
                    </div>
                </li>
            @endif
            
        @endforeach
    </ul>    
@endif
