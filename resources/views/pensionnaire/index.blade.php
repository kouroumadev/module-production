@extends('welcome')

@section('body')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div id="loader"></div>
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

<div class="row d-none" id="employe-wrapper">
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
<<<<<<< Updated upstream
                        <div class="row mt-2">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">Conjoint</h5>
									<ul>
										<li><a href="#">Mahawa Sylla</a></li>
										{{-- <li><a href="#">Level 1</a></li> --}}
										<li class="child">
											<h5 class="h5">Enfant(s)</h5>
											<ul>
												<li><a href="#">Junior Camara</a></li>
												<li><a href="#">Alpha Camara</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="sitemap">
									<h5 class="h5">Conjoint</h5>
									<ul>
										<li><a href="#">Djenab Sow</a></li>
										{{-- <li><a href="#">Level 1</a></li> --}}
										<li class="child">
											<h5 class="h5">Enfant(s)</h5>
											<ul>
												<li><a href="#">Moussa Camara</a></li>
											</ul>
										</li>
									</ul>
								</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="sitemap">
									<h5 class="h5">Conjoint</h5>
									<ul>
										<li><a href="#">Delphine Lamah</a></li>
										{{-- <li><a href="#">Level 1</a></li> --}}
										<li class="child">
											<h5 class="h5">Enfant(s)</h5>
											<ul>
												<li><a href="#">Djibril Camara</a></li>
												<li><a href="#">Binta Camara</a></li>
												<li><a href="#">Jean Camara</a></li>
												<li><a href="#">Paul Camara</a></li>
											</ul>
										</li>
									</ul>
								</div>
                            </div>
						</div>
=======
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
>>>>>>> Stashed changes
                    </section>
                    <!-- Step 3 -->
                    <h5>Conjoints et Enfants</h5>
                    <section>

                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">

                                  </div>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
                    beforeSend: function(){
                        $("#loader").show();
                        // alert("sending.....")
                    },
                    complete: function(){
                        $("#loader").hide();
                        // alert("sent..")
                    },
                    success: function(data) {
<<<<<<< Updated upstream
                        console.log(data);
                        $("#no_immat_disp").val(data.employe[0].no_employe)
                        $("#prenom_employe").val(data.employe[0].prenoms)
                        $("#nom_employe").val(data.employe[0].nom)
                        $("#date_naissance").val(data.employe[0].date_naissance)
                        $("#lieu_naissance").val(data.employe[0].lieu_naissance)
                        $("#prefecture").val(data.employe[0].prefecture)
                        // console.log(data.employe[0].prenoms)
=======
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
                             console.log(data)
                        }
>>>>>>> Stashed changes
                    }
                })
    }
</script>

@endsection
