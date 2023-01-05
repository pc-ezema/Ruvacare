@extends('layouts.frontend')

@section('page-content')
<main class="main-content " style="padding-top: 100px !important;">
    <div class="hero hero--fallback">
        <div class="container">
            <div class="">
                <div class="hero__container">
                    <div class="bread-crumbs">
                        <ul>
                            <li><a href="/" class="bread-crumbs__prev">Home</a></li>
                            <li>
                                <span>Find Our office</span>
                            </li>

                        </ul>
                    </div>
                    <div class="hero__content">
                        <h1>Find Our office</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid--two-column-seventy-thirty">
            <div class="grid__item">
                <div class="rich-text-area">

                </div>
            </div>
        </div>
        <div class="grid grid--single">
            <div class="grid__item">
                <div class="google-maps">
                    <div id="map" style="position: relative; overflow: hidden;">
                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38087.727094275884!2d-1.4769677957762477!3d53.37040793651813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48797807970d0ec9%3A0x67ac806e5a3e8843!2sSheffield%20S2%2C%20UK!5e0!3m2!1sen!2sng!4v1651577960282!5m2!1sen!2sng" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection