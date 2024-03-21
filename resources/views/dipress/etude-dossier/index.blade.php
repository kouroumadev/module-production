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
                    <li class="breadcrumb-item active" aria-current="page">Etude de dossier</li>
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

{{-- @if (isset($emps))
        <div class="pb-20">
            <div class="pd-20">
                <h4 class="text-blue h4">Liste des pensionnaires</h4>
            </div>
            <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0"
                role="grid" aria-describedby="DataTables_Table_0_info">
                <thead class="bg-success">
                    <tr>
                        <th class="table-plus text-white">Immat.</th>
                        <th class="text-white">Prenom & Nom</th>
                        <th class="text-white">Raison Sociale</th>
                        <th class="text-white">Date Creation</th>
                        <th class="text-white">Etat</th>
                        <th class="text-white">Doc</th>
                        <th class="datatable-nosort text-white">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($emps as $emp)
                        <tr>
                            <td class="">{{ $emp->no_ima_employee }}</td>
                            <td class="">{{ $emp->prenom_employee }} <span class="text-uppercase">{{ $emp->nom_employee }}</span></td>
                            <td>{{ $emp->employer->raison_sociale }}</td>
                            <td>{{ $emp->created_at }}</td>
                            <td>
                                @if ($emp->transfers['0']->status == '0')
                                    <span class="badge badge-success font-14">traite</span>
                                @else
                                    <span class="badge badge-warning">en cours..</span>
                                @endif
                            </td>
                            <td>
                                <?php
                                    $from_dept = DB::table('depts')->where('id',$emp->transfers['0']->from_dept)->value('name');
                                    $to_dept = DB::table('depts')->where('id',$emp->transfers['0']->to_dept)->value('name');
                                    // dd($from_dept);
                                ?>
                                {{ $from_dept }} -> {{ $to_dept }}  <a href="task-add" data-toggle="modal" data-target="#task-add" class="bg-light-blue btn text-blue weight-500"><i class="fa fa-eye"></i> Details</a>

                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('etude.traitement',$emp->id) }}">Traitement <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </td>

                            <div class="modal fade customscroll" id="task-add" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Tasks Add</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body pd-0">

                                            <div class="profile-timeline">
                                                <div class="timeline-month">
                                                    <h5>Dossier en cours de traitement</h5>
                                                </div>
                                                <div class="profile-timeline-list">
                                                    <ul>
                                                        <li>
                                                            <div class="date">{{ $from_dept }}</div>


                                                            <p>
                                                                <span class="font-weight-bold text-success"><i class="icon-copy ion-folder"></i> Recu de: <span class="task-time">{{ $emp->deposants['0']->prenom_deposant }} {{ $emp->deposants['0']->nom_deposant }}</span></span> <br>
                                                                <span class="font-weight-bold ml-2 text-success"><i class="ion-android-alarm-clock"></i> Date: <span class="task-time">{{ $emp->created_at->format('d M') }} {{ $emp->created_at->format('Y') }} à {{ $emp->created_at->format('H:i:s') }}</span></span>
                                                            </p>
                                                            <p>
                                                                <span class="font-weight-bold text-success"><i class="icon-copy ion-folder"></i> Transmi à: <span class="task-time">{{ $to_dept }}</span></span> <br>
                                                                <span class="font-weight-bold ml-2 text-success"><i class="ion-android-alarm-clock"></i> Date: <span class="task-time">{{ $emp->transfers['0']->created_at->format('d M') }} {{ $emp->transfers['0']->created_at->format('Y') }} à {{ $emp->transfers['0']->created_at->format('H:i:s') }}</span></span>
                                                            </p>
                                                            <p>
                                                                <span class="font-weight-bold text-success"><i class="ion-ios-chatboxes"></i> Observation: <span class="task-time">{{ $emp->transfers['0']->note }}</span></span> <br>
                                                            </p>

                                                        </li>
                                                        <li>
                                                            <div class="date">10 Aug</div>
                                                            <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 Aug</div>
                                                            <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="timeline-month">
                                                    <h5>July, 2020</h5>
                                                </div>
                                                <div class="profile-timeline-list">
                                                    <ul>
                                                        <li>
                                                            <div class="date">12 July</div>
                                                            <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 July</div>
                                                            <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="timeline-month">
                                                    <h5>June, 2020</h5>
                                                </div>
                                                <div class="profile-timeline-list">
                                                    <ul>
                                                        <li>
                                                            <div class="date">12 June</div>
                                                            <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 June</div>
                                                            <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 June</div>
                                                            <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Add</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endif --}}

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
                    @foreach ($trans as $tran)
                    @php
                        $current_date = \Carbon\Carbon::parse(\Carbon\Carbon::now());
                    @endphp

                    @if ($tran != null)
                        
                    
                    <tr>
                        <td class="">{{ $tran->doc->no_dossier}}</td>
                        {{-- <td class="">{{ $emp->employee->prenom_employee }} <span
                                class="text-uppercase">{{ $emp->employee->nom_employee }}</span></td> --}}
                        {{-- <td>{{ $emp->employer->raison_sociale }}</td> --}}
                        {{-- <td>{{ \Carbon\Carbon::parse($tran->created_at)->format('d/m/Y') }}</td> --}}
                        <td>{{  \Carbon\Carbon::parse($tran->doc->created_at)->format('d/m/Y') }}</td>
                        <td>{{  \Carbon\Carbon::parse($tran->created_at )->format('d/m/Y')}}</td>
                        @if ($tran->to->name == "DIPRES")
                            <td></td>
                        @else
                            <td>{{ $tran->created_at }}</td>
                        @endif
                        
                        <td><span class="badge badge-warning">{{$tran->from->name}} -> {{$tran->to->name}}</span></td>
                        <td>{{$current_date->diffInDays($tran->created_at )}}</td>
                        <td>1 jour</td>
                        <td>{{ $tran->doc->type_doc }}</td>
                        {{-- <td>
                            <a class="btn btn-success" href="{{ route('pension.details', $tran->doc->id) }}">Traitement <i
                                    class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                        </td> --}}
                        {{-- @if ($tran->transfer_id == null)
                            <td><span class="badge badge-warning">En Cours...</span></td>
                        @else
                            <td><span class="badge badge-warning">{{$tran->from->name}} -> {{$tran->to->name}}</span></td>
                        @endif --}}

                        {{-- <td>{{$emp->docs[0]->type_doc}}</td> --}}
                        {{-- <td>{{ $tran->doc->type_doc }}</td> --}}

                        @if (count($tran->employee->mise_retraites)>0)
                            <td>
                                <span class="badge badge-pill badge-primary">Déja traité</span>
                            </td>
                        @else
                            <td>
                                <a class="btn btn-success" href="{{ route('etude.traitement',$tran->employee->id) }}">Traitement <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </td>
                        @endif

                        {{-- @if ($emp->transfer_id != null && Auth::user()->dept->name == $to[0]->name)
                            <td>
                                <a class="btn btn-success" href="{{  route('etude.traitement',$emp->employee->id)  }}">Traitement <i
                                        class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </td>
                        @elseif ($emp->transfer_id == null && Auth::user()->dept->name == "DQE")
                            <td>
                                <a class="btn btn-success" href="{{ route('etude.traitement',$emp->employee->id) }}">Traitement <i
                                        class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </td>
                        @else
                        <td>
                            <span>En attente</span>
                        </td>
                        @endif --}}

                    </tr>
                    @else
                        
                    @endif
                    @endforeach

                </tbody>
            </table>
        </div>
    @endif


@endsection
