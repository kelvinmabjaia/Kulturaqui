  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/watch">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Visitar Kulturaqui</span>
        </a>
      </li><!-- End Visita Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-chat-right-text"></i>
          <span>Comentários</span>
        </a>
      </li><!-- End Comentários Page Nav -->

      <li class="nav-heading">Gestão</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class=""></i>
          <span></span>
        </a>
      </li><!-- End Utilizadores Nav -->

      @if (Auth::user()->role == 4)
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person"></i><span>Utilizadores</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

            <li>
              <a href="{{ route('user.index') }}">
                <i class="bi bi-circle"></i><span>Listar Utilizadores</span>
              </a>
            </li>

            <hr>

            <li>
              <a href="{{route('user.create')}}">
                <i class="bi bi-circle"></i><span> Adicionar Utilizador</span>
              </a>
            </li>
            
          </ul>
        </li><!-- End Usuários Nav -->
      @endif

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#teatro-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-camera-reels"></i><span>Conteúdo Artístico</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="teatro-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          @if (Auth::user()->role == 3)
            <li>
              <a href="{{ route('teatro.create') }}">
                <i class="bi bi-circle"></i><span>Adicionar Conteúdo</span>
              </a>
            </li>
          @endif

          <li>
            <a href="{{ route('teatro.index') }}">
              <i class="bi bi-circle"></i><span>Listar Conteúdo</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Relatório</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      @if (Auth::user()->role == 4)
        <li class="nav-heading">Parametrização</li>

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#categoria-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Categoria</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="categoria-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="#">
                <i class="bi bi-circle"></i><span>Adicionar Categoria</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-circle"></i><span>Listar Categoria</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-circle"></i><span>Relatório</span>
              </a>
            </li>
          </ul>
        </li><!-- End Categoria Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>País</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{ route('pais.create') }}">
                <i class="bi bi-circle"></i><span>Adicionar País</span>
              </a>
            </li>
            <li>
              <a href="{{ route('pais.index') }}">
                <i class="bi bi-circle"></i><span>Listar Países</span>
              </a>
            </li>
          </ul>
        </li><!-- End País Nav -->
      @endif

    </ul>

  </aside><!-- End Sidebar-->