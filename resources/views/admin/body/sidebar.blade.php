
  @php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();

  @endphp

 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>Sireta</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href="{{ route('dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>

        <li class="treeview {{ ($prefix == '/unitkerja')?'active':'' }}">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Unit Kerja</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'unitkerja.view')?'active':'' }}"><a href="{{ route('unitkerja.view')}}"><i class="ti-more"></i>Unit Kerja</a></li>
            <li class="{{ ($route == 'unitkerja.add')?'active':'' }}"><a href="{{ route('unitkerja.add')}}"><i class="ti-more"></i>Tambah Unit Kerja</a></li>
          </ul>
        </li>
        <li class="treeview {{ ($prefix == '/manualmutu')?'active':'' }}">
          <a href="#">
            <i class="fa fa-cube"></i>
            <span>Manual Mutu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'manualmutu.view')?'active':'' }}"><a href="{{ route('manualmutu.view')}}"><i class="ti-more"></i>Dokumen Manual Mutu</a></li>
            <li class="{{ ($route == 'manualmutu.add')?'active':'' }}"><a href="{{ route('manualmutu.add')}}"><i class="ti-more"></i>Tambah Dokumen</a></li>
          </ul>
        </li>
        <li class="treeview {{ ($prefix == '/prosedurmutu')?'active':'' }}">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Prosedur Mutu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'prosedurmutu.view')?'active':'' }}"><a href="{{ route('prosedurmutu.view')}}"><i class="ti-more"></i>Dokumen Prosedur Mutu</a></li>
            <li class="{{ ($route == 'prosedurmutu.add')?'active':'' }}"><a href="{{ route('prosedurmutu.add')}}"><i class="ti-more"></i>Tambah Dokumen</a></li>
          </ul>
        </li>
        <li class="treeview {{ ($prefix == '/petunjukkerja')?'active':'' }}">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Petunjuk Kerja</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'petunjukkerja.view')?'active':'' }}"><a href="{{ route('petunjukkerja.view')}}"><i class="ti-more"></i>Dokumen Petunjuk Kerja</a></li>
            <li class="{{ ($route == 'petunjukkerja.add')?'active':'' }}"><a href="{{ route('petunjukkerja.add')}}"><i class="ti-more"></i>Tambah Dokumen</a></li>
          </ul>
        </li>
        <li class="treeview {{ ($prefix == '/catatanmutu')?'active':'' }}">
          <a href="#">
            <i class="fa fa-sticky-note"></i>
            <span>Catatan Mutu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'catatanmutu.view')?'active':'' }}"><a href="{{ route('catatanmutu.view')}}"><i class="ti-more"></i>Dokumen Catatan Mutu</a></li>
            <li class="{{ ($route == 'catatanmutu.add')?'active':'' }}"><a href="{{ route('catatanmutu.add')}}"><i class="ti-more"></i>Tambah Dokumen</a></li>
          </ul>
        </li>
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-magic"></i>
            <span>Lain Lain</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            {{-- <li class="{{ ($route == 'lainlain.viewOrganisasi')?'active':'' }}"><a href="{{ route('lainlain.viewOrganisasi')}}"><i class="ti-more "></i>Struktur Organisasi</a></li> --}}
            {{-- <li class="{{ ($route == 'lainlain.viewSasaranmutu')?'active':'' }}"><a href="{{ route('lainlain.viewSasaranmutu')}}"><i class="ti-more"></i>Sasaran Mutu</a></li> --}}
            {{-- <li class="{{ ($route == 'lainlain.viewProker')?'active':'' }}"><a href="{{ route('lainlain.viewProker')}}"><i class="ti-more"></i>Program Kerja</a></li> --}}
            <li class="{{ ($route == 'lainlain.view')?'active':'' }}"><a href="{{ route('lainlain.view')}}"><i class="ti-more"></i>Dokumen Lain Lain</a></li>
            <li class="{{ ($route == 'lainlain.add')?'active':'' }}"><a href="{{ route('lainlain.add')}}"><i class="ti-more"></i>Tambah Dokumen</a></li>
          </ul>
        </li>

      </ul>
    </section>

  </aside>
