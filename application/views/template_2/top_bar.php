<!-- Top Bar Start -->
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="" class="logo"><i class="md md-terrain"></i> <span>Core</span></a>
        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button type="button" class="button-menu-mobile open-left">
                        <i class="fa fa-bars"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>
                <form class="navbar-form pull-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control search-bar" placeholder="Recherche...">
                    </div>
                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                </form>

                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown hidden-xs">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" id="notification_control"
                           data-toggle="dropdown" aria-expanded="true">
                            <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger nbr_notification_control"><?php echo "10";// $nbr_notification[0]->nbr_notification?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="text-center notifi-title">Notification</li>
                            <li class="list-group">
                                <!-- list item-->
                                <a href="<?php echo base_url(); ?>C_depot/get_depots" class="list-group-item" id="notification_autorisation">
                                    <div class="media">
                                        <div class="media-left">
                                            <em class="fa fa-user-plus fa-2x text-info"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">AUTORISATION D'ENSEIGNEMENT</div>
                                            <p class="m-0">
                                                <small>Vous avez <span class="nbr_notification_control"><?php echo $nbr_notification[0]->nbr_notification?></span> demande(s)</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <!-- <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <em class="fa fa-diamond fa-2x text-primary"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">New settings</div>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                        </div>
                                    </div>
                                </a> -->
                                <!-- list item-->
                                <!-- <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <em class="fa fa-bell-o fa-2x text-danger"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">Updates</div>
                                            <p class="m-0">
                                                <small>There are
                                                    <span class="text-primary">2</span> new updates available
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </a> -->
                                <!-- last list item -->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <small>See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                    </li>
                    <!--<li class="hidden-xs">
                        <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                    </li>-->
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img
                                src="assets/images/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Déconnexion</a></li>
                        </ul>
                    </li>


                    <li class="hidden-xs">
                        <a href="#" id="btn-logout" class="waves-effect waves-light" ><i
                                class="md md-settings-power"></i></a>
                    </li>


                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
