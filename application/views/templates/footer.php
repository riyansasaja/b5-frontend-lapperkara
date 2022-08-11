<footer class="footer py-4  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    ©
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
<script src="<?= base_url() ?>/assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>/assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url() ?>/assets/js/plugins/chartjs.min.js"></script>
<!-- javascript -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') . $js ?>"></script>
<!-- <?php
        if ($js != '') :
        ?>
    <script src="<?= base_url() ?>/assets/js/costum/<?= $js ?>"></script>
<?php endif; ?> -->
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