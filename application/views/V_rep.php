
<div class="row">
    <div class="col-sm-12" style="margin-bottom: 30px">
        <button type="button" id="btn_add" class="btn btn-primary">Ajouter <span lass="m-l-5"><i
                    class="fa fa-plus-square"></i></span></button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des représentations</h3>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Code mission</th>
                        <th>mission</th>
                        <th>Mail </th>
                        <th>Adresse </th>
                        <th>Teléphone</th>
                        <!--   <th>id type</th> -->

                        <th>Type représentation</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_data as $value)
                    { ?>
                        <tr>
                            <td><?php echo $value->id_rep?></td>
                            <td><?php echo $value->code_mission?></td>
                            <td><?php echo $value->mission?></td>
                            <td><?php echo $value->mail?></td>
                            <td><?php echo $value->Adresse ?></td>
                            <td><?php echo $value->Tel ?></td>
                            <!--    <td><?php// echo $value->id_type ?></td> -->

                            <td><?php echo $value->libelle_type ?></td>

                            <td class="actions" style="width: 1%; text-align: center; white-space: nowrap">
                                <a href="#" class="on-default btn_edit" id='<?php echo $value->id_rep; ?>'><i class="fa fa-pencil"></i></a>
                                &nbsp;
                                <a href="#" class="on-default btn_delete" id='<?php echo $value->id_rep; ?>'><i class="fa fa-trash-o" style="color:red"></i></a>
                                &nbsp;
                                <a href="#" class="on-default btn_show" id='<?php echo $value->id_rep; ?>'><i class="fa fa-eye" style="color:#CCCCCC"></i></a>
                            </td>
                            </td>
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
                    <h4 class="modal-title" id="modal_formLabel">Nouvelle représentation</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_rep" name="id_rep"/>

                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3"> Nom</label>
                            <div class="col-md-9">
                                <input name="Nom" id="Nom"
                                       class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Adresse</label>
                            <div class="col-md-9">
                                <input name="Adresse" id="Adresse"
                                       class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Téléphone</label>
                            <div class="col-md-9">
                                <input name="Tel" id="Tel"
                                       class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">type de representation</label>

                            <div class="col-md-9">
                                <select name="id_type" id="id_type" required>
                                    <?php echo $select_type; ?>
                                </select>
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


<script type="text/javascript">
    $(document).ready(function (){
        $('#datatable').managing_ajax({
            id_menu: 'menu_representation', //id du menu dans le fichier navigation_bar
            id_modal_form: 'modal_form', //id du modal qui contient le formulaire

            id_form: 'form', //id du formulaire
            url_submit: "<?php echo site_url('C_representation/save')?>", //url du save (données envoyés par post)

            title_modal_add: 'Nouvelle représentation', //Title du modal à l'ouverture en mode ajout
            focus_add: 'Nom', //l'emplacement du focus en mode ajout

            title_modal_edit: 'Edition d\'un statut"', //Title du modal à l'ouverture en mode edit
            focus_edit: 'Nom',//l'emplacement du focus en mode edit

            url_edit: "<?php echo site_url('C_representation/get_record')?>", //url le fonction qui recupére la données de la ligne
            url_delete: "<?php echo site_url('C_representation/delete')?>", //url de la fonction supprimé
        });
    });
</script>
