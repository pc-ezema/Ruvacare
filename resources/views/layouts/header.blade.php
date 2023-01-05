<header class="site-header js-site-header">
    <div class="container">
        <nav class="navigation navigation--careers">
            <a href="/" class="nav__logo">
                <img src="{{URL::asset('asset/content/icons/logo.png')}}" style="width:70px !important;"/>
            </a>
            <ul class="navigation__page-list page-list page-list--slide-out js-nav-list">
                <li class="page-list__item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a title="Home" href="/">
                        Home
                    </a>
                </li>
                <li class="page-list__item {{ (request()->is('about')) ? 'active' : '' }}">
                    <a title="About Us" href="/about">
                        About Us
                    </a>
                </li>
                <li class="page-list__item {{ (request()->is('our-teams')) ? 'active' : '' }}">
                    <a title="Meet Our Team" href="/our-teams">
                        Meet Our Team
                    </a>
                </li>
                <li class="page-list__item {{ (request()->is('faqs')) ? 'active' : '' }}">
                    <a title="FAQs" href="/faqs">
                        FAQs
                    </a>
                </li>
                <li class="page-list__item {{ (request()->is('contact')) ? 'active' : '' }}">
                    <a title="Contact Us" href="/contact">
                        Contact Us
                    </a>
                </li>
                <li class="page-list__item {{ (request()->is('vacancies')) ? 'active' : '' }}">
                    <a title="About Us" href="/vacancies">
                        Current Vacancies
                    </a>
                </li>
                <li class="page-list__item {{ (request()->is('locations')) ? 'active' : '' }}">
                    <a title="Locations" href="/locations">
                        Locations
                    </a>
                </li>
            </ul>
            <ul class="navigation__ctas navigation-ctas">
                <li class="navigation-ctas__item navigation-ctas__item--mobile ">
                    <a href="/vacancies" class="btn js-apply-cta" data-location="navigation">Find Out More</a>
                </li>
                <li class="navigation-ctas__item a">
                    <a href="/contact" data-location="navigation" class="btn btn--primary-blue js-care-cta">Looking for care?</a>
                </li>
                <li class="navigation__mobile-toggle">
                    <button class="mobile-toggle js-mobile-toggle" type="button"><i class="fas fa-bars"></i></button>
                </li>
                <li class="navigation__mobile-toggle navigation__mobile-toggle--close">
                    <button class="mobile-toggle mobile-toggle--close js-close-toggle" type="button">Close </button>
                </li>
            </ul>
        </nav>
    </div>
</header>