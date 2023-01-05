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
                            <li><span>Our Team</span></li>

                        </ul>
                    </div>
                    <div class="hero__content">
                        <h1>Meet some of our team</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <section class="grid grid--single">
            <div class="widget-section card-list card-list--fifty">



                <div class="card-list__item">
                    <div data-expanded="false" class="team-block js-expandable-panel">
                        <header class="team-block__header team-block-header ">
                            <picture class="team-block-header__pic">
                                <img src="{{URL::asset('/asset/content/images/image_2.jpg')}}" />
                            </picture>
                            <div class="team-block-header__text">
                                <h5>James Bryson</h5>
                                <h6>Care Coordinator</h6>
                            </div>
                            <span class="team-block-header__icon js-panel-icon">
                                <i class="fas fa-plus-circle"></i>
                            </span>
                        </header>
                        <div class="team-block__content js-expandable-panel-content">
                            <div class="rich-text-area">
                                <p>I have been in the care industry for just over 3 years, before care I worked in 3 salons as a hairdresser and still do a little hairdressing now. I work alongside the Care Manager to ensure we are delivering high continuity across our service.</p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-list__item">
                    <div data-expanded="false" class="team-block js-expandable-panel">
                        <header class="team-block__header team-block-header ">
                            <picture class="team-block-header__pic">
                                <img src="{{URL::asset('/asset/content/images/mobile-03.jpg')}}" />
                            </picture>
                            <div class="team-block-header__text">
                                <h5>Paul Ramsey </h5>
                                <h6>Customer Support Manager </h6>
                            </div>
                            <span class="team-block-header__icon js-panel-icon">
                                <i class="fas fa-plus-circle"></i>
                            </span>
                        </header>
                        <div class="team-block__content js-expandable-panel-content">
                            <div class="rich-text-area">
                                <p>&lsquo;I have been working for {{config('app.name')}} as a Customer Support Officer for almost seventeen months and have enjoyed seeing the development and changes in the business in that short time. I engage with the customers to risk assess, review and promote their independence, &nbsp;ensuring best practice from care staff to ensure the customers needs are being met via training and continued communication. I provide care calls myself to see what care staff actually are experiencing, liaising and taking advice off multi-agency professionals and colleagues within the business.</p>

                                <p>I worked in Engineering for nearly 30 years, in the UK and abroad, and I have my own private Counselling practice. I am married with two adult children. I enjoy the great outdoors &ndash; the coast and the mountains &ndash; have a caravan in Tenby, and like to fish. I read and try to be as creative as I can.</p>

                                <p>I like to merge all life&rsquo;s experiences to be able to feel that I am making a difference to the customers and care staff that work alongside us!&rsquo;</p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-list__item">
                    <div data-expanded="false" class="team-block js-expandable-panel">
                        <header class="team-block__header team-block-header ">
                            <picture class="team-block-header__pic">
                                <img src="{{URL::asset('/asset/content/images/ai-faces-01.jpg')}}" />
                            </picture>
                            <div class="team-block-header__text">
                                <h5>Jessica Morrison</h5>
                                <h6>Franchise Owner</h6>
                            </div>
                            <span class="team-block-header__icon js-panel-icon">
                                <i class="fas fa-plus-circle"></i>
                            </span>
                        </header>
                        <div class="team-block__content js-expandable-panel-content">
                            <div class="rich-text-area">
                                <p>I have a background in franchising across many industries, when {{config('app.name')}} was introduced to me I was encouraged by not only the business opportunity but also the opportunity it presents to be able to make a real difference to people&#39;s lives both as an employer but also as a service provider.</p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-list__item">
                    <div data-expanded="false" class="team-block js-expandable-panel">
                        <header class="team-block__header team-block-header ">
                            <picture class="team-block-header__pic">
                                <img src="{{URL::asset('/asset/content/images/lady.jpg')}}" />
                            </picture>
                            <div class="team-block-header__text">
                                <h5>Tina Webb</h5>
                                <h6>Care Manager</h6>
                            </div>
                            <span class="team-block-header__icon js-panel-icon">
                                <i class="fas fa-plus-circle"></i>
                            </span>
                        </header>
                        <div class="team-block__content js-expandable-panel-content">
                            <div class="rich-text-area">
                                <p>I have worked in social care for over 20 years in a variety of roles from care assistant to manager. I love to meet people and encourage them to see and achieve the best in themselves. I am passionate about people receiving the best care possible and work with my teams to ensure that this is achieved.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


</main>
@endsection