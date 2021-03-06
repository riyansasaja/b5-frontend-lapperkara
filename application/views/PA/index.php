<!--
=========================================================
* Material Dashboard 2 - v3.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Laporan Perkara
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/f8c43fa68d.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('assets/css/material-dashboard.css?v=3.0.3') ?>" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

  <!-- sidebar -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="<?= base_url('assets/img/logo-ct.png') ?>" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Laporan Perkara</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="./pages/dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-tachometer"></i>
            </div>
            <span class="nav-link-text ms-1">Beranda </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-file-contract fa-1x"></i>
            </div>
            <span class="nav-link-text ms-2">Pengajuan Banding</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="<?php echo base_url('PA_laper'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-calendar"></i>
            </div>
            <span class="nav-link-text ms-2">Laporan Perkara Bulanan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <span class="nav-link-text ms-2">Laporan Perkara Triwulan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-diagnoses"></i>
            </div>
            <span class="nav-link-text ms-1">Eksaminasi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url('auth/logout'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sign-out"></i>
            </div>
            <span class="nav-link-text ms-2">Keluar</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- End sidebar -->


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <!-- sweetalert -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
  <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h3 class="font-weight-bolder mb-0">Dashboard Laporan Perkara</h3>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->



    <div class="container-fluid py-4">
      <div class="row">
        <div class="col text-center">
          <h6 class="d-block">Laporan Perkara Tahun <script>
              document.write(new Date().getFullYear())
            </script>
          </h6>
          <!-- dropdown start -->
          <div class="d-flex justify-content-center">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih Tahun
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="tahun">
                <?php foreach ($years as $y) : ?>

                  <li><a class="dropdown-item" href="<?php echo base_url(); ?>laporan/<?php echo $y['year'];  ?>" value="1"><?php echo $y['year']; ?></a></li>


                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <!-- dropdown end -->
        </div>
      </div>

      <!-- modal start -->
      <div class="row">
        <div class="col">
          <!-- button -->
          <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Laporan
          </button>

          <!-- modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Laporan Perkara</h5>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- form start -->
                  <form method="POST" action="<?php echo base_url('PA_laper/add_laporan_perkara'); ?>" enctype="multipart/form-data">
                    <div class="input-group input-group-static my-3">
                      <label for="bulan">Periode</label>
                      <input id="bulan" type="month" name="periode" class="form-control">
                    </div>
                    <div class="input-group input-group-static my-3">
                      <label for="upload-pdf">Upload file PDF</label>
                      <input id="upload-pdf" type="file" name="file1" class="form-control">
                    </div>
                    <div class="input-group input-group-static my-3">
                      <label for="upload-zip">Upload file XLS</label>
                      <input id="upload-zip" type="file" name="file2" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                </div>
                </form>
                <!-- form end -->
              </div>
            </div>
          </div>
          <!-- modal -->

        </div>
      </div>
      <!-- modal end -->

      <!-- table start -->
      <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0" id="laporan_perkara">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bulan / Berkas</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tgl Upload
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tgl Revisi
                  Akhir
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                </th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <!-- looping data start -->

              <!-- first loop -->
              <?php $i = 1; ?>
              <?php foreach ($laporan as $lhs) : ?>
                <tr>
                  <td>
                    <div class="d-flex flex-column justify-content-center">
                      <p class="text-xs text-secondary mb-0 ms-3"><?php echo $i++; ?></p>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs"><?php echo $lhs['periode']; ?></h6>
                      <p class="text-xs text-secondary mb-0"><?php echo $lhs['berkas_laporan']; ?></p>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-normal"><?php echo $lhs['tgl_upload']; ?></span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-normal"><?php echo $lhs['tgl_terakhir_rev']; ?></span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-success text-xs font-weight-normal">
                      <i class="fas fa-check-circle"></i>
                    </span>
                  </td>
                  <td class="align-middle">
                    <!--  <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Upload">
                    <i class="fas fa-upload"></i>
                  </a> |
                  <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Edit">
                    <i class="fa fa-edit"></i>
                  </a> |
                  <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Download">
                    <i class="fas fa-download"></i>
                  </a> | -->
                    <a href="<?= base_url('PA_laper/view_laporan/') . $lhs['id'] ?>" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Lihat" title="Detail">
                      <i class="fa fa-eye"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>

              <!-- looping data end -->

            </tbody>
          </table>
        </div>
      </div>
      <!-- table end -->


      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ??
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by Tim IT PTA Manado
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
  <!-- sweet alert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script>
    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Swal.fire(

            'Success',
            flashData,
            'success'
        );
    }

    const flashMsg = $('.flash-data2').data('flashdata');
    if (flashMsg) {
        Swal.fire(
            'Error',
            flashMsg,
            'error'
        );
    }
    // Swal.fire('Any fool can use a computer')
  </script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

</body>

</html>