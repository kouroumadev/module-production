@extends('welcome')

@section('body')

    <div class="page-header shadow-lg">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="title">
                    <h4>RETRAITE</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="{{ route('prestation.index') }}">retraite</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page"> ECHEANCE - {{ $echeance->mois }} {{ $echeance->annee }}</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>

    <h5 class="text-center mb-3">-- Modification des informations d'un retraite --</h5>

   <div class="row shadow-lg p-2">
        <div class="col-md-12">
            <form action="" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Num pension</label>
                            <div class="col-sm-12 col-md-8">
                                <input name="num_pension" value="{{ $retraite->num_pension }}" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Nom</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="nom" value="{{ $retraite->nom }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Prenoms</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="prenom" value="{{ $retraite->prenom }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Date de naiss</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control date-picker" placeholder="Select Date" name="date_naiss" value="{{ $retraite->date_naiss }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Date de jouiss</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control date-picker" placeholder="Select Date" name="date_jouis" value="{{ $retraite->date_jouis }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Échéance prem vrmt</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control date-picker" placeholder="Select Date" name="echeance_pre_vrmt" value="{{ $retraite->echeance_pre_vrmt }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Code bank</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="code_bank" value="{{ $retraite->code_bank }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Code agence</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="code_agence" value="{{ $retraite->code_agence }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Num compte</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="cle_rib" value="{{ $retraite->cle_rib }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Clé RIB</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="cle_rib" value="{{ $retraite->cle_rib }}" type="text">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Société origine</label>
                            <div class="col-sm-12 col-md-8">
                                <select class="custom-select col-12">
                                    <option selected="">--Aucune selection--</option>
                                    <option value="1">One</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Téléphone</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="telephone" value="{{ $retraite->telephone }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Assignation</label>
                            <div class="col-sm-12 col-md-8">
                                <select class="custom-select col-12">
                                    <option selected="">--Aucune selection--</option>
                                    <option value="1">One</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Assignation 1</label>
                            <div class="col-sm-12 col-md-8">
                                <select class="custom-select col-12">
                                    <option selected="">--Aucune selection--</option>
                                    <option value="1">One</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant trim</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_trim" value="{{ $retraite->montant_trim }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">AF</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="af" value="{{ $retraite->af }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant comp</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_comp" value="{{ $retraite->montant_comp }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant comp plus</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_comp_plus" value="{{ $retraite->montant_comp_plus }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant mens reval</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_mens_reval" value="{{ $retraite->montant_mens_reval }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant à payer</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_a_payer" value="{{ $retraite->montant_a_payer }}" type="text">
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
                            <label class="col-sm-12 col-md-4 col-form-label">Trim du</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="trim_du" value="{{ $retraite->trim_du }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Mont arriéré</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_arriere" value="{{ $retraite->montant_arriere }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Mont tot à payer</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_a_payer" value="{{ $retraite->montant_a_payer }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Agence</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="agence" value="{{ $retraite->agence }}" type="text">
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
                            <textarea class="form-control">{{ $retraite->observation }}</textarea>
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
            </form>
        </div>
   </div>

@endsection
