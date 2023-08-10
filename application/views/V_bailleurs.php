


<?php btn_add_action('CODE_BAILLEURS') ?>

    <div class="wrapper ">


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des blocs</h3>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Libelle bailleurs</th>
                        <th>Libelle type partenaires</th>
                        <th>Etat du bailleur</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_data as $value)
                   
					{ ?>
                        <tr>
                            <td><?=$value->libelle_bailleurs; ?></td>
                            <td><?=$value->libelle_type_part; ?></td>
                            <td><?php   
                            if ($value->etat_bailleurs=="1") {
                                echo "actif";
                                    }else{
                                echo "desactivé";
                                    }



                             ?></td>

                            <td style="width: 1%; white-space: nowrap">
                                <?php btn_edit_action($value->code_bailleurs,'CODE_BAILLEURS')  ?>&nbsp;&nbsp;
                                <?php btn_delete_action($value->code_bailleurs,'CODE_BAILLEURS')  ?>&nbsp;&nbsp;
                                <?php btn_show_action($value->code_bailleurs,'CODE_BAILLEURS')  ?>

                        </tr>
                    <?php
                    }
					?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div> <!-- End Row -->


<div id="modal_form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_formLabel"
     aria-hidden="true">
    <form action="#" id="form" class="form-horizontal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="modal_formLabel">Title</h4>
                </div>
                <div class="modal-body">

                    <input type="hidden" id="code_bailleurs" name="code_bailleurs" required/>

                    <div class="form-body">
                        <div class="form-group">

                            <label class="control-label col-md-3">Libelle bailleurs</label>

                            <div class="col-md-9">
                                <input name="libelle_bailleurs" id="libelle_bailleurs"
                                       class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Libelle type partenaire</label>

                            <div class="col-md-9">
                                <select name="code_type_part" id="code_type_part" required>
                                        <?php echo $select_partenaire; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Etat</label>

                            <div class="col-md-2">
                                <input name="etat_bailleurs" value="1"
                                       class="form-control" type="radio">
                                Actif
                            </div>

                            <div class="col-md-2">
                                <input name="etat_bailleurs" value="-1"
                                       class="form-control" type="radio" checked>
                                En attente
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Enregistrer"/>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->

</div>
<script type="text/javascript">
    $(document).ready(function (){

        $('#datatable').managing_ajax({
            id_modal_form: 'modal_form', //id du modal qui contient le formulaire
                id_menu: 'menu_bailleurs',
            id_form: 'form', //id du formulaire
            url_submit: "<?php echo site_url('C_bailleurs/save')?>", //url du save (données envoyés par post)

            title_modal_add: 'Nouveau Bailleur', //Title du modal à l'ouverture en mode ajout
            focus_add: 'libelle_bailleurs', //l'emplacement du focus en mode ajout

            title_modal_edit: 'Edition Bailleur', //Title du modal à l'ouverture en mode edit
            focus_edit: 'libelle_bailleurs',//l'emplacement du focus en mode edit

            url_edit: "<?php echo site_url('C_bailleurs/get_record')?>", //url le fonction qui recupére la données de la ligne
            url_archive: "<?php echo site_url('C_bailleurs/archive')?>",
            url_delete: "<?php echo site_url('C_bailleurs/delete')?>" //url de la fonction supprimé
        });

    });
</script>