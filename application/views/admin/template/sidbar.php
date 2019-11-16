<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard-admin') ?>" class="brand-link">
        <!-- <img src="<?= base_url('assets/frondend/assets1/img/bb.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light mx-auto">DMIQA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar mt-5">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- QUERY MENU -->
                <!-- QUERY MENU -->
                <?php
                $id_level_user  = $this->session->userdata('level');
                $sql_menu = "SELECT * FROM x_menu WHERE id in(select id_menu from x_user_rule where id_level_user=$id_level_user) and is_main_menu=0";
                if ($id_level_user == '') {
                    redirect('auth');
                } else {
                    $main_menu = $this->db->query($sql_menu)->result();
                }
                ?>
                <?php foreach ($main_menu as $main) : ?>
                    <!-- // chek apakah ada submenu ? -->
                    <?php
                        $this->db->select('a.nama_menu, a.link, a.icon');
                        $this->db->from('x_menu a');
                        $this->db->join('x_user_rule b', 'b.id_menu = a.id');
                        $this->db->where('b.id_level_user', $id_level_user);
                        $this->db->where('a.is_main_menu', $main->id);
                        $submenu = $this->db->get();
                        ?>
                    <?php if ($submenu->num_rows() > 0) : ?>
                        <!-- // tampilkan submenu disini -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="<?= strtoupper($main->nama_menu) ?>"></i>
                                <p>
                                    <?= strtoupper($main->nama_menu) ?>
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class='nav nav-treeview'>";
                                <?php foreach ($submenu->result() as $sub) : ?>
                                    <li class="nav-item">
                                        <a href="<?= base_url($sub->link) ?>" class="nav-link">
                                            <i class="<?= $sub->icon; ?>"></i>
                                            <p><?= strtoupper($sub->nama_menu) ?></p>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else : ?>

                        <?php
                                $test = $main->nama_menu;
                                eval("\$test = \"$test\";");
                                ?>

                        <li class="nav-item has-treeview">
                            <a href="<?= base_url($main->link) ?>" class="nav-link">
                                <i class="<?= $main->icon; ?>"></i>
                                <p><?= strtoupper($test) ?></p>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
                <li class=" nav-item">
                    <a href="<?= base_url('logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>