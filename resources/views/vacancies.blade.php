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
                                <span>Our Current Vacancies</span>
                            </li>

                        </ul>
                    </div>
                    <div class="hero__content">
                        <h1>Our Current Vacancies</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="grid grid--ats">
            <div class="page-intro page-intro--seventy-thirty">
                <div class="page-intro__item rich-text-area">
                    <div class="rich-text-area">
                        <p>Everyone at {{config('app.name')}} is dedicated to making a real difference to our customers lives. We believe the best care is delivered in the comfort of your own home, so our care teams enable our customers to remain in their own homes surrounded by the things that matter to them most.</p>

                        <p>You&rsquo;d be making a real difference to our customers lives, and in some cases would be the only person the customer sees on a regular basis. Forming bonds with our customers, making them smile and laugh are key to the {{config('app.name')}} service.</p>

                        <p>If you are passionate about delivering great care, then take that first step and look at our vacancies below!</p>

                    </div>
                </div>
                <div class="page-intro__item">
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

            <div class="grid grid--single">
                <div class="grid__item">
                    <div class="card-list card-list--fifty">
                        <div class="card-list__item">
                            <a class="js-job-link" href="/contact">
                                <article class="job-card">
                                    <header class="job-card__header">
                                        <h3>Team Leader / Care Mentor- {{config('app.name')}}</h3>
                                        <ul class="info-list-icon">
                                            <li class="info-list-icon__item info-with-icon">
                                                <span><i class="fas fa-map-marker-alt"></i></span>
                                                <p>{{config('app.name')}}</p>
                                            </li>
                                            <li class="info-list-icon__item info-with-icon">
                                                <span><i class="fas fa-coins"></i></span>

                                                <p>
                                                    Supporting our expanding teams we are looking for an enthusiastic
                                                    individual to join our great team! Full training/support will be
                                                    given all you need is the right attitude and a background in care.
                                                </p>
                                            </li>
                                            <li class="info-list-icon__item info-with-icon">
                                                <span><i class="far fa-clock"></i></span>
                                                <p>Flexible</p>
                                            </li>
                                        </ul>
                                    </header>
                                    <div class="job-card__content">
                                        <p>
                                            We are looking to recruit an enthusiastic team member to step up and Mentor
                                            our Care teams. A mentor supports and guides team
                                            members and acts as a conduit for information to flow regarding customers
                                            and policies and procedures. A mentor supports in the community with manual
                                            handling practices, medication queries, support queries and works closely
                                            with Customer Support Officer. The role includes caring for our customers in
                                            the community as part of the team and set
                                        </p>
                                    </div>
                                    <div class="job-card__cta">
                                        <span href="/contact" class="cta-link">Find out more <i class="fas fa-chevron-circle-right"></i></span>
                                    </div>
                                </article>
                            </a>
                        </div>
                        <div class="card-list__item">
                            <a class="js-job-link" href="/contact">
                                <article class="job-card">
                                    <header class="job-card__header">
                                        <h3>Home Care Assistant Supervisor - {{config('app.name')}}</h3>
                                        <ul class="info-list-icon">
                                            <li class="info-list-icon__item info-with-icon">
                                                <span><i class="fas fa-map-marker-alt"></i></span>
                                                <p>{{config('app.name')}}</p>
                                            </li>
                                            <li class="info-list-icon__item info-with-icon">
                                                <span><i class="fas fa-coins"></i></span>

                                                <p>
                                                    &#163;10 to &#163;15 per hour - 16 - 40 hours per week
                                                </p>
                                            </li>
                                            <li class="info-list-icon__item info-with-icon">
                                                <span><i class="far fa-clock"></i></span>
                                                <p>Flexible</p>
                                            </li>
                                        </ul>
                                    </header>
                                    <div class="job-card__content">
                                        <p>
                                            Providing Quality Care, {{config('app.name')}} started as a small family business in
                                            2004, and today we are proud to be one of the largest providers of home care
                                            services across the UK. But what makes us different?We’re committed to
                                            keeping people in the comfort of their own home, so we help with anything
                                            from everyday tasks around our customers’ homes through to complex care
                                            needs. We appreciate that every customer is different, and this is why every
                                            day will be different.
                                        </p>
                                    </div>
                                    <div class="job-card__cta">
                                        <span href="/contact" class="cta-link">Find out more <i class="fas fa-chevron-circle-right"></i></span>
                                    </div>
                                </article>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="{{URL::asset('asset/content/scripts/ats.bundle.js')}}"></script>
</main>
@endsection