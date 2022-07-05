<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>




<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h3 class="font-weight-bolder mb-0">Dashboard Rekap Laporan Perkara</h3>
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
                <h6 class="d-block">Rekap Laporan Perkara <br> Tahun 2022</h6>
                <!-- dropdown start -->
                <div class="d-flex justify-content-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Tahun
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">2022</a></li>
                            <li><a class="dropdown-item" href="#">2023</a></li>
                            <li><a class="dropdown-item" href="#">2024</a></li>
                        </ul>
                    </div>
                </div>
                <!-- dropdown end -->
            </div>
        </div>


        <!-- table start -->
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-3">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Feb</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mar</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apr</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mei</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jun</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jul</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agu</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sep</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Okt</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nov</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Des</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- table end -->

        <div class="row mt-4">
            <div class="col">
                <div class="card card-frame">
                    <div class="card-body">
                        <h6 class="text-center">
                            GRAFIK REKAP KECAPATAN & KETEPATAN <br>PENGIRIMAN PELAPORAN PERKARA
                        </h6>
                        <div>
                            <canvas id="chart_satu"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>