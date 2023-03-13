<!--  BEGIN SIDEBAR  -->
@php
    $prefix=\Illuminate\Support\Facades\Route::current()->getPrefix();
    $rout_name=\Illuminate\Support\Facades\Route::current()->getName();
@endphp
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">


        <div class="navbar-nav theme-brand flex-row  justify-content-center">

            <div class="nav-item sidebar-toggle p-2">

                    <img src="/admin/assets/img/logo.png" width="120" alt="">

            </div>
        </div>
        <div class="profile-info">
            <div class="user-info">
                <div class="profile-img">
                    <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" alt="avatar">
                </div>
                <div class="profile-content">
                    <h6 class="">{{\Illuminate\Support\Facades\Auth::user()->name}}</h6>
                    <p class="">{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                </div>
            </div>
        </div>

        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu {{$rout_name=='client.profile.dashboard' ? 'active' : ''}}">
                <a href="{{route('client.profile.dashboard')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu {{$rout_name=='client.profile.orders' ? 'active' : ''}}">
                <a href="{{route('client.profile.orders')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-shield">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <span>Orders</span>
                    </div>
                </a>
            </li>
            <li class="menu {{$rout_name=='client.profile.account-setting' ? 'active' : ''}}">
                <a href="{{route('client.profile.account-setting')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                        </svg>
                        <span> Account Settings</span>
                    </div>
                </a>
            </li>
            <li class="menu {{$rout_name=='client.profile.pricing-table' ? 'active' : ''}}">
                <a href="{{route('client.profile.pricing-table')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-server">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                        <span>Pricing Table</span>
                    </div>
                </a>
            </li>
            <li class="menu {{$rout_name=='client.profile.my-team' ? 'active' : ''}}">
                <a href="{{route('client.profile.my-team')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>My Team</span>
                    </div>
                </a>
            </li>

            {{--          <li class="menu {{$rout_name=='client.profile.pricing-table' ? 'active' : ''}}">
                          <a href="{{route('client.profile.pricing-table')}}" aria-expanded="false" class="dropdown-toggle">
                              <div class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                       class="feather feather-map">
                                      <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                      <line x1="8" y1="2" x2="8" y2="18"></line>
                                      <line x1="16" y1="6" x2="16" y2="22"></line>
                                  </svg>
                                  <span>VPN</span>
                              </div>
                          </a>
                      </li>--}}
            <li class="menu {{$rout_name=='client.profile.wallet-index' ? 'active' : ''}}">
                <a href="{{route('client.profile.wallet-index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i> <img src="/admin/assets/img/wallet1.png"  width="20" style="margin-right: 6px" alt=""></i>
                        <span>Wallet Details</span>
                    </div>
                </a>
            </li>
            <li class="menu {{$rout_name=='client.logout' ? 'active' : ''}}">
                <a href="{{route('client.logout')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span>Log Out</span>
                    </div>
                </a>
            </li>


        </ul>

    </nav>

</div>
<!--  END SIDEBAR  -->
