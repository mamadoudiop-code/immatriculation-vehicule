
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
                <h3 class="panel-title">Liste des statuts</h3>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>code</th>
                        <th>libelle type </th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_data as $value)
                    { ?>
                        <tr>
                            <td><?php echo $value->id_type ?></td>
                            <td><?php echo $value->libelle_type ?></td>

                            <td class="actions" style="width: 1%; text-align: center; white-space: nowrap">
                                <a href="#" class="on-default btn_edit" id='<?php echo $value->id_type; ?>'><i class="fa fa-pencil"></i></a>
                                &nbsp;
                                <a href="#" class="on-default btn_delete" id='<?php echo $value->id_type; ?>'><i class="fa fa-trash-o" style="color:red"></i></a>
                                &nbsp;
                                <a href="#" class="on-default btn_show" id='<?php echo $value->id_type; ?>'><i class="fa fa-eye" style="color:#CCCCCC"></i></a>
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
                    <h4 class="modal-title" id="modal_formLabel">Nouvel type de représentation</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_type" name="id_type"/>

                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Libelle type</label>
                            <div class="col-md-9">
                                <input name="libelle_type" id="libelle_type"
                                       class="form-control" type="text" required>
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
            id_menu: 'menu_type_rep', //id du menu dans le fichier navigation_bar
            id_modal_form: 'modal_form', //id du modal qui contient le formulaire

            id_form: 'form', //id du formulaire
            url_submit: "<?php echo site_url('C_type_rep/save')?>", //url du save (données envoyés par post)

            title_modal_add: 'Nouvel type de représentation', //Title du modal à l'ouverture en mode ajout
            focus_add: 'libelle_type', //l'emplacement du focus en mode ajout

            title_modal_edit: 'Edition d\'un statut"', //Title du modal à l'ouverture en mode edit
            focus_edit: 'libelle_type',//l'emplacement du focus en mode edit

            url_edit: "<?php echo site_url('C_type_rep/get_record')?>", //url le fonction qui recupére la données de la ligne
            url_delete: "<?php echo site_url('C_type_rep/delete')?>", //url de la fonction supprimé
        });
    });
</script>
