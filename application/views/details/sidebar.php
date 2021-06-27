<div id="app">
  <div id="sidebar" class="active">
    <div class="sidebar-wrapper-details active">
      <div class="sidebar-header-details">
        <div class="d-flex justify-content-between">
          <div class="logo">
            <img src="<?= base_url('gambar/'.$wisata->gambar) ?>" alt="Logo" srcset="" class="details-img">
            </a>
          </div>
          <div class="toggler">
            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
          </div>
        </div>
      </div>
      <div class="sidebar-menu">
        <div class="table-responsive">
          <table class="table table-light mb-0" style="text-align: justify; text-justify: inter-word;">
            <thead>
              <tr>
                <th class="p-3">
                  <h3><?= $wisata->nama_wisata ?></h3>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-3 text-muted"><small><?= $wisata->kategori ?></small></td>
              </tr>
              <tr>
                <td class="p-3"><b>Alamat</b> :
                  <p><?= $wisata->alamat ?></p>
                </td>
              </tr>
              <tr>
                <td class="p-3"><b>Deskripsi</b> :
                  <p><?= $wisata->deskripsi ?></p>
                </td>
              </tr>
              <tr>
                <td class="text-center p-3">
                  <a href="<?= base_url('home') ?>" class="btn btn-primary"> Kembali</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
  </div>