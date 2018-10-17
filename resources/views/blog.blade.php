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
                                <h2 class="heading-title">Our Blog</h2>
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
        <div class="map" style="background-image: url(images/cover_bg_1.jpg);"></div>
    </div>

    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Our Blog</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/property-4.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">30% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/property-2.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">Planning for Vacation</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/property-3.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">Visit Tokyo Japan</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/property-4.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">30% Discount to Travel</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/property-5.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">Planning for Vacation</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/property-6.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">Visit Tokyo Japan</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-md-block"></div>
            </div>

        </div>
    </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="map" class="fh5co-map"></div>
    <!-- fh5co-blog-section -->
@stop
