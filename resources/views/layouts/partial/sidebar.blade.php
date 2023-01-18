<div class="app-brand demo">
              <img src="{{asset('admin/assets/img/favicon/renos.png')}}" alt="">
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            @if(auth()->user()->role == 'admin')
            <li   class="menu-item @if(Request::url() == route('dashboard.dashboard-admin')) active @endif" id="side-dashboard">
              <a href="/dashboard-admin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item @if(Request::url() == route('report.index')) active @endif" id="side-report">
              <a href="/report" class="menu-link">
              <i class='bx bxs-report menu-icon'></i>
                <div data-i18n="Basic">Report</div>
              </a>
            </li>
            <li class="menu-item @if(Request::url() == route('user.index')) active @endif" id="side-user">
              <a href="/user" class="menu-link">
              <i class="menu-icon tf-icons bx bx-table"></i>
              <div data-i18n="Basic">Table User</div>
              </a>
            </li>
            <li class="menu-item" style="">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bxs-cog menu-icon'></i>
                <div data-i18n="Account Settings">Settings</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item @if(Request::url() == route('struktur.index')) active @endif" id="side-struktur">
                  <a href="/struktur" class="menu-link">
                    <div data-i18n="Account">Struktur Organisasi</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Notifications">Pegawai</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-connections.html" class="menu-link">
                    <div data-i18n="Connections">Job Role</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Notifications">Job Position</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-connections.html" class="menu-link">
                    <div data-i18n="Connections">Master Cuti</div>
                  </a>
                </li>
              </ul>
            </li>
            @elseif(auth()->user()->role == 'pimpinan')
            <li   class="menu-item @if(Request::url() == route('dashboard.dashboard-pimpinan')) active @endif" id="side-dashboard">
              <a href="/dashboard-pimpinan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item @if(Request::url() == route('fcuti.index')) active @endif" id="side-cuti">
              <a href="/fcuti" class="menu-link">
              <i class='bx bxs-calendar menu-icon'></i>
                <div data-i18n="Basic">Form Cuti</div>
              </a>
            </li>
            <li class="menu-item @if(Request::url() == route('karyawan.index')) active @endif" id="side-pegawai">
              <a href="/karyawan" class="menu-link">
              <i class="menu-icon">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAU9JREFUSEvllSFWw0AQhmci0DVgoSfgcQIeNwiCFEfryGKKwtEJDgeiGxzFkUQAN+gN4AZEgwCNyPQV2L6WbJLd9KWGyOyf/faff3aC0PCDDe8POUDHP+8xOpdTMHJ2FoUXt0WHMNHmAJ6gNwBe/9kU32NJG0UAE+3qASa2lSMT7epC9gSNAXhXV29mGCdhsKfWDo9pK3P4GQBaf/SfToY79zeUqvczB54YcFnLxjKY0xIB8ECnR8TTaEhXywF8egHkba1bwKdEklsb4PaptfbFH6ZurUvk+eQC8kPpBGDcj0N6/L5JSmiagXdCI2A+KgMg4HUkqV8L0BGUMvBmxQxLYxm0awGmH/226asO4mTY1rZpUanm21NpDgR1EVg7BBmwl0ga5brIBlCaA+JdPKTuUoCKHGb1X8jAxoGNVjOuF0eGLoN/Dqi4QNbLjf9wJuYo1hk7ZG+qAAAAAElFTkSuQmCC"/>
            </i>
              <div data-i18n="Basic">Data Pegawai</div>
              </a>
            </li>
            <li class="menu-item @if(Request::url() == route('approval.index')) active @endif" id="side-approval">
              <a href="/approval" class="menu-link">
              <i class='bx bx-badge-check menu-icon'></i>
              <div data-i18n="Basic">Approval Cuti</div>
              </a>
            </li>
            <li class="menu-item @if(Request::url() == route('report.index')) active @endif" id="side-report">
              <a href="/report" class="menu-link">
              <i class='bx bxs-report menu-icon'></i>
                <div data-i18n="Basic">Report</div>
              </a>
            </li>
            @else(auth()->user()->role == 'karyawan')
            <li   class="menu-item @if(Request::url() == route('dashboard')) active @endif" id="side-dashboard">
              <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item @if(Request::url() == route('fcuti.index')) active @endif" id="side-cuti">
              <a href="/fcuti" class="menu-link">
              <i class='bx bxs-calendar menu-icon'></i>
                <div data-i18n="Basic">Form Cuti</div>
              </a>
            </li>
            <li class="menu-item @if(Request::url() == route('karyawan.index')) active @endif" id="side-pegawai">
              <a href="/karyawan" class="menu-link">
              <i class="menu-icon">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAU9JREFUSEvllSFWw0AQhmci0DVgoSfgcQIeNwiCFEfryGKKwtEJDgeiGxzFkUQAN+gN4AZEgwCNyPQV2L6WbJLd9KWGyOyf/faff3aC0PCDDe8POUDHP+8xOpdTMHJ2FoUXt0WHMNHmAJ6gNwBe/9kU32NJG0UAE+3qASa2lSMT7epC9gSNAXhXV29mGCdhsKfWDo9pK3P4GQBaf/SfToY79zeUqvczB54YcFnLxjKY0xIB8ECnR8TTaEhXywF8egHkba1bwKdEklsb4PaptfbFH6ZurUvk+eQC8kPpBGDcj0N6/L5JSmiagXdCI2A+KgMg4HUkqV8L0BGUMvBmxQxLYxm0awGmH/226asO4mTY1rZpUanm21NpDgR1EVg7BBmwl0ga5brIBlCaA+JdPKTuUoCKHGb1X8jAxoGNVjOuF0eGLoN/Dqi4QNbLjf9wJuYo1hk7ZG+qAAAAAElFTkSuQmCC"/>
            </i>
              <div data-i18n="Basic">Data Pegawai</div>
              </a>
            </li>
            <li class="menu-item @if(Request::url() == route('report.index')) active @endif" id="side-report">
              <a href="/report" class="menu-link">
              <i class='bx bxs-report menu-icon'></i>
                <div data-i18n="Basic">Report</div>
              </a>
            </li>
            @endif
          </ul>