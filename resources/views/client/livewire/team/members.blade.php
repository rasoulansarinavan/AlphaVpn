<div class="layout-px-spacing">

    @push('link')
        <link href="/admin/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/admin/src/assets/css/dark/elements/alert.css">

        <link href="/admin/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="/admin/src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet"
              type="text/css"/>
        <link rel="stylesheet" type="text/css" href="/admin/src/assets/css/dark/forms/switches.css">
        <link href="/admin/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

        <link href="/admin/src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="/admin/src/plugins/css/dark/table/datatable/dt-global_style.css">
        <link href="/admin/src/assets/css/dark/apps/invoice-list.css" rel="stylesheet" type="text/css"/>
    @endpush

    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2>My Team</h2>

                        <ul class="nav nav-pills" id="animateLine" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab"
                                        href="#animated-underline-home" role="tab"
                                        aria-controls="animated-underline-home" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                    </svg>
                                    level 1
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab"
                                        href="#animated-underline-profile" role="tab"
                                        aria-controls="animated-underline-profile" aria-selected="false" tabindex="-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    level 2
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab"
                                        href="#animated-underline-profile" role="tab"
                                        aria-controls="animated-underline-profile" aria-selected="false" tabindex="-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        <path d="M16 3.13a4 4 0 0 1 8 8.75"></path>
                                    </svg>
                                    level 3
                                </button>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="animateLineContent-4">
                    <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                         aria-labelledby="animated-underline-home-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing layout-spacing m-0">
                                <div class="widget-content widget-content-area br-8">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date</th>
                                                <th class="text-center" scope="col">Sales</th>
                                                <th class="text-center" scope="col">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Shaun Park</td>
                                                <td>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                    <span class="table-inner-text">25 Apr</span>
                                                </td>
                                                <td class="text-center">320</td>
                                                <td class="text-center">
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Alma Clarke</td>
                                                <td>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                    <span class="table-inner-text">26 Apr</span>
                                                </td>
                                                <td class="text-center">110</td>
                                                <td class="text-center">
                                                    <span class="badge badge-light-secondary">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Vincent Carpenter</td>
                                                <td>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                    <span class="table-inner-text">05 May</span>
                                                </td>
                                                <td class="text-center">210</td>
                                                <td class="text-center">
                                                    <span class="badge badge-light-danger">Rejected</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Xavier</td>
                                                <td>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                    <span class="table-inner-text">18 May</span>
                                                </td>
                                                <td class="text-center">784</td>
                                                <td class="text-center">
                                                    <span class="badge badge-light-info">In Progress</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel"
                         aria-labelledby="animated-underline-profile-tab">
                        <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing layout-spacing m-0">
                            <div class="widget-content widget-content-area br-8">
                                <table id="invoice-list" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="checkbox-column"> Record no.</th>
                                        <th>Invoice Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#098424</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-12.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Alma Clarke </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> alma.clarke@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$234.40</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 10 Feb </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#095841</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-8.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Kelly Young </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> youngkelly@hotmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-warning inv-status">Pending</span></td>
                                        <td><span class="inv-amount">$49.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 06 Feb </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#091768</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-7.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Vincent Carpenter </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> vincentcarpenter@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$400</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 30 Jan </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#089472</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-1.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Andy King </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> kingandy07@company.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$149.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 28 Jan </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#087916</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-15.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Mary McDonald </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> maryDonald007@gamil.com</span>
                                        </td>
                                        <td><span class="badge badge-light-warning inv-status">Pending</span></td>
                                        <td><span class="inv-amount">$79.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 25 Jan </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#086773</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-14.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Nia Hillyer </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> niahillyer666@comapny.com</span>
                                        </td>
                                        <td><span class="badge badge-light-warning inv-status">Pending</span></td>
                                        <td><span class="inv-amount">$59.21</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 20 Jan </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#086643</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-11.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Amy Diaz </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> amy968@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$100.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 14 Jan </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#084743</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-18.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Donna Rogers </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> donnaRogers@hotmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$405.15</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 03 Jan </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#082693</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-24.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Grace Roberts </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> graceRoberts@company.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$344.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 31 Dec </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#081681</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-32.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> James Taylor </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> jamestaylor468@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-warning inv-status">Pending</span></td>
                                        <td><span class="inv-amount">$20.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 27 Dec </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#081452</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-30.png">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Alexander Gray </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> alexGray3188@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$1044.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 20 Dec </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#081451</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-28.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Laurie Fox </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> lauriefox@company.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$2275.45</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 15 Dec </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#098425</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-4.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Felicia Terry </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> feliciaterry@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$234.40</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 10 Feb </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#098445</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-9.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Carol Mack </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> carolmack@hotmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-warning inv-status">Pending</span></td>
                                        <td><span class="inv-amount">$49.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 06 Feb </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#099825</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-21.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Ian Munoz </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> ianMunoz@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$400</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 10 Feb </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#099835</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-34.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Devin Cole </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> devincole46@company.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$149.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 20 Feb </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#099859</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-31.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Nina Flores </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> ninaFlores207@gamil.com</span>
                                        </td>
                                        <td><span class="badge badge-light-warning inv-status">Pending</span></td>
                                        <td><span class="inv-amount">$79.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 01 Mar </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#099989</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-33.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Leah Romero </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> leahRomero61@comapny.com</span>
                                        </td>
                                        <td><span class="badge badge-light-warning inv-status">Pending</span></td>
                                        <td><span class="inv-amount">$59.21</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 06 Mar </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#101261</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-22.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Kelli Myers </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> kelli968@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$100.00</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 10 Mar </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td><a href="./app-invoice-preview.html"><span class="inv-number">#102261</span></a>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="../src/assets/img/profile-2.jpeg">
                                                </div>
                                                <p class="align-self-center mb-0 user-name"> Susan Norton </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg> susanNorton@hotmail.com</span>
                                        </td>
                                        <td><span class="badge badge-light-success inv-status">Paid</span></td>
                                        <td><span class="inv-amount">$405.15</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-calendar"><rect x="3"
                                                                                                               y="4"
                                                                                                               width="18"
                                                                                                               height="18"
                                                                                                               rx="2"
                                                                                                               ry="2"></rect><line
                                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8"
                                                                                                   y2="6"></line><line
                                                        x1="3" y1="10" x2="21" y2="10"></line></svg> 15 Mar </span></td>
                                        <td>
                                            <a class="badge badge-light-primary text-start me-2 action-edit"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path
                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                            <a class="badge badge-light-danger text-start action-delete"
                                               href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>
    @push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
                integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/admin/src/plugins/src/table/datatable/datatables.js"></script>
        <script src="/admin/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
        <script src="/admin/src/assets/js/apps/invoice-list.js"></script>
    @endpush
</div>
