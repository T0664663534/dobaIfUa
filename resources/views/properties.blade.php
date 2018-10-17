@extends('layouts._layout')

@section('content')

    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2 class="heading-title">Our Properties</h2>
                                    <p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by the fine folks at <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-search-map">
        <div class="search-property">
            <div class="s-holder">
                <h2>Search Properties</h2>
                <div class="row">
                    <div class="col-xxs-12 col-xs-12">
                        <div class="input-field">
                            <label for="from">Keyword:</label>
                            <input type="text" class="form-control" id="from-place" placeholder="Any"/>
                        </div>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Property Status:</label>
                            <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Rent</option>
                                <option value="2">Sale</option>
                            </select>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Property Type:</label>
                            <select class="cs-select cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <div class="input-field">
                            <label for="from">Location:</label>
                            <input type="text" class="form-control" id="from-place" placeholder="Any"/>
                        </div>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Price:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Bedrooms:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Bathrooms:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Area:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Parking spots:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>Any</option>
                                    <option value="1">Building</option>
                                    <option value="2">Office</option>
                                </select>
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12 text-center">
                        <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map" style="background-image: url(images/cover_bg_1.jpg);">
        </div>
    </div>

    <div id="fh5co-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Newest Properties</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-1.jpg);">
                            <span class="status">Sale</span>
                            <ul class="list-details">
                                <li>2000 ft sq<li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Properties Near in Beach</h3>
                            <span class="price">$3,000</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                            <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-2.jpg);">
                            <span class="status">Rent</span>
                            <ul class="list-details">
                                <li>2000 ft sq<li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Modern House at NZ</h3>
                            <span class="price">$200/mos</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                            <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-3.jpg);">
                            <span class="status">Sale</span>
                            <ul class="list-details">
                                <li>2000 ft sq<li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Bonggalo House</h3>
                            <span class="price">$3,000</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                            <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-4.jpg);">
                            <span class="status">Sale</span>
                            <ul class="list-details">
                                <li>2000 ft sq<li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Properties at Alaska</h3>
                            <span class="price">$3,000</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                            <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-5.jpg);">
                            <span class="status">Rent</span>
                            <ul class="list-details">
                                <li>2000 ft sq<li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>Modern Properties</h3>
                            <span class="price">$200/mos</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                            <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property" style="background-image: url(images/property-6.jpg);">
                            <span class="status">Sale</span>
                            <ul class="list-details">
                                <li>2000 ft sq<li>
                                <li>5 Bedroom:</li>
                                <li>4 Bathroom:</li>
                                <li>3 Garage:</li>
                            </ul>
                        </a>
                        <div class="property-details">
                            <h3>House at the Top of Mountain</h3>
                            <span class="price">$3,000</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                            <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop