<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../arogn/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../argon/img/favicon.png">
  
  <title>
      CLINWALLET
  </title>
  
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  
  <!-- Nucleo Icons -->
  <link href="../../argon/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../argon/css/nucleo-svg.css" rel="stylesheet" />
  
  <!-- Font Awesome Icons -->
  <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../argon/css/nucleo-svg.css" rel="stylesheet" />
  
  <!-- CSS Files -->
  <link id="pagestyle" href="../../argon/css/argon-dashboard.min.css?v=2.0.1" rel="stylesheet" />


  <style type="text/css">
    
    /* nb = set hover colour for top navbar icons (user and settings) */
    a:hover.cw_navbar_icon_link {
      color: #2dce89 !important;
    }

    /* nb = set hover colour for sidebar navlinks */
    a:hover.cw_sidebar_navlink {
      color: #2dce89 !important;
    }

    /* nb = remove footer nav-link padding-bottom to center text in footer row */
    .footer .nav-link {
      padding-bottom: 0px;
    }

    /* nb = make the heart icon in the foooter pulse */
    .cw_footer_heartpulse {
      color:#eb5e28;
      -webkit-animation:hearthing 1s ease infinite;
      animation:hearthing 1s ease infinite
    }
      @-webkit-keyframes hearthing{
        0%{transform:scale(.75)}
        20%{transform:scale(1)}
        40%{transform:scale(.75)}
        60%{transform:scale(1)}
        80%{transform:scale(.75)}to{transform:scale(.75)}}@keyframes hearthing{0%{transform:scale(.75)}20%{transform:scale(1)}40%{transform:scale(.75)}60%{transform:scale(1)}80%{transform:scale(.75)}to{transform:scale(.75)}
        }

  </style>

</head>

<body class="g-sidenav-show  bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  
<!-- SIDEBAR START -->
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main" data-color="success">
    

<!-- Sidebar Header -->
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 text-center text-lg" href="#" target="_blank">
        <img src="../../argon/img/CW_logo_max.png" class="navbar-brand-img h-100" alt="main_logo">
      </a>
    </div>

    <hr class="horizontal dark mt-0">
    
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        
<!-- Home Sidebar Nav -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link cw_sidebar_navlink active" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni fas fa-home text-primary text-sm opacity-10"></i>            
              <span class="sidenav-mini-icon nav-link-text"> Da </span>
            </div>
            <span class="nav-link-text ms-1">Dashboards</span>
          </a>
          <div class="collapse  show " id="dashboardsExamples">
            <ul class="nav ms-4">
              <li class="nav-item active">
                <a class="nav-link active" href="../../pages/dashboards/landing.html">
                  <span class="sidenav-mini-icon"> Ho </span>
                  <span class="sidenav-normal"> Home </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/dashboards/default.html">
                  <span class="sidenav-mini-icon"> Su </span>
                  <span class="sidenav-normal"> Summary </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/dashboards/automotive.html">
                  <span class="sidenav-mini-icon"> My </span>
                  <span class="sidenav-normal"> MyTasks </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
                  <span class="sidenav-mini-icon"> Da </span>
                  <span class="sidenav-normal"> Dashboards <b class="caret"></b></span>
                </a>
                <div class="collapse " id="vrExamples">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/dashboards/vr/vr-default.html">
                        <span class="sidenav-mini-icon text-xs"> Ov </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Overview </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/dashboards/vr/vr-info.html">
                        <span class="sidenav-mini-icon text-xs"> Ex </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Exec </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        
<!-- Global Sidebar Nav-->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link cw_sidebar_navlink " aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni fas fa-globe-americas text-primary text-sm opacity-10"></i>
              <span class="sidenav-mini-icon nav-link-text"> Gl </span>
            </div>
            <span class="nav-link-text ms-1">Global</span>
          </a>
          <div class="collapse " id="applicationsExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/kanban.html">
                  <span class="sidenav-mini-icon"> O </span>
                  <span class="sidenav-normal"> Organisations </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/wizard.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal"> Clients </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/datatables.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal"> Country Master List </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/calendar.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Site Master List </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

<!-- Study Sidebar Nav-->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link cw_sidebar_navlink " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni fas fa-capsules text-primary text-sm opacity-10"></i>
              <span class="sidenav-mini-icon nav-link-text"> St </span>
            </div>
            <span class="nav-link-text ms-1">Study</span>
          </a>
          <div class="collapse " id="ecommerceExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/ecommerce/overview.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Studies </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal"> Config <b class="caret"></b></span>
                </a>
                <div class="collapse " id="productsExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/ecommerce/products/new-product.html">
                        <span class="sidenav-mini-icon text-xs"> In </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Info & Status </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/ecommerce/products/edit-product.html">
                        <span class="sidenav-mini-icon text-xs"> Co </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Configuration </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/ecommerce/products/product-page.html">
                        <span class="sidenav-mini-icon text-xs"> C </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Countries </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/ecommerce/products/products-list.html">
                        <span class="sidenav-mini-icon text-xs"> M </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Milestones </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/ecommerce/products/products-list.html">
                        <span class="sidenav-mini-icon text-xs"> S </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Stipends </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/ecommerce/products/products-list.html">
                        <span class="sidenav-mini-icon text-xs"> E </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Expenses </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/ecommerce/products/products-list.html">
                        <span class="sidenav-mini-icon text-xs"> B </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Batched Files </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link cw_sidebar_navlink " href="../../pages/ecommerce/products/products-list.html">
                        <span class="sidenav-mini-icon text-xs"> U </span>
                        <span class="sidenav-normal">&nbsp;&nbsp; Users </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>

<!-- Finance Sidebar Nav -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#finance" class="nav-link cw_sidebar_navlink " aria-controls="finance" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni fas fa-landmark text-primary text-sm opacity-10"></i>
              <span class="sidenav-mini-icon nav-link-text"> Fi </span>
            </div>
            <span class="nav-link-text ms-1">Finance</span>
          </a>
          <div class="collapse " id="finance">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/kanban.html">
                  <span class="sidenav-mini-icon"> SD </span>
                  <span class="sidenav-normal"> Sumamary Dashboard </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/wizard.html">
                  <span class="sidenav-mini-icon"> FU </span>
                  <span class="sidenav-normal"> Funding </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/datatables.html">
                  <span class="sidenav-mini-icon"> CF </span>
                  <span class="sidenav-normal"> Configuration </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <hr class="horizontal dark mt-0">

<!-- System Admin Sidebar Nav -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#sysadmin" class="nav-link cw_sidebar_navlink " aria-controls="sysadmin" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni fas fa-user-cog text-primary text-sm opacity-10"></i>
              <span class="sidenav-mini-icon nav-link-text"> Sy </span>
            </div>
            <span class="nav-link-text ms-1">System Admin</span>
          </a>
          <div class="collapse " id="sysadmin">
            <ul class="nav ms-4">
              <li class="nav-item cw_sidebar_navlink ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/kanban.html">
                  <span class="sidenav-mini-icon"> AC </span>
                  <span class="sidenav-normal"> Access Control </span>
                </a>
              </li>
              <li class="nav-item cw_sidebar_navlink ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/wizard.html">
                  <span class="sidenav-mini-icon"> SE </span>
                  <span class="sidenav-normal"> Settings </span>
                </a>
              </li>
              <li class="nav-item cw_sidebar_navlink ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/datatables.html">
                  <span class="sidenav-mini-icon"> AU </span>
                  <span class="sidenav-normal"> Audit </span>
                </a>
              </li>
              <li class="nav-item cw_sidebar_navlink ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/calendar.html">
                  <span class="sidenav-mini-icon"> MA </span>
                  <span class="sidenav-normal"> Maintenance </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <hr class="horizontal dark mt-0">

<!-- Developer Sidebar Nav -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#dev" class="nav-link cw_sidebar_navlink " aria-controls="dev" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni fas fa-code text-primary text-sm opacity-10"></i>
              <span class="sidenav-mini-icon nav-link-text"> De </span>
            </div>
            <span class="nav-link-text ms-1">Developer</span>
          </a>
          <div class="collapse " id="dev">
            <ul class="nav ms-4">
              <li class="nav-item cw_sidebar_navlink ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/kanban.html">
                  <span class="sidenav-mini-icon"> AC </span>
                  <span class="sidenav-normal"> Access Control </span>
                </a>
              </li>
              <li class="nav-item cw_sidebar_navlink ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/wizard.html">
                  <span class="sidenav-mini-icon"> LO </span>
                  <span class="sidenav-normal"> Logs </span>
                </a>
              </li>
              <li class="nav-item cw_sidebar_navlink ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/datatables.html">
                  <span class="sidenav-mini-icon"> TA </span>
                  <span class="sidenav-normal"> Tables </span>
                </a>
              </li>
              <li class="nav-item cw_sidebar_navlink ">
                <a class="nav-link cw_sidebar_navlink " href="../../pages/applications/calendar.html">
                  <span class="sidenav-mini-icon"> QU </span>
                  <span class="sidenav-normal"> Queues </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <hr class="horizontal dark mt-0">

      </ul>
    </div>

  </aside>
<!-- END SIDEBAR -->


<!-- MAIN CONTENT START -->

  <main class="main-content position-relative border-radius-lg ">

<!-- NAVBAR START -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border border-radius-xl z-index-sticky sticky-top left-auto top-2" id="navbarBlur" data-scroll="true">
      
      <div class="container-fluid py-1 px-3">
        
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
          <a href="javascript:;" class="nav-link p-0">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </a>
        </div>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ms-sm-3 ms-2 me-sm-6 me-5">
             <li class="breadcrumb-item text-xs text-white"><a class="opacity-5 text-white" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-xs text-white"><a class="opacity-5 text-white" href="javascript:;">Global</a></li>
            <li class="breadcrumb-item text-xs text-white active" aria-current="page">Organisations</li>
          </ol>
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ms-sm-3 ms-2 me-sm-6 me-5" style="--bs-breadcrumb-divider: '';">
            <li class="breadcrumb-item text-xs text-white">Info&nbsp; :</li>
            <li class="breadcrumb-item text-xs text-white"><b>Alcon sh65-a</b></li>
          </ol>
        </nav>


        <div class="collapse navbar-collapse justify-content-end mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">                
          <!-- Navbar search START -->
          <div class="m-auto pe-md-3">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Search ...">
            </div>
          </div> 
          <!-- END Navbar search -->   

          <ul class="navbar-nav">

            <!-- Settings drop down START -->
              <li class="nav-item dropdown d-xl-non ps-3 d-flex">
                <a href="javascript:;" class="nav-link text-white p-0 cw_navbar_icon_link" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                  <li>
                    <a class="dropdown-item border-radius-md" href="#">Preferences</a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="#">Help & FAQs</a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="#">Support</a>
                  </li>
                </ul>
              </li>
            <!-- END Settings drop down -->

            <!-- User drop down START -->
              <li class="nav-item dropdown d-xl-non ps-3 d-flex">
                <a href="javascript:;" class="nav-link text-white p-0 cw_navbar_icon_link text-sm" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user fixed-plugin-button-nav cursor-pointer"></i>&nbsp; Neil Barfield
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                  <li>
                    <a class="dropdown-item border-radius-md" href="#">My Profile</a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="#">My Settings</a>
                  </li>
                  <HR class="dropdown-divider">
                  <li>
                    <a class="dropdown-item border-radius-md" href="#">Log Out</a>
                  </li>
                </ul>
              </li>
            <!-- END user drop down -->
            
            <!-- Sidebar toggle burger START -->
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <!-- END Sidebar toggle burger -->



          </ul>
        </div>

      </div>
    </nav>
<!-- END Navbar -->

<!-- PAGE CONTENT START -->
    <div class="container-fluid py-4">

      <div class="row">
        <div class="col-lg-12 mb-2">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-3 pt-3 bg-transparent">
              <h6 class="text-capitalize">Sales overview</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">4% more</span> in 2021
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 mb-2">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-3 pt-3 bg-transparent">
              <h6 class="text-capitalize">Sales overview</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">4% more</span> in 2021
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>   

<!-- Footer Start -->      
      <footer class="footer p-1 mt-2 border-radius-md bg-light bg-gradient">
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-lg-6">
              <div class="text-center text-xs text-muted">
                <a href="#" target="_blank"><span class="px-1"><span class="fw-bold">CLIN</span>WALLET</a> 
                <a href="#" target="_blank"><span class="px-1">Privacy Policy</a>
                <a href="#" target="_blank"><span class="px-1">License</a> 
                </div>
            </div>

            <div class="col-lg-6">
              <div class="text-center text-xs text-muted">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                | Powered by 
                <a href="#" target="_blank"><span class="fw-bold">Ardea</span> Ignis</a>
                <i class="fas fa-heart cw_footer_heartpulse"></i>
              </div>
            </div>
            
          </div>
        </div>
      </footer>
<!-- Footer End -->


    </div>

  </main>
<!-- END MAIN CONTENT -->
  </div>

  <!--   Core JS Files   -->
  <script src="../../argon/js/core/popper.min.js"></script>
  <script src="../../argon/js/core/bootstrap.min.js"></script>
  <script src="../../argon/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../argon/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Kanban scripts -->
  <script src="../../argon/js/plugins/dragula/dragula.min.js"></script>
  <script src="../../argon/js/plugins/jkanban/jkanban.js"></script>
  <script src="../../argon/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../argon/js/argon-dashboard.js?v=2.0.1"></script>

</body>

</html>