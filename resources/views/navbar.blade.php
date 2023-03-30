<!DOCTYPE html>
<html lang="zxx">
  <!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 13:26:08 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Pengaduan Masyarakat</title>

    <link rel="stylesheet" href="{{ url('asset/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ url('asset/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/datepicker/date-picker.css') }}" />
    <link rel="stylesheet" href="{{ url('asset/vendors/vectormap-home/vectormap-2.0.2.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/scroll/scrollable.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ url('asset/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ url('asset/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/morris/morris.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/css/metisMenu.css') }}" />

    <link rel="stylesheet" href="{{ url('asset/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ url('asset/css/colors/default.css') }}" id="colorSkinCSS" />
  </head>
  <body class="crm_body_bg">
    <nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
      <div class="logo d-flex justify-content-between">
        <a href="/dashboard"><img src="" alt="" /><h3 style="color: black;" class="text-center">Pengaduan Masyarakat</h3></a>
        <div class="sidebar_close_icon d-lg-none">
          <i class="ti-close"></i>
        </div>
      </div>
      <ul id="sidebar_menu">
        <li class="mm-active">
          <a class="" href="/dashboard" aria-expanded="false">
            <div class="icon_menu">
              <img src="{{ url('asset/img/menu-icon/dashboard.svg') }}" alt="" />
            </div>
            <span>Dashboard</span>
          </a>
        </li>
		@if (auth()->user()->level == 'masyarakat')
        <li class="">
          <a href="/pengaduan/create" aria-expanded="false">
            <div class="icon_menu">
              <img src="{{ url('asset/img/menu-icon/8.svg') }}" alt="" />
            </div>
            <span>Pengaduan</span>
          </a>
        </li>
        <li class="">
          <a href="/laporan" aria-expanded="false">
            <div class="icon_menu">
              <img src="{{ url('asset/img/menu-icon/8.svg') }}" alt="" />
            </div>
            <span>Laporan</span>
          </a>
        </li>
		@endif
		@if (auth()->user()->level == 'admin' || auth()->user()->level == 'petugas')
        <li class="/pengaduan">
          <a href="/pengaduan" aria-expanded="false">
            <div class="icon_menu">
              <img src="{{ url('asset/img/menu-icon/6.svg') }}" alt="" />
            </div>
            <span>Pengaduan</span>
          </a>
        </li>
		@endif
    @if (auth()->user()->level == 'admin')
    <li class="">
          <a href="/pengguna" aria-expanded="false">
            <div class="icon_menu">
              <img src="{{ url('asset/img/menu-icon/3.svg') }}" alt="" />
            </div>
            <span>Pengguna</span>
          </a>
        </li>
        <li class="">
          <a href="/laporanadmin" aria-expanded="false">
            <div class="icon_menu">
              <img src="{{ url('asset/img/menu-icon/8.svg') }}" alt="" />
            </div>
            <span>Laporan</span>
          </a>
        </li>
        @endif
      </ul>
    </nav>

    <section class="main_content dashboard_part large_header_bg">
      <div class="container-fluid g-0">
        <div class="row">
          <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-between align-items-center">
              <div class="sidebar_icon d-lg-none">
                <i class="ti-menu"></i>
              </div>
              <div class="serach_field-area d-flex align-items-center">
              </div>
              <div class="header_right d-flex justify-content-between align-items-center">
                <div class="profile_info">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRknXPAlzcu3hpgKYZ-Olaj-9IxgNcCYjXwDQ&usqp=CAU" alt="#" />
                  <div class="profile_info_iner">
                    <div class="profile_author_name">
                      <h5>{{ auth()->user()->nama }}</h5>
                      <p>{{ auth()->user()->email }}</p>
                      <p>{{ auth()->user()->level }}</p>
                    </div>
                    <div class="profile_info_details">
                      <a href="/profile/{{auth()->user()->id}}">My Profile </a>
                      <a href="/logout" onclick="return confirm('Anda yakin ingin Log-out?')">Log Out </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main_content_iner overly_inner">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-12">
              <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left">
                  <h3 class="f_s_30 f_w_700 text_white">@yield ('title')</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="main_content_iner ">
			<div class="container-fluid p-0">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="dashboard_header mb_50">
							<div class="row">
								<div class="col-lg-6">
								<div class="dashboard_header_title">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
            <div class="col-lg-12 card_height_100">
              <div class="white_card mb_20">
                <div class="white_card_header">
                  <div class="box_header m-0">
                    <div class="float-lg-right float-none sales_renew_btns justify-content-end">
                  </div>
				 	@yield('main')
				 </div>
                </div>
              </div>
            </div>
          </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="{{ url( 'asset/js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{ url( 'asset/js/popper1.min.js') }}"></script>

    <script src="{{ url( 'asset/js/bootstrap.min.html') }}"></script>

    <script src="{{ url( 'asset/js/metisMenu.js') }}"></script>

    <script src="{{ url( 'asset/vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{ url( 'asset/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ url( 'asset/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ url( 'asset/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ url( 'asset/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ url( 'asset/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datatable/js/buttons.print.min.js') }}"></script>

    <script src="{{ url( 'asset/vendors/datepicker/datepicker.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datepicker/datepicker.en.js') }}"></script>
    <script src="{{ url( 'asset/vendors/datepicker/datepicker.custom.js') }}"></script>
    <script src="{{ url( 'asset/js/chart.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/chartjs/roundedBar.min.js') }}"></script>

    <script src="{{ url( 'asset/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ url( 'asset/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ url( 'asset/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ url( 'asset/vendors/am_chart/amcharts.js') }}"></script>

    <script src="{{ url( 'asset/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/scroll/scrollable-custom.js') }}"></script>

    <script src="{{ url( 'asset/vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>

    <script src="{{ url( 'asset/vendors/apex_chart/apex-chart2.js') }}"></script>
    <script src="{{ url( 'asset/vendors/apex_chart/apex_dashboard.js') }}"></script>
    <script src="{{ url( 'asset/vendors/echart/echarts.min.js') }}"></script>
    <script src="{{ url( 'asset/vendors/chart_am/core.js') }}"></script>
    <script src="{{ url( 'asset/vendors/chart_am/charts.js') }}"></script>
    <script src="{{ url( 'asset/vendors/chart_am/animated.js') }}"></script>
    <script src="{{ url( 'asset/vendors/chart_am/kelly.js') }}"></script>
    <script src="{{ url( 'asset/vendors/chart_am/chart-custom.js') }}"></script>

    <script src="{{ url( 'asset.js/dashboard_init.js') }}"></script>
    <script src="{{ url( 'asset/js/custom.js') }}"></script>

	@include('sweetalert::alert')
  </body>



  <!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 13:27:30 GMT -->
</html>
