@if(isset($footerMenus))
<div class="footer">
    <div class="container">

        <div class="footer-info slideanim">
            <div class="col-md-3 footer-info-grid links">
                <h4>QUICK LINKS</h4>
                <ul>
                    @foreach ($footerMenus as $footerMenu)
                        @if ($footerMenu->active && $footerMenu->name !== "About" && $footerMenu->name !== "Gallery")
                            <li>
                                <a href="{{ $footerMenu->link }}">{{ $footerMenu->name }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 footer-info-grid services">
                <h4>INDUSTRIES</h4>
                <ul>
                    <li>Logistics</li>
                    <li>Aviation</li>
                    <li>Transport</li>
                    <li>Consultancy</li>
                    <li>Shipping</li>
                </ul>
            </div>
            <div class="col-md-3 footer-info-grid address">
                <h4>ADDRESS</h4>
                <address>
                    <ul>
                        <li>{{ env("ADMIN_ADDRESS") }}</li>
                        <li>{{ env("ADMIN_ULTS") }}</li>
                        <li>Telephone : {{ env("ADMIN_PHONE") }}</li>
                        <li>Email : <a class="mail" href="mailto:{{ env('ADMIN_EMAIL') }}">info(at)tradeaux.loc</a></li>
                    </ul>
                </address>
            </div>
            <!--div class="col-md-3 footer-info-grid email">
                <h4>NEWSLETTER</h4>
                <p>
                    Subscribe to our newsletter and we will 
                    inform you about newest projects and promotions.
                </p>

                <form class="newsletter">
                    <input class="email" type="email" placeholder="Your email...">
                    <input type="submit" class="submit" value="">
                </form >
            </div-->
            <div class="clearfix"></div>
        </div>

        <div class="social-icons">
            <ul class="social slideanim" id="follow">
                <li><a href="{{ Config::get('settings.get_facebook') }}" class="facebook" title="Go to Our Facebook Page"></a></li>
                <li><a href="{{ Config::get('settings.get_twitter') }}" class="twitter" title="Go to Our Twitter Account"></a></li>
                <li><a href="{{ Config::get('settings.get_google') }}" class="googleplus" title="Go to Our Google Plus Account"></a></li>
                <li><a href="{{ Config::get('settings.get_instagram') }}" class="instagram" title="Go to Our Instagram Account"></a></li>
                <li><a href="{{ Config::get('settings.get_youtube') }}" class="youtube" title="Go to Our Youtube Channel"></a></li>
            </ul>
        </div>

        <div class="copyright slideanim">
            <p>&copy; {{ date("Y") }} Tradeaux. All Rights Reserved | Template by <a href="http://w3layouts.com/"> W3layouts </a></p>
        </div>

    </div>
</div>
@endif