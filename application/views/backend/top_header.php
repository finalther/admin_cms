        <div id="page-header" class="topbar bg-blue">
            <!-- LOGO -->
            <div class="topbar-left">
                <!-- Image logo -->
                <a href="index.html" class="logo"> <span> <img src="<?=base_url()?>assets/images/logo.png" alt="" class="lg-logo"> </span> <i> <img src="<?=base_url()?>assets/images/logo_sm.png" alt="" class="sm-logo"> </i> </a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left nav-menu-left">
                        <li>
                            <button type="button" class="button-menu-mobile open-left waves-effect"> <i class="dripicons-menu"></i> </button>
                        </li>
                    </ul>

                    <!-- Search box -->
<!--                     <ul class="nav navbar-nav navbar-left">
                        <li class="hidden-xs">
                            <form role="search" class="app-search">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul> -->
                    <!-- end Search box -->

                    <!-- notification bar -->

                    <div class="notification-header">
                        <ul class="nav navbar-nav navbar-right content-right">
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?=base_url()?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li><a href="javascript:void(0)">Profile</a></li>
                                    <li><a href="javascript:void(0)"><span class="badge badge-info pull-right">4</span>Settings</a></li>
                                    <li><a href="javascript:void(0)">Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?=base_url('auth/do_logout')?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar -->
        </div>