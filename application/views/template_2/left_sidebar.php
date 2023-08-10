<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
<!--         <div class="user-details">
            <div class="pull-left">
                <img src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <?php
                        // Nom de l'utilisateur
                        $tab_data_ses = $this->session->daj85_cour9_fr;  ///Optimiser l'appel d tableau
                        echo $tab_data_ses['nom'];
                        ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                        <li><a href="<?php  echo site_url() ?>se_deconnecter"><i class="md md-settings-power"></i> Logout</a></li>
                    </ul>
                </div>

                <p class="text-muted m-0"><?php
                      echo $tab_data_ses['profil'];
                    ?></p>
            </div>
        </div> -->

        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="<?php echo base_url(); ?>C_accueil" class="menu waves-effect"  id="menu_acceuil"><i class="md md-home"></i><span> Acceuil </span></a>
                </li>
		        <?php 
		        //Recuperation du tableau des roles menus enregistré dans la session
		        $menu_roles = $this->session->menu_roles;
		        $smenu_roles = $this->session->smenu_roles;
		        
		        $menu_roles['SECURITE']         = "hh";
		        $smenu_roles['LEEP']['d_read']  = "hh";
		        ?>

                <!-- gESTION -->
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-settings"></i><span> Immatriculation </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url(); ?>C_vehicule" class="menu" id="menu_vehicule">Véhicule</a></li>
                        <li><a href="<?php echo base_url(); ?>C_demandeur" class="menu" id="menu_demandeur">Demandeur</a></li>

                    </ul>

                </li>
                <!-- gESTION -->
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-settings"></i><span> Représentation  </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url(); ?>C_representation" class="menu" id="menu_representation">Représentation</a></li>
                        <li><a href="<?php echo base_url(); ?>C_type_rep" class="menu" id="menu_type_rep">Type représentation</a></li>

                    </ul>

                </li>
                <!-- gESTION staut-->
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-settings"></i><span> Statut</span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url(); ?>C_statut" class="menu" id="menu_statut">Statut</a></li>


                    </ul>

                </li>
				<!-- Paramètrages -->
		        <li class="has_sub">
		            <a href="#" class="waves-effect"><i class="md md-settings"></i><span> Paramétrages </span><span class="pull-right"><i class="md md-add"></i></span></a>
		            <ul class="list-unstyled">
						<li><a href="<?php echo base_url(); ?>C_etablissement" class="menu" id="menu_etablissements">Etablissements</a></li>
						<li><a href="<?php echo base_url(); ?>C_bailleurs" class="menu" id="menu_bailleurs">Bailleurs</a></li>
						<li><a href="<?php echo base_url(); ?>C_partenaire" class="menu" id="menu_partenaire">Partenaire</a></li>
		            </ul>
		           
		        </li>
		        
		        
				<?php if(isset($menu_roles['SECURITE'])):?>
				<li class="has_sub">
					<a href="#" class="waves-effect"><i class="md md-security"></i><span> Sécurité </span><span class="pull-right"><i class="md md-add"></i></span></a>
					<ul class="list-unstyled">
						<?php if(isset($smenu_roles['LEEP']['d_read'])):?>
							<li><a href="<?php echo base_url(); ?>C_sys_user" class="menu" id="menu_sys_users">Utilisateurs</a></li>
						<?php endif; ?>
		
						<?php if(isset($smenu_roles['LEEP']['d_read'])):?>
							<li><a href="<?php echo base_url(); ?>C_sys_menu" class="menu" id="menu_sys_menu">Menus</a></li>
						<?php endif; ?>
		
						<?php if(isset($smenu_roles['LEEP']['d_read'])):?>
							<li><a href="<?php echo base_url(); ?>C_sys_profil" class="menu" id="menu_sys_profils">Profils</a></li>
						<?php endif; ?>
					</ul>
				</li>
				<?php endif; ?>
			</ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php 
unset($menu_roles, $smenu_roles, $tab_data_ses);
?>
<!-- Left Sidebar End --> 
