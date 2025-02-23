<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
            <!--begin::Brand-->
            <div class="brand flex-column-auto" id="kt_brand">
                <!--begin::Logo-->
                <a href="{{route('index_dash')}}" class="brand-logo">
                    <img alt="Logo" style="width: 50px" src="{{url('/dashboard/logo.png')}}" />
                </a>
                <!--end::Logo-->
                <!--begin::Toggle-->
                <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                    <span class="svg-icon svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </button>
                <!--end::Toolbar-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside Menu-->
            <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                <!--begin::Menu Container-->
                <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                    <!--begin::Menu Nav-->
                    <ul class="menu-nav">
                        <li class="menu-item {{ (request()->routeIs('index_dash') ) ? ' menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{route('index_dash')}}" class="menu-link">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text" style="font-size:17px ;" >الرئيسية</span>
                            </a>
                        </li>

                        <li class="menu-item {{ (request()->routeIs('index_offers')) || (request()->routeIs('index_pages')) ? ' menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{route('index_offers')}}" class="menu-link">
                                <i class="far fa-file-pdf menu-icon"></i>
                                <span class="menu-text" style="font-size:17px ;" >مولد العروض</span>
                            </a>
                        </li>

                        <li class="menu-item {{ (request()->routeIs('index_cities') ) ? ' menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{route('index_cities')}}" class="menu-link">
                                <i class="fas fa-city menu-icon"></i>
                                <span class="menu-text" style="font-size:17px ;" >المدن</span>
                            </a>
                        </li>

                        <li class="menu-item {{ (request()->routeIs('index_hotels') ) ? ' menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{route('index_hotels')}}" class="menu-link">
                                <i class="fas fa-hotel menu-icon"></i>
                                <span class="menu-text" style="font-size:17px ;" >الفنادق</span>
                            </a>
                        </li>

                        <li class="menu-item {{ (request()->routeIs('index_rooms') ) ? ' menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{route('index_rooms')}}" class="menu-link">
                                <i class="fas fa-door-open menu-icon"></i>
                                <span class="menu-text" style="font-size:17px ;" >الغرف</span>
                            </a>
                        </li>

                        <li class="menu-item {{ (request()->routeIs('index_meals') ) ? ' menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{route('index_meals')}}" class="menu-link">
                                <i class="fas fa-hamburger menu-icon"></i>
                                <span class="menu-text" style="font-size:17px ;" >الوجبات</span>
                            </a>
                        </li>

                        <li class="menu-item {{ (request()->routeIs('index_details') ) ? ' menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{route('index_details')}}" class="menu-link">
                                <i class="fas fa-info-circle menu-icon"></i>
                                <span class="menu-text" style="font-size:17px ;" >تفاصيل العروض</span>
                            </a>
                        </li>

                        <li class="menu-item {{ (request()->routeIs('index_admins') ) ? ' menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{route('index_admins')}}" class="menu-link">
                                <i class="fas fa-users menu-icon"></i>
                                <span class="menu-text" style="font-size:17px ;" >المشرفين</span>
                            </a>
                        </li>

                        <li class="menu-item {{ (request()->routeIs('index_page_bg_img') ) ? ' menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{route('index_page_bg_img')}}" class="menu-link">
                                <i class="fas fa-cogs menu-icon"></i>
                                <span class="menu-text" style="font-size:17px ;" >الإعدادت</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Menu Nav-->
                </div>
                <!--end::Menu Container-->
            </div>
            <!--end::Aside Menu-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            <!--begin::Header Nav-->
                            <ul class="menu-nav">
                                <li class="menu-item {{ (request()->routeIs('index_offers')) ? 'menu-item-active' : '' }}" >
                                    <a href="{{route('index_offers')}}" target="_self" class="menu-link btn btn-light-success">
                                        <span class="menu-text">إضافه عرض جديد</span>
                                    </a>
                                </li>
                            </ul>


                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::User-->
                        <div class="topbar-item">
                            <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{auth()->user()->name}}</span>
                                <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                    <span class="symbol-label font-size-h5 font-weight-bold"><i class="fas fa-user"></i></span>
                                </span>
                            </div>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Dashboard-->
                        @yield('content')
                        <!--end::Dashboard-->
                    </div>
                    <br>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">1.0.0</span>
                        <a href="#"  class="text-dark-75 text-hover-primary">Version</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark">
                        <a href="https://www.facebook.com/AbdelrhmanEldwey/" target="_blank" class="nav-link text-success pl-0 pr-5">Abdelrhman Amr</a>
                        <a  target="_blank" class="nav-link pl-0 pr-5">:Made With Love By</a>

                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
