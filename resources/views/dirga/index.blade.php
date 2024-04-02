@extends('welcome')

@section('body')

<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>ETUDE DE DOSSIER DIRGA</h4>
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
                        <th class="text-white">Creation</th>
                        <th class="text-white">Rec</th> 
                        {{-- <th class="text-white">Sortie</th> --}}
                        <th class="text-white">Etat Precedent</th>
                        <th class="text-white">Obs</th>
                        <th class="text-white">DeadLine</th>
                        <th class="text-white">Doc</th>
                        <th class="datatable-nosort text-white">Act</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trans as $key => $tran)
                    @php
                        $current_date = \Carbon\Carbon::parse(\Carbon\Carbon::now());
                        $deadline = \App\Models\Deadline::where('dept_id',Auth::user()->dept_id)->get();
                        $dead_name = $deadline[0]->name;
                    @endphp
                    @if ($tran != null)
                        <tr>
                            <td class="">{{ $tran->doc->no_dossier}}</td>
                           
                            <td>{{ \Carbon\Carbon::parse($tran->doc->created_at)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($tran->created_at)->format('d/m/Y') }}</td>
                            {{-- @if ($tran->to->name == "SECRETARIAT")
                                <td></td>
                            @else
                                <td>{{ \Carbon\Carbon::parse($tran->created_at)->format('d/m/Y') }}</td>
                            @endif --}}
                            <td><span class="badge badge-warning">{{$tran->from->name}} -> {{$tran->to->name}}</span></td>
                            @if ($current_date->diffInDays($tran->created_at) <= (int)$dead_name)
                                <td >
                                    {{$current_date->diffInDays($tran->created_at)}} <span class="badge " style=" text-align:center; background-color:green"> à temps</span> 
                                </td>
                            @else
                        
                                <td >
                                    {{$current_date->diffInDays($tran->created_at)}} <span class="badge " style="background-color: rgb(229, 67, 42); text-align:center"> En retard <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span></span> 
                                </td>
                            @endif                            
                            <td>{{$dead_name}} Jour(s)</td>
                            
                            <td>{{ $tran->doc->type_doc }}</td>
                            @if ($tran->to->name == Auth::user()->dept->name)
                                <td>
                                    <a class="btn btn-success" href="{{ route('pension.details', $tran->doc->id) }}">Traitement <i
                                            class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                </td>
                            @else
                                <td>En attente</td>
                            @endif
                            
                            
                            
                            
                        </tr>
                    @else
                        
                    @endif
                   
                        
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    @endif


@endsection
