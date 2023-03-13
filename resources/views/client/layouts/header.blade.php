<!--  BEGIN NAVBAR  -->
<div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header">
        <a href="javascript:void(0);" class="sidebarCollapse">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </a>
        <ul class="navbar-item flex-row ms-lg-auto ms-0">

            <li class="nav-item dropdown language-dropdown">
                <a href="javascript:0" class="nav-link dropdown-toggle" id="language-dropdown"
                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/admin/src/assets/img/1x1/us.svg" class="flag-width" alt="flag">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    <a  href="{{route('lang','en')}}" class="dropdown-item d-flex" ><img
                            src="/admin/src/assets/img/1x1/us.svg" class="flag-width" alt="flag"> <span
                            class="align-self-center">&nbsp;English</span></a>
                    <a  href="{{route('lang','fa')}}" class="dropdown-item d-flex"><img
                            src="/admin/assets/img/iran1.png" class="flag-width" alt="flag"> <span
                            class="align-self-center">Persian</span></a>

                </div>
            </li>

            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-container">
                        <div class="avatar avatar-sm avatar-indicators avatar-online">
                            <img alt="avatar" src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}"
                                 class="rounded-circle">
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->
