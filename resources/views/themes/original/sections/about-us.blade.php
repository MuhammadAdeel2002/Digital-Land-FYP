@if(isset($templates['about-us'][0]) && $aboutUs = $templates['about-us'][0])
    <!-- about section -->
    <section class="about-section">
        <div class="container">
            <div class="row gy-5 g-lg-5">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="img-box img-1">
                            <img src="{{getFile(config('location.content.path').$aboutUs->templateMedia()->image2)}}" alt=""/>
                        </div>
                        <div class="img-box img-2">
                            <img src="{{getFile(config('location.content.path').$aboutUs->templateMedia()->image1)}}" alt=""/>
                        </div>
                        <img class="shape" src="{{ asset($themeTrue.'img/dot-square.png') }}" alt=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-text mb-4">
                        <h5>About Us</h5>
                        <h2>Welcome To Digtal Land</h2>
                    </div>
                    <div class="text-box">
                        <h4>Finding Great Properties For Investment</h4>
                        <p>
                        The first tip to finding great properties for investment is to use the yellow page. This is a phone directory that lists every type of business in your area. You can use this to find businesses in your area that may be for sale or renting.

Our mission is to empower the world to build wealth through modern real estate investing.

Another way to find great properties for investment is to look on eBay. This is a website that sells used merchandise and items that are for sale or for rent. You can use this to find great deals on businesses and properties that are for sale.
                        </p>
                        <a class="btn-custom mt-4 btn text-white" href="{{ route('about') }}">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
