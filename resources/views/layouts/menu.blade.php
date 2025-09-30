<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box" style = "margin-top:24px">
          <!-- Dark Logo--> 
          <a href="{{ url("#") }}" class="logo logo-dark">
            <span class="logo-sm">
              <img src="{{ asset("/assets/images/azam-sole-logo.png") }}" alt="" height="28">
            </span>
            <span class="logo-lg">
              <img src="{{ asset("/assets/images/azam-sole-logo.png") }}" alt="" height="72">
            </span>
          </a>
          <!-- Light Logo-->
          <a href="{{ url("#") }}" class="logo logo-light">
            <span class="logo-sm">
              <img src="{{ asset("/assets/images/azam-sole-logo.png") }}" alt="" height="28">
            </span>
            <span class="logo-lg">
              <img src="{{ asset("/assets/images/azam-sole-logo.png") }}" alt="" height="72">
            </span>
          </a>
          <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
          </button>
        </div>
        <div id="scrollbar">
          <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
              <li class="menu-title">
                <span data-key="t-menu">Menu</span>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link menu-link" href="{{ url("#sidebarDashboards") }}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                  <i class="ri-dashboard-2-line"></i>
                  <span data-key="t-dashboards">TAARIFA</span>
                </a> -->
                <div class="show menu-dropdown" id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="{{ url("/dashboard") }}" class="nav-link" data-key="t-analytics"> Dashboard </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url("/new-form") }}" class="nav-link" data-key="t-analytics"> Real-Time </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url("/my-forms") }}" class="nav-link" data-key="t-analytics"> Others </a>
                      <!-- <a href="{{ url("#") }}" class="nav-link" data-key="t-analytics"> Zilizopo </a> -->
                    </li>
                  </ul>
                </div>
              </li>
              <!-- end Dashboard Menu -->

              <li class="nav-item">
                <a class="nav-link menu-link" href="{{ url("#dropManagement") }}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                  <i class="ri-settings-2-line"></i>
                  <span data-key="t-dashboards">SETTINGS</span>
                </a>
                <div class="collapse menu-dropdown" id="dropManagement">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="{{ url("/users") }}" class="nav-link" data-key="t-analytics"> Online/Offline </a>
                      <a href="{{ url("/users") }}" class="nav-link" data-key="t-analytics"> Users </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- end Dashboard Menu -->
            </ul>
          </div>
          <!-- Sidebar -->
        </div>
        <div class="sidebar-background"></div>
      </div>
      <!-- Left Sidebar End -->
      <!-- Vertical Overlay-->
      <div class="vertical-overlay"></div>