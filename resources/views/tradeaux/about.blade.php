@if (true)
    <div class="details">
        <div class="container">
            <h2>About</h2>

            <!-- News-Starts-Here -->
            <div class="col-md-4 details-grid news slideanim">
                <h3>News</h3>
                <div class="news-top">
                    <div class="news-icon">
                        <img src="{{ asset(env('THEME')) }}/images/n1.png" alt="Tradeaux">
                    </div>
                    <div class="news-info">
                        <h4>Logistics - Company of the Year 2015</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="news-bottom">
                    <div class="news-icon">
                        <img src="{{ asset(env('THEME')) }}/images/n2.png" alt="Tradeaux">
                    </div>
                    <div class="news-info">
                        <h4>2015 Revenue Report Released</h4>
                    </div>
                    <div class="clearfix"></div>                   
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- News-Ends-Here -->

            <!-- Reviews-Starts-Here -->
            <div class="col-md-4 details-grid reviews slideanim" id="about">
                <h3>Reviews</h3>
                <div class="about-section-left-grid">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <h4>"Excellent Service"</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Consectetur adipiscing elit tempor incididunt.</p>
                                    <div class="client">
                                        <p>Johann Schmidt</p>
                                        <p>Entrepreneur</p>
                                    </div>
                                </li>
                                <li>
                                    <h4>"Safe Delivery"</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Consectetur adipiscing elit tempor incididunt.</p>
                                    <div class="client">
                                        <p>Rachel Green</p>
                                        <p>Museum Curator</p>
                                    </div>
                                </li>
                                <li>
                                    <h4>"Fully Satisfied"</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Consectetur adipiscing elit tempor incididunt.</p>
                                    <div class="client">
                                        <p>Jeff Daniels</p>
                                        <p>Cars Dealer</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Reviews-Ends-Here -->

            <!-- Location-Starts-Here -->
            <div class="col-md-4 details-grid locations slideanim">
                <h3>Locations</h3>
                <img src="{{ asset(env('THEME')) }}/images/location.jpg" alt="Tradeaux">
            </div>
            <!-- //Location-Ends-Here -->

            <div class="clearfix"></div>
        </div>
    </div>
@endif
