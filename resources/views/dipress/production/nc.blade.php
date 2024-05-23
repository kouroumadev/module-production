@extends('welcome')

@section('body')

    <div class="page-header shadow-lg">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="title">
                    <h4>Production</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">NOUVELLE CONCESION</li>
                        <li class="breadcrumb-item active" aria-current="page"> ECHEANCE - {{ $echeance[0]->mois }} {{ $echeance[0]->annee }}</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>

    <h5 class="text-center mb-3">-- Ajout d'une nouvelle concession --</h5>

   <div class="row shadow-lg p-2">
        <div class="col-md-12">
            <form action="{{ route('dipress.nc.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Num pension</label>
                            <div class="col-sm-12 col-md-8">
                                <input type="hidden" name="echeance_id" value="{{ $echeance[0]->id }}">
                                <input required name="num_pension" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Nom</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="nom" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Prenoms</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="prenom" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Date de naiss</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="date_naiss" type="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Date de jouiss</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="date_jouis" type="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Échéance prem vrmt</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="echeance_pre_vrmt" type="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Code bank</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="code_bank" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Code agence</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="code_agence" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Num compte</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="cle_rib" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Clé RIB</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="cle_rib" type="text">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Société origine</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="societe_orig" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Téléphone</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="telephone" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Assignation</label>
                            <div class="col-sm-12 col-md-8">
                                <select name="assignation" id="ass_11" required class="custom-select col-12">
                                    <option selected value="">-- Aucune selection --</option>
                                    @foreach ($assignations as $ass)
                                    <option value="{{ $ass->assignation }}">{{ $ass->assignation }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Assignation 1</label>
                            <div class="col-sm-12 col-md-8">
                                <select name="assignation1" id="ass_22" class="custom-select col-12">
                                    <option selected value="">-- Aucune selection --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant trim</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="montant_trim" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">AF</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="af" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant comp</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="montant_comp" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant comp plus</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="montant_comp_plus" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant mens reval</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="montant_mens_reval" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant à payer</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="montant_a_payer" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="col-md-6 col-sm-12">

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Trim du</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="trim_du" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Mont arriéré</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="montant_arriere" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Mont tot à payer</label>
                            <div class="col-sm-12 col-md-8">
                                <input required class="form-control" name="montant_a_payer" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Agence</label>
                            <div class="col-sm-12 col-md-8">
                                <select name="agence" required class="custom-select col-12">
                                    <option selected value="">-- Aucune selection --</option>
                                    @foreach ($agences as $ag)
                                    <option value="{{ $ag->name }}">{{ $ag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Type</label>
                            <div class="col-sm-12 col-md-4 custom-control custom-radio mt-2">
                                <input required type="radio" value="01-" id="customRadio44" name="type" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio44">01-</label>
                            </div>
                            <div class="col-sm-12 col-md-4 custom-control custom-control custom-radio mt-2">
                                <input required type="radio" id="customRadio55" value="PI" name="type" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio55">PI-</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Titre</label>
                            <div class="col-sm-12 col-md-4 custom-control custom-radio mt-2">
                                <input required type="radio" id="customRadio444" value="Mr" name="titre" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio444">Mr</label>
                            </div>
                            <div class="col-sm-12 col-md-4 custom-control custom-control custom-radio mt-2">
                                <input required type="radio" id="customRadio555" value="Mme" name="titre" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio555">Mme</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Observation</label>
                            <textarea name="observation" class="form-control"></textarea>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <a href="{{ url()->previous() }}" class="btn btn-block btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Annuler l'ajout</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-success">Valider l'ajout <i class="fa fa-check" aria-hidden="true"></i></button>
                    </div>
                </div>
                <hr>
            </form>
        </div>
   </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}

    <script>
     $(document).ready(function() {

        //GET ASSIGNATION1
        $('#ass_11').change(function() {
            var selectedCategory = $(this).val();
            $.getJSON("{{ url('/paye/retraite/get-ass') }}", { option: selectedCategory }, function(data) {
                var subCategoryDropdown = $('#ass_22');
                subCategoryDropdown.empty();
                console.log('dattta ', data);
                subCategoryDropdown.append("<option selected value=''>--Aucune selection--</option>");
                $.each(data, function(index, element) {
                    subCategoryDropdown.append("<option value='" + element.assignation1 + "'>" + element.assignation1 + "</option>");
                });
            });
        });


     });
   </script>

@endsection
