@extends('layouts.frontend')

@section('page-content')
<main class="main-content main-content--no-pad" style="padding-top: 100px !important;">
    <div class="hero hero--fallback">
        <div class="container">
            <div class="">
                <div class="hero__container">
                    <div class="bread-crumbs">
                        <ul>
                            <li><a href="/" class="bread-crumbs__prev">Home</a></li>
                            <li>
                                <span>
                                    Contact us
                                </span>
                            </li>                       
                         </ul>
                    </div>
                    <div class="hero__content">
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="full-width-block full-width-block--secondary">
        <div class="container">
            <div class="grid grid--super-narrow">
                <div class="grid__sub-grid">
                    <div class="widget-section d-pb-0 m-pb-0">
                        <div class="rich-text-area">
                            <h3>Get in touch</h3>
                            <p>To enquire about any of our roles or vacancies, call us on <a href="tel:+44 7496 353714"> +44 7496 353714</a>, or fill out the form below and we will get in touch.</p>
                        </div>
                    </div>
                    <div class="widget-section js-form" data-form="ContactUs_Careers">
                        <div id="ab0145f8be9624513b7fb877282e27605" class="js-form" data-form="ContactUs_Careers" style="position: relative">
                            @includeIf('layouts.error_template')
                            <form action="/contact-us" method="post">
                                @csrf
                                <fieldset>                                    
                                    <div class="grid grid--two-column-2-2">
                                        <div class="grid__item">
                                            <div>
                                                <label>Your Name *</label>
                                                <input type="text" name="name" required/>
                                            </div>
                                        <div class="grid__item">
                                        <div class="grid__item">
                                            <div>
                                                <label>Your Email *</label>
                                                <input type="text" name="email" required/>
                                            </div>
                                        <div class="grid__item">
                                        <div class="grid__item">
                                            <div>
                                                <label>Your Phone Number *</label>
                                                <input type="text" name="phone" required/>
                                            </div>
                                        <div class="grid__item">
                                        <div class="grid__item">
                                            <div>
                                                <label>Subject *</label>
                                                <input type="text" name="subject" required/>
                                            </div>
                                        <div class="grid__item">
                                        <div class="grid__item">
                                            <div>
                                                <label>Message *</label>
                                                <textarea type="text" name="message" cols="40" rows="10"  required></textarea>
                                            </div>
                                        <div class="grid__item">
                                    </div>
                                </fieldset>
                                <div class="contact-form__button-wrapper">
                                    <button class="btn btn--full-width js-form-submit-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection