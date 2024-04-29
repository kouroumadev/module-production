@extends('welcome')
@section('body')

    <div class="row" id="employe-wrapper">
        <div class="col-md-12">
            <div class="pd-20 card-box mb-30 shadow-lg">
                <div class="wizard-content">
                    <form action="{{ route('pension.store') }}" id="pension-store" class="tab-wizard wizard-circle wizard"
                        method="POST" enctype="multipart/form-data">
                        @csrf

                        <h5>Infos Assuré</h5>

                        <section>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>No Immatriculation :</label>
                                        <input type="text" class="form-control" name="no_ima_employee"
                                            value="{{ $data['employe'][0]->no_employe }}" id="no_immat_disp" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nom :</label>
                                        <input type="text" class="form-control" name="nom_employee"
                                            value="{{ $data['employe'][0]->nom }}" id="nom_employe" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Prenom :</label>
                                        <input type="text" class="form-control" name="prenom_employee"
                                            value="{{ $data['employe'][0]->prenoms }}" id="prenom_employe" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date de naissance:</label>
                                        <input type="text" class="form-control" name="date_naissance_employee"
                                            value="{{ $data['employe'][0]->date_naissance }}" id="date_naissance" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Lieu de naissance</label>
                                        <input type="text" class="form-control" name="lieu_naissance_employee"
                                            value="{{ $data['employe'][0]->lieu_naissance }}" id="lieu_naissance" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Prefecture</label>
                                        <input type="text" class="form-control" name="prefecture_employee"
                                            value="{{ $data['employe'][0]->prefecture }}" id="prefecture" readonly>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sexe:</label>
                                        <input type="text" class="form-control" name="sexe"
                                            value="{{ $data['employe'][0]->sexe }}" id="sexe" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>code employe :</label>
                                        <input type="text" class="form-control" name="code_employe"
                                            value="{{ $data['employe'][0]->code_employe }}" id="code_employe" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input type="email" class="form-control" name="email_employe" value=""
                                            id="email_employe">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Telephone:</label>
                                        <input type="text" class="form-control" name="tel_employee"
                                            id="telephone_employe" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Adresse:</label>
                                        <input type="text" class="form-control" name="adresse_employee"
                                            id="adresse_employe" value="{{ $data['employe'][0]->adresse }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Situation Matrimoniale:</label>
                                        <input type="text" class="form-control" name="situation_matri_employee"
                                            value="{{ $data['employe'][0]->statut }}" id="statut" readonly>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>date jour :</label>
                                        <input type="text" class="form-control" name="date_jour"
                                            value="{{ $data['employe'][0]->date_jour }}" id="date_jour">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>date embauche:</label>
                                        <input type="text" class="form-control" name="date_embauche"
                                            id="adresse_employe" value="{{ $data['employe'][0]->date_embauche }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date Immatriculation:</label>
                                        <input type="text" class="form-control" name="date_immatriculation"
                                            value="{{ $data['employe'][0]->date_immatriculation }}"
                                            id="date_immatriculation">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>no cin :</label>
                                        <input type="text" class="form-control" name="no_cin"
                                            value="{{ $data['employe'][0]->no_cin }}" id="no_cin">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>lieu_etab_cin:</label>
                                        <input type="text" class="form-control" name="lieu_etab_cin"
                                            id="lieu_etab_cin" value="{{ $data['employe'][0]->lieu_etab_cin }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>date_etabl_cin:</label>
                                        <input type="text" class="form-control" name="date_etabl_cin"
                                            value="{{ $data['employe'][0]->date_etabl_cin }}" id="date_etabl_cin">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>nationalite:</label>
                                        <input type="text" class="form-control" name="nationalite"
                                            value="{{ $data['employe'][0]->nationalite }}" id="nationalite">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>employeur id:</label>
                                        <input type="text" class="form-control" name="employeur_id" id="employeur_id"
                                            value="{{ $data['employe'][0]->employeur_id }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>no employeur:</label>
                                        <input type="text" class="form-control" name="no_employeur"
                                            value="{{ $data['employe'][0]->no_employeur }}" id="no_employeur" readonly>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>profession:</label>
                                        <input type="text" class="form-control" name="profession"
                                            value="{{ $data['employe'][0]->profession }}" id="profession">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>situation pro:</label>
                                        <input type="text" class="form-control" name="situationpro" id="situationpro"
                                            value="{{ $data['employe'][0]->situationpro }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>anciencode employeur:</label>
                                        <input type="text" class="form-control" name="anciencode_employeur"
                                            value="{{ $data['employe'][0]->anciencode_employeur }}"
                                            id="anciencode_employeur" readonly>
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
                                        <input type="text" class="form-control" name="no_employer"
                                            value="{{ $data['employeur'][0]->no_employeur }}" id="no_employeur"
                                            readonly />
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
                                        <input type="text" class="form-control" name="category"
                                            value="{{ $data['employeur'][0]->categorie }}" id="categorie" readonly />
                                    </div>
                                </div>
                            </div>


                        </section>
                        <!-- Step 3 -->
                        <h5>Conjoints et Enfants</h5>
                        <section>

                            <?php
                            $details = json_encode($data['employeDetails']);
                            ?>

                            <input type="hidden" name="details" value="{{ $details }}">


                            @if ($data['employeDetails'] == null)
                                <h4 style="text-align: center">Pas de Conjoint</h4>
                            @else
                                <div class="faq-wrap">
                                    @foreach ($data['employeDetails'] as $key => $value)
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="btn btn-block text-bold" data-toggle="collapse"
                                                        data-target="faq{{ $key }}">
                                                        <span class="text-bold">Conjoint(e) {{ $key + 1 }} -
                                                            {{ strtoupper($value['conjoint_name']) }}
                                                            {{ strtoupper($value['conjoint_prenom']) }} </span>
                                                    </div>
                                                </div>
                                                <div id="faq{{ $key }}" class="collapse show"
                                                    data-parent="accordion">
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
                                                                <h5 class="text-center p-3">Liste des enfants</h5>
                                                                @foreach ($value['enfants'] as $key => $enfant)
                                                                    @if ($enfant == null)
                                                                        <div class="alert alert-secondary" role="alert">
                                                                            Pas d'enfants
                                                                        </div>
                                                                    @else
                                                                        <tr>
                                                                            <th scope="row">{{ $key + 1 }}
                                                                            </th>
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
                            @endif


                        </section>

                        <!-- Step 5 -->
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
                                            <div class="btn btn-block" data-toggle="collapse" data-target="#faq2">
                                                <strong>INFOS EMPLOYEUR</strong>
                                            </div>
                                        </div>
                                        <div id="faq2" class="collapse show" data-parent="#accordion">
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

                                    <div class="card">
                                        <div class="card-header" id="card-header-recap-conj1">
                                            <div class="btn btn-block" data-toggle="collapse" data-target="#faq2">
                                                <strong>INFOS CONJOINTS ET ENFANTS</strong>
                                            </div>
                                        </div>
                                        <div class="faq-wrap">
                                            @foreach ($data['employeDetails'] as $key => $value)
                                                <div id="accordion">
                                                    <div class="card">
                                                        <div class="card-header" id="card-header-recap-conj2">
                                                            <div class="btn btn-block" data-toggle="collapse"
                                                                data-target="faq{{ $key }}">
                                                                <span class="text-bold">Conjoint(e)
                                                                    {{ $key + 1 }} -
                                                                    {{ strtoupper($value['conjoint_name']) }}
                                                                    {{ strtoupper($value['conjoint_prenom']) }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div id="faq{{ $key }}" class="collapse show"
                                                            data-parent="accordion">
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
                                                                        <h5 class="text-center">Liste des enfants</h5>
                                                                        @foreach ($value['enfants'] as $key => $enfant)
                                                                            @if ($enfant == null)
                                                                                <div class="alert alert-secondary"
                                                                                    role="alert">
                                                                                    Pas d'enfants
                                                                                </div>
                                                                            @else
                                                                                <tr>
                                                                                    <th scope="row">
                                                                                        {{ $key + 1 }}</th>
                                                                                    <td>{{ $enfant->nom }}</td>
                                                                                    <td>{{ $enfant->prenoms }}</td>
                                                                                    <td>{{ $enfant->date_naissance }}
                                                                                    </td>
                                                                                    <td>{{ $enfant->lieu_naissance }}
                                                                                    </td>
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

                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="btn btn-block" data-toggle="collapse" data-target="#faq2">
                                                <strong>INFOS DEPOSANT</strong>
                                            </div>
                                        </div>
                                        <div id="faq2" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Nom déposant</th>
                                                            <td id="nom_dep"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Prenom déposant</th>
                                                            <td id="prenom_dep"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Téléphone déposant</th>
                                                            <td id="tel_dep"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email déposant</th>
                                                            <td id="email_dep"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Adresse déposant</th>
                                                            <td id="adr_dep"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>CIN déposant</th>
                                                            <td id="cin_dep"></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </section>
                        {{-- <input type="hidden" name="code_employe" value="{{ $data['employe'][0]->code_employe }}"
                            id="">
                        <input type="hidden" name="date_jour" value="{{ $data['employe'][0]->date_jour }}"
                            id="">
                        <input type="hidden" name="date_embauche" value="{{ $data['employe'][0]->date_embauche }}"
                            id=""> --}}
                        {{-- <input type="hidden" name="date_etabl_cin" value="{{ $data['employe'][0]->date_etabl_cin }}"
                            id=""> --}}
                        {{-- <input type="hidden" name="date_immatriculation"
                            value="{{ $data['employe'][0]->date_immatriculation }}" id=""> --}}
                        <input type="hidden" name="datemodification"
                            value="{{ $data['employe'][0]->datemodification }}" id="">
                        {{-- <input type="hidden" name="employeur_id" value="{{ $data['employe'][0]->employeur_id }}"
                            id=""> --}}
                        {{-- <input type="hidden" name="lieu_etab_cin" value="{{ $data['employe'][0]->lieu_etab_cin }}"
                            id=""> --}}
                        {{-- <input type="hidden" name="nationalite" value="{{ $data['employe'][0]->nationalite }}"
                            id=""> --}}
                        <input type="hidden" name="date_created" value="{{ $data['employe'][0]->date_created }}"
                            id="">
                        {{-- <input type="hidden" name="no_cin" value="{{ $data['employe'][0]->no_cin }}" id=""> --}}
                        <input type="hidden" name="nom_mere" value="{{ $data['employe'][0]->nom_mere }}"
                            id="">
                        <input type="hidden" name="nom_pere" value="{{ $data['employe'][0]->nom_pere }}"
                            id="">
                        <input type="hidden" name="pays_id" value="{{ $data['employe'][0]->pays_id }}" id="">
                        {{-- <input type="hidden" name="prefecture" value="{{ $data['employe'][0]->prefecture }}"
                            id=""> --}}
                        <input type="hidden" name="prenom_mere" value="{{ $data['employe'][0]->prenom_mere }}"
                            id="">
                        <input type="hidden" name="prenom_pere" value="{{ $data['employe'][0]->prenom_pere }}"
                            id="">
                        {{-- <input type="hidden" name="no_employeur" value="{{ $data['employe'][0]->no_employeur }}"
                            id=""> --}}
                        {{-- <input type="hidden" name="profession" value="{{ $data['employe'][0]->profession }}"
                            id=""> --}}
                        {{-- <input type="hidden" name="sexe" value="{{ $data['employe'][0]->sexe }}" id=""> --}}
                        {{-- <input type="hidden" name="situationpro" value="{{ $data['employe'][0]->situationpro }}"
                            id=""> --}}
                        <input type="hidden" name="statut" value="{{ $data['employe'][0]->statut }}" id="">
                        <input type="hidden" name="statut_employe_id"
                            value="{{ $data['employe'][0]->statut_employe_id }}" id="">
                        {{-- <input type="hidden" name="adresse" value="{{ $data['employe'][0]->adresse }}" id=""> --}}
                        {{-- <input type="hidden" name="anciencode_employeur"
                            value="{{ $data['employe'][0]->anciencode_employeur }}" id=""> --}}
                        <input type="hidden" name="ancien_num_employe"
                            value="{{ $data['employe'][0]->ancien_num_employe }}" id="">
                        <input type="hidden" name="datesortie" value="{{ $data['employe'][0]->datesortie }}"
                            id="">
                        <input type="hidden" name="tag_rattrapage" value="{{ $data['employe'][0]->tag_rattrapage }}"
                            id="">
                        <input type="hidden" name="user_id" value="{{ $data['employe'][0]->user_id }}" id="">
                        <input type="hidden" name="categorie_id" value="{{ $data['employe'][0]->categorie_id }}"
                            id="">
                        <input type="hidden" name="tag_deces" value="{{ $data['employe'][0]->tag_deces }}"
                            id="">
                        <input type="hidden" name="tag_invalidite" value="{{ $data['employe'][0]->tag_invalidite }}"
                            id="">
                        <input type="hidden" name="tag_compte_indiv"
                            value="{{ $data['employe'][0]->tag_compte_indiv }}" id="">
                        <input type="hidden" name="tag_statut" value="{{ $data['employe'][0]->tag_statut }}"
                            id="">
                        <input type="hidden" name="tag_famille" value="{{ $data['employe'][0]->tag_famille }}"
                            id="">
                        <input type="hidden" name="prefecture_id" value="{{ $data['employe'][0]->prefecture_id }}"
                            id="">
                        <input type="hidden" name="code_prefecture" value="{{ $data['employe'][0]->code_prefecture }}"
                            id="">
                        <input type="hidden" name="pref_id" value="{{ $data['employe'][0]->pref_id }}" id="">
                        <input type="hidden" name="agen_id" value="{{ $data['employe'][0]->agen_id }}" id="">
                        <input type="hidden" name="agencecode_id" value="{{ $data['employe'][0]->agencecode_id }}"
                            id="">
                        <input type="hidden" name="tag_allocfam" value="{{ $data['employe'][0]->tag_allocfam }}"
                            id="">
                        <input type="hidden" name="tag_famille_pf" value="{{ $data['employe'][0]->tag_famille_pf }}"
                            id="">
                        <input type="hidden" name="tag_allocprepost"
                            value="{{ $data['employe'][0]->tag_allocprepost }}" id="">
                        <input type="hidden" name="tag_ijcongemat" value="{{ $data['employe'][0]->tag_ijcongemat }}"
                            id="">
                        <input type="hidden" name="tag_alloc_chomage"
                            value="{{ $data['employe'][0]->tag_alloc_chomage }}" id="">
                        <input type="hidden" name="tag_allocataire_pf"
                            value="{{ $data['employe'][0]->tag_allocataire_pf }}" id="">
                        <input type="hidden" name="tag_retraite" value="{{ $data['employe'][0]->tag_retraite }}"
                            id="">
                        <input type="hidden" name="age_reel_deces" value="{{ $data['employe'][0]->age_reel_deces }}"
                            id="">
                        <input type="hidden" name="assignation_id" value="{{ $data['employe'][0]->assignation_id }}"
                            id="">
                        <input type="hidden" name="date_deces" value="{{ $data['employe'][0]->date_deces }}"
                            id="">
                        <input type="hidden" name="no_acte_deces" value="{{ $data['employe'][0]->no_acte_deces }}"
                            id="">
                        <input type="hidden" name="tag_famille_rp" value="{{ $data['employe'][0]->tag_famille_rp }}"
                            id="">
                        <input type="hidden" name="tag_rente_deces" value="{{ $data['employe'][0]->tag_rente_deces }}"
                            id="">
                        <input type="hidden" name="tag_suspension" value="{{ $data['employe'][0]->tag_suspension }}"
                            id="">
                        <input type="hidden" name="matricule" value="{{ $data['employe'][0]->matricule }}"
                            id="">

                        <button type="submit" class="btn btn-success">Envoyer</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
