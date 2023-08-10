<link href="<?php echo base_url(); ?>assets_2/plugins/jquery-multi-select/multi-select.css"  rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_2/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_2/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
<script src="<?php  echo base_url();?>assets_2/plugins/peity/jquery.peity.min.js"></script>
        <script src="<?php  echo base_url();?>assets_2/pages/jquery.peity.init.js"></script>
         <link href="<?php echo base_url(); ?>assets_2/animation.css" rel="stylesheet" type="text/css">
          
         


<?php
    foreach($max_id as $value){

        if (empty($value->ID_vehicule)){


?>
        <div class="row" >
            <h1 style="margin-left: 7%;" class="animated bounceInDown"> Bienvenu pour commencer cliquer sur immatriculer un véhicule <br><br >

            </h1 >

        </div >
 




<br><br><br><br><br><br><br>
<div class="row m-l-15 col-lg-4"  >
    <h3><i class="fa fa-arrow-down animated bounceOutDown delay-4s" style="margin-left: 40%;"></i></h3>
    <br><br>
    <div class="col-sm-12" style="margin-bottom: 30px">
      <button type="button" id="btn_add" class="btn btn-primary btn-block btn-lg animated bounce delay-3s fast 800ms  " >immatriculer un véhicule <span class="m-l-5"><i
                    class="fa fa-spin fa-plus-square"></i></span></button>
    </div>
</div>
<div class="row" style="display: none;">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des statuts</h3>
            </div>
            <div class="panel-body" >
                <table id="datatable" class="table table-striped table-bordered" >
                    <thead>
                    <tr>
                        <th>gID</th>
                        <th>genre </th>
                        <th>marque </th>
                        <th>type </th>
                        <th>Num serie </th>
                        <th>carosserie </th>
                        <th>puissance </th>
                        <th>Energie </th>
                        <th>Places </th>

                        <th>Provenance </th>
                        <th>Année 1er circ </th>


                        <!--
                        <th>PV </th>

                        <th>CU </th>
                        <th>PT </th>
                        <th>mutation </th>
                        <th>Observation </th>




                        -->





                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($max_id as $value)
                    { ?>
                        <tr>
                            <td><?php echo $value->ID_vehicule ?></td>
                            <td><?php echo $value->Code_genre ?></td>
                            <td><?php echo $value->Code_marque ?></td>
                            <td><?php echo $value->Code_type ?></td>
                            <td><?php echo $value->Num_serie ?></td>
                            <td><?php echo $value->Code_carosserie ?></td>
                            <td><?php echo $value->Puissance ?></td>
                            <td><?php echo $value->Energie ?></td>
                            <td><?php echo $value->Places ?></td>

                            <td><?php echo $value->provenance ?></td>
                            <td><?php echo $value->Date_premier_mise_en_circ ?></td>


                            <!--
                             <td><?php// echo $value->PV ?></td>

                            <td><?php //echo $value->CU ?></td>
                            <td><?php //echo $value->PT ?></td>
                            <td><?php //echo $value->Mutations ?></td>
                            <td><?php //echo $value->Observations ?></td>







                             -->




                            <td class="actions" style="width: 1%; text-align: center; white-space: nowrap">
                                <a href="#" class="on-default btn_edit" id='<?php echo $value->ID_vehicule; ?>'><i class="fa fa-pencil"></i></a>
                                &nbsp;
                                <a href="#" class="on-default btn_delete" id='<?php echo $value->ID_vehicule; ?>'><i class="fa fa-trash-o" style="color:red"></i></a>
                                &nbsp;
                                <a href="#" class="on-default btn_show" id='<?php echo $value->ID_vehicule; ?>'><i class="fa fa-eye" style="color:#CCCCCC"></i></a>
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
                    <input type="hidden" id="ID_vehicule" name="ID_vehicule" required/>
                    <div class="row" style="">
                        <div class="col-md-6">

                            <label for="field-3" class="control-label">Genre véhicule</label>
                            <div class="form-group">

                                <div class="col-sm-11">

                                    <select class="select2 form-control" data-placeholder="Genre" name="Code_genre" id="Code_genre" required>
                                        <option value="#">&nbsp;</option>
                                        <option value="Voiture" >Voiture</option>

                                        <option value="Moto" >MOTO</option>


                                        <option value="CAR" >CAR</option>
                                        <option value="CAMION" >CAMION</option>
                                        <option value="Bateau" >Bateau</option>
                                        <option value="TAXI" >TAXI</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="col-sm-11">
                                    <label for="field-1" class="control-label">Marque</label>
                                    <select class="select2 form-control" data-placeholder="Code_marque" name="Code_marque" id="Code_marque" required>
                                        <option value="#">&nbsp;</option>

                                        <option value="acura">Acura</option><option value="aixam">AIXAM</option><option value="alfa-romeo">Alfa Romeo</option><option value="alpina">Alpina</option><option value="alpine">Alpine</option><option value="amc">AMC</option><option value="asia-motors">Asia Motors</option><option value="aston-martin">Aston Martin</option><option value="audi">Audi</option><option value="austin">Austin</option><option value="autobianchi">Autobianchi</option><option value="autres-vehicules-make">Autres</option><option value="bentley">Bentley</option><option value="bmw">BMW</option><option value="buick">Buick</option><option value="cadillac">Cadillac</option><option value="chery">Chery</option><option value="chevrolet">Chevrolet</option><option value="chrysler">Chrysler</option><option value="citroen">Citroen</option><option value="cord">Cord</option><option value="corvette">Corvette</option><option value="dacia">Dacia</option><option value="daewoo">Daewoo</option><option value="daihatsu">Daihatsu</option><option value="datsun">Datsun</option><option value="delorean">DeLorean</option><option value="desoto">DeSoto</option><option value="detomaso">DeTomaso</option><option value="dodge">Dodge</option><option value="eagle">Eagle</option><option value="edsel">Edsel</option><option value="ferrari">Ferrari</option><option value="fiat">Fiat</option><option value="ford">Ford</option><option value="geo">Geo</option><option value="gmc">GMC</option><option value="great-wall">Great Wall</option><option value="honda">Honda</option><option value="hummer">Hummer</option><option value="hyundai">Hyundai</option><option value="international-harvester">International Harvester</option><option value="isuzu">Isuzu</option><option value="jaguar">Jaguar</option><option value="jeep">Jeep</option><option value="kia">Kia</option><option value="lamborghini">Lamborghini</option><option value="lancia">Lancia</option><option value="land-rover">Land Rover</option><option value="lexus">Lexus</option><option value="lincoln">Lincoln</option><option value="maserati">Maserati</option><option value="mazda">Mazda</option><option value="mercedes-benz">Mercedes-Benz</option><option value="mg">MG</option><option value="mini">Mini</option><option value="mitsubishi">Mitsubishi</option><option value="morris">Morris</option><option value="nash">Nash</option><option value="nissan">Nissan</option><option value="opel">Opel</option><option value="peugeot">Peugeot</option><option value="porsche">Porsche</option><option value="renault">Renault</option><option value="rover">Rover</option><option value="saab">Saab</option><option value="saturn">Saturn</option><option value="Seat">Seat</option><option value="skoda">Skoda</option><option value="smart">Smart</option><option value="ssangyong">Ssangyong</option><option value="subaru">Subaru</option><option value="suzuki">Suzuki</option><option value="talbot">Talbot</option><option value="tata">Tata</option><option value="toyota">Toyota</option><option value="tvr">TVR</option><option value="vauxhall">Vauxhall</option><option value="volkswagen">Volkswagen</option><option value="volvo">Volvo</option>

                                        <option value="aixam" >Aixam</option><option value="aprilia" >Aprilia</option><option value="arctic-cat" >Arctic Cat</option><option value="asia-wolf" >Asia Wolf</option><option value="autre-motocycles-make" >Autre</option><option value="bajaj" >Bajaj</option><option value="baodiao" >Baodiao</option><option value="bashan" >Bashan</option><option value="benelli" >Benelli</option><option value="beta" >Beta</option><option value="bimota" >Bimota</option><option value="bmw" >BMW</option><option value="bombardier" >Bombardier</option><option value="boom" >Boom</option><option value="buell" >Buell</option><option value="burelli" >Burelli</option><option value="cagiva" >Cagiva</option><option value="can-am" >Can Am</option><option value="cpi" >CPI</option><option value="daelim" >Daelim</option><option value="dayang" >Dayang</option><option value="dayun" >Dayun</option><option value="demak" >Demak</option><option value="dinli" >Dinli</option><option value="dkw" >DKW</option><option value="ducati" >Ducati</option><option value="eco-vehicles" >Eco Vehicles</option><option value="gasgas" >Gasgas</option><option value="gilera" >Gilera</option><option value="gorilla" >Gorilla</option><option value="haojue" >Haojue</option><option value="harley-davidson" >Harley Davidson</option><option value="hero-honda" >Hero Honda</option><option value="honda" >Honda</option><option value="husaberg" >Husaberg</option><option value="husqvarna" >Husqvarna</option><option value="hyosung" >Hyosung</option><option value="italjet" >Italjet</option><option value="kawasaki" >Kawasaki</option><option value="kawasaki" >Kawasaki</option><option value="keeway" >Keeway</option><option value="kinetic" >Kinetic</option><option value="kreidler" >Kreidler</option><option value="ktm" >KTM</option><option value="kymco" >Kymco</option><option value="lifan" >Lifan</option><option value="lml" >LML</option><option value="malaguty" >Malaguty</option><option value="mbk" >MBK</option><option value="monto-motors" >Monto Motors</option><option value="moto-morini" >Moto Morini</option><option value="peugeot" >Peugeot</option><option value="pgo" >PGO</option><option value="piaggio" >Piaggio</option><option value="polaris" >Polaris</option><option value="puch" >Puch</option><option value="rieju" >Rieju</option><option value="royal-enfield" >Royal Enfield</option><option value="scooters-india" >Scooters India</option><option value="seikel" >Seikel</option><option value="shineray" >Shineray</option><option value="skyteam" >Skyteam</option><option value="suzuki" >Suzuki</option><option value="sym" >SYM</option><option value="tgb" >TGB</option><option value="tm" >TM</option><option value="tvs-motor" >TVS Motor</option><option value="vespa" >Vespa</option><option value="volkswagen" >Volkswagen</option><option value="yamaha" >Yamaha</option><option value="zhongyu" >Zhongyu</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-1" class="control-label">Type</label>
                                    <input type="text" class="form-control" name="Code_type" id="Code_type" placeholder="Type" style="width: 90%;" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-2" class="control-label">N° série</label>
                                    <input type="text" class="form-control" id="Num_serie" name="Num_serie" placeholder="Numéro série" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-1" class="control-label">Carosserie</label>
                                    <input type="text" class="form-control" id="Code_carosserie" name="Code_carosserie" placeholder="Carosserie" required >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-2" class="control-label">Puissance</label>
                                    <input type="text" class="form-control" id="Puissance" name="Puissance" placeholder="Puissance" required >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-1" class="control-label">Energie</label>
                                    <input type="text" class="form-control" id="Energie" name="Energie" placeholder="Energie" style="width: 90%;" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-2" class="control-label">Places</label>
                                    <input type="number" class="form-control" id="Places" name="Places" placeholder="Places" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-1" class="control-label">Provenance</label>
                                    <input type="text" placeholder="" data-mask="99/99/9999" class="form-control"  id="provenance" name="provenance" placeholder="Provenance" style="width: 90%;" required>
                                    <span class="help-inline">jj/mm/aaaa</span>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-2" class="control-label">Annee de mise en circulation</label>
                                    <input type="text" class="form-control" name="Date_premier_mise_en_circ" id="Date_premier_mise_en_circ" placeholder="Année premiere mise en circulation" required >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-4" class="control-label">PV</label>
                                    <input type="number" class="form-control" id="PV" name="PV" placeholder="Poids vide" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <label for="field-5" class="control-label">CU</label>
                                    <input type="text" class="form-control" id="CU" name="CU" placeholder="Charge utile" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">PT</label>
                                <input type="number" class="form-control" id="PT" name="PT" placeholder="Poids total" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Mutations diverses</label>
                                <textarea class="form-control autogrow" id="Mutations" name="Mutations" placeholder="Mutations diverses" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" >                                                        </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Observations</label>
                                <textarea class="form-control autogrow" id="Observations" name="Observations" placeholder="Observations" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" >                                                        </textarea>
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
            id_menu: 'menu_acceuil', //id du menu dans le fichier navigation_bar
            id_modal_form: 'modal_form', //id du modal qui contient le formulaire

            id_form: 'form', //id du formulaire
            url_submit: "<?php echo site_url('C_vehicule/save')?>", //url du save (données envoyés par post)

            title_modal_add: 'Nouvel véhicule', //Title du modal à l'ouverture en mode ajout
            focus_add: 'Num_serie', //l'emplacement du focus en mode ajout

            title_modal_edit: 'Edition d\'un vehicule"', //Title du modal à l'ouverture en mode edit
            focus_edit: 'Num_serie',//l'emplacement du focus en mode edit

            url_edit: "<?php echo site_url('C_vehicule/get_record')?>", //url le fonction qui recupére la données de la ligne
            url_delete: "<?php echo site_url('C_vehicule/delete')?>", //url de la fonction supprimé
        });
    });
</script>
<script>
    jQuery(document).ready(function() {

        //colorpicker start

        $('.colorpicker-default').colorpicker({
            format: 'hex'
        });
        $('.colorpicker-rgba').colorpicker();




        //multiselect start

        $('#my_multi_select1').multiSelect();
        $('#my_multi_select2').multiSelect({
            selectableOptgroup: true
        });



        // Select2
        jQuery(".select2").select2({
            width: '100%'
        });

        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ion-plus-round',
            verticaldownclass: 'ion-minus-round'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }

        $("input[name='demo1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='demo2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='demo3']").TouchSpin();
        $("input[name='demo3_21']").TouchSpin({
            initval: 40
        });
        $("input[name='demo3_22']").TouchSpin({
            initval: 40
        });

        $("input[name='demo0']").TouchSpin({});
    });
</script>
            <?php
        }
    }
?>
<link href="<?php echo base_url(); ?>assets_2/plugins/jquery-multi-select/multi-select.css"  rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_2/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_2/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">


<?php
foreach($max_id as $value){

    if (!empty($value->ID_vehicule)){


        ?>

<!-- Row start -->
<div class="row">
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Récapitulation véhicule</h3>
            </div>
            <div class="panel-body">



                <h4>Genre
                    <small><?php echo $value->Code_genre ?></small>
                </h4>
                <h4>Marque
                    <small><?php echo $value->Code_marque ?></small>
                </h4>
                <h4>Type
                    <small><?php echo $value->Code_type ?></small>
                </h4>
                <h4>N° série
                    <small><?php echo $value->Num_serie ?></small>
                </h4>
                <h4>carosserie
                    <small><?php echo $value->Code_carosserie ?></small>
                </h4>
                <h4>puissance
                    <small><?php echo $value->Puissance ?></small>
                </h4>
                <h4>Energie
                    <small><?php echo $value->Energie ?></small>
                </h4>
                <h4>Places
                    <small><?php echo $value->Places ?></small>
                </h4>
                <h4>Provenance
                    <small><?php echo $value->provenance ?></small>
                </h4>
                <h4>Année 1ere circulation
                    <small><?php echo $value->Date_premier_mise_en_circ ?></small>
                </h4>
                <h4>Poids vide
                    <small><?php echo $value->PV ?></small>
                </h4>
                <h4>Poids total
                    <small><?php echo $value->PT ?></small>
                </h4>
                <h4>Charge utile
                    <small><?php echo $value->CU ?></small>
                </h4>
                <h4>Mutations
                    <small><?php echo $value->Mutations ?></small>
                </h4>
                <h4>Observations
                    <small><?php echo $value->Observations ?></small>
                </h4>



            </div>

        </div>
    </div>
    <!-- Horizontal form -->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Formulaire demandeur</h3></div>
            <div class="panel-body">
                <form method="post" action="<?php echo base_url()?>C_demandeur/save" class="form-horizontal" role="form">
                    <input type="hidden" id="id_Demandeur" name="id_Demandeur"/>
                    <input type="hidden" id="ID_vehicule" name="ID_vehicule" value="<?php echo $value->ID_vehicule;?>"/>
                    <input type="hidden" id="id_mat" name="id_mat"/>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Prénom</label>
                        <div class="col-md-9">
                            <input name="Prenom" id="Prenom" placeholder="Prénom"
                                   class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Nom</label>
                        <div class="col-md-9">
                            <input name="Nom" id="Nom" placeholder="Nom"
                                   class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Profession</label>
                        <div class="col-md-9">
                            <input name="profession" id="profession" placeholder="Profession"
                                   class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">N° de série</label>
                        <div class="col-md-9">
                            <input name="Num_série" id="Num_série"  readonly="readonly" value="<?php echo $value->Num_serie?>"
                                   class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">representation</label>

                        <div class="col-md-9">
                            <select class="select2 form-control" name="id_rep" id="id_rep" required>
                                <?php echo $select_rep; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Statut</label>

                        <div class="col-md-9">
                            <select class="select2 form-control" name="id_statut" id="id_statut" required>
                                <?php echo $select_statut; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Matriculer <i class="fa fa-cc"></i></button>
                        </div>
                    </div>
                </form>
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->
 

</div>

        <div class="row" style="display: none;">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Liste des statuts</h3>
                    </div>
                    <div class="panel-body" >
                        <table id="datatable" class="table table-striped table-bordered" >
                            <thead>
                            <tr>
                                <th>gID</th>
                                <th>genre </th>
                                <th>marque </th>
                                <th>type </th>
                                <th>Num serie </th>
                                <th>carosserie </th>
                                <th>puissance </th>
                                <th>Energie </th>
                                <th>Places </th>

                                <th>Provenance </th>
                                <th>Année 1er circ </th>


                                <!--
                                <th>PV </th>

                                <th>CU </th>
                                <th>PT </th>
                                <th>mutation </th>
                                <th>Observation </th>




                                -->





                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($max_id as $value)
                            { ?>
                                <tr>
                                    <td><?php echo $value->ID_vehicule ?></td>
                                    <td><?php echo $value->Code_genre ?></td>
                                    <td><?php echo $value->Code_marque ?></td>
                                    <td><?php echo $value->Code_type ?></td>
                                    <td><?php echo $value->Num_serie ?></td>
                                    <td><?php echo $value->Code_carosserie ?></td>
                                    <td><?php echo $value->Puissance ?></td>
                                    <td><?php echo $value->Energie ?></td>
                                    <td><?php echo $value->Places ?></td>

                                    <td><?php echo $value->provenance ?></td>
                                    <td><?php echo $value->Date_premier_mise_en_circ ?></td>


                                    <!--
                             <td><?php// echo $value->PV ?></td>

                            <td><?php //echo $value->CU ?></td>
                            <td><?php //echo $value->PT ?></td>
                            <td><?php //echo $value->Mutations ?></td>
                            <td><?php //echo $value->Observations ?></td>







                             -->




                                    <td class="actions" style="width: 1%; text-align: center; white-space: nowrap">
                                        <a href="#" class="on-default btn_edit" id='<?php echo $value->ID_vehicule; ?>'><i class="fa fa-pencil"></i></a>
                                        &nbsp;
                                        <a href="#" class="on-default btn_delete" id='<?php echo $value->ID_vehicule; ?>'><i class="fa fa-trash-o" style="color:red"></i></a>
                                        &nbsp;
                                        <a href="#" class="on-default btn_show" id='<?php echo $value->ID_vehicule; ?>'><i class="fa fa-eye" style="color:#CCCCCC"></i></a>
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
                            <input type="hidden" id="ID_vehicule" name="ID_vehicule" required/>
                            <div class="row" style="">
                                <div class="col-md-6">

                                    <label for="field-3" class="control-label">Genre véhicule</label>
                                    <div class="form-group">

                                        <div class="col-sm-11">

                                            <select class="select2 form-control" data-placeholder="Genre" name="Code_genre" id="Code_genre" required>
                                                <option value="#">&nbsp;</option>
                                                <option value="Voiture" >Voiture</option>

                                                <option value="Moto" >MOTO</option>


                                                <option value="CAR" >CAR</option>
                                                <option value="CAMION" >CAMION</option>
                                                <option value="Bateau" >Bateau</option>
                                                <option value="TAXI" >TAXI</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="col-sm-11">
                                            <label for="field-1" class="control-label">Marque</label>
                                            <select class="select2 form-control" data-placeholder="Code_marque" name="Code_marque" id="Code_marque" required>
                                                <option value="#">&nbsp;</option>

                                                <option value="acura">Acura</option><option value="aixam">AIXAM</option><option value="alfa-romeo">Alfa Romeo</option><option value="alpina">Alpina</option><option value="alpine">Alpine</option><option value="amc">AMC</option><option value="asia-motors">Asia Motors</option><option value="aston-martin">Aston Martin</option><option value="audi">Audi</option><option value="austin">Austin</option><option value="autobianchi">Autobianchi</option><option value="autres-vehicules-make">Autres</option><option value="bentley">Bentley</option><option value="bmw">BMW</option><option value="buick">Buick</option><option value="cadillac">Cadillac</option><option value="chery">Chery</option><option value="chevrolet">Chevrolet</option><option value="chrysler">Chrysler</option><option value="citroen">Citroen</option><option value="cord">Cord</option><option value="corvette">Corvette</option><option value="dacia">Dacia</option><option value="daewoo">Daewoo</option><option value="daihatsu">Daihatsu</option><option value="datsun">Datsun</option><option value="delorean">DeLorean</option><option value="desoto">DeSoto</option><option value="detomaso">DeTomaso</option><option value="dodge">Dodge</option><option value="eagle">Eagle</option><option value="edsel">Edsel</option><option value="ferrari">Ferrari</option><option value="fiat">Fiat</option><option value="ford">Ford</option><option value="geo">Geo</option><option value="gmc">GMC</option><option value="great-wall">Great Wall</option><option value="honda">Honda</option><option value="hummer">Hummer</option><option value="hyundai">Hyundai</option><option value="international-harvester">International Harvester</option><option value="isuzu">Isuzu</option><option value="jaguar">Jaguar</option><option value="jeep">Jeep</option><option value="kia">Kia</option><option value="lamborghini">Lamborghini</option><option value="lancia">Lancia</option><option value="land-rover">Land Rover</option><option value="lexus">Lexus</option><option value="lincoln">Lincoln</option><option value="maserati">Maserati</option><option value="mazda">Mazda</option><option value="mercedes-benz">Mercedes-Benz</option><option value="mg">MG</option><option value="mini">Mini</option><option value="mitsubishi">Mitsubishi</option><option value="morris">Morris</option><option value="nash">Nash</option><option value="nissan">Nissan</option><option value="opel">Opel</option><option value="peugeot">Peugeot</option><option value="porsche">Porsche</option><option value="renault">Renault</option><option value="rover">Rover</option><option value="saab">Saab</option><option value="saturn">Saturn</option><option value="Seat">Seat</option><option value="skoda">Skoda</option><option value="smart">Smart</option><option value="ssangyong">Ssangyong</option><option value="subaru">Subaru</option><option value="suzuki">Suzuki</option><option value="talbot">Talbot</option><option value="tata">Tata</option><option value="toyota">Toyota</option><option value="tvr">TVR</option><option value="vauxhall">Vauxhall</option><option value="volkswagen">Volkswagen</option><option value="volvo">Volvo</option>

                                                <option value="aixam" >Aixam</option><option value="aprilia" >Aprilia</option><option value="arctic-cat" >Arctic Cat</option><option value="asia-wolf" >Asia Wolf</option><option value="autre-motocycles-make" >Autre</option><option value="bajaj" >Bajaj</option><option value="baodiao" >Baodiao</option><option value="bashan" >Bashan</option><option value="benelli" >Benelli</option><option value="beta" >Beta</option><option value="bimota" >Bimota</option><option value="bmw" >BMW</option><option value="bombardier" >Bombardier</option><option value="boom" >Boom</option><option value="buell" >Buell</option><option value="burelli" >Burelli</option><option value="cagiva" >Cagiva</option><option value="can-am" >Can Am</option><option value="cpi" >CPI</option><option value="daelim" >Daelim</option><option value="dayang" >Dayang</option><option value="dayun" >Dayun</option><option value="demak" >Demak</option><option value="dinli" >Dinli</option><option value="dkw" >DKW</option><option value="ducati" >Ducati</option><option value="eco-vehicles" >Eco Vehicles</option><option value="gasgas" >Gasgas</option><option value="gilera" >Gilera</option><option value="gorilla" >Gorilla</option><option value="haojue" >Haojue</option><option value="harley-davidson" >Harley Davidson</option><option value="hero-honda" >Hero Honda</option><option value="honda" >Honda</option><option value="husaberg" >Husaberg</option><option value="husqvarna" >Husqvarna</option><option value="hyosung" >Hyosung</option><option value="italjet" >Italjet</option><option value="kawasaki" >Kawasaki</option><option value="kawasaki" >Kawasaki</option><option value="keeway" >Keeway</option><option value="kinetic" >Kinetic</option><option value="kreidler" >Kreidler</option><option value="ktm" >KTM</option><option value="kymco" >Kymco</option><option value="lifan" >Lifan</option><option value="lml" >LML</option><option value="malaguty" >Malaguty</option><option value="mbk" >MBK</option><option value="monto-motors" >Monto Motors</option><option value="moto-morini" >Moto Morini</option><option value="peugeot" >Peugeot</option><option value="pgo" >PGO</option><option value="piaggio" >Piaggio</option><option value="polaris" >Polaris</option><option value="puch" >Puch</option><option value="rieju" >Rieju</option><option value="royal-enfield" >Royal Enfield</option><option value="scooters-india" >Scooters India</option><option value="seikel" >Seikel</option><option value="shineray" >Shineray</option><option value="skyteam" >Skyteam</option><option value="suzuki" >Suzuki</option><option value="sym" >SYM</option><option value="tgb" >TGB</option><option value="tm" >TM</option><option value="tvs-motor" >TVS Motor</option><option value="vespa" >Vespa</option><option value="volkswagen" >Volkswagen</option><option value="yamaha" >Yamaha</option><option value="zhongyu" >Zhongyu</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-1" class="control-label">Type</label>
                                            <input type="text" class="form-control" name="Code_type" id="Code_type" placeholder="Type" style="width: 90%;" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-2" class="control-label">N° série</label>
                                            <input type="text" class="form-control" id="Num_serie" name="Num_serie" placeholder="Numéro série" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-1" class="control-label">Carosserie</label>
                                            <input type="text" class="form-control" id="Code_carosserie" name="Code_carosserie" placeholder="Carosserie" required >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-2" class="control-label">Puissance</label>
                                            <input type="text" class="form-control" id="Puissance" name="Puissance" placeholder="Puissance" required >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-1" class="control-label">Energie</label>
                                            <input type="text" class="form-control" id="Energie" name="Energie" placeholder="Energie" style="width: 90%;" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-2" class="control-label">Places</label>
                                            <input type="number" class="form-control" id="Places" name="Places" placeholder="Places" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-1" class="control-label">Provenance</label>
                                            <input type="text" placeholder="" data-mask="99/99/9999" class="form-control"  id="provenance" name="provenance" placeholder="Provenance" style="width: 90%;" required>
                                            <span class="help-inline">jj/mm/aaaa</span>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-2" class="control-label">Annee de mise en circulation</label>
                                            <input type="text" class="form-control" name="Date_premier_mise_en_circ" id="Date_premier_mise_en_circ" placeholder="Année premiere mise en circulation" required >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-4" class="control-label">PV</label>
                                            <input type="number" class="form-control" id="PV" name="PV" placeholder="Poids vide" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <label for="field-5" class="control-label">CU</label>
                                            <input type="text" class="form-control" id="CU" name="CU" placeholder="Charge utile" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">PT</label>
                                        <input type="number" class="form-control" id="PT" name="PT" placeholder="Poids total" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group no-margin">
                                        <label for="field-7" class="control-label">Mutations diverses</label>
                                        <textarea class="form-control autogrow" id="Mutations" name="Mutations" placeholder="Mutations diverses" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" >                                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group no-margin">
                                        <label for="field-7" class="control-label">Observations</label>
                                        <textarea class="form-control autogrow" id="Observations" name="Observations" placeholder="Observations" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" >                                                        </textarea>
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
                    id_menu: 'menu_acceuil', //id du menu dans le fichier navigation_bar
                    id_modal_form: 'modal_form', //id du modal qui contient le formulaire

                    id_form: 'form', //id du formulaire
                    url_submit: "<?php echo site_url('C_vehicule/save')?>", //url du save (données envoyés par post)

                    title_modal_add: 'Nouvel véhicule', //Title du modal à l'ouverture en mode ajout
                    focus_add: 'Num_serie', //l'emplacement du focus en mode ajout

                    title_modal_edit: 'Edition d\'un vehicule"', //Title du modal à l'ouverture en mode edit
                    focus_edit: 'Num_serie',//l'emplacement du focus en mode edit

                    url_edit: "<?php echo site_url('C_vehicule/get_record')?>", //url le fonction qui recupére la données de la ligne
                    url_delete: "<?php echo site_url('C_vehicule/delete')?>", //url de la fonction supprimé
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {

                //colorpicker start

                $('.colorpicker-default').colorpicker({
                    format: 'hex'
                });
                $('.colorpicker-rgba').colorpicker();




                //multiselect start

                $('#my_multi_select1').multiSelect();
                $('#my_multi_select2').multiSelect({
                    selectableOptgroup: true
                });



                // Select2
                jQuery(".select2").select2({
                    width: '100%'
                });

                //Bootstrap-TouchSpin
                $(".vertical-spin").TouchSpin({
                    verticalbuttons: true,
                    verticalupclass: 'ion-plus-round',
                    verticaldownclass: 'ion-minus-round'
                });
                var vspinTrue = $(".vertical-spin").TouchSpin({
                    verticalbuttons: true
                });
                if (vspinTrue) {
                    $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                }

                $("input[name='demo1']").TouchSpin({
                    min: 0,
                    max: 100,
                    step: 0.1,
                    decimals: 2,
                    boostat: 5,
                    maxboostedstep: 10,
                    postfix: '%'
                });
                $("input[name='demo2']").TouchSpin({
                    min: -1000000000,
                    max: 1000000000,
                    stepinterval: 50,
                    maxboostedstep: 10000000,
                    prefix: '$'
                });
                $("input[name='demo3']").TouchSpin();
                $("input[name='demo3_21']").TouchSpin({
                    initval: 40
                });
                $("input[name='demo3_22']").TouchSpin({
                    initval: 40
                });

                $("input[name='demo0']").TouchSpin({});
            });
        </script>
        <?php
    }
}
?>
