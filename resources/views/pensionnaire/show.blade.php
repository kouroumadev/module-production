@extends('welcome')

@section('body')

<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>PRESTATIONS</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('prestation.index') }}">Prestations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Liste des Pensions</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table Simple</h4>
        @if (session('yes'))
            <div class="alert alert-success" role="alert">
                {{ session('yes') }}
            </div>
        @endif
        @if (session('no'))
            <div class="alert alert-danger" role="alert">
                {{ session('no') }}
            </div>
        @endif
    </div>
    <div class="pb-20">
        <table class="table stripe hover">
            <thead class="bg-success">
                <tr>
                    <th class="table-plus text-white">Immat.</th>
                    <th class="text-white">Prenom & Nom</th>
                    <th class="text-white">Raison Sociale</th>
                    <th class="text-white">Date Creation</th>
                    <th class="text-white">Etat</th>
                    <th class="text-white">Etape</th>
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
                        ?>
                        {{ $from_dept }} -> {{ $to_dept }}  <a href="task-add" data-toggle="modal" data-target="#task-add" class="bg-light-blue btn text-blue weight-500"><i class="fa fa-eye"></i> Details</a>

                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('pension.details',$emp->id) }}">Traitement <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
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
                                                    {{-- <div class="task-name"><i class="ion-ios-chatboxes"></i> {{ $to_dept }}</div> --}}

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
                                                    {{-- <div class="task-time">09:30 am</div> --}}
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
</div>



@endsection

