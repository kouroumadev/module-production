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
                                <input class="form-control" name="societe_orig" value="{{ $retraite->societe_orig }}" type="text">
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
                                <select id="ass_11" required class="custom-select col-12">
                                    <option selected value="{{ $retraite->assignation }}">{{ $retraite->assignation }}</option>
                                    @foreach ($assignations as $ass)
                                    <option value="{{ $ass->assignation }}">{{ $ass->assignation }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Assignation 1</label>
                            <div class="col-sm-12 col-md-8">
                                <select id="ass_22" class="custom-select col-12">
                                    <option selected value="{{ $retraite->assignation1 }}">--Aucune selection--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant trim</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_trim" value="{{ \App\Helpers\AppHelper::getMoneyFormat($retraite->montant_trim) }}" type="text">
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
                                <input class="form-control" name="montant_comp" value="{{ \App\Helpers\AppHelper::getMoneyFormat($retraite->montant_comp) }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant comp plus</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_comp_plus" value="{{ \App\Helpers\AppHelper::getMoneyFormat($retraite->montant_comp_plus) }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant mens reval</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_mens_reval" value="{{ \App\Helpers\AppHelper::getMoneyFormat($retraite->montant_mens_reval) }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Montant à payer</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_a_payer" value="{{ \App\Helpers\AppHelper::getMoneyFormat($retraite->montant_a_payer) }}" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="col-md-6 col-sm-12">
                            {{-- <label class="weight-600">NC</label> --}}
                            <div class="custom-control custom-checkbox mb-5">
                                @php
                                    $firstDayOfMonth = date('Y-m-01 00:00:00');
                                @endphp
                                <input @if($retraite->created_at >= $firstDayOfMonth) checked @endif type="checkbox" class="custom-control-input" id="customCheck1-1">
                                <label class="custom-control-label" for="customCheck1-1">NC</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Trim du</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="trim_du" value="{{ \App\Helpers\AppHelper::getMoneyFormat($retraite->trim_du) }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Mont arriéré</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_arriere" value="{{ \App\Helpers\AppHelper::getMoneyFormat($retraite->montant_arriere) }}" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Mont tot à payer</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="montant_a_payer" value="{{ \App\Helpers\AppHelper::getMoneyFormat($retraite->montant_a_payer) }}" type="text">
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
                                <input @if($retraite->type == "01-") checked @endif type="radio" id="customRadio44" name="customRadio1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio44">01-</label>
                            </div>
                            <div class="col-sm-12 col-md-4 custom-control custom-control custom-radio mt-2">
                                <input @if($retraite->type == "PI") checked @endif type="radio" id="customRadio55" name="customRadio1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio55">PI-</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Titre</label>
                            <div class="col-sm-12 col-md-4 custom-control custom-radio mt-2">
                                <input @if($retraite->titre == "Mr") checked @endif type="radio" id="customRadio444" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio444">Mr</label>
                            </div>
                            <div class="col-sm-12 col-md-4 custom-control custom-control custom-radio mt-2">
                                <input @if($retraite->titre == "Mme") checked @endif type="radio" id="customRadio555" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio555">Mme</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Observation</label>
                            <textarea class="form-control">{{ $retraite->observation }}</textarea>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <a href="{{ url()->previous() }}" class="btn btn-block btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Annuler la modification</a>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-block btn-success">Valider la modification <i class="fa fa-check" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" id="modal_suspendre_btn" class="btn btn-block btn-danger">Suspendre <i class="fa fa-lock" aria-hidden="true"></i></button>
                        <div class="modal fade" id="modal_suspendre" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content bg-success text-white">
                                    <div class="modal-body text-center font-18">
                                        <h4 class=" text-white padding-top-30 mb-30 weight-500">Confirmez-vous la suspension de cet employer ?</h4>
                                        <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-secondary btn-light border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                                NON
                                            </div>
                                            <div class="col-6">
                                                <a href="{{ route('payeRetraite.suspension',$retraite->id) }}" class="btn btn-primary btn-light border-radius-100 btn-block confirmation-btn" ><i class="fa fa-check"></i></a>
                                                OUI
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button type="button" id="modal_deces_btn" class="btn btn-block btn-danger">Décès  <i class="fa fa-heartbeat" aria-hidden="true"></i></button>
                        <div class="modal fade" id="modal_deces" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                        <div class="modal-header bg-success">
                                            <h4 class="modal-title text-white" id="myLargeModalLabel">Declaration de décès</h4>
                                            <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="deces_form" action="{{ route('payeRetraite.deces') }}" method="post">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-md-4 col-form-label">Date du décès </label>
                                                    <div class="col-sm-12 col-md-8">
                                                        <input type="hidden" name="retraite_id" value="{{ $retraite->id }}">
                                                        <input required name="date_deces" class="form-control date-picker" placeholder="Selectionner" type="text">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    <div class="modal-footer">
                                        <button id="btn_deces_send" onclick="sendFormDeces()" type="button" class="btn btn-success" data-dismiss="modal">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </form>
        </div>
   </div>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        function sendFormDeces(){
            // console.log('hellllo');
            $("#deces_form").submit();
        }
    </script>

    <script>
     $(document).ready(function() {

        $('#modal_suspendre_btn').on('click', function() {
            $('#modal_suspendre').modal('show');
        });

        $('#modal_deces_btn').on('click', function() {
            $('#modal_deces').modal('show');
        });

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
