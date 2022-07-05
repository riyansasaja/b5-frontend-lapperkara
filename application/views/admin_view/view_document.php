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
            <div class="row bg-gray-400 justify-content-start">

                <div class="row mt-3">
                    <div class="col-md-2">
                        <p class="fw-bold">Satker</p>
                    </div>
                    <div class="col-md-auto">
                        <p>:</p>
                    </div>
                    <div class="col-md-auto">
                        <p>Pengadilan Agama Kuta</p>
                    </div>
                </div>
                <div class="row mt-n3">
                    <div class="col-md-2">
                        <p class="fw-bold">Periode Laporan</p>
                    </div>
                    <div class="col-md-auto">
                        <p>:</p>
                    </div>
                    <div class="col-md-auto">
                        <p>Juni 2022</p>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col">
                    <!-- table start -->
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Laporan</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tgl Kirim
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            File
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Catatan
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            revisi
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tgl Revisi
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Validasi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- looping data start -->

                                    <!-- first loop -->
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xs text-secondary mb-0 ms-3">1</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-xs">Januari</h6>
                                                <p class="text-xs text-secondary mb-0">Lap Per Jan 21</p>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal">23/04/18
                                                10:30am</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#viewdocumentModal">
                                                    <i class="fas fa-file-pdf"></i> |
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#viewdocumentModal">
                                                    <i class="fas fa-file-excel"></i>
                                                </a>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-success text-xs font-weight-normal">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#catatanModal"><i class="fas fa-clipboard"></i></a>

                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal">
                                                <i class="fas fa-eye"></i>
                                            </span>

                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal">
                                                28/04/18 10:30am
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#validasiModal">
                                                <span class="text-white bg-gradient-success text-xs font-weight-normal rounded p-1">
                                                    Validasi
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- looping data end -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- table end -->
                </div>
            </div>

            <!-- catatanModal start -->
            <div class="modal fade" id="catatanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Catatan Laporan Perkara</h5>
                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Klik untuk membuat catatan</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn bg-gradient-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- catatan modal end -->

            <!-- validasi Modal start -->
            <div class="modal fade" id="validasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="row align-items-center">
                                <div class="col text-end">
                                    <h3>Validasi Laporan ini</h3>
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="<?= base_url('assets/ilus/') ?>tanya.png" alt="">
                                </div>

                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn bg-gradient-primary">Validasi</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- validasi modal end -->

            <!-- viewdocument Modal start -->
            <div class="modal fade" id="viewdocumentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-normal" id="exampleModalLabel">View Document</h5>
                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#catatanModal" class="text-white btn btn-primary active" role="button">Buat Catatan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- viewdocument modal end -->


        </div>