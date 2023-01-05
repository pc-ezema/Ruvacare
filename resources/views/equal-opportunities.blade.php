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
                            <li><span>Equal Opportunities </span></li>

                        </ul>
                    </div>
                    <div class="hero__content">
                        <h1>Equal Opportunities </h1>
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
                            <p>{{config('app.name')}} is an equal opportunities employer.&nbsp;{{config('app.name')}} does not discriminate against any employee or job applicant on grounds of (including, but not limited to) their race or colour, nationality, national or ethnic origin, sex, marital status, religion, age, sexual orientation or disability.</p>

                            <p>Where complaints of unlawful discrimination are made, the local {{config('app.name')}} franchise office will investigate these and take the appropriate steps in light of such investigation, in accordance with our Equality, Diversity and Human Rights Policy.</p>

                            <p>The Policy applies to all employees, contractors and workers, employed or engaged by {{config('app.name')}}.</p>

                            <p>All employees are personally responsible for applying the Policy and for not discriminating against another employee or potential employee. Managers are also responsible for ensuring that neither they, nor employees reporting to them, unlawfully or unfairly discriminate against existing or prospective employees.</p>

                            <p>You can request a copy of our Equality, Diversity and Human Rights Policy from your local {{config('app.name')}} franchise office.</p>

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