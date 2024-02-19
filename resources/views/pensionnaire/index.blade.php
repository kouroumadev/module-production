@extends('welcome')
<style>
    a {
        text-decoration: none !important;
    }
</style>
@section('body')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div id="loader"></div>
@if ($data == "index")
<div class="row justify-content-center">
    <div class="col-md-8">
        <form id="form-get-pension" action="{{ route('pensionnaire.info') }}" method="POST">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-8">
                    <input type="text" class="form-control mb-2" name="no_immatriculation" id="no_immatriculation" placeholder="Entrer le N° d'Immatriculation" />
                </div>

                <div class="col-auto">
                <button type="submit" onclick=""  class="btn btn-primary mb-2">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
</div>
@else
<div class="row" id="employe-wrapper">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telephone:</label>
                                    <input type="text" class="form-control" name="telephone_employe" id="telephone_employe" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Adresse:</label>
                                    <input type="text" class="form-control date-picker" name="adresse_employe" id="adresse_employe"  readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Situation Matrimoniale:</label>
                                    <input type="text" class="form-control" name="statut" id="statut" readonly>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5>Infos Employeur</h5>
                    <section>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >No Employeur :</label>
                                    <input type="text" class="form-control" name="no_employeur"  id="no_employeur" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Raison Sociale :</label>
                                    <textarea  class="form-control" cols="2" name="raison_sociale"  id="raison_sociale" readonly> </textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Categorie :</label>
                                    <input type="text" class="form-control" name="categorie"  id="categorie" readonly>
                                </div>
                            </div>
                        </div>


                    </section>
                    <!-- Step 3 -->
                    <h5>Conjoints et Enfants</h5>
                    <section>

                        <div class="accordion" id="conj-enf">



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
@endif


<hr>

<div class="row" id="employe-wrapper">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telephone:</label>
                                    <input type="text" class="form-control" name="telephone_employe" id="telephone_employe" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Adresse:</label>
                                    <input type="text" class="form-control date-picker" name="adresse_employe" id="adresse_employe"  readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Situation Matrimoniale:</label>
                                    <input type="text" class="form-control" name="statut" id="statut" readonly>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5>Infos Employeur</h5>
                    <section>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >No Employeur :</label>
                                    <input type="text" class="form-control" name="no_employeur"  id="no_employeur" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Raison Sociale :</label>
                                    <textarea  class="form-control" cols="2" name="raison_sociale"  id="raison_sociale" readonly> </textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Categorie :</label>
                                    <input type="text" class="form-control" name="categorie"  id="categorie" readonly>
                                </div>
                            </div>
                        </div>


                    </section>
                    <!-- Step 3 -->
                    <h5>Conjoints et Enfants</h5>
                    <section>

                        <div class="accordion" id="conj-enf">



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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
{{-- <script>
    function getInfoPension() {
        //// ROUTE FOR GETTING EMPLOYES INFO TO METIER DATABASE

            var no_immatriculation = $("#no_immatriculation").val()
        //  alert(no_immatriculation)
        $.ajax({
                    type: 'GET',
                    url: "{{route('pensionnaire.info')}}",
                    dataType: 'json',
                    data:{no_immatriculation:no_immatriculation},
                    beforeSend: function(){
                        $("#loader").show();
                        // alert("sending.....")
                    },
                    complete: function(){
                        $("#loader").hide();
                        // alert("sent..")
                    },
                    success: function(data) {

                        if (data == "not exist") {
                                    Swal.fire({
                            title: 'Error!',
                            text: 'Ce Numero d\'immatriculation n\'existe pas',
                            icon: 'error',

                            })


                        }
                        else{
                            $("#employe-wrapper").removeClass('d-none')
                            $("#no_immat_disp").val(data.employe[0].no_employe)
                            $("#prenom_employe").val(data.employe[0].prenoms)
                            $("#nom_employe").val(data.employe[0].nom)
                            $("#date_naissance").val(data.employe[0].date_naissance)
                            $("#lieu_naissance").val(data.employe[0].lieu_naissance)
                            $("#prefecture").val(data.employe[0].code_prefecture)
                            $("#statut").val(data.employe[0].statut)

                            $("#no_employeur").val(data.employeur[0].no_employeur)
                            $("#raison_sociale").val(data.employeur[0].raison_sociale)
                            $("#categorie").val(data.employeur[0].categorie)
                            var html =""
                            $("#conj-enf").empty();
                            $.each(data.employeDetails,function(index,value){

                                $("#conj-enf").append(`<div class="accordion-item">
                                <h2 class="accordion-header" id="heading">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="true" aria-controls="collapseOne">`
                                    +value.conjoint_name+
                                 ` </button>
                                </h2>
                                <div id="collapse" class="accordion-collapse collapse show" aria-labelledby="heading" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                                </tr>
                                            </thead>
                                            <tbody>`

                                           ` </tbody>
                                    </table>

                                  </div>
                                </div>
                            </div>`);
                            });
                             console.log(data.employeDetails)
                        }

                    }
                })
    }
</script> --}}

@endsection
