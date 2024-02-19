@extends('welcome')

@section('body')

<div class="row justify-content-center">
    <div class="col-md-8">
        <form id="form-get-pension">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-8">
                    <input type="text" class="form-control mb-2" name="no_immatriculation" id="no_immatriculation" placeholder="Entrer le N° d'Immatriculation" />
                </div>

                <div class="col-auto">
                <button type="button" onclick="getInfoPension()"  class="btn btn-primary mb-2">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-12">
        <div class="pd-20 card-box mb-30">
            <div class="wizard-content">
                <form class="tab-wizard wizard-circle wizard">
                    <h5>Infos Personnelles</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >No Immatriculation :</label>
                                    <input type="text" class="form-control"  id="no_immat_disp" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Nom :</label>
                                    <input type="text" class="form-control"  id="nom_employe" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Prenom :</label>
                                    <input type="text" class="form-control"  id="prenom_employe" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date de naissance:</label>
                                    <input type="email" class="form-control"  id="date_naissance" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Lieu de naissance</label>
                                    <input type="text" class="form-control" id="lieu_naissance" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Prefecture</label>
                                    <input type="text" class="form-control" id="prefecture" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telephone :</label>
                                    <input type="text" class="form-control" value="611 55 76 23" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Adresse:</label>
                                    <input type="text" class="form-control date-picker" value="Labe" readonly>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5>Conjoints et Enfants</h5>
                    <section>
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4 class="text-blue h4">Conjoint 1</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" value="CAMARA" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Prenom:</label>
                                    <input type="text" class="form-control" value="BINTA" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix">
                            <div class="pull-left">
                                <h4 class="text-blue h4">Conjoint 2</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" value="SOW" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Prenom:</label>
                                    <input type="text" class="form-control" value="FATIM" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix">
                            <div class="pull-left">
                                <h4 class="text-blue h4">Enfant 1</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" value="DIANE" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Prenom:</label>
                                    <input type="text" class="form-control" value="ALPHA" readonly>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 3 -->
                    <h5>Infos Employeur</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sigle</label>
                                    <input type="text" class="form-control" value="RIO TINTO" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" class="form-control" value="Entreprise Prive" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Secteur D'activite</label>
                                    <input type="text" class="form-control" value="Secteur Minier" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Autre infos</label>
                                    <input type="text" class="form-control" value="Autre infos" readonly>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 4 -->
                    <h5>Infos Deposant</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" placeholder="Entrer le nom" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prenom</label>
                                    <input type="text" class="form-control" placeholder="Entrer le premom">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 5 -->
                    <h5>Documents</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contrat de travail</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choisir le fichier</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Carnet</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choisir le fichier</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Certificat de residance</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choisir le fichier</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Extrait de naissance</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choisir le fichier</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 6 -->
                    <h5>Recap</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Behaviour :</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Confidance</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Result</label>
                                    <select class="form-control">
                                        <option>Select Result</option>
                                        <option>Selected</option>
                                        <option>Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Comments</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function getInfoPension() {
        //// ROUTE FOR GETTING EMPLOYES INFO TO METIER DATABASE

            var no_immatriculation = $("#no_immatriculation").val()
        //  alert(no_immatriculation)
        $.ajax({
                    type: 'GET',
                    url: "{{route('pensionnaire.info')}}",
                    dataType: 'json',
                    data:{no_immatriculation:no_immatriculation},

                    success: function(data) {
                        console.log(data);
                        $("#no_immat_disp").val(data.employe[0].no_employe)
                        $("#prenom_employe").val(data.employe[0].prenoms)
                        $("#nom_employe").val(data.employe[0].nom)
                        $("#date_naissance").val(data.employe[0].date_naissance)
                        $("#lieu_naissance").val(data.employe[0].lieu_naissance)
                        $("#prefecture").val(data.employe[0].prefecture)
                        // console.log(data.employe[0].prenoms)
                    }
                })
    }
</script>

@endsection
