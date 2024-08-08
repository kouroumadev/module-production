@extends('welcome')

@section('body')

    <div class="page-header shadow-lg">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>RETRAITE</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="{{ route('prestation.index') }}">retraite</a></li> --}}
                        {{-- <li class="breadcrumb-item active" aria-current="page"> ECHEANCE - {{ $echeance->mois }} {{ $echeance->annee }}</li> --}}
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="row">
                    <div class="col-md-6">
                        {{-- <button class="btn btn-success" data-toggle="modal" data-target="#small-modal-retraite">Charger le fichier <i class="fa fa-upload" aria-hidden="true"></i></button> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="pb-20 mb-3">
        <div class="pd-20">
            <h4 class="text-blue h4">Details pensionnaire</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Num retraite</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->num_pension }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Nom</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->nom }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Prenoms</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->prenom }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Date de naiss</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->date_naiss }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Date de jouiss</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->date_jouis }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Échéance prem vrmt</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->echeance_pre_vrmt }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Code bank</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->code_bank }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Code agence</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->code_agence }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Num compte</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->rip }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Clé RIB</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->cle_rib }}" readonly>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Société origine</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->societe_orig }}" readonly>

                            {{-- <select class="custom-select col-12">
                                <option selected="">--Aucune selection--</option>
                                <option value="1">One</option>
                            </select> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Téléphone</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->telephone }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Assignation</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->assignation }}" readonly>

                            {{-- <select class="custom-select col-12">
                                <option selected="">--Aucune selection--</option>
                                <option value="1">One</option>
                            </select> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Assignation 1</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->assignation1 }}" readonly>

                            {{-- <select class="custom-select col-12">
                                <option selected="">--Aucune selection--</option>
                                <option value="1">One</option>
                            </select> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Montant trim</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->montant_trim }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">AF</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->af }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Montant comp</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->montant_comp }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Montant comp plus</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->montant_trim }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Montant mens reval</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->montant_mens_reval }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Montant à payer</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->montant_a_payer }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="col-md-6 col-sm-12">
                        {{-- <label class="weight-600">NC</label> --}}
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck1-1">
                            <label class="custom-control-label" for="customCheck1-1">NC</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Mens du</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->montant_a_payer }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Mont arriéré</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->montant_arriere }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Mont tot à payer</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->montant_a_payer }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Agence</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" value="{{ $data->agence }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Type</label>
                        <div class="col-sm-12 col-md-4 custom-control custom-radio mt-2">
                            <input type="radio" id="customRadio44" name="customRadio1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio44">01-</label>
                        </div>
                        <div class="col-sm-12 col-md-4 custom-control custom-control custom-radio mt-2">
                            <input type="radio" id="customRadio55" name="customRadio1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio55">PI-</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-4 col-form-label">Titre</label>
                        <div class="col-sm-12 col-md-4 custom-control custom-radio mt-2">
                            <input type="radio" id="customRadio444" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio444">Mr</label>
                        </div>
                        <div class="col-sm-12 col-md-4 custom-control custom-control custom-radio mt-2">
                            <input type="radio" id="customRadio555" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio555">Mme</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Observation</label>
                        <textarea class="form-control">
                            {{ $data->observation }}
                        </textarea>
                    </div>
                    <div class="form-group row">
                        {{-- <div class="col-sm-12 col-md-6 custom-control custom-radio mt-2">
                            <button type="button" class="close btn btn-danger" data-dismiss="modal">Annuler</button>
                        </div> --}}
                        <div class="col-sm-12 col-md-6 custom-control custom-control custom-radio mt-2 text-end">
                            <button type="submit" class="btn btn-success">Valider <i class="fa fa-check" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination Links -->
    </div>






<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap4.min.css">

<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap4.min.js"></script>


@endsection
