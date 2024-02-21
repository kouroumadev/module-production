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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="row " id="employe-wrapper">
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

                            <div class="accordion accordion-flush" id="accordionExample">
                                @foreach ($data['employeDetails'] as $key => $value)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $key }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $key }}" aria-expanded="true"
                                                aria-controls="collapse{{ $key }}">
                                                {{ $value['conjoint_name'] }} {{ $value['conjoint_prenom'] }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $key }}" class="accordion-collapse collapse show"
                                            aria-labelledby="heading{{ $key }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
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
                                                                    {{-- <td>{{ $enfant->date_naissance }}</td> --}}
                                                                </tr>
                                                            @endif
                                                        @endforeach


                                                    </tbody>
                                                </table>
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
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                      <strong>INFOS PERSONNELLES</strong>
                                    </button>
                                  </h2>
                                  <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
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
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                      <strong>INFOS EMPLOYEUR</strong>
                                    </button>
                                  </h2>
                                  <div id="flush-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
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
                                                {{-- <tr>
                                                    <th>Date de Naissance</th>
                                                    <td>{{ $data['employe'][0]->date_naissance }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Lieu de Naissance</th>
                                                    <td>{{ $data['employe'][0]->lieu_naissance }}</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                      Accordion Item #3
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
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
