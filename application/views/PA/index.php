<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


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
                  <?php if ($lhs['tanggal'] <= '5' and $lhs['status'] != 'Revisi') : ?>
                    <span class="text-success text-xs font-weight-normal">
                      <i class="fas fa-check-circle"></i>
                    </span>
                  <?php elseif ($lhs['tanggal'] > '5' and $lhs['tanggal'] <= '10' and $lhs['status'] != 'Revisi') : ?>
                    <span class="text-warning text-xs font-weight-normal">
                      <i class="fas fa-check-circle"></i>
                    </span>
                  <?php elseif ($lhs['tanggal'] > '10' and $lhs['status'] != 'Revisi') : ?>
                    <span class="text-danger text-xs font-weight-normal">
                      <i class="fas fa-check-circle"></i>
                    </span>
                  <?php elseif ($lhs['tanggal'] >= '1' and $lhs['status'] = 'Revisi') : ?>
                    <span class="text-dark text-xs font-weight-normal">
                      <i class="fas fa-check-circle"></i>
                    </span>
                  <?php endif; ?>
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

    <div class="row mb-5">
      <div class="col mt-2">
        <h6>Keterangan</h6>
        <table>
          <tr>
            <td class=>
              <span class="bg-success px-2 text-center">&nbsp;</span>
            </td>
            <td class="ps-2">: Pengiriman data < tgl 5</td>
          </tr>
          <tr>
            <td class=>
              <span class="bg-warning px-2 text-center">&nbsp;</span>
            </td>
            <td class="ps-2">: PENGIRIMAN DATA > TANGGAL 5 DAN <= TANGGAL 10</td>
          </tr>
          <tr>
            <td class=>
              <span class="bg-danger px-2 text-center">&nbsp;</span>
            </td>
            <td class="ps-2">: PENGIRIMAN DATA > TANGGAL 10</td>
          </tr>
          <tr>
            <td class=>
              <span class="bg-dark px-2 text-white text-center">R</span>
            </td>
            <td class="ps-2">: MASIH ADA YANG PERLU DI REVISI</td>
          </tr>

        </table>
      </div>