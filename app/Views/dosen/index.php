<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>halaman Dosen</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!--  -->
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<!--  -->
    

    <!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/mahasiswa">
                <span data-feather="file"></span>
                Mahasiswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dosen">
              <span data-feather="file"></span>
                Dosen
              </a>
            </li>
        </div>
      </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dosen</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <button onclick="location.href='/mahasiswa'" type="button" class="btn btn-sm btn-outline-secondary">Mahasiswa</button>
<!-- Tombol untuk pindah ke halaman dosen -->
<button onclick="location.href='/dosen'" type="button" class="btn btn-sm btn-outline-secondary">Dosen</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <!-- conten -->
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dosenModal">
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="dosenModal" tabindex="-1" aria-labelledby="dosenModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dosenModalModalLabel">Insert Data Dosen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <div class="form-group">
    <label>Nama dosen</label><span id="error_name" class="text-danger"></span>
    <input type="text" name="nama_dosen" class ="form-control nama_dosen" placeholder="Nama Lengkap" required>
  </div>
  <div class="form-group">
    <label>Nip</label><span id="error_name" class="text-danger"></span>
    <input type="text" pattern="[0-9]{16}" title="Masukan 10 Angka Dan Sesuai Format" name="nip" class ="form-control nip" placeholder="nip" required >
  </div>
  <div class="form-group">
    <label>Nomer Telepon</label><span id="error_name" class="text-danger"></span>
    <input type="number" title="Masukan 12-13 Angka" name="no_telepon" class ="form-control no_telepon" placeholder="Nomer Yang Dapat Dihubungi" required>
  </div>
  <div class="form-group">
    <label>Email</label><span id="error_name" class="text-danger"></span>
    <input type="text" name="email" class ="form-control email" placeholder="Email" required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ajaxdosen-save">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- End Tambah modal -->
<!-- Edit Modal -->
<?php $i = 1; ?>
<?php foreach ($dosen as $dsn) : ?>
<input type="hidden" name="id_dosen" value="<?= $dsn['id_dosen']; ?>" />
<div class="modal fade" id="editModal<?= $dsn['id_dosen'];?>" tabindex="-1" aria-labelledby="edit-dosenModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-dosenModalLabel">Edit Data Dosen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
    <label>Nama Dosen</label><span id="error_name" class="text-danger"></span>
    <input type="text" name="nama_dosen" class="form-control nama_dosen_edit" value="<?= $dsn['nama_dosen'];?>" placeholder="Nama Lengkap" required>
</div>
<div class="form-group">
    <label>Nip</label><span id="error_name" class="text-danger"></span>
    <input type="text" pattern="[0-9]{16}" title="Masukan 10 Angka Dan Sesuai Format"  value="<?= $dsn['nip'];?>" name="nip" class="form-control nip_edit" placeholder="nip" required>
</div>
<div class="form-group">
    <label>Nomer Telepon</label><span id="error_name" class="text-danger"></span>
    <input type="number" title="Masukan 12-13 Angka" name="no_telepon" value="<?= $dsn['no_telepon'];?>"  class="form-control no_telepon_edit" placeholder="Nomer Yang Dapat Dihubungi" required>
</div>
<div class="form-group">
    <label>Email</label><span id="error_name" class="text-danger"></span>
    <input type="text" name="email" class="form-control email_edit" value="<?= $dsn['email'];?>" placeholder="Email" required>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ajaxdosen-update">Update</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- End Edit Modal -->
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <tbody>
          <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Nip</th>
          <th scope="col">Nomer Telepon</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach ($dosen as $dsn) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $dsn['nama_dosen']; ?></td>
              <td><?= $dsn['nip']; ?></td>
              <td><?= $dsn['email']; ?></td>
              <td><?= $dsn['no_telepon']; ?></td>
              <td>
                <form action="<?= site_url('/dosen/delete/'.$dsn['id_dosen']) ?>" method="post" onsubmit="return confirm('Yakin Hapus Data?')">
              <?=csrf_field()?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $dsn['id_dosen'];?>">Edit</button>
              <button type="submit" class="btn btn-danger dosen-delete">Hapus</button>
                </form>
              </td>
            </tr>
        <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="/js/script-delete.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.6.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/insert-data-dosen.js"></script>
    <script src="/js/edit-data-dosen.js"></script>

    <script src="/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/dashboard.js"></script>
  </body>
</html>
