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
                                    <h2 class="heading-title">Наші Пропозиції</h2>
                                    <p class="fh5co-lead">Оберіть<i class="icon-heart3"></i>місце<a href="#" target="_blank"> відпочинку</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    @include('mainContent/searchMap')

    <div id="fh5co-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Нові оголошення</h3>
                    <p>Пропонуємо на ваш розляд.</p>
                </div>
            </div>
            <div class="row">
                @include('mainContent/_property1')
                @include('mainContent/_property2')
                @include('mainContent/_property3')
                @include('mainContent/_property4')
                @include('mainContent/_property5')
                @include('mainContent/_property6')
            </div>
        </div>
    </div>

@stop
