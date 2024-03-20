@extends('welcome')

@section('body')

<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>ETUDE DE DOSSIER</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href={{ route('dashboard') }}>Acceuil</a></li>
                    {{-- <li class="breadcrumb-item" aria-current="page"><a href="{{ route('dipress.vieillesse') }}">Gestion des Assurances vieillesse</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">Secretariat</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<hr>
<div class="row">

    <div class="col-xl-4 mb-30">
        <a href="{{ route('dipress.pension.content') }}" class="btn btn-block">
            <div class="card-box height-100-p widget-style1 bg-warning shadow">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold text-left">
                        Dossier(s) en cours
                    </div>
                    <div class="progress-data">
                        <h1 class="text-white">{{ count($docs) }}</h1>
                    </div>
                    <small class="pl-1 text-white">Gestion de la situation des pensionnés</small>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 mb-30">
        <a href="#" class="btn btn-block">
            <div class="card-box height-100-p widget-style1 bg-success shadow-lg">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold text-left">
                        Dossier(s) Traites
                    </div>
                    <div class="progress-data">
                        <h1 class="text-white">0</h1>
                    </div>
                    <small class="pl-1 text-white">Gestion de la situation des pensionnés</small>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 mb-30">
        <a href="#" class="btn btn-block">
            <div class="card-box height-100-p widget-style1 bg-danger shadow-lg">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold text-left">
                        Dossier(s) Rejetes
                    </div>
                    <div class="progress-data">
                        <h1 class="text-white">0</h1>
                    </div>
                        <small class="pl-1 text-white">Gestion de la situation des pensionnés</small>
                </div>
            </div>
        </a>
    </div>

</div>
<hr>

@if (isset($docs))
        <div class="pb-20">
            <div class="pd-20">
                <h4 class="text-blue h4">Liste des pensionnaires</h4>
            </div>
            <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0"
                role="grid" aria-describedby="DataTables_Table_0_info">
                <thead class="bg-success">
                    <tr>
                        <th class="table-plus text-white">N° Dossier</th>
                        {{-- <th class="text-white">Prenom & Nom</th> --}}
                        {{-- <th class="text-white">Raison Sociale</th> --}}
                        <th class="text-white">Date Creation</th>
                        <th class="text-white">Etat</th>
                        <th class="text-white"> Type de Doc</th>
                        <th class="datatable-nosort text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docs as $key => $emp)
                    
                    <tr>
                        <td class="">{{ $emp->no_dossier}}</td>
                        {{-- <td class="">{{ $emp->employee->prenom_employee }} <span
                                class="text-uppercase">{{ $emp->employee->nom_employee }}</span></td> --}}
                        {{-- <td>{{ $emp->employer->raison_sociale }}</td> --}}
                        <td>{{ $emp->created_at }}</td>
                        @if ($emp->transfer_id == null)
                            <td><span class="badge badge-warning">En Cours...</span></td>
                        @else
                            @php
                                $from=\App\Models\Dept::where('id',$emp->transfers->from_dept)->get();
                                $to=\App\Models\Dept::where('id',$emp->transfers->to_dept)->get();
                                //dd($from[0]->name);
                            @endphp
                            <td><span class="badge badge-warning">{{$from[0]->name}} -> {{$to[0]->name}}</span></td> 
                        @endif
                        
                        {{-- <td>{{$emp->docs[0]->type_doc}}</td> --}}
                        <td>{{ $emp->type_doc }}</td>
                        @if ($emp->transfer_id != null && Auth::user()->dept->name == $to[0]->name)
                            <td>
                                <a class="btn btn-success" href="{{ route('pension.details', $emp->id) }}">Traitement <i
                                        class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </td>
                        @elseif ($emp->transfer_id == null && Auth::user()->dept->name == "DQE")
                            <td>
                                <a class="btn btn-success" href="{{ route('pension.details', $emp->id) }}">Traitement <i
                                        class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </td>
                        @else
                        <td>
                            <span>En attente</span>
                        </td>
                        @endif
                        
                    </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    @endif


@endsection
