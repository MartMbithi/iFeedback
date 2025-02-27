<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="dashboard" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="../public/images/logo.png" srcset="../public/images/logo.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="../public/images/logo.png" srcset="../public/images/logo.png 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="dashboard" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="complains?type=All&directorate=all" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                            <span class="nk-menu-text">All Complains</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="compliments" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-check"></em></span>
                            <span class="nk-menu-text">All Compliments</span>
                        </a>
                    </li>
                    <?php
                    if ($_SESSION['user_access_level'] == 'System Administrator') { ?>
                        <li class="nk-menu-item">
                            <a href="system_users" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                <span class="nk-menu-text">System Users</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item">
                            <a href="directorates" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-tag"></em></span>
                                <span class="nk-menu-text">Directorates</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="departments" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-bookmark"></em></span>
                                <span class="nk-menu-text">Departments</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="api_settings" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                                <span class="nk-menu-text">Mailer API Settings</span>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="nk-menu-item">
                        <a data-toggle="modal" href="#end_session" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-power"></em></span>
                            <span class="nk-menu-text">Logout</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>