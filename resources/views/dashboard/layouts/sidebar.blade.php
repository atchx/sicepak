<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Pelacakan SK</li>
      <li class="nav-item">
        <a class="nav-link" href="/apbds">
          <i class="menu-icon mdi mdi-file-document-box"></i>
          <span class="menu-title">APBD</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/papbs">
          <i class="menu-icon mdi mdi-file-document-box"></i>
          <span class="menu-title">PAPB</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pjs">
          <i class="menu-icon mdi mdi-file-document-box"></i>
          <span class="menu-title">Pertanggung Jawaban</span>
        </a>
      </li>
      @if (auth()->user()->roles == 'Admin')
      <li class="nav-item nav-category">admin</li>
      <li class="nav-item">
        <a class="nav-link" href="/users">
          <i class="menu-icon mdi mdi-account-circle-outline"></i>
          <span class="menu-title">Kelola User</span>
        </a>
      </li>
      @endif
    </ul>
  </nav>