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
                        <h1 class="text-white">{{ count($trans) }}</h1>
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

@if (isset($trans))
        <div class="pb-20">
            <div class="pd-20">
                <h4 class="text-blue h4">Liste des pensionnaires</h4>
            </div>
            <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0"
                role="grid" aria-describedby="DataTables_Table_0_info">
                <thead class="bg-success">
                    <tr>
                        <th class="table-plus text-white">N° Dossier</th>
                        <th class="text-white">Date Creation</th>
                        <th class="text-white">Reception</th> 
                        <th class="text-white">Sortie</th>
                        <th class="text-white">Etat</th>
                        <th class="text-white">Observation</th>
                        <th class="text-white">Dead Line</th>
                        <th class="text-white"> Type de Doc</th>
                        <th class="datatable-nosort text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trans as $key => $tran)
                    @php
                        $current_date = \Carbon\Carbon::parse(\Carbon\Carbon::now());
                    @endphp
                    @if ($tran != null)
                        <tr>
                            <td class="">{{ $tran->doc->no_dossier}}</td>
                           
                            <td>{{ $tran->doc->created_at }}</td>
                            <td>{{ $tran->created_at }}</td>
                            @if ($tran->to->name == "SECRETARIAT")
                                <td></td>
                            @else
                                <td>{{ $tran->created_at }}</td>
                            @endif
                            <td><span class="badge badge-warning">{{$tran->from->name}} -> {{$tran->to->name}}</span></td>
                            <td>{{$current_date->diffInDays($tran->created_at )}}</td>
                            <td>1 jour</td>
                            
                            <td>{{ $tran->doc->type_doc }}</td>
                            @if ($tran->to->name == Auth::user()->dept->name)
                                <td>
                                    <a class="btn btn-success" href="{{ route('pension.details', $tran->doc->id) }}">Traitement <i
                                            class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                </td>
                            @else
                                <td>En attente</td>
                            @endif
                            {{-- <td>
                                <a class="btn btn-success" href="{{ route('pension.details', $tran->doc->id) }}">Traitement <i
                                        class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </td> --}}
                            
                            
                            
                        </tr>
                    @else
                        
                    @endif
                   
                        
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    @endif


@endsection
