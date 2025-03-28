@extends('partials.master')
@section('page-title', __('keywords.home'))

@section('content')
    <!-- Home-books starts -->
    <section class="Home-books text-center" id="Home-books">
        <div class="row">
            <div class="content">
                <h3>{{ __('keywords.welcome') }}</h3>
                <p>
                    {{ __('keywords.home_description') }}
                </p>
                <a href="#" class="btn btn-lg btn-success">{{ __('keywords.lets_go') }}</a>
            </div>
            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="./images/book-1.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./images/book-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./images/book-3.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./images/book-4.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./images/book-5.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./images/book-6.png" alt=""></a>
                </div>
                <img src="./images/stand.png" class="stand" alt="">
            </div>
        </div>
    </section>
    <!-- Home-books ends -->

    <!--latest section starts-->
    <section class="latest-books" id="latest-books">
        <h1 class="heading"><span>{{ __('keywords.latest_books') }}</span></h1>
        <div class="swiper latest-slider">
            <div class="swiper-wrapper">
                <x-book-card title="كتاب 1" image="./images/book-1.png" url="#" />
                <x-book-card title="كتاب 2" image="./images/book-2.png" url="#" />
                <x-book-card title="كتاب 3" image="./images/book-3.png" url="#" />
                <x-book-card title="كتاب 4" image="./images/book-4.png" url="#" />
                <x-book-card title="كتاب 5" image="./images/book-5.png" url="#" />
                <x-book-card title="كتاب 6" image="./images/book-6.png" url="#" />
            </div>
        </div>
    </section>
    <!--latest section ends-->

    <!-- library section starts  -->
    <section class="library">
        <div class="image">
            <img src="images/deal-img.jpg" alt="{{ __('keywords.online_libary') }}">
        </div>
        <div class="content text-end">
            <h3>{{ __('keywords.world_of_knowledge') }}</h3>
            <h1>{{ __('keywords.online_libary_free') }}</h1>
            <p>{{ __('keywords.online_libary_description') }}</p>
            <a href="#" class="btn btn-lg btn-success"> {{ __('keywords.lets_go') }}</a>
        </div>
    </section>
    <!-- library section ends -->

    <div class="loader-container">
        <img src="images/loader-img.gif" alt="">
    </div>
@endsection
