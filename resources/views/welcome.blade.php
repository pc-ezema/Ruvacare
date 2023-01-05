@extends('layouts.frontend')

@section('page-content')
<main class="main-content" style="padding-top: 100px !important;">

    <div class="hero hero--careers hero--careers-franchise" style="background-color: #173E9F">
        <picture class="hero__image">

        </picture>
        <div class="hero__text">
            <h1 class="careers-hero-title">
                <span class="careers-hero-title__pretext">Welcome to</span>
                {{config('app.name')}}
                <span class="careers-hero-title__posttext">Careers in {{config('app.name')}}</span>
            </h1>
            <p>Join the {{config('app.name')}} team and help make a real difference to someone&#39;s life with an incredibly
                rewarding career in care.</p>
        </div>
    </div>

    <div class="page page--franchise">
        <div class="container">
            <section class="grid grid--two-column-seventy-thirty">
                <div class="grid__item">
                    <div class="rich-text-area">
                        <h2>Join&nbsp;{{config('app.name')}}</h2>

                        <p><strong>They say &lsquo;home is where the heart is&rsquo; and we at {{config('app.name')}} keep
                                our customers safe and cared for in theirs.​</strong><strong> </strong></p>

                        <p>More people than ever are choosing to receive care at home, but what makes them choose
                            {{config('app.name')}}?
                        </p>

                        <p>Our staff members are the face of our company and it&rsquo;s our care teams that enable
                            our customers to stay in the comfort of their own homes. Our teams provide vital care
                            and support as well as building and growing relationships, bringing smiles to the faces
                            of our customers, laughing, sharing experiences, listening to stories and sometimes
                            wiping away tears.</p>

                        <p>Being a part of our dedicated {{config('app.name')}} team is immensely rewarding, but it also
                            demands commitment and professionalism. Working with some of the most vulnerable members
                            of society can give enormous satisfaction to the right person. It offers the opportunity
                            to make a real difference to people&rsquo;s lives; a vocation rather than just a job.
                        </p>

                        <p>We are looking for people who are passionate about great care. If you share our
                            commitment to provide the best home care services, get in touch with us today.</p>

                    </div>
                    <a class="btn" href='/vacancies'>View our current
                        vacancies</a>
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
        </div>
        <div class="container">
            <div class="widget-section">
                <section class="preview-block">
                    <div class="preview-block__item preview-block__item--image">
                        <img src="{{URL::asset('asset/getmedia/2fd5b8dd-cf3d-4d7b-8fd8-3a2f50ca5910/Franchise-Homepage-About-us.png')}}" />
                    </div>
                    <div class="preview-block__item preview-block__item--text">
                        <div class="rich-text-area">
                            <h5 class="subheading">About us</h5>
                            <p>At {{config('app.name')}} we believe that care matters and we are committed to providing the
                                highest quality home care so that our customers can remain in their own homes.</p>

                            <p>We work alongside families and individuals to tailor our services to help our
                                customers stay in control of their own care for as long as they are able to.
                                Delivering the very best homecare is our passion, and we strive to achieve this
                                every day.</p>

                        </div>
                        <a class="btn btn--ghost" href="/about">Find out more about
                            us</a>
                    </div>
                </section>
            </div>
        </div>
        <div class="container k-section--default">
            <div class="grid">
                <div class="grid__item widget-section">
                    <div class="widget-section__widget">
                        <div class="rich-text-area">
                            <h2 style="text-align: center;">What does working for {{config('app.name')}} offer me?</h2>
                        </div>
                    </div>
                    <div class="container">
                        <div class="info-icon-container">
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Booming-Industry1.png')}}" alt="Stable and growing industry">
                                <p>Stable and growing industry</p>
                            </div>
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Flexible-Hours-1.png')}}" alt="Flexible working patterns">
                                <p>Flexible working patterns</p>
                            </div>
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Regular-hours-1.png')}}" alt="Full or part-time">
                                <p>Full or part-time</p>
                            </div>
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Rewarding-work1.png')}}" alt="Rewarding work">
                                <p>Rewarding work</p>
                            </div>
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Training-and-Growth-1.png')}}" alt="Career progression">
                                <p>Career progression</p>
                            </div>
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Recession-proof-1.png')}}" alt="Recession proof">
                                <p>Recession proof</p>
                            </div>
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Competitive-pay-1.png')}}" alt="Competitive rates of pay">
                                <p>Competitive rates of pay</p>
                            </div>
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Family-Culture-1.png')}}" alt="Family culture">
                                <p>Family culture</p>
                            </div>
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Training-Support.png')}}" alt="Training and support">
                                <p>Training and support</p>
                            </div>
                            <div class="info-icon">
                                <img src="{{URL::asset('asset/content/images/Other-benefits-copy.png')}}" alt="Other benefits">
                                <p>Other benefits</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        
    </div>
</main>

@endsection