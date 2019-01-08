<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">
            <div class="logo">
                <!-- Text Logo -->
                <a href="<?=SITE_URL?>" class="logo">
                    <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                    <span class="logo-large"><i class="mdi mdi-radar"></i> <?= PAGE_TITLE ?></span>
                </a>
            </div>
            <div class="menu-extras topbar-custom">
                <ul class="list-inline float-right mb-0">
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                           <?=$this->Html->image('profile.png',['class'=>'rounded-circle'])?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small class="text-white">Welcome</small> </h5>
                            </div>
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-star-variant"></i> <span>Profile</span>
                            </a>
                            <?=$this->Html->link('<i class="mdi mdi-logout"></i> <span>Logout</span>',['controller'=>'logout'],['class'=>'dropdown-item notify-item','escape'=>false])?>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> 
    </div>
    <div class="navbar-custom ">
        <div class="container-fluid">
            <div id="navigation">
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <?=$this->Html->link(' <i class="fa fa-cloud-upload"></i><span> อัพโหลดข้อมูล </span>',['controller'=>'upload'],['escape'=>false,'class'=>'waves-effect waves-primary'])?>
                    </li>
                    <li class="has-submenu">
                        <?=$this->Html->link('<i class="fa fa-history"></i><span> ประวัติการอัพโหลดข้อมูล </span>',['controller'=>'datas'],['class'=>'waves-effect waves-primary','escape'=>false])?>
                    </li>
                    <li class="has-submenu">
                        <?=$this->Html->link('<i class="fa fa-pie-chart"></i><span> รายงาน </span>',['controller'=>'reports'],['class'=>'waves-effect waves-primary','escape'=>false])?>
                    </li>
                    <li class="has-submenu">
                        <?=$this->Html->link('<i class="mdi mdi-account-network"></i><span> ผู้ใช้งาน </span>',['controller'=>'users'],['class'=>'waves-effect waves-primary','escape'=>false])?>
                    </li>
                </ul>
            </div> 
        </div> 
    </div> 
</header>