<div id="app">
  <div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
      <div class="sidebar-header">
        <div class="d-flex justify-content-between">
          <div class="logo">
            <a href="index.html"><img src="<?= base_url() ?>template/assets/images/logo-uniska.png" alt="Logo"
                srcset="">
            </a>
          </div>
          <div class="toggler">
            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
          </div>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul class="menu">
          <li class="sidebar-title">
            <h6>Sistem Infomasi Geografis</h6>
            <hr>
            <small>Pemetaan Tempat Wisata di Kabupaten Tanah Laut</small>
            <hr>
          </li>
          <li class="sidebar-title">
            Menu
          </li>
          <li class="sidebar-item <?php if($this->uri->uri_string() == 'home') { echo 'active'; } ?>">
            <a href="<?= base_url('home') ?>" class='sidebar-link'>
              <i class="bi bi-geo-alt-fill"></i>
              <span>Pemetaan</span>
            </a>
          </li>
          <li class="sidebar-item <?php if($this->uri->uri_string() == 'wisata') { echo 'active'; } ?>">
            <a href="<?= base_url('wisata') ?>" class='sidebar-link'>
              <i class="bi bi-tree-fill"></i>
              <span>Tempat Wisata</span>
            </a>
          </li>

        </ul>
      </div>
      <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
  </div>