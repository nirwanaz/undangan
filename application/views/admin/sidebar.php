        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <!-- <img src="<?= base_url(); ?>assets/images/icon/logo.png" alt="Cool Admin" /> -->
                    <p>logo iniundanganmu.com</p>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?php echo base_url('index.php/admin/dashboard')?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class=" fa fa-users"></i>Manajemen User</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= base_url('index.php/admin/membership') ?>">User</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-th-large"></i>Manajemen Features</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/feature') ?>">Features</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/music') ?>">Features Music</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/photo') ?>">Features Foto</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/video') ?>">Features Video</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/gift') ?>">Features Gifts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-shopping-cart"></i>Manajemen Bundle</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/bundle') ?>">Bundle</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Manajemen Template</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/template') ?>">Template</a>
                                </li>
                                <li>
                                    <a href="register.html">Atur Template</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-usd"></i>Manajemen Orders</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Transakasi</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->