<div class="nav-bar-header-one">
    <div class="header-logo">
        <a href="{{ route('posts.index')}}">
            <h1>News Site</h1>
        </a>
    </div>
    <div class="toggle-button sidebar-toggle">
        <button type="button" class="item-link">
            <span class="btn-icon-wrap">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
    </div>
</div>
<div class="d-md-none mobile-nav-bar">
    <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
        <i class="far fa-arrow-alt-circle-down"></i>
    </button>
    <button type="button" class="navbar-toggler sidebar-toggle-mobile">
        <i class="fas fa-bars"></i>
    </button>
</div>
<div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
    <ul class="navbar-nav">
        <li class="navbar-item header-search-bar">
            <div class="input-group stylish-input-group">
                <span class="input-group-addon">

                </span>

            </div>
        </li>
    </ul>
    <ul class="navbar-nav">
        <a href="/">frontend </a>
        <li class="navbar-item dropdown header-admin">

            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                <div class="admin-title">
                    <h5 class="item-title">{{ auth()->user()->first_name}} {{ auth()->user()->last_name}}</h5>
                    <span>@if(auth()->user()->roles->isNotEmpty())
                        Role: {{ auth()->user()->roles->first()->name }}
                        @endif</span>
                </div>
                <div class="admin-img">
                    <img src="/admin/assets/img/figure/admin.jpg" alt="Admin">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="item-header">
                    <h6 class="item-title">Steven Zone</h6>
                </div>
                <div class="item-content">
                    <ul class="settings-list">
                        <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                        <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                        <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                        <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                        <li><a href="login.html"><i class="flaticon-turn-off"></i>Log Out</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="navbar-item dropdown header-message">
            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                <i class="far fa-envelope"></i>
                <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                <span>5</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="item-header">
                    <h6 class="item-title">05 Message</h6>
                </div>
                <div class="item-content">
                    <div class="media">
                        <div class="item-img bg-skyblue author-online">
                            <img src="/admin/assets/img/figure/student11.png" alt="img">
                        </div>
                        <div class="media-body space-sm">
                            <div class="item-title">
                                <a href="#">
                                    <span class="item-name">Maria Zaman</span>
                                    <span class="item-time">18:30</span>
                                </a>
                            </div>
                            <p>What is the reason of buy this item.
                                Is it usefull for me.....</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-img bg-yellow author-online">
                            <img src="/admin/assets/img/figure/student12.png" alt="img">
                        </div>
                        <div class="media-body space-sm">
                            <div class="item-title">
                                <a href="#">
                                    <span class="item-name">Benny Roy</span>
                                    <span class="item-time">10:35</span>
                                </a>
                            </div>
                            <p>What is the reason of buy this item.
                                Is it usefull for me.....</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-img bg-pink">
                            <img src="/admin/assets/img/figure/student13.png" alt="img">
                        </div>
                        <div class="media-body space-sm">
                            <div class="item-title">
                                <a href="#">
                                    <span class="item-name">Steven</span>
                                    <span class="item-time">02:35</span>
                                </a>
                            </div>
                            <p>What is the reason of buy this item.
                                Is it usefull for me.....</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-img bg-violet-blue">
                            <img src="/admin/assets/img/figure/student11.png" alt="img">
                        </div>
                        <div class="media-body space-sm">
                            <div class="item-title">
                                <a href="#">
                                    <span class="item-name">Joshep Joe</span>
                                    <span class="item-time">12:35</span>
                                </a>
                            </div>
                            <p>What is the reason of buy this item.
                                Is it usefull for me.....</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="navbar-item dropdown header-notification">
            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                <i class="far fa-bell"></i>
                <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                <span>8</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="item-header">
                    <h6 class="item-title">03 Notifiacations</h6>
                </div>
                <div class="item-content">
                    <div class="media">
                        <div class="item-icon bg-skyblue">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="media-body space-sm">
                            <div class="post-title">Complete Today Task</div>
                            <span>1 Mins ago</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-icon bg-orange">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="media-body space-sm">
                            <div class="post-title">Director Metting</div>
                            <span>20 Mins ago</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-icon bg-violet-blue">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="media-body space-sm">
                            <div class="post-title">Update Password</div>
                            <span>45 Mins ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="navbar-item dropdown header-language">
            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">English</a>
                <a class="dropdown-item" href="#">Uzbek</a>

            </div>
        </li>
    </ul>
</div>
</div>
<!-- Header Menu Area End Here -->
<!-- Page Area Start Here -->
<div class="dashboard-page-one">
    <!-- Sidebar Area Start Here -->
    <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
        <div class="mobile-sidebar-header d-md-none">
            <div class="header-logo">
                <a href="index.html"><img src="/admin/assets/img/logo1.png" alt="logo"></a>
            </div>
        </div>
        <div class="sidebar-menu-content">
            <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="/admin/adminDashboard" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Users</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{ route('users.index')}} " class="nav-link"><i class="fas fa-angle-right"></i>All
                                Users</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="{{ route('categories.index')}}" class="nav-link"><i class="fa-solid fa-table-cells-large"></i><span>Category</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{ route('categories.index')}}" class="nav-link"><i class="fa-solid fa-table-cells-large"></i>All
                                Categories</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('posts.index')}}" class="nav-link">
                        <i class="fa-solid fa-signs-post"></i><span>Posts</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('roles.index')}}" class="nav-link">
                        <i class="fa-solid fa-signs-post"></i><span>Roles</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('permissions.index')}}" class="nav-link">
                        <i class="fa-solid fa-signs-post"></i><span>Permissions</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tags.index')}}" class="nav-link">
                        <i class="fa-solid fa-signs-post"></i><span>Tags</span></a>
                </li>
                <li class="nav-item">
                    <a href="account-settings.html" class="nav-link"><i class="flaticon-settings"></i><span>Account</span></a>
                </li>
            </ul>
        </div>
    </div>