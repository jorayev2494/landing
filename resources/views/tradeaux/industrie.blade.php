@if (isset($industries))
    <div class="cover" id="cover">
        <div class="container">
            <h3>Industries Covered</h3>
            <p>We ship everything!</p>

            <div class="cover-grid">

                @foreach ($industries as $industrie => $data)

                    @if (isset($data->active))
                        <div class="col-md-4 cover-{{ ($industrie > 3) ? 'top' : 'bottom' }}-grid slideanim">
                            <div class="column-wrap clearfix">
                                <div class="column">
                                    <a class="caption caption-3" href="{{ $data->link }}" data-title="{{ $data->title }}" data-description="{{ $data->desc }}">
                                        <img src="{{ asset(env('THEME')) }}/images/{{ $data->img }}" alt="Tradeaux">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                @endforeach

                <div class="clearfix"></div>
            </div>
            
        </div>
    </div>
@endif
