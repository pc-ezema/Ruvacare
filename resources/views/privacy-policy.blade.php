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
                            <li><span>Privacy Policy</span></li>
                        </ul>
                    </div>
                    <div class="hero__content">
                        <h1>Privacy Policy</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page">
        <div class="container">
            <div class="grid grid--narrow">
                <div class="grid__sub-grid">
                    <div class="widget-section">
                        <div class="rich-text-area">
                            <p>{{config('app.name')}} network is a nationwide franchise network and each office operating under the {{config('app.name')}} brand is independently owned and operated.</p>

                            <h2>&nbsp;</h2>

                            <h2>Your Rights</h2>

                            <p>Because the data we hold about you is your data, you have the following rights in respect of the personal data we hold about you:</p>

                            <ol>
                                <li><strong>Right to Access</strong>&nbsp;– this means you can ask us for a copy of all the personal data we hold about you.</li>
                                <li><strong>Correction Right</strong>&nbsp;– if you believe any of the information we hold about you is incorrect or out of date, you have the right to correct such information by providing us with the correct up to date information. In addition, you can ask us to delete the incorrect or out of date information and we will be happy to do so unless we are prevented from doing so by law or regulation.</li>
                                <li><strong>Right to be Forgotten</strong>&nbsp;– you have the right to ask us to delete the personal data we hold about you where such data is used for direct marketing purposes or is processed as a result of you consenting to such processing. Please note that where we are obliged to keep your personal data because of a regulatory or legal requirement, we will not be able to delete that data and must continue to retain it.</li>
                                <li><strong>Right to Restrict Processing</strong>&nbsp;– in some limited circumstances you have the right to restrict the processing of your data.&nbsp;See examples below:&nbsp;
                                    <ul>
                                        <li>if you want us to establish the data’s accuracy;</li>
                                        <li>where our use of the data is unlawful but you do not want us to erase it;</li>
                                        <li>where you need us to hold the data even if we no longer require it as you need it to establish, exercise or defend legal claims; or</li>
                                        <li>you have objected to our use of your data, but we need to verify whether we have overriding legitimate grounds to use it.</li>
                                    </ul>
                                </li>
                                <li><strong>Right of Objection to Processing</strong>&nbsp;- you have the right to object to us using your data for direct marketing purposes and to profiling. For example, if there is something about your situation which makes you want to object to processing as you feel it impacts on your fundamental rights and freedoms. In some cases, we may demonstrate that we have compelling legitimate grounds to process your information which override your rights and freedoms.</li>
                                <li><strong>Right of Data Portability</strong>&nbsp;– you have the right to request a copy of the personal data we hold about you in a commonly used and machine-readable format. We can provide your data either to you or to such other third party as you specify in your request.</li>
                                <li><strong>Automated Decision-Making Objection Right</strong>&nbsp;– automated decision-making is where a decision is made entirely by technological means without human intervention. We do not use or rely on automated decision-making.</li>
                            </ol>

                            <p>If you would like to exercise any of the above rights, please contact us in writing on&nbsp;<a href="mailto:info@info@ruvacare.co.uk?subject=Data%20Request">info@ruvacare.co.uk</a>&nbsp;or {{config('app.name')}}, 106 The Blades Centre Sheffild S2 4SWe</p>
                        </div>
                    </div>
                    <div class="widget-section">
                        <div class="rich-text-area">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
@endsection