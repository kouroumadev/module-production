@extends('welcome')
<style>
    a {
        text-decoration: none !important;
    }
</style>
@section('body')
    @php
        //dd($data['employeur'][0]->no_employeur);
    @endphp
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}


    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>PRESTATIONS</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href={{ route('pension.index') }}>Prestations</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Infos Pensionnaire</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

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
                        <section>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" name="nom_deposant"
                                            placeholder="Entrer le nom">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Prenom</label>
                                        <input type="text" class="form-control" name="prenom_deposant"
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
                                            placeholder="Entrer l\'adresse">
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
                                            <th scope="col">Pieces a Fournir</th>
                                            <th scope="col">Charger le fichier</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <th scope="row">Lettre de transmission faite par l'employeur ou le beneficiaire adressee au DG</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <th scope="row">Le carnet d'assurr social ou la carte d'assurer social</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <th scope="row">Le certificat de travail avec la date d'embauche</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <th scope="row">Le certificat de cessation de paiement avec le dernier salaire (CCP)</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <th scope="row">Le releve des 120 derniers mois (10 dernieres annees)</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <th scope="row">Porces-verbale du conseil de famille</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <th scope="row">Le jugement d'heredite</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <th scope="row">Le certificat de residence du veuf, de la veuve ou des veuves</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <th scope="row">Quatre(4) photos d'identite du veuf, de la veuve ou des veuves</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <th scope="row">La photocopie recto-verso de la carte d'identite nationale</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="bg-success p-2 rounded text-white"><i class="icon-copy fa fa-thumbs-up" aria-hidden="true"></i> Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">11</th>
                                            <th scope="row">La copie legalisee de l'extrait de mariage de chaque veuve</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">12</th>
                                            <th scope="row">La copie legalisee de l'extrait de naissance de chaque enfant de moins de 17 ans</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">13</th>
                                            <th scope="row">Certificat de vie collective individuelle des enfants de moins de 17 ans</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">14</th>
                                            <th scope="row">Numero de telephone de l'assure</th>
                                            <th scope="row"><input type="file" class="form-control-file form-control height-auto"></th>
                                            <th scope="row"><span class="badge badge-danger"><i class="icon-copy fa fa-warning" aria-hidden="true"></i> Non Chargé</span></th>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
