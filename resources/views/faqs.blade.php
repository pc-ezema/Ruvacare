@extends('layouts.frontend')

@section('page-content')
<main class="main-content" style="padding-top: 100px !important;">
    <div class="hero hero--fallback">
        <div class="container">
            <div class="">
                <div class="hero__container">
                    <div class="bread-crumbs">
                        <ul>
                            <li><a href="/" class="bread-crumbs__prev">Home</a></li>
                            <li><span>FAQs</span></li>

                        </ul>
                    </div>
                    <div class="hero__content">
                        <h1>FAQs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <section class="grid grid--two-column-seventy-thirty">
            <div class="grid__item">
                <div class="rich-text-area">
                    <p>Whether you are new to care, or have lots of experience, there are bound to be some questions you still don&rsquo;t have the answer to. We&rsquo;ve pulled together some of our most frequently asked questions below.</p>

                    <p>If you have a question that isn&rsquo;t answered below then please get in touch with us &ndash; we&rsquo;d love to hear from you!</p>

                </div>
            </div>
            <div class="grid__item">
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
        </section>

        <div class="grid grid--narrow">
            <div class="grid__sub-grid">
                <div class="widget-section">
                    <div class="grid__item paged-items">
                        <div class="card-list">
                            <div class="row">
                                <div class="col">
                                    <div class="tabs">
                                        <div class="tab">
                                            <input type="checkbox" id="chck1">
                                            <label class="tab-label" for="chck1">What are the benefits of working for {{config('app.name')}}?</label>
                                            <div class="tab-content">
                                                <p>Making a positive difference to someone else&rsquo;s life brings immense satisfaction. You will be part of a team that is dedicated to the best customer care.</p>
                                                <p>We value our staff because we believe they are the key to delivering top quality services. {{config('app.name')}} offers excellent support and the opportunity to develop a rewarding career in social care. You will receive regular supervision and training and the assurance of working for a reputable company that is proud of its achievements.</p>
                                            </div>
                                        </div>
                                        <div class="tab">
                                            <input type="checkbox" id="chck2">
                                            <label class="tab-label" for="chck2">What are the main types of job roles at {{config('app.name')}}?</label>
                                            <div class="tab-content">
                                                <p>There are four main job roles at {{config('app.name')}}:</p>

                                                <ul>
                                                    <li>Care assistant and live-in care assistant</li>
                                                    <li>Coordinator</li>
                                                    <li>Supervisor</li>
                                                    <li>Registered manager</li>
                                                </ul>
                                                <p>These job roles may vary according to the size of the business. A small, new business may only have a manager, coordinator and a team of care assistants. Whereas, a large established business may, in addition to the above roles, employ a finance officer, deputy manager, administrative staff, a training manager and apprentices.</p>

                                            </div>
                                        </div>
                                        <div class="tab">
                                            <input type="checkbox" id="chck3">
                                            <label class="tab-label" for="chck3">What ongoing training does {{config('app.name')}} UK provide?</label>
                                            <div class="tab-content">
                                                <p>All our staff receive regular supervision and ongoing training to enhance their existing skills and learn new ones. This is supplemented by routine annual refresher training.</p>

                                                <p>Topics depend upon the services provided by your local office and the specific needs of their customers. This could include -</p>

                                                <ul>
                                                    <li>Dementia and other specific medical conditions such as multiple sclerosis, motor neurone disease, strokes, Parkinson&#39;s and end of life care</li>
                                                    <li>Learning disabilities</li>
                                                    <li>Mental health</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab">
                                            <input type="checkbox" id="chck4">
                                            <label class="tab-label" for="chck4">What types of homecare services does {{config('app.name')}} offer?</label>
                                            <div class="tab-content">
                                                <p>We support customers with all aspects of their day to day living, so they can enjoy the best possible quality of life. Each service is tailored to meet each customer&rsquo;s requirements.</p>
                                                <p>Visits can range from a fortnightly service to once or more daily, right through to overnight or live-in care.</p>
                                            </div>
                                        </div>
                                        <div class="tab">
                                            <input type="checkbox" id="chck5">
                                            <label class="tab-label" for="chck5">What will be expected of me as a care assistant?</label>
                                            <div class="tab-content">
                                                <p>Being part of the {{config('app.name')}} team is rewarding and gives great job satisfaction, but it also demands commitment and professionalism.</p>
                                                <p>To be a {{config('app.name')}} care assistant, it is essential you genuinely care for others and have good communication skills, especially when listening to customers. Wanting to find out more and to problem solve are key.</p>
                                                <p>You need to understand what the role of a care assistant entails and be able to follow instructions.</p>

                                            </div>
                                        </div>
                                        <div class="tab">
                                            <input type="checkbox" id="chck6">
                                            <label class="tab-label" for="chck6">Will I need previous experience of providing care and support?</label>
                                            <div class="tab-content">
                                                <p>Care experience is useful, but not always necessary for care assistants as we provide full training.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</main>
@endsection