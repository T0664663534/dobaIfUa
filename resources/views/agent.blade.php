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
                                    <h2 class="heading-title">Наш Агент</h2>
                                    <p class="fh5co-lead">Знайде для вас <i class="icon-heart3"></i> все, що могло би <a href="/properties" target="_blank">Вам підійти.</a></p>
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
                <h2>Пошук потрібного</h2>
                <div class="row">
                    <div class="col-xxs-12 col-xs-12">
                        <div class="input-field">
                            <label for="from">Ключеві слова</label>
                            <input type="text" class="form-control" id="from-place" placeholder="Все"/>
                        </div>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Статус пропозиції</label>
                            <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>все</option>
                                <option value="1">занято</option>
                                <option value="2">вільно</option>
                            </select>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Тип пропозиції:</label>
                            <select class="cs-select cs-skin-border input-half">
                                <option value="" disabled selected>все</option>
                                <option value="1">Хостел</option>
                                <option value="2">Готель</option>
                                <option value="3">Квартира</option>
                                <option value="4">Кемпінг</option>
                            </select>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <div class="input-field">
                            <label for="from">Місце знаходження:</label>
                            <input type="text" class="form-control" id="from-place" placeholder="все"/>
                        </div>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Ціна:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>все</option>
                                    <option value="1">від 0</option>
                                    <option value="2">від 100</option>
                                    <option value="3">від 200</option>
                                    <option value="4">від 300</option>
                                    <option value="5">від 400</option>
                                    <option value="6">від 500</option>
                                    <option value="7">від 600</option>
                                    <option value="8">від 700</option>
                                    <option value="9">від 800</option>
                                    <option value="10">від 900</option>
                                </select>
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>все</option>
                                    <option value="1">до 100</option>
                                    <option value="2">до 200</option>
                                    <option value="3">до 300</option>
                                    <option value="4">до 400</option>
                                    <option value="5">до 500</option>
                                    <option value="6">до 600</option>
                                    <option value="7">до 700</option>
                                    <option value="8">до 800</option>
                                    <option value="9">до 900</option>
                                    <option value="10">до 1000</option>
                                </select>
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Кількість кімнат:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half">
                                    <option value="" disabled selected>все</option>
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

    <div id="fh5co-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-1.jpg" alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Jean Smith</h3>
                        <span class="list-prop">Property List: 5</span>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                        <p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-2.jpg" alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Hush Raven</h3>
                        <span class="list-prop">Property List: 5</span>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                        <p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-3.jpg" alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Alex King</h3>
                        <span class="list-prop">Property List: 5</span>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                        <p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-4.jpg" alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Hush Raven</h3>
                        <span class="list-prop">Property List: 5</span>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                        <p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-1.jpg" alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Jean Smith</h3>
                        <span class="list-prop">Property List: 5</span>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                        <p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-2.jpg" alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Hush Raven</h3>
                        <span class="list-prop">Property List: 5</span>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                        <p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
