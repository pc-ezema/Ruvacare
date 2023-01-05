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
                            <li><span>About us</span></li>

                        </ul>
                    </div>
                    <div class="hero__content">
                        <h1>About us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page page--franchise">
        <div class="container">

            <section class="grid grid--two-column-seventy-thirty">
                <div class="grid__item">
                    <div class="rich-text-area">
                        <p>If you find yourself unfulfilled with your current job and want to know you&rsquo;ve made a positive difference each day, a career in care could be for you.</p>

                        <p>A career in care can provide an amazing and varied career pathway. No two days are the same, and you&rsquo;ll have the opportunity to meet some amazing people and hear their fascinating stories. You&rsquo;ll also have the knowledge that because of the vital work you, and the wider {{config('app.name')}} team do, our customers are able to remain safe and happy in their own homes.</p>

                        <p>At {{config('app.name')}} we specialise in working with customers and their families that require care in their own homes. We offer a unique service of personalised care visits from a daily visit to&nbsp;full live-in support. So no matter the need, no matter the amount of care, we are there for as much or as little as they need us.</p>

                        <p>If you want a feeling of pride each day, knowing you&rsquo;ve played a vital role is supporting someone to remain in their own home then be sure to email us or give us a call to start your new career in care today!</p>

                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid grid--single">
                        <div class="contact-block">
                            <header class="contact-block__header contact-block-header">
                                <div class="contact-block-header__text">
                                    <h4>Contact us</h4>
                                    <p><strong>TO FIND OUT HOW WE CAN HELP YOU</strong></p>
                                </div>
                                <div class="contact-block__circles search-circles search-circles--small">
                                    <img src="{{URL::asset('asset/content/icons/phone.svg')}}" />
                                </div>
                            </header>
                            <div class="contact-block__info tabular-info">
                                <div class="tabular-info__item info-item">
                                    <label class="info-item__label">Call us on</label>
                                    <span class="info-item__data"><a class="cta-link" href="tel:+44 7496 353714">+44 7496 353714</a></span>
                                </div>
                                <div class="tabular-info__item info-item">
                                    <label class="info-item__label">Email us on</label>
                                    <span class="info-item__data"><a class="cta-link" href="mailto:info@ruvacare.co.uk">info@ruvacare.co.uk</a></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div class="container k-section--default">
                <div class="grid">
                    <div class="grid__item widget-section">
                        <div class="widget-section__widget">
                            <div class="rich-text-area">
                                <h3 style="text-align: center;">Our Value</h3>
                            </div>
                        </div>
                        <div class="widget-section__widget">
                            <div class="rich-text-area">
                                <p>{{config('app.name')}} is your perfect care at home companion, providing care and support for your family. </p>
                                <p>With kindness and compassion, our highly-trained and trusted team deliver tailored programmes for ALL needs from companionship through to complex health requirements. </p>
                                <p>Our energy and happy disposition deliver laughter, whilst our enthusiasm for life allows your family member to be themselves, safe in the comfort of their own home for longer.</p>
                            </div>
                        </div>
                        <div class="page-builder-img">
                            <img alt="" class="img-responsive" src="{{URL::asset('asset/content/images/brand-values-cloud.png')}}" title="">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection