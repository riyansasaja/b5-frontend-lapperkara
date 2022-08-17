<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
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

        <!-- contonet start -->

        <div class="container">
            <?php foreach ($laporan as $lp) : ?>
                <div class="card">
                    <div class="row p-2 justify-content-start">

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <p class="fw-bold">Satker</p>
                            </div>
                            <div class="col-md-auto">
                                <p>:</p>
                            </div>
                            <div class="col-md-auto">
                                <p><?= $lp['nama']; ?></p>
                            </div>
                        </div>
                        <div class="row mt-n3">
                            <div class="col-md-2">
                                <p class="fw-bold">Laporan Triwulan</p>
                            </div>
                            <div class="col-md-auto">
                                <p>:</p>
                            </div>
                            <div class="col-md-auto">
                                <p><?= $lp['berkas_laporan']; ?></p>
                            </div>
                        </div>
                        <div class="row mt-n3">
                            <div class="col-md-2">
                                <p class="fw-bold">Tahun</p>
                            </div>
                            <div class="col-md-auto">
                                <p>:</p>
                            </div>
                            <div class="col-md-auto">
                                <p><?= $lp['periode_tahun']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


            <div class="row mt-3">
                <div class="col ">
                    <!-- table start -->
                    <div class="card p-3">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="#" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#lap_keuangan_modal">
                                                    Upload Laporan Keuangan
                                                </a>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#lap_informasi_modal">
                                                    Upload Laporan Meja Informasi
                                                </a>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#lap_pengaduan_modal">
                                                    Upload Laporan Pengaduan
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- table end -->
                </div>
            </div>

            <!-- Modal upload lap. Keuangan -->
            <div class="modal fade" id="lap_keuangan_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6>Upload Laporan Triwulan Keuangan</h6>
                        </div>
                        <div class="modal-body">

                            <form method="POST" action="<?php echo base_url('PA_laper/uploadLaporanTriwulan'); ?>" enctype="multipart/form-data">
                                <?php foreach ($laporan as $lp) : ?>
                                    <input type="text" name="id" value="<?= $lp['id'] ?>" hidden>
                                    <input type="text" name="berkas_laporan" value="<?= $lp['berkas_laporan'] ?>" hidden>
                                    <input type="text" name="tahun" value="<?= $lp['periode_tahun'] ?>" hidden>
                                    <input type="text" name="nm_laporan" value="Keuangan" hidden>
                                    <div class="input-group input-group-sm input-group-outline my-3">
                                        <div class="col-3">
                                            <label class="form-label">File PDF</label>
                                        </div>
                                        <div class="col">
                                            <input type="file" name="file1" class="form-control form-control-sm" placeholder="tes">
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm input-group-outline my-3">
                                        <div class="col-3">
                                            <label class="form-label">File Excel</label>
                                        </div>
                                        <div class="col">
                                            <input type="file" name="file2" class="form-control form-control-sm" placeholder="tes">
                                        </div>
                                    </div>

                                <?php endforeach; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" href="#" data-bs-toggle="modal" data-bs-target="#success_modal" class="btn bg-gradient-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal upload lap. keuangan -->

            <!-- Modal upload lap. meja informasi  -->
            <div class="modal fade" id="lap_informasi_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6>Upload Laporan Triwulan Meja Informasi</h6>
                        </div>
                        <div class="modal-body">

                            <form method="POST" action="<?php echo base_url('PA_laper/uploadLaporanTriwulan'); ?>" enctype="multipart/form-data">
                                <?php foreach ($laporan as $lp) : ?>
                                    <input type="text" name="id" value="<?= $lp['id'] ?>" hidden>
                                    <input type="text" name="berkas_laporan" value="<?= $lp['berkas_laporan'] ?>" hidden>
                                    <input type="text" name="tahun" value="<?= $lp['periode_tahun'] ?>" hidden>
                                    <input type="text" name="nm_laporan" value="Meja Informasi" hidden>
                                    <div class="input-group input-group-sm input-group-outline my-3">
                                        <div class="col-3">
                                            <label class="form-label">File PDF</label>
                                        </div>
                                        <div class="col">
                                            <input type="file" name="file1" class="form-control form-control-sm" placeholder="tes">
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm input-group-outline my-3">
                                        <div class="col-3">
                                            <label class="form-label">File Excel</label>
                                        </div>
                                        <div class="col">
                                            <input type="file" name="file2" class="form-control form-control-sm" placeholder="tes">
                                        </div>
                                    </div>

                                <?php endforeach; ?>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button href="#" type="submit" data-bs-toggle="modal" data-bs-target="#success_modal" class="btn bg-gradient-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal upload lap. meja informasi -->

            <!-- Modal upload lap. pengaduan  -->
            <div class="modal fade" id="lap_pengaduan_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6>Upload Laporan Triwulan Pengaduan</h6>
                        </div>
                        <div class="modal-body">

                            <form method="POST" action="<?php echo base_url('PA_laper/uploadLaporanTriwulan'); ?>" enctype="multipart/form-data">
                                <?php foreach ($laporan as $lp) : ?>
                                    <input type="text" name="id" value="<?= $lp['id'] ?>" hidden>
                                    <input type="text" name="berkas_laporan" value="<?= $lp['berkas_laporan'] ?>" hidden>
                                    <input type="text" name="tahun" value="<?= $lp['periode_tahun'] ?>" hidden>
                                    <input type="text" name="nm_laporan" value="Laporan Pengaduan" hidden>
                                    <div class="input-group input-group-sm input-group-outline my-3">
                                        <div class="col-3">
                                            <label class="form-label">File PDF</label>
                                        </div>
                                        <div class="col">
                                            <input type="file" name="file1" class="form-control form-control-sm" placeholder="tes">
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm input-group-outline my-3">
                                        <div class="col-3">
                                            <label class="form-label">File Excel</label>
                                        </div>
                                        <div class="col">
                                            <input type="file" name="file2" class="form-control form-control-sm" placeholder="tes">
                                        </div>
                                    </div>

                                <?php endforeach; ?>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button href="#" data-bs-toggle="modal" data-bs-target="#success_modal" class="btn bg-gradient-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal upload lap. pengaduan -->


            <!-- modal data berhasil disimpan -->
            <div class="modal fade" id="success_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5>Success!</h5>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <img src="<?= base_url("assets/ilus/success.png") ?>" alt="Success Pict" class="img-fluid" width="80%">
                                <p>Selamat Data Berhasil disimpan.</p>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>