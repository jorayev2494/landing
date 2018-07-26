
@if ($services)
    <div class="area" id="services">
        <h1>Services</h1>
        <div class="container">
            <div class="area1">
                
                @foreach ($services as $service)
                
                    @if ($service->active == true)
                        <div class="col-md-4 col-sm-4 air slideanim">
                            <div class="area-image">
                                <img src="{{ asset(env('THEME')) }}/images/{{ $service->img }}" alt="Tradeaux">
                            </div>
                            <div class="area-info">
                                <h4>{{ $service->name }}</h4>
                                <p>{{ $service->text }}</p>
                            </div>
                        </div>
                    @endif

                @endforeach
    
                <div class="clearfix"></div>
            </div>
        </div>
    </div>    
            
@endif
