<div class="app-brand demo">
            <a href="/dashboard" class="app-brand-link">
              <img src="{{asset('admin/assets/img/favicon/renos.png')}}" alt="">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item" id="side-dashboard">
              <a href="/dashboard" class="menu-link" onclick="return onclickSide('dashboard');">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item" id="side-user">
              <a href="/user" class="menu-link"  onclick="return onclickSide('user');">
              <i class="menu-icon tf-icons bx bx-table"></i>
              <div data-i18n="Basic">Table User</div>
              </a>
            </li>
            <li class="menu-item" id="side-cuti">
              <a href="/fcuti" class="menu-link"  onclick="return onclickSide('cuti');">
              <i class='bx bxs-calendar menu-icon'></i>
                <div data-i18n="Basic">Form Cuti</div>
              </a>
            </li>
            <li class="menu-item" id="side-pegawai">
              <a href="/karyawan" class="menu-link"  onclick="return onclickSide('pegawai');">
              <i class="menu-icon">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAU9JREFUSEvllSFWw0AQhmci0DVgoSfgcQIeNwiCFEfryGKKwtEJDgeiGxzFkUQAN+gN4AZEgwCNyPQV2L6WbJLd9KWGyOyf/faff3aC0PCDDe8POUDHP+8xOpdTMHJ2FoUXt0WHMNHmAJ6gNwBe/9kU32NJG0UAE+3qASa2lSMT7epC9gSNAXhXV29mGCdhsKfWDo9pK3P4GQBaf/SfToY79zeUqvczB54YcFnLxjKY0xIB8ECnR8TTaEhXywF8egHkba1bwKdEklsb4PaptfbFH6ZurUvk+eQC8kPpBGDcj0N6/L5JSmiagXdCI2A+KgMg4HUkqV8L0BGUMvBmxQxLYxm0awGmH/226asO4mTY1rZpUanm21NpDgR1EVg7BBmwl0ga5brIBlCaA+JdPKTuUoCKHGb1X8jAxoGNVjOuF0eGLoN/Dqi4QNbLjf9wJuYo1hk7ZG+qAAAAAElFTkSuQmCC"/>
            </i>
              <div data-i18n="Basic">Data Pegawai</div>
              </a>
            </li>
            <li class="menu-item" id="side-report">
              <a href="/report" class="menu-link" onclick="return onclickSide('report');">
              <i class='bx bxs-report menu-icon'></i>
                <div data-i18n="Basic">Report</div>
              </a>
            </li>
          </ul>
<script>
  function onclickSide(params) {
    const dataSide=['dashboard','user','cuti','pegawai','report']
    dataSide.forEach((el) => {
      if (params === el) {
        document.getElementById('side-' + params).classList.add('active')
      } else {
        document.getElementById('side-' + el).classList.remove('active')
      }
    })
    // return false;
  }

</script>