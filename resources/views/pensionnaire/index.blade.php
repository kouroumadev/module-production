@extends('welcome')

<style>
    a {
        text-decoration: none !important;
    }
</style>

@section('body')

<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>PRESTATIONS</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('prestation.index') }}">Prestations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gestion des Pensions</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<hr>
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="form-group">
            <select class=" form-control" data-style="btn-outline-success" data-size="5">
                <option selected>Selectionner le type de pension</option>
                <option value="Retraite">Retraite</option>
                <option value="reversion">Reversion</option>
                <option value="Invalidite">Invalidite</option>
                <option value="allocation de vieillesse">allocation de vieillesse</option>
                <option value="Deces en Activite">Deces en Activite</option>
                <option value="Pensions Temporaires d'Orphelin">Pensions Temporaires d'Orphelin</option>

            </select>
        </div>
    </div>
    <div class="col-md-8">
        <form id="form-get-pension" action="{{ route('pensionnaire.info') }}" method="POST">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-8">
                    <input type="text" class="form-control mb-2" name="no_immatriculation" id="no_immatriculation" placeholder="Entrer le N° d'Immatriculation ou de Pension" />
                </div>

                <div class="col-auto">
                <button type="submit" class="btn btn-success mb-2">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>

@if (isset($flag))
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops...!</strong> Ce N° d'Immatriculation n'existe pas dans la base de données de la CNSS
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif


@if(isset($data))

<div class="row" id="employe-wrapper">
    <div class="col-md-12">
        <div class="pd-20 card-box mb-30 shadow-lg">
            <div class="wizard-content">
                <form class="tab-wizard wizard-circle wizard">
                    <h5>Infos Personnelles</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No Immatriculation :</label>
                                    <input type="text" class="form-control" name="no_immatricule"
                                        value="{{ $data['employe'][0]->no_employe }}" id="no_immat_disp" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nom :</label>
                                    <input type="text" class="form-control" name="nom"
                                        value="{{ $data['employe'][0]->nom }}" id="nom_employe" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Prenom :</label>
                                    <input type="text" class="form-control" name="prenom"
                                        value="{{ $data['employe'][0]->prenoms }}" id="prenom_employe" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date de naissance:</label>
                                    <input type="text" class="form-control" name="date_naissance"
                                        value="{{ $data['employe'][0]->date_naissance }}" id="date_naissance" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Lieu de naissance</label>
                                    <input type="text" class="form-control" name="lieu_naissance"
                                        value="{{ $data['employe'][0]->lieu_naissance }}" id="lieu_naissance" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Prefecture</label>
                                    <input type="text" class="form-control" name="prefecture"
                                        value="{{ $data['employe'][0]->prefecture }}" id="prefecture" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telephone:</label>
                                    <input type="text" class="form-control" name="telephone_employe"
                                        id="telephone_employe" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adresse:</label>
                                    <input type="text" class="form-control date-picker" name="adresse_employe"
                                        id="adresse_employe" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Situation Matrimoniale:</label>
                                    <input type="text" class="form-control" name="statut"
                                        value="{{ $data['employe'][0]->statut }}" id="statut" readonly>
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
                                    <label>No Employeur :</label>
                                    <input type="text" class="form-control" name="no_employeur"
                                        value="{{ $data['employeur'][0]->no_employeur }}" id="no_employeur" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Raison Sociale :</label>
                                    <input class="form-control" cols="2" name="raison_sociale"
                                        value="{{ $data['employeur'][0]->raison_sociale }}" id="raison_sociale"
                                        readonly />


                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Categorie :</label>
                                    <input type="text" class="form-control" name="categorie"
                                        value="{{ $data['employeur'][0]->categorie }}" id="categorie" readonly />
                                </div>
                            </div>
                        </div>


                    </section>
                    <!-- Step 3 -->
                    <h5>Conjoints et Enfants</h5>
                    <section>


                        <div class="faq-wrap">
                            @foreach ($data['employeDetails'] as $key => $value)
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="btn btn-block" data-toggle="collapse" data-target="#faq1">
                                          Conjoint(e) {{ $key+1}} - {{ $value['conjoint_name'] }} {{ $value['conjoint_prenom'] }}
                                        </div>
                                    </div>
                                    <div id="faq1" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Nom</th>
                                                        <th scope="col">Prenom</th>
                                                        <th scope="col">date de Naissance</th>
                                                        <th scope="col">Lieu de Naissance</th>
                                                        <th scope="col">Ordre de Naissance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($value['enfants'] as $key => $enfant)
                                                        @if ($enfant == null)
                                                            <div class="alert alert-secondary" role="alert">
                                                                Pas d'enfants
                                                            </div>
                                                        @else
                                                            <tr>
                                                                <th scope="row">{{ $key + 1 }}</th>
                                                                <td>{{ $enfant->nom }}</td>
                                                                <td>{{ $enfant->prenoms }}</td>
                                                                <td>{{ $enfant->date_naissance }}</td>
                                                                <td>{{ $enfant->lieu_naissance }}</td>
                                                                <td>{{ $enfant->ordre }}</td>

                                                            </tr>
                                                        @endif
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>

                    </section>
                    <!-- Step 4 -->
                    <h5>Infos Deposant</h5>
                    <section class="mb-2">
                        <div class="row">
                            <div class="col-md-3 font-weight-bold">
                                Charger les infos du Pensionnaire
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <div class="checkbox checbox-switch switch-primary">
                                        <label>
                                            <input type="checkbox" name="sameGuy" id="sameGuy" data-color="#498e54" onclick="loadDeposant()">
                                            <span></span>
                                        </label>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" id="nom_deposant" name="nom_deposant"
                                        placeholder="Entrer le nom">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Prenom</label>
                                    <input type="text" class="form-control" id="prenom_deposant" name="prenom_deposant"
                                        placeholder="Entrer le premom">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" class="form-control" name="telephone_deposant"
                                        placeholder="Entrer le Numero de telephone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adresse</label>
                                    <input type="text" class="form-control" name="adresse"
                                        placeholder="Entrer l'adresse">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>CIN</label>
                                    <input type="text" class="form-control" name="cin"
                                        placeholder="Entrer CIN">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Entrer email">
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" class="form-control" name="telephone_deposant" placeholder="Entrer le Numero de telephone">
                            </div>
                        </div> --}}
                        </div>
                    </section>
                    <!-- Step 5 -->
                    <h5>Documents</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Pièces a Fournir</th>
                                        <th scope="col">Charger le fichier</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <th scope="row">Lettre de transmission faite par l'employeur ou le beneficiaire adressée au DG</th>
                                        <th scope="row"><input type="file" id="file1" class="form-control-file form-control height-auto"  onchange="myFunction('#file1','file1_statut')" id="file1" /></th>
                                        <th scope="row" id="file1_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <th scope="row">Le carnet d'assuré social ou la carte d'assuré social</th>
                                        <th scope="row"><input type="file"  id="file2" class="form-control-file form-control height-auto" onchange="myFunction('#file2','file2_statut')"></th>
                                        <th scope="row" id="file2_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <th scope="row">Le certificat de travail avec la date d'embauche</th>
                                        <th scope="row"><input type="file"  id="file3" class="form-control-file form-control height-auto" onchange="myFunction('#file3','file3_statut')"></th>
                                        <th scope="row" id="file3_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <th scope="row">Le certificat de cessation de paiement avec le dernier salaire (CCP)</th>
                                        <th scope="row"><input type="file"  id="file4" class="form-control-file form-control height-auto" onchange="myFunction('#file4','file4_statut')"></th>
                                        <th scope="row" id="file4_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <th scope="row">Le releve des 120 derniers mois (10 dernieres annees)</th>
                                        <th scope="row"><input type="file"  id="file5" class="form-control-file form-control height-auto" onchange="myFunction('#file5','file5_statut')"></th>
                                        <th scope="row" id="file5_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <th scope="row">Porces-verbale du conseil de famille</th>
                                        <th scope="row"><input type="file"  id="file6" class="form-control-file form-control height-auto" onchange="myFunction('#file6','file6_statut')"></th>
                                        <th scope="row" id="file6_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <th scope="row">Le jugement d'heredite</th>
                                        <th scope="row"><input type="file"  id="file7" class="form-control-file form-control height-auto" onchange="myFunction('#file7','file7_statut')"></th>
                                        <th scope="row" id="file7_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <th scope="row">Le certificat de residence du veuf, de la veuve ou des veuves</th>
                                        <th scope="row"><input type="file"  id="file8" class="form-control-file form-control height-auto" onchange="myFunction('#file8','file8_statut')"></th>
                                        <th scope="row" id="file8_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <th scope="row">Quatre(4) photos d'identite du veuf, de la veuve ou des veuves</th>
                                        <th scope="row"><input type="file"  id="file9" class="form-control-file form-control height-auto" onchange="myFunction('#file9','file9_statut')"></th>
                                        <th scope="row" id="file9_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <th scope="row">La photocopie recto-verso de la carte d'identite nationale</th>
                                        <th scope="row"><input type="file"  id="file10" class="form-control-file form-control height-auto" onchange="myFunction('#file10','file10_statut')"></th>
                                        {{-- <th scope="row" id="file10_statut"><span class="bg-success p-2 rounded text-white"><i class="icon-copy fa fa-thumbs-up" aria-hidden="true"></i> Chargé</span></th> --}}
                                        <th scope="row" id="file10_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <th scope="row">La copie legalisee de l'extrait de mariage de chaque veuve</th>
                                        <th scope="row"><input type="file" id="file11" id="file11" class="form-control-file form-control height-auto" onchange="myFunction('#file11','file11_statut')"></th>
                                        <th scope="row" id="file11_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <th scope="row">La copie legalisee de l'extrait de naissance de chaque enfant de moins de 17 ans</th>
                                        <th scope="row"><input type="file" id="file12" id="file12" class="form-control-file form-control height-auto" onchange="myFunction('#file12','file12_statut')"></th>
                                        <th scope="row" id="file12_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <th scope="row">Certificat de vie collective individuelle des enfants de moins de 17 ans</th>
                                        <th scope="row"><input type="file" id="file13" id="file13" class="form-control-file form-control height-auto" onchange="myFunction('#file13','file13_statut')"></th>
                                        <th scope="row" id="file13_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <th scope="row">Numero de telephone de l'assure</th>
                                        <th scope="row"><input type="file" id="file14" id="file14" class="form-control-file form-control height-auto" onchange="myFunction('#file14','file14_statut')"></th>
                                        <th scope="row" id="file14_statut"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Step 6 -->
                    <h5>Recap</h5>
                    <section>

                          <div class="faq-wrap">

                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="btn btn-block" data-toggle="collapse" data-target="#faq1">
                                            <strong>INFOS PERSONNELLES</strong>
                                        </div>
                                    </div>
                                    <div id="faq1" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>No Employe</th>
                                                        <td>{{ $data['employe'][0]->no_employe }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Prenom</th>
                                                        <td>{{ $data['employe'][0]->prenoms }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <td>{{ $data['employe'][0]->nom }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date de Naissance</th>
                                                        <td>{{ $data['employe'][0]->date_naissance }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Lieu de Naissance</th>
                                                        <td>{{ $data['employe'][0]->lieu_naissance }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="btn btn-block" data-toggle="collapse" data-target="#faq1">
                                            <strong>INFOS EMPLOYEUR</strong>
                                        </div>
                                    </div>
                                    <div id="faq1" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>No Employeur</th>
                                                        <td>{{ $data['employeur'][0]->no_employeur }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Raison Sociale</th>
                                                        <td>{{ $data['employeur'][0]->raison_sociale }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Categorie</th>
                                                        <td>{{ $data['employeur'][0]->categorie }}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
    function loadDeposant(){
        if (document.getElementById('sameGuy').checked){
            var nom = {!! json_encode($data['employe'][0]->nom) !!};
            var prenom = {!! json_encode($data['employe'][0]->prenoms) !!};

            document.getElementById("nom_deposant").value = nom;
            document.getElementById("prenom_deposant").value = prenom;
        } else {
            document.getElementById("nom_deposant").value = "";
            document.getElementById("prenom_deposant").value = "";
        }
    }
</script>

<script>
    function myFunction(file,status){
        if ($(file).val()!= '') {
            document.getElementById(status).innerHTML='<span class="bg-success p-2 rounded text-white">Chargé</span>';
        }
    }
</script>


@endif

@endsection
