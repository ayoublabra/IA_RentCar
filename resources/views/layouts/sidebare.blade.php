
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
    <a href="index.html">
        <div class="iq-light-logo">
            <div class="iq-light-logo">
                <img src=" {{ asset('images/logo.gif') }}"  alt="">
            </div>
                <div class="iq-dark-logo">
                <img src=" {{ asset('images/logo-dark.gif') }}" class="img-fluid" alt="">
                </div>
        </div>
        <div class="iq-dark-logo">
            <img src=" {{asset('images/logo-dark.gif')}}" class="img-fluid" alt="">
        </div>
        <span>Vito</span>
    </a>
    <div class="iq-menu-bt-sidebar">
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
            <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
            <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
            </div>
        </div>
    </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

                {{-- @if (Auth::user()->role_id == 1) --}}
                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Home</span></li>
                    {{-- <li  class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <a href="/admin/dashboard" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                    </li> --}}
                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                    <li class="{{ request()->is('/marques') ? 'active' : '' }}">
                        <a href="/marques" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-chat-check-line"></i>
                            <span>Marques</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('/modelles') ? 'active' : '' }}">
                        <a href="/modelles" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-chat-check-line"></i>
                            <span>Modelles</span>
                        </a>
                    </li>
                      <li class="{{ request()->is('/vehicules') ? 'active' : '' }}">
                        <a href="/vehicules" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-chat-check-line"></i>
                            <span>Véhicules</span>
                        </a>
                    </li>
                    {{-- <li class="{{ request()->is('admin/calendar') ? 'active' : '' }}">
                        <a href="/admin/calendar" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-chat-check-line"></i>
                            <span>calendar</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/shops') ? 'active' : '' }}">
                        <a href="/admin/shops" class="iq-waves-effect" aria-expanded="false">
                            <i data-icon="g" class="icon"></i>
                            <span>Shops</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/menus') ? 'active' : '' }}">
                        <a href="/admin/menus" class="iq-waves-effect" aria-expanded="false">
                            <i data-icon="g" class="icon"></i>
                            <span>Menus</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/prestations') ? 'active' : '' }}">
                        <a href="/admin/prestations" class="iq-waves-effect" aria-expanded="false">
                            <i data-icon="y" class="icon"></i>
                            <span>Prestations</span>
                        </a>
                    </li>
                    <li>
                        <a href="#userinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                            <li><a href="{{ route('admin.users.create') }}"><i class="ri-user-add-line"></i>User Add</a></li>
                            <li class="{{ request()->is('admin/users') ? 'active' : '' }}">
                                <a href="/admin/users" class="iq-waves-effect">
                                    <i class="ri-user-line"></i>User List
                                </a>
                            </li>
                        </ul>
                    </li>--}}
                {{-- @elseif (Auth::user()->role_id == 2)
                 <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Home</span></li>
                    <li  class="{{ request()->is('particulier/dashboard') ? 'active' : '' }}">
                        <a href="/particulier/dashboard" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                    </li>
                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                    <li class="{{ request()->is('particulier/calendar') ? 'active' : '' }}">
                        <a href="/particulier/calendar" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-chat-check-line"></i>
                            <span>calendar</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('particulier/shops') ? 'active' : '' }}">
                        <a href="/particulier/shops" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-store-2-line"></i>
                            <span>Shops</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('particulier/prestations') ? 'active' : '' }}">
                        <a href="/particulier/prestations" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-scissors-cut-line"></i>
                            <span>Prestations</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('particulier/menus') ? 'active' : '' }}">
                        <a href="/particulier/menus" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-restaurant-2-line"></i>
                            <span>Menus</span>
                        </a>
                    </li>
                     <li class="{{ request()->is('particulier/rendezvous') ? 'active' : '' }}">
                        <a href="/particulier/rendezvous" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-restaurant-2-line"></i>
                            <span>Rendez vous</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('particulier/collaborateurs') ? 'active' : '' }}">
                        <a href="/particulier/collaborateurs" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-user-line"></i>
                            <span>Collaborateurs</span>
                        </a>
                    </li>
                @elseif (Auth::user()->role_id == 4)
                 <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Home</span></li>
                    <li  class="{{ request()->is('collaborateur/dashboard') ? 'active' : '' }}">
                        <a href="/collaborateur/dashboard" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                    </li>
                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                    <li class="{{ request()->is('collaborateur/calendar') ? 'active' : '' }}">
                        <a href="/collaborateur/calendar" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-chat-check-line"></i>
                            <span>calendar</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('collaborateur/prestations') ? 'active' : '' }}">
                        <a href="/collaborateur/prestations" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-scissors-cut-line"></i>
                            <span>Prestations</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('collaborateur/menus') ? 'active' : '' }}">
                        <a href="/collaborateur/menus" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-restaurant-2-line"></i>
                            <span>Menus</span>
                        </a>
                    </li>
                     <li class="{{ request()->is('collaborateur/rendezvous') ? 'active' : '' }}">
                        <a href="/collaborateur/rendezvous" class="iq-waves-effect" aria-expanded="false">
                            <i class="ri-restaurant-2-line"></i>
                            <span>Rendez vous</span>
                        </a>
                    </li>


                @endif --}}

                    {{-- <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Calendar</span></a></li>
                    <li><a href="chat.html" class="iq-waves-effect"><i class="ri-message-line"></i><span>Chat</span></a></li>

                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Components</span></li>
                    <li>
                    <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                        <li><a href="ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                        <li><a href="ui-alerts.html"><i class="ri-alert-line"></i>Alerts</a></li>
                        <li><a href="ui-badges.html"><i class="ri-building-3-line"></i>Badges</a></li>
                        <li><a href="ui-breadcrumb.html"><i class="ri-menu-2-line"></i>Breadcrumb</a></li>
                        <li><a href="ui-buttons.html"><i class="ri-checkbox-blank-line"></i>Buttons</a></li>
                        <li><a href="ui-cards.html"><i class="ri-bank-card-line"></i>Cards</a></li>
                        <li><a href="ui-carousel.html"><i class="ri-slideshow-line"></i>Carousel</a></li>
                        <li><a href="ui-embed-video.html"><i class="ri-slideshow-2-line"></i>Video</a></li>
                        <li><a href="ui-grid.html"><i class="ri-grid-line"></i>Grid</a></li>
                        <li><a href="ui-list-group.html"><i class="ri-file-list-3-line"></i>list Group</a></li>
                        <li><a href="ui-media-object.html"><i class="ri-camera-line"></i>Media</a></li>
                        <li><a href="ui-modal.html"><i class="ri-stop-mini-line"></i>Modal</a></li>
                        <li><a href="ui-notifications.html"><i class="ri-notification-line"></i>Notifications</a></li>
                        <li><a href="ui-pagination.html"><i class="ri-pages-line"></i>Pagination</a></li>
                        <li><a href="ui-popovers.html"><i class="ri-folder-shield-2-line"></i>Popovers</a></li>
                        <li><a href="ui-progressbars.html"><i class="ri-battery-low-line"></i>Progressbars</a></li>
                        <li><a href="ui-tabs.html"><i class="ri-database-line"></i>Tabs</a></li>
                        <li><a href="ui-tooltips.html"><i class="ri-record-mail-line"></i>Tooltips</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="form-layout.html"><i class="ri-tablet-line"></i>Form Elements</a></li>
                        <li><a href="form-validation.html"><i class="ri-device-line"></i>Form Validation</a></li>
                        <li><a href="form-switch.html"><i class="ri-toggle-line"></i>Form Switch</a></li>
                        <li><a href="form-chechbox.html"><i class="ri-checkbox-line"></i>Form Checkbox</a></li>
                        <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                    </ul>
                    </li>

                    <li>
                    <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                        <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                        <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="chart-morris.html"><i class="ri-file-chart-line"></i>Morris Chart</a></li>
                        <li><a href="chart-high.html"><i class="ri-bar-chart-line"></i>High Charts</a></li>
                        <li><a href="chart-am.html"><i class="ri-folder-chart-line"></i>Am Charts</a></li>
                        <li><a href="chart-apex.html"><i class="ri-folder-chart-2-line"></i>Apex Chart</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                        <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                        <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                        <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                        <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                    </ul>
                    </li>
                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
                    <li>
                    <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="sign-in.html"><i class="ri-login-box-line"></i>Login</a></li>
                        <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                        <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                        <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                        <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#map-page" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-map-pin-user-line"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="map-page" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="pages-map.html"><i class="ri-google-line"></i>Google Map</a></li>

                    </ul>
                    </li>
                    <li>
                    <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                        <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                        <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                        <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                        <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                        <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                        <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-line"></i>Pricing 1</a></li>
                        <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                        <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                        <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 2</a></li>
                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                    </ul>
                    </li> --}}
            </ul>
        </nav>
    <div class="p-3"></div>
    </div>
</div>
