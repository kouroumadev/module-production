@extends('welcome')

@section('body')

    <div class="page-header shadow-lg">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>PRODUCTION</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="{{ route('prestation.index') }}">retraite</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page"> ECHEANCE - {{ $echeance[0]->mois }} {{ $echeance[0]->annee }} | TYPE: {{ $type }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="row">
                    @if (Auth::user()->dept->name == 'DIPRES')
                        <div class="col-md-4">
                            {{-- <button class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-paye-add"></button> --}}
                            <a href="{{ route('dipress.nc.create') }}" class="btn btn-success btn-block">Nouveau <i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('payeRetraite.excel',$echeance[0]->id) }}" class="btn btn-warning btn-block">Importer <i class="fa fa-upload" aria-hidden="true"></i></a>
                        </div>
                    @endif

                    @if (Auth::user()->dept->name == 'PRODUCTION')
                        <div class="col-md-4">
                            <a href="{{ route('payeRetraite.etatPayement') }}" class="btn btn-danger btn-block" target="_blank">Fiche de paye <i class="fa fa-download" aria-hidden="true"></i></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('agence.retraite.pdf') }}" method="post">
        @csrf
        <div class="row justify-content-center shadow-lg p-2">

            <div class="col-md-3">
                <label class="weight-600">État</label>

                <div class="custom-control custom-radio ">
                    <input checked type="radio" id="customRadio4" value="all" name="radio_etat" class="custom-control-input">
                    <input type="hidden" id="echeance_id" name="echeance_id" value="{{ $echeance[0]->id }}">
                    <input type="hidden" id="type" name="type" value="{{ $type }}">
                    <label class="custom-control-label" for="customRadio4">Toutes les Concessions</label>
                </div>
                <div class="custom-control custom-radio ">
                    <input type="radio" id="customRadio5" value="old" name="radio_etat" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio5">Ancienne(s) Concession(s)</label>
                </div>
                <div class="custom-control custom-radio ">
                    <input type="radio" id="customRadio6" value="new" name="radio_etat" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio6">Nouvelle(s) Concession(s)</label>
                </div>
            </div>
            <div class="col-md-3">
                <label class="col-sm-12 weight-600 col-md-12 col-form-label">Assignations</label>
                <div class="col-sm-12 col-md-10">
                    <select id="ass_2" name="assignation" required class="form-control form-control-sm">
                        <option selected value="">--Aucune selection--</option>
                        @foreach ($assignations as $ass)
                        <option value="{{ $ass->assignation1 }}">{{ $ass->assignation1 }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="type" value="{{ $type }}">
                </div>
            </div>
            <div class="col-md-4">
                <button class="btn btn-danger " type="submit" target="_blank">Télécharger fiche de paye <i class="fa fa-download" aria-hidden="true"></i></button>
            </div>


        </div>
    </form>





    {{-- @if ($echeance[0]->rertaites != null) --}}
    <div class="pb-20 mb-3">
        <div class="pd-20">
            <h4 class="text-blue h4">Liste des pensionnaires</h4>
        </div>
        <table id="exampleRetraiteFinale" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-success">
                <tr>
                {{-- <th class="table-plus text-white">#</th> --}}
                <th class="text-white font-12">Num Pension</th>
                <th class="text-white font-12">Type</th>
                <th class="text-white font-12">Prénoms</th>
                <th class="text-white font-12">Nom</th>
                <th class="text-white font-12">Date Naiss</th>
                <th class="text-white font-12">Date Jouiss</th>
                <th class="text-white font-12">Titre</th>
                <th class="text-white font-12">Montant Trim</th>
                <th class="text-white font-12">Mont Comp</th>
                <th class="text-white font-12">Assignation</th>
                <th class="text-white font-12">Assignation 1</th>
                <th class="text-white font-12">Société Orig</th>
                <th class="text-white font-12">Décédé</th>
                <th class="text-white font-12">Mont trim reval</th>
                <th class="text-white font-12">Mont mens reval</th>
                <th class="text-white font-12">Montant Avance</th>
                <th class="text-white font-12">Trim du</th>
                <th class="text-white font-12">Pour</th>
                <th class="text-white font-12">Rest a remb</th>
                <th class="text-white font-12">Mont arriéré</th>
                <th class="text-white font-12">AF</th>
                <th class="text-white font-12">Montant à payer</th>
                <th class="text-white font-12">Observation</th>
                <th class="text-white font-12">Echeance pre vrmnt</th>
                <th class="text-white font-12">Agence</th>
                <th class="text-white font-12">Pre ech remb</th>
                <th class="text-white font-12">Der ech remb</th>
                <th class="text-white font-12">As avance</th>
                <th class="text-white font-12">Est reclamation</th>
                <th class="text-white font-12">Téléphone</th>
                <th class="text-white font-12">Trim remb</th>
                <th class="text-white font-12">Solde avance</th>
                <th class="text-white font-12">NC</th>
                <th class="text-white font-12">Code bank</th>
                <th class="text-white font-12">Code agence</th>
                <th class="text-white font-12">Numéro de cmpt</th>
                <th class="text-white font-12">Clé rib</th>
                <th class="text-white font-12">Mappr</th>
                <th class="text-white font-12">Suspendu</th>
                <th class="text-white font-12">Ajouté le </th>
                <th class="text-white font-12">Modifié le </th>
                <th class="datatable-nosort text-white font-12">Action</th>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
        <!-- Pagination Links -->
    </div>
    {{-- @endif --}}

    <div id="loading-spinner" class="loading-spinner">
        <img src="{{ asset('theme/gif/Spinner-2.gif') }}" alt="Loading...">
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




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



<script>
    $(document).ready(function() {

        var echeance_id = $('#echeance_id').val();
        var type = $('#type').val();

        var table = $('#exampleRetraiteFinale').DataTable();

        $.ajax({
                url: '/agence/retraite/filter',
                type: 'GET',
                dataType: 'json',
                data: {
                    echeance_id: echeance_id,
                    type: type
                 },
                 beforeSend: function() {
                    $('#loading-spinner').show(); // Show the loading spinner
                },
                success: function(data) {
                    console.log('valueeee:', data);
                    console.log(jQuery.type(data));
                    //    var table = $('#exampleRetraiteFinale').DataTable({
                    //         searching: true,
                    //         paging: true,
                    //         pageLength: 10,
                    //     });
                    $.each(data, function(key, item) {
                        table.row.add([
                            item.num_pension,
                            item.type,
                            item.prenom,
                            item.nom,
                            item.date_naiss,
                            item.date_jouis,
                            item.titre,
                            item.montant_trim,
                            item.montant_comp,
                            item.assignation,
                            item.assignation1,
                            item.societe_orig,
                            item.est_decede,
                            item.montant_trim_reval,
                            item.montant_mens_reval,
                            item.montant_avance,
                            item.trim_du,
                            item.remb_pour_nb_periode,
                            item.reste_remb,
                            item.montant_arriere,
                            item.af,
                            item.montant_a_payer,
                            item.observation,
                            item.echeance_pre_vrmt,
                            item.agence,
                            item.pre_ech_remb,
                            item.der_ech_remb,
                            item.as_avance,
                            item.est_reclation,
                            item.telephone,
                            item.trim_remb,
                            item.solde_avance,
                            item.est_nc,
                            item.code_bank,
                            item.code_agence,
                            item.rip,
                            item.cle_rib,
                            item.mappr,
                            item.est_suspendu,
                            item.created_at.split("T")[0],
                            item.updated_at.split("T")[0],
                            "<a href='#' class='btn-block' data-toggle='modal' data-target='#modal-lg-prod-"+item.id+"' type='button'>Details</a>"
                            // "<a href='"+item.url+"' class='btn btn-success rounded'><i class='fa fa-pencil' aria-hidden='true'></i></a>"
                            // item.action,



                            //  item.montant_comp_plus,
                            //  item.banque,
                            //  item.nb_periode_avance,
                            //  item.taux_remb,

                            //  item.IDPROCURATION,
                            //  item.date_motif,
                            //  item.date_dcd,
                            //  item.date_declaration_dcd,

                        ]).draw();
                    });
                    $('#loading-spinner').hide();

                    // item.created_at.split("T")[0],



                }
        });



        $('input[type=radio][name=radio_etat]').change(function() {
            loadDatatable();
        });

        $('#ass_2').change(function() {
            loadDatatable();
        });

        //LOAD DATATABLE
        function loadDatatable() {
            var etatRadio = $('input[name="radio_etat"]:checked').val();
            var assignation1 = $('#ass_2').val();
            var echeance_id = $('#echeance_id').val();
            var type = $('#type').val();

            $.ajax({
                url: '/agence/retraite/filter',
                type: 'GET',
                dataType: 'json',
                data: {
                    etatRadio: etatRadio,
                    assignation1: assignation1,
                    echeance_id: echeance_id,
                    type: type,
                 },
                 beforeSend: function() {
                    $('#loading-spinner').show(); // Show the loading spinner
                },
                success: function(data) {
                    table.clear().draw();
                     console.log(jQuery.type(data));
                    // data = JSON.stringify(data);
                    // data = JSON.parse(data);
                    // data = Object.entries(data);
                    // console.log('moiiiiii:', data);
                    // if (Array.isArray(data)) {
                    //     console.log('OUI');
                    // } else {
                    //     console.log('NON');
                    // }
                    // console.log('moiiiiii:', data);

                    $.each(data, function(key, item) {
                        table.row.add([
                        item.num_pension,
                        item.type,
                        item.prenom,
                        item.nom,
                        item.date_naiss,
                        item.date_jouis,
                        item.titre,
                        item.montant_trim,
                        item.montant_comp,
                        item.assignation,
                        item.assignation1,
                        item.societe_orig,
                        item.est_decede,
                        item.montant_trim_reval,
                        item.montant_mens_reval,
                        item.montant_avance,
                        item.trim_du,
                        item.remb_pour_nb_periode,
                        item.reste_remb,
                        item.montant_arriere,
                        item.af,
                        item.montant_a_payer,
                        item.observation,
                        item.echeance_pre_vrmt,
                        item.agence,
                        item.pre_ech_remb,
                        item.der_ech_remb,
                        item.as_avance,
                        item.est_reclation,
                        item.telephone,
                        item.trim_remb,
                        item.solde_avance,
                        item.est_nc,
                        item.code_bank,
                        item.code_agence,
                        item.rip,
                        item.cle_rib,
                        item.mappr,
                        item.est_suspendu,
                        item.created_at.split("T")[0],
                        item.updated_at.split("T")[0],
                        "<a href='#' class='btn-block' data-toggle='modal' data-target='#modal-lg-prod-"+item.id+"' type='button'>Details</a>"

                        ]).draw();
                    });

                    $('#loading-spinner').hide();


            }
            });


        }


    });
</script>

@endsection
