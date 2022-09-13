<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>




<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
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
                <h6 class="d-block">Laporan Perkara <br> Tahun <script>
                        document.write(new Date().getFullYear())
                    </script>
                </h6>
                <!-- dropdown start -->
                <div class="d-flex justify-content-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Tahun
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($years as $y) : ?>

                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Pta_user/triwulan_search_year/<?php echo $y['year'];  ?>" value="1"><?php echo $y['year']; ?></a></li>


                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!-- dropdown end -->
            </div>
        </div>

        <!-- table start -->
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr class="text-center">
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Satker</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Triwulan I
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Triwulan II
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Triwulan III
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Triwulan IV
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- looping data start -->

                        <?php $i = 1; ?>
                        <?php foreach ($nama_user as $nm) : ?>

                            <tr class="text-center">
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs text-secondary mb-0 ms-3"><?php echo $i++; ?></p>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs text-secondary mb-0"><?php echo $nm['nama']; ?></p>
                                    </div>
                                </td>

                                <td>
                                    <?php foreach ($all as $one) : ?>
                                        <!-- <?php if ($nm['id'] == $one['id_user'] and $one['periode'] == '2022-01') {
                                                    echo "√";
                                                } ?>     -->
                                        <?php if ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '03' and $one['tanggal'] <= '5' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-success">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '03' and $one['tanggal'] > '5' and $one['tanggal'] <= '10' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-warning">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '03' and $one['tanggal'] > '10' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-danger">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '03' and $one['tanggal'] >= '1' and $one['status_laporan'] == 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-dark  ">
                                                        R
                                                    </p>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?php foreach ($all as $one) : ?>
                                        <!-- <?php if ($nm['id'] == $one['id_user'] and $one['periode'] == '2022-02') {
                                                    echo "√";
                                                } ?>     -->
                                        <?php if ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '06' and $one['tanggal'] <= '5' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-success">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '06' and $one['tanggal'] > '5' and $one['tanggal'] <= '10' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-warning">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '06' and $one['tanggal'] > '10' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-danger">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '06' and $one['tanggal'] >= '1' and $one['status_laporan'] == 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-dark  ">
                                                        R
                                                    </p>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?php foreach ($all as $one) : ?>
                                        <!-- <?php if ($nm['id'] == $one['id_user'] and $one['periode'] == '2022-03') {
                                                    echo "√";
                                                } ?>     -->
                                        <?php if ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '09' and $one['tanggal'] <= '5' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-success">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '09' and $one['tanggal'] > '5' and $one['tanggal'] <= '10' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-warning">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '09' and $one['tanggal'] > '10' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-danger">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '09' and $one['tanggal'] >= '1' and $one['status_laporan'] == 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-dark  ">
                                                        R
                                                    </p>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?php foreach ($all as $one) : ?>
                                        <!-- <?php if ($nm['id'] == $one['id_user'] and $one['periode'] == '2022-04') {
                                                    echo "√";
                                                } ?>     -->
                                        <?php if ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '12' and $one['tanggal'] <= '5' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-success">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '12' and $one['tanggal'] > '5' and $one['tanggal'] <= '10' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-warning">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '12' and $one['tanggal'] > '10' and $one['status_laporan'] != 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-danger">
                                                        √
                                                    </p>
                                                </a>
                                            </div>
                                        <?php elseif ($nm['id'] == $one['id_user'] and $one['periode_triwulan'] == '12' and $one['tanggal'] >= '1' and $one['status_laporan'] == 'Revisi') : ?>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="<?= base_url('Pta_user/view_triwulan/') . $one['id'] ?>">
                                                    <p class="text-xs text-white mb-0 rounded bg-dark  ">
                                                        R
                                                    </p>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
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