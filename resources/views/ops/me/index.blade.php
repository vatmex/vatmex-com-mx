<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../backend/"
  data-template="horizontal-menu-template"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>User View - Pages | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../backend/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../backend/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../backend/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="../../backend/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="../../backend/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../backend/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />

    <link rel="stylesheet" href="../../backend/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../backend/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="../../backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/sweetalert2/sweetalert2.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../backend/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="../../backend/vendor/css/pages/page-user-view.css" />

    <!-- Helpers -->
    <script src="../../backend/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../backend/vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../backend/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="container-xxl">
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
              <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                  <img src="" alt="" class="logo-image" />
                </span>
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="ti ti-x ti-md align-middle"></i>
              </a>
            </div>

            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="ti ti-language rounded-circle ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                        <span>English</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                        <span>French</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                        <span>Arabic</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                        <span>German</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item dropdown-style-switcher dropdown">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="ti ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                        <span class="align-middle"><i class="ti ti-sun ti-md me-3"></i>Light</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                        <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                        <span class="align-middle"
                          ><i class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span
                        >
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../backend/img/avatars/1.png" alt class="rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
                              <img src="../../backend/img/avatars/1.png" alt class="rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">John Doe</h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i
                          ><span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center"
                            >4</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-pricing.html">
                        <i class="ti ti-currency-dollar me-3 ti-md"></i><span class="align-middle">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-faq.html">
                        <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <div class="d-grid px-2 pt-2 pb-1">
                        <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                          <small class="align-middle">Logout</small>
                          <i class="ti ti-logout ms-2 ti-14px"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
              <input
                type="text"
                class="form-control search-input border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="ti ti-x search-toggler cursor-pointer"></i>
            </div>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
              <div class="container-xxl d-flex h-100">
                <ul class="menu-inner pb-2 pb-xl-0">
                  <!-- Dashboards -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-smart-home"></i>
                      <div data-i18n="Dashboards">Dashboards</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="index.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                          <div data-i18n="Analytics">Analytics</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="dashboards-crm.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                          <div data-i18n="CRM">CRM</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-ecommerce-dashboard.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                          <div data-i18n="eCommerce">eCommerce</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-logistics-dashboard.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-truck"></i>
                          <div data-i18n="Logistics">Logistics</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-academy-dashboard.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-book"></i>
                          <div data-i18n="Academy">Academy</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Layouts -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                      <div data-i18n="Layouts">Layouts</div>
                    </a>

                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="layouts-without-menu.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-menu-2"></i>
                          <div data-i18n="Without menu">Without menu</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="../vertical-menu-template/" class="menu-link" target="_blank">
                          <i class="menu-icon tf-icons ti ti-layout-distribute-vertical"></i>
                          <div data-i18n="Vertical">Vertical</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="layouts-fluid.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-maximize"></i>
                          <div data-i18n="Fluid">Fluid</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="layouts-container.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
                          <div data-i18n="Container">Container</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="layouts-blank.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-square"></i>
                          <div data-i18n="Blank">Blank</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Apps -->
                  <li class="menu-item active">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                      <div data-i18n="Apps">Apps</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="app-email.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-mail"></i>
                          <div data-i18n="Email">Email</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-chat.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-messages"></i>
                          <div data-i18n="Chat">Chat</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-calendar.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-calendar"></i>
                          <div data-i18n="Calendar">Calendar</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-kanban.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                          <div data-i18n="Kanban">Kanban</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                          <div data-i18n="eCommerce">eCommerce</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-ecommerce-dashboard.html" class="menu-link">
                              <div data-i18n="Dashboard">Dashboard</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Products">Products</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="app-ecommerce-product-list.html" class="menu-link">
                                  <div data-i18n="Product List">Product List</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-product-add.html" class="menu-link">
                                  <div data-i18n="Add Product">Add Product</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-category-list.html" class="menu-link">
                                  <div data-i18n="Category List">Category List</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Order">Order</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="app-ecommerce-order-list.html" class="menu-link">
                                  <div data-i18n="Order List">Order List</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-order-details.html" class="menu-link">
                                  <div data-i18n="Order Details">Order Details</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Customer">Customer</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="app-ecommerce-customer-all.html" class="menu-link">
                                  <div data-i18n="All Customers">All Customers</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                  <div data-i18n="Customer Details">Customer Details</div>
                                </a>
                                <ul class="menu-sub">
                                  <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                                      <div data-i18n="Overview">Overview</div>
                                    </a>
                                  </li>
                                  <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                                      <div data-i18n="Security">Security</div>
                                    </a>
                                  </li>
                                  <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                                      <div data-i18n="Address & Billing">Address & Billing</div>
                                    </a>
                                  </li>
                                  <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                                      <div data-i18n="Notifications">Notifications</div>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                              <div data-i18n="Manage Reviews">Manage Reviews</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-ecommerce-referral.html" class="menu-link">
                              <div data-i18n="Referrals">Referrals</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Settings">Settings</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-detail.html" class="menu-link">
                                  <div data-i18n="Store Details">Store Details</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-payments.html" class="menu-link">
                                  <div data-i18n="Payments">Payments</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                                  <div data-i18n="Checkout">Checkout</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                                  <div data-i18n="Shipping & Delivery">Shipping & Delivery</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-locations.html" class="menu-link">
                                  <div data-i18n="Locations">Locations</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-notifications.html" class="menu-link">
                                  <div data-i18n="Notifications">Notifications</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-book"></i>
                          <div data-i18n="Academy">Academy</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-academy-dashboard.html" class="menu-link">
                              <div data-i18n="Dashboard">Dashboard</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-academy-course.html" class="menu-link">
                              <div data-i18n="My Course">My Course</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-academy-course-details.html" class="menu-link">
                              <div data-i18n="Course Details">Course Details</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-truck"></i>
                          <div data-i18n="Logistics">Logistics</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-logistics-dashboard.html" class="menu-link">
                              <div data-i18n="Dashboard">Dashboard</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-logistics-fleet.html" class="menu-link">
                              <div data-i18n="Fleet">Fleet</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                          <div data-i18n="Invoice">Invoice</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-invoice-list.html" class="menu-link">
                              <div data-i18n="List">List</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-invoice-preview.html" class="menu-link">
                              <div data-i18n="Preview">Preview</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-invoice-edit.html" class="menu-link">
                              <div data-i18n="Edit">Edit</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-invoice-add.html" class="menu-link">
                              <div data-i18n="Add">Add</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item active">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-users"></i>
                          <div data-i18n="Users">Users</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-user-list.html" class="menu-link">
                              <div data-i18n="List">List</div>
                            </a>
                          </li>
                          <li class="menu-item active">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="View">View</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item active">
                                <a href="app-user-view-account.html" class="menu-link">
                                  <div data-i18n="Account">Account</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-user-view-security.html" class="menu-link">
                                  <div data-i18n="Security">Security</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-user-view-billing.html" class="menu-link">
                                  <div data-i18n="Billing & Plans">Billing & Plans</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-user-view-notifications.html" class="menu-link">
                                  <div data-i18n="Notifications">Notifications</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-user-view-connections.html" class="menu-link">
                                  <div data-i18n="Connections">Connections</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-settings"></i>
                          <div data-i18n="Roles & Permissions">Roles & Permission</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-access-roles.html" class="menu-link">
                              <div data-i18n="Roles">Roles</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-access-permission.html" class="menu-link">
                              <div data-i18n="Permission">Permission</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Pages -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-file"></i>

                      <div data-i18n="Pages">Pages</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-files"></i>
                          <div data-i18n="Front Pages">Front Pages</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="../front-pages/landing-page.html" class="menu-link" target="_blank">
                              <div data-i18n="Landing">Landing</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="../front-pages/pricing-page.html" class="menu-link" target="_blank">
                              <div data-i18n="Pricing">Pricing</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
                              <div data-i18n="Payment">Payment</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
                              <div data-i18n="Checkout">Checkout</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
                              <div data-i18n="Help Center">Help Center</div>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-user-circle"></i>
                          <div data-i18n="User Profile">User Profile</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="pages-profile-user.html" class="menu-link">
                              <div data-i18n="Profile">Profile</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-profile-teams.html" class="menu-link">
                              <div data-i18n="Teams">Teams</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-profile-projects.html" class="menu-link">
                              <div data-i18n="Projects">Projects</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-profile-connections.html" class="menu-link">
                              <div data-i18n="Connections">Connections</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-settings"></i>
                          <div data-i18n="Account Settings">Account Settings</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="pages-account-settings-account.html" class="menu-link">
                              <div data-i18n="Account">Account</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-account-settings-security.html" class="menu-link">
                              <div data-i18n="Security">Security</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-account-settings-billing.html" class="menu-link">
                              <div data-i18n="Billing & Plans">Billing & Plans</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-account-settings-notifications.html" class="menu-link">
                              <div data-i18n="Notifications">Notifications</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-account-settings-connections.html" class="menu-link">
                              <div data-i18n="Connections">Connections</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="pages-faq.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-help"></i>
                          <div data-i18n="FAQ">FAQ</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="pages-pricing.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-diamond"></i>
                          <div data-i18n="Pricing">Pricing</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                          <div data-i18n="Misc">Misc</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="pages-misc-error.html" class="menu-link" target="_blank">
                              <div data-i18n="Error">Error</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                              <div data-i18n="Under Maintenance">Under Maintenance</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                              <div data-i18n="Coming Soon">Coming Soon</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                              <div data-i18n="Not Authorized">Not Authorized</div>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-lock"></i>
                          <div data-i18n="Authentications">Authentications</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Login">Login</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-login-cover.html" class="menu-link" target="_blank">
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Register">Register</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-register-cover.html" class="menu-link" target="_blank">
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                                  <div data-i18n="Multi-steps">Multi-steps</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Verify Email">Verify Email</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Reset Password">Reset Password</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Forgot Password">Forgot Password</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Two Steps">Two Steps</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-forms"></i>
                          <div data-i18n="Wizard Examples">Wizard Examples</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="wizard-ex-checkout.html" class="menu-link">
                              <div data-i18n="Checkout">Checkout</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="wizard-ex-property-listing.html" class="menu-link">
                              <div data-i18n="Property Listing">Property Listing</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="wizard-ex-create-deal.html" class="menu-link">
                              <div data-i18n="Create Deal">Create Deal</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-square"></i>
                          <div data-i18n="Modal Examples">Modal Examples</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Components -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                      <div data-i18n="Components">Components</div>
                    </a>
                    <ul class="menu-sub">
                      <!-- Cards -->
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-id"></i>
                          <div data-i18n="Cards">Cards</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="cards-basic.html" class="menu-link">
                              <div data-i18n="Basic">Basic</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="cards-advance.html" class="menu-link">
                              <div data-i18n="Advance">Advance</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="cards-statistics.html" class="menu-link">
                              <div data-i18n="Statistics">Statistics</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="cards-analytics.html" class="menu-link">
                              <div data-i18n="Analytics">Analytics</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="cards-actions.html" class="menu-link">
                              <div data-i18n="Actions">Actions</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- User interface -->
                      <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                          <div data-i18n="User interface">User interface</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="ui-accordion.html" class="menu-link">
                              <div data-i18n="Accordion">Accordion</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-alerts.html" class="menu-link">
                              <div data-i18n="Alerts">Alerts</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-badges.html" class="menu-link">
                              <div data-i18n="Badges">Badges</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-buttons.html" class="menu-link">
                              <div data-i18n="Buttons">Buttons</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-carousel.html" class="menu-link">
                              <div data-i18n="Carousel">Carousel</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-collapse.html" class="menu-link">
                              <div data-i18n="Collapse">Collapse</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-dropdowns.html" class="menu-link">
                              <div data-i18n="Dropdowns">Dropdowns</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-footer.html" class="menu-link">
                              <div data-i18n="Footer">Footer</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-list-groups.html" class="menu-link">
                              <div data-i18n="List groups">List groups</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-modals.html" class="menu-link">
                              <div data-i18n="Modals">Modals</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-navbar.html" class="menu-link">
                              <div data-i18n="Navbar">Navbar</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-offcanvas.html" class="menu-link">
                              <div data-i18n="Offcanvas">Offcanvas</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                              <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-progress.html" class="menu-link">
                              <div data-i18n="Progress">Progress</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-spinners.html" class="menu-link">
                              <div data-i18n="Spinners">Spinners</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-tabs-pills.html" class="menu-link">
                              <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-toasts.html" class="menu-link">
                              <div data-i18n="Toasts">Toasts</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-tooltips-popovers.html" class="menu-link">
                              <div data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-typography.html" class="menu-link">
                              <div data-i18n="Typography">Typography</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- Extended components -->
                      <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-components"></i>
                          <div data-i18n="Extended UI">Extended UI</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="extended-ui-avatar.html" class="menu-link">
                              <div data-i18n="Avatar">Avatar</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-blockui.html" class="menu-link">
                              <div data-i18n="BlockUI">BlockUI</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-drag-and-drop.html" class="menu-link">
                              <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-media-player.html" class="menu-link">
                              <div data-i18n="Media Player">Media Player</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                              <div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-star-ratings.html" class="menu-link">
                              <div data-i18n="Star Ratings">Star Ratings</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-sweetalert2.html" class="menu-link">
                              <div data-i18n="SweetAlert2">SweetAlert2</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-text-divider.html" class="menu-link">
                              <div data-i18n="Text Divider">Text Divider</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <div data-i18n="Timeline">Timeline</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="extended-ui-timeline-basic.html" class="menu-link">
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                                  <div data-i18n="Fullscreen">Fullscreen</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-tour.html" class="menu-link">
                              <div data-i18n="Tour">Tour</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-treeview.html" class="menu-link">
                              <div data-i18n="Treeview">Treeview</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-misc.html" class="menu-link">
                              <div data-i18n="Miscellaneous">Miscellaneous</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- Icons -->
                      <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-brand-tabler"></i>
                          <div data-i18n="Icons">Icons</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="icons-tabler.html" class="menu-link">
                              <div data-i18n="Tabler">Tabler</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="icons-font-awesome.html" class="menu-link">
                              <div data-i18n="Fontawesome">Fontawesome</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Forms -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-forms"></i>
                      <div data-i18n="Forms">Forms</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                          <div data-i18n="Form Elements">Form Elements</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="forms-basic-inputs.html" class="menu-link">
                              <div data-i18n="Basic Inputs">Basic Inputs</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-input-groups.html" class="menu-link">
                              <div data-i18n="Input groups">Input groups</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-custom-options.html" class="menu-link">
                              <div data-i18n="Custom Options">Custom Options</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-editors.html" class="menu-link">
                              <div data-i18n="Editors">Editors</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-file-upload.html" class="menu-link">
                              <div data-i18n="File Upload">File Upload</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-pickers.html" class="menu-link">
                              <div data-i18n="Pickers">Pickers</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-selects.html" class="menu-link">
                              <div data-i18n="Select & Tags">Select &amp; Tags</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-sliders.html" class="menu-link">
                              <div data-i18n="Sliders">Sliders</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-switches.html" class="menu-link">
                              <div data-i18n="Switches">Switches</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-extras.html" class="menu-link">
                              <div data-i18n="Extras">Extras</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
                          <div data-i18n="Form Layouts">Form Layouts</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="form-layouts-vertical.html" class="menu-link">
                              <div data-i18n="Vertical Form">Vertical Form</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="form-layouts-horizontal.html" class="menu-link">
                              <div data-i18n="Horizontal Form">Horizontal Form</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="form-layouts-sticky.html" class="menu-link">
                              <div data-i18n="Sticky Actions">Sticky Actions</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                          <div data-i18n="Form Wizard">Form Wizard</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="form-wizard-numbered.html" class="menu-link">
                              <div data-i18n="Numbered">Numbered</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="form-wizard-icons.html" class="menu-link">
                              <div data-i18n="Icons">Icons</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="form-validation.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-checkbox"></i>
                          <div data-i18n="Form Validation">Form Validation</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Tables -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                      <div data-i18n="Tables">Tables</div>
                    </a>
                    <ul class="menu-sub">
                      <!-- Tables -->
                      <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-table"></i>
                          <div data-i18n="Tables">Tables</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                          <div data-i18n="Datatables">Datatables</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="tables-datatables-basic.html" class="menu-link">
                              <div data-i18n="Basic">Basic</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="tables-datatables-advanced.html" class="menu-link">
                              <div data-i18n="Advanced">Advanced</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="tables-datatables-extensions.html" class="menu-link">
                              <div data-i18n="Extensions">Extensions</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Charts & Maps -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-chart-bar"></i>
                      <div data-i18n="Charts & Maps">Charts & Maps</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                          <div data-i18n="Charts">Charts</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="charts-apex.html" class="menu-link">
                              <div data-i18n="Apex Charts">Apex Charts</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="charts-chartjs.html" class="menu-link">
                              <div data-i18n="ChartJS">ChartJS</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="maps-leaflet.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-map"></i>
                          <div data-i18n="Leaflet Maps">Leaflet Maps</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Misc -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-box-multiple"></i>
                      <div data-i18n="Misc">Misc</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                          <div data-i18n="Support">Support</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a
                          href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                          target="_blank"
                          class="menu-link">
                          <i class="menu-icon tf-icons ti ti-file-description"></i>
                          <div data-i18n="Documentation">Documentation</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </aside>
            <!-- / Menu -->

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- User Sidebar -->
                <div class="col-xl-4 col-lg-5 order-1 order-md-0">
                  <!-- User Card -->
                  <div class="card mb-6">
                    <div class="card-body pt-12">
                      <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">
                          <img
                            class="img-fluid rounded mb-4"
                            src="../../backend/img/avatars/1.png"
                            height="120"
                            width="120"
                            alt="User avatar" />
                          <div class="user-info text-center">
                            <h5>Violet Mendoza</h5>
                            <span class="badge bg-label-secondary">Author</span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-around flex-wrap my-6 gap-0 gap-md-3 gap-lg-4">
                        <div class="d-flex align-items-center me-5 gap-4">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-primary rounded">
                              <i class="ti ti-checkbox ti-lg"></i>
                            </div>
                          </div>
                          <div>
                            <h5 class="mb-0">1.23k</h5>
                            <span>Task Done</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-4">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-primary rounded">
                              <i class="ti ti-briefcase ti-lg"></i>
                            </div>
                          </div>
                          <div>
                            <h5 class="mb-0">568</h5>
                            <span>Project Done</span>
                          </div>
                        </div>
                      </div>
                      <h5 class="pb-4 border-bottom mb-4">Details</h5>
                      <div class="info-container">
                        <ul class="list-unstyled mb-6">
                          <li class="mb-2">
                            <span class="h6">Username:</span>
                            <span>@violet.dev</span>
                          </li>
                          <li class="mb-2">
                            <span class="h6">Email:</span>
                            <span>vafgot@vultukir.org</span>
                          </li>
                          <li class="mb-2">
                            <span class="h6">Status:</span>
                            <span>Active</span>
                          </li>
                          <li class="mb-2">
                            <span class="h6">Role:</span>
                            <span>Author</span>
                          </li>
                          <li class="mb-2">
                            <span class="h6">Tax id:</span>
                            <span>Tax-8965</span>
                          </li>
                          <li class="mb-2">
                            <span class="h6">Contact:</span>
                            <span>(123) 456-7890</span>
                          </li>
                          <li class="mb-2">
                            <span class="h6">Languages:</span>
                            <span>French</span>
                          </li>
                          <li class="mb-2">
                            <span class="h6">Country:</span>
                            <span>England</span>
                          </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                          <a
                            href="javascript:;"
                            class="btn btn-primary me-4"
                            data-bs-target="#editUser"
                            data-bs-toggle="modal"
                            >Edit</a
                          >
                          <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspend</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /User Card -->
                </div>
                <!--/ User Sidebar -->

                <!-- User Content -->
                <div class="col-xl-8 col-lg-7 order-0 order-md-1">
                  <!-- User Pills -->
                  <div class="nav-align-top">
                    <ul class="nav nav-pills flex-column flex-md-row flex-wrap mb-6 row-gap-2">
                      <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"
                          ><i class="ti ti-user-check ti-sm me-1_5"></i>Perfil</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="app-user-view-billing.html"
                          ><i class="ti ti-bookmark ti-sm me-1_5"></i>Entrenamiento</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="app-user-view-connections.html"
                          ><i class="ti ti-link ti-sm me-1_5"></i>Cuentas Conectadas</a
                        >
                      </li>
                    </ul>
                  </div>
                  <!--/ User Pills -->

                  <!-- Activity Timeline -->
                  <div class="card mb-6">
                    <h5 class="card-header">Tu actividad en Vatmex</h5>
                    <div class="card-body pt-1">
                      <ul class="timeline mb-0">
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-primary"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb- 3">
                              <h6 class="mb-0">12 Invoices have been paid</h6>
                              <small class="text-muted">12 min ago</small>
                            </div>
                            <p class="mb-2">Invoices have been paid to the company</p>
                            <div class="d-flex align-items-center mb-2">
                              <div class="badge bg-lighter rounded d-flex align-items-center">
                                <img src="../../backend//img/icons/misc/pdf.png" alt="img" width="15" class="me-2" />
                                <span class="h6 mb-0 text-body">invoices.pdf</span>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-success"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-3">
                              <h6 class="mb-0">Client Meeting</h6>
                              <small class="text-muted">45 min ago</small>
                            </div>
                            <p class="mb-2">Project meeting with john @10:15am</p>
                            <div class="d-flex justify-content-between flex-wrap gap-2 mb-2">
                              <div class="d-flex flex-wrap align-items-center mb-50">
                                <div class="avatar avatar-sm me-2">
                                  <img src="../../backend/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div>
                                  <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                                  <small>CEO of Pixinvent</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-info"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-3">
                              <h6 class="mb-0">Create a new project for client</h6>
                              <small class="text-muted">2 Day Ago</small>
                            </div>
                            <p class="mb-2">6 team members in a project</p>
                            <ul class="list-group list-group-flush">
                              <li
                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                                <div class="d-flex flex-wrap align-items-center">
                                  <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      title="Vinnie Mostowy"
                                      class="avatar pull-up">
                                      <img class="rounded-circle" src="../../backend/img/avatars/5.png" alt="Avatar" />
                                    </li>
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      title="Allen Rieske"
                                      class="avatar pull-up">
                                      <img class="rounded-circle" src="../../backend/img/avatars/12.png" alt="Avatar" />
                                    </li>
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      title="Julee Rossignol"
                                      class="avatar pull-up">
                                      <img class="rounded-circle" src="../../backend/img/avatars/6.png" alt="Avatar" />
                                    </li>
                                    <li class="avatar">
                                      <span
                                        class="avatar-initial rounded-circle pull-up text-heading"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="bottom"
                                        title="3 more"
                                        >+3</span
                                      >
                                    </li>
                                  </ul>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /Activity Timeline -->
                </div>
                <!--/ User Content -->
              </div>

              <!-- Modal -->
              <!-- Edit User Modal -->
              <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                  <div class="modal-content">
                    <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      <div class="text-center mb-6">
                        <h4 class="mb-2">Edit User Information</h4>
                        <p>Updating user details will receive a privacy audit.</p>
                      </div>
                      <form id="editUserForm" class="row g-6" onsubmit="return false">
                        <div class="col-12 col-md-6">
                          <label class="form-label" for="modalEditUserFirstName">First Name</label>
                          <input
                            type="text"
                            id="modalEditUserFirstName"
                            name="modalEditUserFirstName"
                            class="form-control"
                            placeholder="John"
                            value="John" />
                        </div>
                        <div class="col-12 col-md-6">
                          <label class="form-label" for="modalEditUserLastName">Last Name</label>
                          <input
                            type="text"
                            id="modalEditUserLastName"
                            name="modalEditUserLastName"
                            class="form-control"
                            placeholder="Doe"
                            value="Doe" />
                        </div>
                        <div class="col-12">
                          <label class="form-label" for="modalEditUserName">Username</label>
                          <input
                            type="text"
                            id="modalEditUserName"
                            name="modalEditUserName"
                            class="form-control"
                            placeholder="johndoe007"
                            value="johndoe007" />
                        </div>
                        <div class="col-12 col-md-6">
                          <label class="form-label" for="modalEditUserEmail">Email</label>
                          <input
                            type="text"
                            id="modalEditUserEmail"
                            name="modalEditUserEmail"
                            class="form-control"
                            placeholder="example@domain.com"
                            value="example@domain.com" />
                        </div>
                        <div class="col-12 col-md-6">
                          <label class="form-label" for="modalEditUserStatus">Status</label>
                          <select
                            id="modalEditUserStatus"
                            name="modalEditUserStatus"
                            class="select2 form-select"
                            aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                            <option value="3">Suspended</option>
                          </select>
                        </div>
                        <div class="col-12 col-md-6">
                          <label class="form-label" for="modalEditTaxID">Tax ID</label>
                          <input
                            type="text"
                            id="modalEditTaxID"
                            name="modalEditTaxID"
                            class="form-control modal-edit-tax-id"
                            placeholder="123 456 7890"
                            value="123 456 7890" />
                        </div>
                        <div class="col-12 col-md-6">
                          <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                          <div class="input-group">
                            <span class="input-group-text">US (+1)</span>
                            <input
                              type="text"
                              id="modalEditUserPhone"
                              name="modalEditUserPhone"
                              class="form-control phone-number-mask"
                              placeholder="202 555 0111"
                              value="202 555 0111" />
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <label class="form-label" for="modalEditUserLanguage">Language</label>
                          <select
                            id="modalEditUserLanguage"
                            name="modalEditUserLanguage"
                            class="select2 form-select"
                            multiple>
                            <option value="">Select</option>
                            <option value="english" selected>English</option>
                            <option value="spanish">Spanish</option>
                            <option value="french">French</option>
                            <option value="german">German</option>
                            <option value="dutch">Dutch</option>
                            <option value="hebrew">Hebrew</option>
                            <option value="sanskrit">Sanskrit</option>
                            <option value="hindi">Hindi</option>
                          </select>
                        </div>
                        <div class="col-12 col-md-6">
                          <label class="form-label" for="modalEditUserCountry">Country</label>
                          <select
                            id="modalEditUserCountry"
                            name="modalEditUserCountry"
                            class="select2 form-select"
                            data-allow-clear="true">
                            <option value="">Select</option>
                            <option value="Australia">Australia</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Canada">Canada</option>
                            <option value="China">China</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="India" selected>India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Japan">Japan</option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                          </select>
                        </div>
                        <div class="col-12">
                          <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="editBillingAddress" />
                            <label for="editBillingAddress" class="switch-label">Use as a billing address?</label>
                          </div>
                        </div>
                        <div class="col-12 text-center">
                          <button type="submit" class="btn btn-primary me-3">Submit</button>
                          <button
                            type="reset"
                            class="btn btn-label-secondary"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                            Cancel
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Edit User Modal -->

              <!-- Add New Credit Card Modal -->
              <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                  <div class="modal-content">
                    <div class="modal-body p-4">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      <div class="text-center mb-6">
                        <h4 class="mb-2">Upgrade Plan</h4>
                        <p>Choose the best plan for user.</p>
                      </div>
                      <form id="upgradePlanForm" class="row g-4" onsubmit="return false">
                        <div class="col-sm-9">
                          <label class="form-label" for="choosePlan">Choose Plan</label>
                          <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                            <option selected>Choose Plan</option>
                            <option value="standard">Standard - $99/month</option>
                            <option value="exclusive">Exclusive - $249/month</option>
                            <option value="Enterprise">Enterprise - $499/month</option>
                          </select>
                        </div>
                        <div class="col-sm-3 d-flex align-items-end">
                          <button type="submit" class="btn btn-primary">Upgrade</button>
                        </div>
                      </form>
                    </div>
                    <hr class="mx-4 my-2" />
                    <div class="modal-body p-4">
                      <p class="mb-0">User current plan is standard plan</p>
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="d-flex justify-content-center me-2 mt-1">
                          <sup class="h6 pricing-currency pt-1 mt-2 mb-0 me-1 text-primary">$</sup>
                          <h1 class="mb-0 text-primary">99</h1>
                          <sub class="pricing-duration mt-auto mb-5 pb-1 small text-body">/month</sub>
                        </div>
                        <button class="btn btn-label-danger cancel-subscription">Cancel Subscription</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Add New Credit Card Modal -->

              <!-- /Modal -->
            </div>
            <!--/ Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../backend/vendor/libs/jquery/jquery.js"></script>
    <script src="../../backend/vendor/libs/popper/popper.js"></script>
    <script src="../../backend/vendor/js/bootstrap.js"></script>
    <script src="../../backend/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../backend/vendor/libs/hammer/hammer.js"></script>
    <script src="../../backend/vendor/libs/i18n/i18n.js"></script>
    <script src="../../backend/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../backend/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../backend/vendor/libs/moment/moment.js"></script>
    <script src="../../backend/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../backend/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="../../backend/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../backend/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../backend/vendor/libs/select2/select2.js"></script>
    <script src="../../backend/vendor/libs/@form-validation/popular.js"></script>
    <script src="../../backend/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="../../backend/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="../../backend/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../backend/js/modal-edit-user.js"></script>
    <script src="../../backend/js/app-user-view.js"></script>
    <script src="../../backend/js/app-user-view-account.js"></script>
    <script src="../../backend/js/pages-profile.js"></script>
  </body>
</html>
