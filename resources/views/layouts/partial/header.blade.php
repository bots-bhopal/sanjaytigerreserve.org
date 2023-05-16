<!--loader-->
<div id="preloader">
    <img src="{{ asset('public/assets/images/str-preloader.gif') }}" alt="str-preloader">
</div>
<!--loader-->

<!-- Floating Social Media Icons -->
{{-- <div class="social-icons">
    <a href="https://www.facebook.com/mptigerfoundationsociety" target="_blank" class="facebook"><i class="fa fa-facebook-f"></i>Facebook</a>
    <a href="https://www.youtube.com/channel/UCt7TIvdCEW4iUsxUqmSqswA" target="_blank" class="youtube"><i class="fa fa-youtube"></i>Youtube</a>
    <a href="https://twitter.com/BandhavgarhTig2" target="_blank" class="twitter"><i class="fa fa-twitter"></i>Twitter</a>
    <a href="https://www.instagram.com/bandhavgarhtigerreserve/?utm_medium=copy_link" target="_blank" class="instagram"><i class="fa fa-instagram"></i>Instagram</a>
</div> --}}

<!--Start header area-->
<header class="header-area">
    <div class="container-fluid">
        <div class="row pr-lg-5 pl-lg-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="d-flex justify-content-between pt-1 pb-1">
                    <a href="{{ route('str.index') }}" class="my-auto">
                        <img src="{{ asset('public/assets/images/str-logo.png') }}" alt="STR-Logo">
                    </a>

                    <a href="https://forest.mponline.gov.in/Search.aspx?park=STR" target="_blank">
                        <img src="{{ asset('public/assets/images/safari.png') }}" class="img-fluid pt-1"
                            alt="click-to-book-safari" width="160" height="120">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmenu-area">
    <div class="container-fluid">
        <div class="mainmenu-bg">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu navbar-toggleable-md">
                        <div class="navbar-header hidden-lg-up">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- ==========================	Desktop Nav ============================ -->
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li>
                                    <a href="{{ route('str.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.about') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('str.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.history') }}"
                                                class="active">{{ trans('navbar.history') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.conservation-history') }}">{{ trans('navbar.conservation-history') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.reserve-profile') }}">{{ trans('navbar.reserve-profile') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.forest-type') }}">{{ trans('navbar.forest-type') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.topography') }}">{{ trans('navbar.topography') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.bio-diversity') }}</a>
                                    <ul class="sub-nav">
                                        {{-- <li>
                                            <a href="{{ route('str.bio-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li> --}}

                                        <li>
                                            <a href="{{ route('str.flora') }}"
                                                class="active">{{ trans('navbar.flora') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.fauna') }}">{{ trans('navbar.fauna') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.avifauna') }}">{{ trans('navbar.avifauna') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.butterflies') }}">{{ trans('navbar.butterflies') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.rare-species') }}">{{ trans('navbar.rare-species') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.tourist-information') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('str.location') }}">{{ trans('navbar.location') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.how-to-reach') }}"
                                                class="active">{{ trans('navbar.how-to-reach') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.best-time-to-visit') }}">{{ trans('navbar.best-time-to-visit') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.weather') }}">{{ trans('navbar.weather') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.safari-zones') }}">{{ trans('navbar.safari-zones') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a href="{{ route('str.excursion') }}">{{ trans('navbar.excursion') }}</a>
                                        </li> --}}

                                        <li>
                                            <a
                                                href="{{ route('str.point-of-interests') }}">{{ trans('navbar.point') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.stay') }}">{{ trans('navbar.stay') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.dos') }}">{{ trans('navbar.dos') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a href="https://forest.mponline.gov.in/" target="_blank";>{{ trans('navbar.safari-booking') }}</a>
                                        </li> --}}
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.btr-management') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('str.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.goals') }}"
                                                class="active">{{ trans('navbar.management-goals') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.objectives') }}">{{ trans('navbar.management-objectives') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a href="{{ route('str.training') }}">{{ trans('navbar.training') }}</a>
                                        </li> --}}

                                        {{-- <li>
                                            <a href="{{ route('str.training') }}">{{ trans('navbar.events') }}</a>
                                        </li> --}}

                                        {{-- <li>
                                            <a href="https://mptiger.mponline.gov.in/Portal/Services/MPTiger/GeneralDonation/DonationType.aspx" target="_blank">{{ trans('navbar.donation') }}</a>
                                        </li> --}}

                                        <li>
                                            <a href="{{ route('str.contact') }}">{{ trans('navbar.contact') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('str.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.info-corner') }}</a>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('str.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.events') }}">{{ trans('navbar.event') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.tenders') }}"
                                                class="active">{{ trans('navbar.tender') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.docs') }}">{{ trans('navbar.docs') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('str.contact') }}">{{ trans('navbar.contact') }}</a>
                                </li>
                            </ul>


                            <!-- ==========================	Mobile Nav ============================ -->
                            <ul class="mobile-menu clearfix">
                                <li>
                                    <a href="{{ route('str.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.about') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('str.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.history') }}"
                                                class="active">{{ trans('navbar.history') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.conservation-history') }}">{{ trans('navbar.conservation-history') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.reserve-profile') }}">{{ trans('navbar.reserve-profile') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.forest-type') }}">{{ trans('navbar.forest-type') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.topography') }}">{{ trans('navbar.topography') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.bio-diversity') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        {{-- <li>
                                            <a href="{{ route('str.bio-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li> --}}

                                        <li>
                                            <a href="{{ route('str.flora') }}"
                                                class="active">{{ trans('navbar.flora') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.fauna') }}">{{ trans('navbar.fauna') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.avifauna') }}">{{ trans('navbar.avifauna') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.butterflies') }}">{{ trans('navbar.butterflies') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.rare-species') }}">{{ trans('navbar.rare-species') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.tourist-information') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('str.location') }}">{{ trans('navbar.location') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.how-to-reach') }}"
                                                class="active">{{ trans('navbar.how-to-reach') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.best-time-to-visit') }}">{{ trans('navbar.best-time-to-visit') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.weather') }}">{{ trans('navbar.weather') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.safari-zones') }}">{{ trans('navbar.safari-zones') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a href="{{ route('str.excursion') }}">{{ trans('navbar.excursion') }}</a>
                                        </li> --}}

                                        <li>
                                            <a
                                                href="{{ route('str.point-of-interests') }}">{{ trans('navbar.point') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.stay') }}">{{ trans('navbar.stay') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.dos') }}">{{ trans('navbar.dos') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a href="https://forest.mponline.gov.in/" target="_blank";>{{ trans('navbar.safari-booking') }}</a>
                                        </li> --}}
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.btr-management') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('str.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.goals') }}"
                                                class="active">{{ trans('navbar.management-goals') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('str.objectives') }}">{{ trans('navbar.management-objectives') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a href="{{ route('str.training') }}">{{ trans('navbar.training') }}</a>
                                        </li> --}}

                                        {{-- <li>
                                            <a href="{{ route('str.training') }}">{{ trans('navbar.events') }}</a>
                                        </li> --}}

                                        {{-- <li>
                                            <a href="https://mptiger.mponline.gov.in/Portal/Services/MPTiger/GeneralDonation/DonationType.aspx">{{ trans('navbar.donation') }}</a>
                                        </li> --}}
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('str.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.info-corner') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('str.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.events') }}">{{ trans('navbar.event') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.tenders') }}"
                                                class="active">{{ trans('navbar.tender') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('str.docs') }}">{{ trans('navbar.docs') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('str.contact') }}">{{ trans('navbar.contact') }}</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>

            <div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content"></div>
                    <div class="link_btn float_right">

                        <ul class="navbar-nav language thm-btn bg-clr1">
                            <!-- Language Dropdown Menu -->
                            <li class="nav-item dropdown">
                                <!-- New Language Switcher -->
                                <a class="nav-link dropdown-toggle hover bdr" data-toggle="dropdown" href="#">
                                    <img src="{{ asset('public/assets/images/icons/google-translate.png') }}"
                                        width="24" height="24" alt="Google-Translate" class="img-fluid">
                                    {{ Config::get('languages')[App::getLocale()]['display'] }}
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right pt-1 pb-1">
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                                    class="flag-icon flag-icon-{{ $language['flag-icon'] }}"
                                                    style="margin-right: 8px!important"></span>
                                                {{ $language['display'] }}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End mainmenu area-->
<!-- END HEADER -->
