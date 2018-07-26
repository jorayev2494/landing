@if (isset($menus))    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            @foreach ($menus as $menu)                
                @if ($menu->active == true)
                    <li class="active cl-effect-7"><a href="{{ $menu->link }}">{{ $menu->name }}</a></li>
                @endif                
            @endforeach    
        </ul>
    </div>
    <!-- //Navbar-collapse -->
@endif
        



