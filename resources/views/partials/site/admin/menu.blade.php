<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">IPMA</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Início">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Início</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Igreja">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Igreja</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Banners">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-picture-o"></i>
            <span class="nav-link-text">Banners</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Devocional">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Devocional</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Estudos">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-file-text-o"></i>
            <span class="nav-link-text">Estudos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Fotos">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-file-image-o"></i>
            <span class="nav-link-text">Fotos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vídeos">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-video-camera"></i>
            <span class="nav-link-text">Vídeos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pregações">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-file-audio-o"></i>
            <span class="nav-link-text">Pregações</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Recursos">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-folder"></i>
            <span class="nav-link-text">Recursos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Controle de Acesso">
        <a class="nav-link" href="{{ route('dashboard.usuarios') }}">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Controle de Acesso</span>
          </a>
        </li>
      </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
                <i class="fa fa-fw fa-angle-left"></i>
            </a>
            </li>
        </ul>
    @include('partials.site.admin.header')
    </div>
</nav>