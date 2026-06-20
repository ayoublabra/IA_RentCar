<style>
    /* 🔔 BELL */
.notification-bell {
    position: relative;
    font-size: 22px;
    color: #222;
    transition: .3s;
}

.notification-bell:hover {
    color: #0ea5e9;
    transform: scale(1.1);
}

/* 🔴 DOT */
.notif-dot {
    position: absolute;
    top: 2px;
    right: 2px;
    width: 9px;
    height: 9px;
    background: #ff3b30;
    border-radius: 50%;
    animation: pulse 1.5s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.5); opacity: .5; }
    100% { transform: scale(1); opacity: 1; }
}

/* 🪟 DROPDOWN */
.notification-dropdown {
    width: 380px;
    border-radius: 16px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 10px 30px rgba(0,0,0,.12);
}

/* HEADER */
.notif-header {
    padding: 14px;
    background: linear-gradient(135deg,#0ea5e9,#6366f1);
    color: #fff;
}

/* BODY */
.notif-body {
    max-height: 360px;
    overflow-y: auto;
}

/* ITEM */
.notif-item {
    display: flex;
    gap: 12px;
    padding: 12px;
    text-decoration: none;
    border-bottom: 1px solid #f1f1f1;
    transition: .2s;
}

.notif-item:hover {
    background: #f8fafc;
    transform: translateX(4px);
}

/* ICON */
.notif-icon {
    width: 38px;
    height: 38px;
    border-radius: 12px;
    background: #e0f2fe;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0284c7;
}

/* TEXT */
.notif-title {
    font-weight: 600;
    font-size: 14px;
}

.notif-text {
    font-size: 12px;
    color: #666;
}

.notif-time {
    font-size: 11px;
    color: #999;
}

/* EMPTY */
.notif-empty {
    padding: 20px;
    text-align: center;
    color: #999;
}
</style>
<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <div class="iq-sidebar-logo">
            <div class="top-logo">
                <a href="index.html" class="logo">
                    <div class="iq-light-logo">
                        <img src="{{ asset('images/logo.gif') }}" class="img-fluid" alt="">
                    </div>
                    <div class="iq-dark-logo">

                        <img src="{{ asset('images/logo-dark.gif') }}" class="img-fluid" alt="">
                    </div>
                    <span>vito</span>
                </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="navbar-left">
                <ul id="topbar-data-icon" class="d-flex p-0 topbar-menu-icon">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link font-weight-bold search-box-toggle"><i
                                class="ri-home-4-line"></i></a>
                    </li>
                    <li><a href="chat.html" class="nav-link"><i class="ri-message-line"></i></a></li>
                    <li><a href="profile.html" class="nav-link"><i class="ri-question-answer-line"></i></a></li>
                    <li><a href="todo.html" class="nav-link router-link-exact-active router-link-active"><i
                                class="ri-chat-check-line"></i></a></li>
                </ul>
                {{-- <div class="iq-search-bar d-none d-md-block">
                <form action="#" class="searchbox">
                <input type="text" class="text search-input" placeholder="Type here to search...">
                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                <div class="searchbox-datalink">
                    <h6 class="pl-3 pt-3 pb-3">Pages</h6>
                    <ul class="m-0 pl-3 pr-3 pb-3">
                        <li class="iq-bg-primary-hover rounded"><a href="index.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-4-line pr-2"></i>Dashboard</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="dashboard-1.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-3-line pr-2"></i>Dashboard-1</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="chat.html" class="nav-link"><i class="ri-message-line pr-2"></i>Chat</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="calendar.html" class="nav-link"><i class="ri-calendar-2-line pr-2"></i>Calendar</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="profile.html" class="nav-link"><i class="ri-profile-line pr-2"></i>Profile</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="todo.html" class="nav-link"><i class="ri-chat-check-line pr-2"></i>Todo</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="app/index.html" class="nav-link"><i class="ri-mail-line pr-2"></i>Email</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="pages-faq.html" class="nav-link"><i class="ri-compasses-line pr-2"></i>Faq</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="form-wizard.html" class="nav-link"><i class="ri-clockwise-line pr-2"></i>Form-wizard</a></li>
                    </ul>
                </div>
                </form>
            </div> --}}
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                    <li class="nav-item">
                        <a class="search-toggle iq-waves-effect language-title" href="#"><img
                                src=" {{ asset('images/small/flag-01.png') }}" alt="img-flaf" class="img-fluid mr-1"
                                style="height: 16px; width: 16px;" /> English <i class="ri-arrow-down-s-line"></i></a>
                        <div class="iq-sub-dropdown">
                            <a class="iq-sub-card" href="#"><img src="{{ asset('images/small/flag-02.png') }}"
                                    alt="img-flaf" class="img-fluid mr-2" />French</a>
                            <a class="iq-sub-card" href="#"><img src="{{ asset('images/small/flag-03.png') }}"
                                    alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                            <a class="iq-sub-card" href="#"><img src="{{ asset('images/small/flag-04.png') }}"
                                    alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                            <a class="iq-sub-card" href="#"><img src="{{ asset('images/small/flag-05.png') }}"
                                    alt="img-flaf" class="img-fluid mr-2" />German</a>
                            <a class="iq-sub-card" href="#"><img src="{{ asset('images/small/flag-06.png') }}"
                                    alt="img-flaf" class="img-fluid mr-2" />Japanese</a>
                        </div>
                    </li>

                    {{-- @php
                        $notifications = auth()->user()->unreadNotifications;
                    @endphp

                    <li class="nav-item dropdown position-relative">

                        <!-- BELL -->
                        <a href="#" class="notification-bell search-toggle iq-waves-effect">
                            <i class="ri-notification-3-line"></i>

                            @if ($notifications->count() > 0)
                                <span class="notif-dot"></span>
                            @endif
                        </a>

                        <!-- DROPDOWN -->
                        <div class="iq-sub-dropdown notification-dropdown">

                            <!-- HEADER -->
                            <div class="notif-header">
                                <div>
                                    <h6>Notifications</h6>
                                    <small>{{ $notifications->count() }} nouvelles</small>
                                </div>
                            </div>

                            <!-- BODY -->
                            <div class="notif-body">

                                @forelse($notifications as $notif)
                                    @if ( Auth::user()->role_id==2)
                                        <a href="{{ route('particulier.notif.read', $notif->data['rendezvous_id']) }}"class="notif-item">
                                            <div class="notif-icon">
                                                <i class="ri-calendar-event-line"></i>
                                            </div>
                                            <div class="notif-content">

                                                <div class="notif-title">
                                                    Nouveau rendez-vous
                                                </div>

                                                <div class="notif-text">
                                                    {{ $notif->data['message'] ?? 'Rendez-vous' }}
                                                </div>

                                                <div class="notif-time">
                                                    {{ $notif->created_at->diffForHumans() }}
                                                </div>

                                            </div>
                                        </a>
                                    @elseif(Auth::user()->role_id==4)
                                        <a href="{{ route('collaborateur.notif.read', $notif->data['rendezvous_id']) }}"class="notif-item">
                                            <div class="notif-icon">
                                                <i class="ri-calendar-event-line"></i>
                                            </div>
                                            <div class="notif-content">

                                                <div class="notif-title">
                                                    Nouveau rendez-vous
                                                </div>

                                                <div class="notif-text">
                                                    {{ $notif->data['message'] ?? 'Rendez-vous' }}
                                                </div>

                                                <div class="notif-time">
                                                    {{ $notif->created_at->diffForHumans() }}
                                                </div>

                                            </div>
                                        </a>
                                    @endif


                                @empty
                                    <div class="notif-empty">
                                        Aucune notification
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a href="#" class="search-toggle iq-waves-effect">
                            <div id="lottie-mail"></div>
                            <span class="bg-primary count-mail"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Messages<small
                                                class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/01.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Nik Emma Watson</h6>
                                                <small class="float-left font-size-12">13 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/02.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                <small class="float-left font-size-12">20 Apr</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/03.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Why do we use it?</h6>
                                                <small class="float-left font-size-12">30 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/04.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Variations Passages</h6>
                                                <small class="float-left font-size-12">12 Sep</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/05.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                <small class="float-left font-size-12">5 Dec</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            {{-- <ul class="navbar-list">
                <li>
                    <a href="#"
                        class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                        <img src=" {{ asset('images/user/1.jpg') }}" class="img-fluid rounded mr-3" alt="user">
                        <div class="caption">
                            <h6 class="mb-0 line-height text-white">
                                {{ Auth::user()->nom }}-{{ Auth::user()->prenom }}</h6>
                            <span class="font-size-12 text-white">{{ Auth::user()->role->nom_role }}</span>
                        </div>
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 ">
                                <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello
                                        {{ Auth::user()->nom }}-{{ Auth::user()->prenom }}</h5>
                                    <span class="text-white font-size-12">{{ Auth::user()->role->nom_role }}</span>
                                </div>
                                <a href="" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-file-user-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">My Profile</h6>
                                            <p class="mb-0 font-size-12">View personal profile details.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-profile-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Edit Profile</h6>
                                            <p class="mb-0 font-size-12">Modify your personal details.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-account-box-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Account settings</h6>
                                            <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-lock-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Privacy Settings</h6>
                                            <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="d-inline-block w-100 text-center p-3">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button type="submit" class="btn btn-primary dark-btn-primary">
                                            Sign out <i class="ri-login-box-line ml-2"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul> --}}
        </nav>


    </div>
</div>
