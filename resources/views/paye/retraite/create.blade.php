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
                        <li class="breadcrumb-item active" aria-current="page"> ECHEANCE - {{ $echeance->mois }} {{ $echeance->annee }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-success" data-toggle="modal" data-target="#small-modal-retraite">Charger le fichier <i class="fa fa-upload" aria-hidden="true"></i></button>

                        <div class="modal fade" id="small-modal-retraite" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Chargement du fichier</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="send_retraite_form" class="dropzone" method="post" action="{{ route('payeRetraite.preview') }}" id="my-awesome-dropzone" enctype='multipart/form-data'>
                                            @csrf
                                            <div class="fallback">
                                                <input type="file" name="file" accept=".xls, .xlsx, .csv" />
                                                <input type="hidden" name="echeance_id" value="{{ $echeance->id }}" />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="send_retraite" onclick="sendForm()" type="button" class="btn btn-success" data-dismiss="modal">Charger</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @isset($data)
                    <div class="col-md-6">

                        <form action="{{ route('payeRetraite.store') }}" method="POST">
                            @csrf
                            @php
                                $fdata = serialize($data);
                            @endphp
                            <input type="hidden" name="data" value="{{ $fdata }}">
                            {{-- @foreach ($data as $dd)
                                <input type="hidden" name="data[]" value=". {{ $dd }}. ">
                            @endforeach --}}
                            <input type="hidden" name="echeance_id" value="{{ $echeance->id }}">
                            <button type="submit" class="btn btn-success" >Valider <i class="fa fa-check" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    @endisset

                </div>
            </div>
        </div>
    </div>


    <div class="pb-20 mb-3">
        <div class="pd-20">
            <h4 class="text-blue h4">Liste des pensionnaires</h4>
        </div>
        <table id="exampleRetraite" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-success">
                <tr>
                {{-- <th class="table-plus text-white">#</th> --}}
                <th class="text-white font-12">Num Pension</th>
                <th class="text-white font-12">Titre</th>
                <th class="text-white font-12">Prénoms</th>
                <th class="text-white font-12">Nom</th>
                <th class="text-white font-12">Date Naiss</th>
                <th class="text-white font-12">Date Jouiss</th>
                <th class="text-white font-12">Type</th>
                <th class="text-white font-12">Société Orig</th>
                <th class="text-white font-12">Mont Trim</th>
                <th class="text-white font-12">Trim du</th>
                <th class="text-white font-12">Mont Arriéré</th>
                {{-- <th class="text-white font-12">Mont Trim Reval</th> --}}
                <th class="text-white font-12">Mont Mens Reval</th>
                <th class="text-white font-12">Montant Paye</th>
                <th class="text-white font-12">AF</th>
                <th class="text-white font-12">Mont Comp</th>
                <th class="text-white font-12">Assignation</th>
                <th class="text-white font-12">Assignation 1</th>
                <th class="text-white font-12">Agence</th>
                <th class="text-white font-12">Téléphone</th>
                <th class="text-white font-12">Observation</th>
                </tr>
            </thead>
            @isset($data)
                <tbody>
                    @foreach ($data[0] as $d)
                    <tr>
                        <td class="font-12">{{ $d['n_de_pension'] }}</td>
                        <td class="font-12">{{ $d['titre'] }}</td>
                        <td class="font-12">{{ $d['prenoms'] }}</td>
                        <td class="font-10">{{ $d['noms'] }}</td>
                        <td class="font-12">{{ $d['date_de_naiss'] }}</td>
                        <td class="font-12">{{ $d['date_de_jouissanc'] }}</td>
                        <td class="font-12">{{ $d['type'] }}</td>
                        <td class="font-12">{{ $d['societes_dorigine'] }}</td>
                        <td class="font-12">{{ $d['montant_trimest'] }} GNF</td>
                        <td class="font-12">{{ $d['trim_du'] }}</td>
                        <td class="font-12">{{ $d['montant_arr'] }}</td>
                        {{-- <td class="font-12">{{ $d['montant_trim_reval'] }}</td> --}}
                        <td class="font-12">{{ $d['montant_mensuel_reval'] }}</td>
                        <td class="font-12">{{ $d['montant_a_payer'] }}</td>
                        <td class="font-12">{{ $d['montant_des_allocat'] }}</td>
                        <td class="font-12">{{ $d['pension_complemen_taire'] }}</td>
                        <td class="font-12">{{ $d['assign'] }}</td>
                        <td class="font-12">{{ $d['assignat_1'] }}</td>
                        <td class="font-12">{{ $d['agence'] }}</td>
                        <td class="font-12">{{ $d['numero_de_telephone'] }}</td>
                        <td class="font-12">{{ $d['observation'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            @endisset
        </table>
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

<script>
    $(document).ready(function() {
        var table = $('#exampleRetraite').DataTable({
            searching: true,
            paging: true,
            pageLength: 10,
        });
    });
</script>

<script>
    function sendForm(){
        $("#send_retraite_form").submit();
    }
</script>


@endsection
