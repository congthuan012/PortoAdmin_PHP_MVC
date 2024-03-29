<div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= $_SESSION['login_avt'] ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?= $_SESSION['login_name'] ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Chức năng</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?= href('hethong','index') ?>"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a></li>
                            <?php 
                            if($this->parent_menu){
                                foreach($this->parent_menu as $menu)
                                {
                                    $submenus = $this->role->get_functionsforuser($menu->id,$_SESSION['login_id']);
                                ?>
                                    <li><a href="<?=$menu->lienket?>"><i class="<?= $menu->icon??'fa fa-home' ?>"></i> <?=$menu->ten?> <span class="fa fa-chevron-down"></span></a>
                                        <?php 
                                        if($submenus)
                                        {
                                        ?>
                                        <ul class="nav child_menu">
                                            <?php 
                                            foreach($submenus as $sub)
                                            {
                                                echo '<li><a href="'.$sub->lienket.'">'.$sub->ten.'</a></li>';
                                            }
                                            ?>
                                        </ul>
                                        <?php 
                                        }
                                        ?>
                                    </li>   
                                <?php 
                                }
                            }
                            else{
                                echo '<li>Vui long lien admin de dc cap quyen</li>';
                            }
                            ?>                           
                            </ul>
                        </div>
                        

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= href('user','logout') ?>">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>