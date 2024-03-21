@extends('welcome')

@section('body')
@php
   $employee = \App\Models\Employee::where('no_ima_employee',$emp->employee->no_ima_employee )->get();
   $employeur = \App\Models\Employer::find($employee[0]->employer_id);
   //$deposant = \App\Models\Employer::find($employee[0]->employer_id);
   //dd($employee[0]->wifes);
@endphp
<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>PRESTATIONS</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('prestation.index') }}">Prestations</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('pension.show') }}">Liste des Pensions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Details du Pensionnaire</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="min-height-200px">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-eye"></i></a>
                            {{-- <img src="{{ asset('theme/vendors/images/photo1.jpg') }}" alt="" class="avatar-photo"> --}}
                            <img src="{{ asset('storage/pensionnaireImg/'.$emp->employee->photo) }}" class="avatar-photo" alt="">

                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <div class="img-container">
                                                <img id="image" src="{{ asset('storage/pensionnaireImg/'.$emp->employee->photo) }}" alt="Picture">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            {{-- <input type="submit" value="Update" class="btn btn-primary"> --}}
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center h5 mb-0">{{ $emp->employee->prenom_employee }} <span class="text-uppercase">{{ $emp->employee->nom_employee }}</span></h5>
                        {{-- <p class="text-center text-muted font-14">Lorem ipsum dolor sit amet</p> --}}
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue text-center">Infos Personnelles</h5>
                            <ul>
                                <li>
                                    <span>N° Immatriculation:</span> {{ $emp->employee->no_ima_employee }}
                                </li>
                                <li>
                                    <span>Numero de Telephone:</span> {{ $emp->employee->tel_employee }}
                                </li>
                                <li>
                                    <span>Date de Naissance:</span> {{ $emp->employee->date_naissance_employee }}
                                </li>
                                <li>
                                    <span>Lieu de Naissance:</span> {{ $emp->employee->lieu_naissance_employee }}
                                </li>
                                <li>
                                    <span>Prefecture:</span> {{ $emp->employee->prefecture_employee }}
                                </li>
                                <li>
                                    <span>Situation Matrimoniale:</span> {{ $emp->employee->situation_matri_employee }}
                                </li>
                                <li>
                                    <span>Adresse:</span> {{ $emp->employee->adresse_employee }}
                                </li>
                            </ul>
                        </div>



                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Employeur</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#deposant" role="tab">Deposant</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Conjoints et Enfants</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Documents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#end" role="tab">Transmission</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- employeur -->
                                    <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                        <div class="profile-setting">
                                            <form>
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        {{-- <h4 class="text-blue h5 mb-20">Edit Your Personal Setting</h4> --}}
                                                        <div class="form-group">
                                                            <label>N° Employeur</label>
                                                            <input class="form-control form-control-lg" value="{{ $employeur->no_employer }}" type="text" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Categorie</label>
                                                            <input class="form-control form-control-lg" value="{{ $employeur->category}}" type="email" readonly>
                                                        </div>
                                                    </li>
                                                    <li class="weight-500 col-md-6">
                                                        {{-- <h4 class="text-blue h5 mb-20">Edit Social Media links</h4> --}}
                                                        <div class="form-group">
                                                            <label>Raison Sociale</label>
                                                            <input class="form-control form-control-lg" value="{{ $employeur->raison_sociale }}" type="text" readonly>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- employeur Tab End -->
                                    <!-- deposant -->
                                    <div class="tab-pane fade" id="deposant" role="tabpanel">
                                        <div class="profile-setting">
                                            <form>
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        {{-- <h4 class="text-blue h5 mb-20">Edit Your Personal Setting</h4> --}}
                                                        <div class="form-group">
                                                            <label>Nom</label>
                                                            <input class="form-control form-control-lg" value="{{ $employee[0]->deposants[0]->nom_deposant}}" type="text" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>N° Telephone</label>
                                                            <input class="form-control form-control-lg" value="{{ $employee[0]->deposants[0]->telephone_deposant }}" type="email" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Adresse</label>
                                                            <input class="form-control form-control-lg" value="{{ $employee[0]->deposants[0]->adresse_deposant}}" type="email" readonly>
                                                        </div>
                                                    </li>
                                                    <li class="weight-500 col-md-6">
                                                        {{-- <h4 class="text-blue h5 mb-20">Edit Social Media links</h4> --}}
                                                        <div class="form-group">
                                                            <label>Prenom</label>
                                                            <input class="form-control form-control-lg" value="{{ $employee[0]->deposants[0]->prenom_deposant }}" type="text" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>CIN</label>
                                                            <input class="form-control form-control-lg" value="{{ $employee[0]->deposants[0]->cin_deposant }}" type="text" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Adresse Email</label>
                                                            <input class="form-control form-control-lg" value="{{ $employee[0]->deposants[0]->email_deposant }}" type="text" readonly>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- deposant Tab End -->
                                    <!-- wife and childs Tab start -->
                                    <div class="tab-pane fade" id="tasks" role="tabpanel">
                                        <div class="pd-20 profile-task-wrap">
                                            <div class="container pd-0">
                                                <div class="faq-wrap">
                                                    @foreach ($employee[0]->wifes as $key => $value)
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="btn btn-block" data-toggle="collapse" data-target="#faq1">
                                                                  Conjoint(e) {{ $key+1}} - {{ $value['nom_wife'] }} {{ $value['prenom_wife'] }}
                                                                </div>
                                                            </div>
                                                            <div id="faq1" class="collapse show" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Nom</th>
                                                                                <th scope="col">Prenom</th>
                                                                                <th scope="col">date de Naissance</th>
                                                                                <th scope="col">Lieu de Naissance</th>
                                                                                <th scope="col">Ordre de Naissance</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($value->enfants as $key => $enfant)
                                                                                @if (empty($enfant))
                                                                                    <td>Pas d'enfant</td>
                                                                                @else
                                                                                    <tr>
                                                                                        <th scope="row">{{ $key + 1 }}</th>
                                                                                        <td>{{ $enfant->nom_enfant }}</td>
                                                                                        <td>{{ $enfant->prenom_enfant }}</td>
                                                                                        <td>{{ $enfant->date_naissance_enfant }}</td>
                                                                                        <td>{{ $enfant->lieu_naissance_enfant }}</td>
                                                                                        <td>{{ $enfant->ordre_naissance_enfant }}</td>

                                                                                    </tr>
                                                                                @endif
                                                                            @endforeach


                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- wife and childs Tab End -->
                                    <!-- docs Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <div class="row p-2">
                                                <div class="col-md-12">
                                                    <table class="table table-bordered">
                                                        <thead class="bg-success">
                                                            <tr>
                                                                <th scope="col" class="text-white">#</th>
                                                                <th scope="col" class="text-white">Nom des Pièces fournis</th>
                                                                <th scope="col" class="text-white">Voir le Fichier</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($emp->data['paths'] as $key => $doc)
                                                                <tr>
                                                                    <th scope="row">{{ $key+1 }}</th>
                                                                    <th scope="row">{{ $emp->data['titles'][$key] }}</th>
                                                                    <th scope="row">
                                                                        <div class="col-md-12 col-sm-12 mb-30">
                                                                            <div class="pd-20 card-box height-100-p">
                                                                                {{-- <h5 class="h4">Large modal</h5> --}}
                                                                                <a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg{{ $key }}" type="button">
                                                                                    {{-- <img src="{{ asset('theme/vendors/images/modal-img1.jpg') }}" alt="modal"> --}}
                                                                                    <i class="fa fa-eye fa-2x" aria-hidden="true"></i>

                                                                                </a>
                                                                                <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h4 class="modal-title" id="myLargeModalLabel">{{ $emp->data['titles'][$key] }}</h4>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <iframe src="{{ asset('storage/docs/'.$emp->data['paths'][$key]) }}" width="100%" height="500">
                                                                                                    This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('storage/docs/'.$emp->data['paths'][$key]) }}">Download PDF</a>
                                                                                                </iframe>
                                                                                            </div>
                                                                                            {{-- <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                                            </div> --}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <iframe src="{{ asset('storage/docs/'.$emp->docs['0']->data['paths'][$i]) }}" width="50%" height="100%">
                                                                            This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('storage/docs/'.$emp->docs['0']->data['paths'][$i]) }}">Download PDF</a>
                                                                        </iframe> --}}
                                                                    </th>
                                                                    {{-- <th scope="row"><i class="fa fa-eye" aria-hidden="true"></i></th> --}}
                                                                </tr>
                                                                @endforeach
                                                                
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            {{-- @foreach ($emp->docs as $key => $value)
                                               {{ print_r($value->data['titles']) }}
                                            @endforeach --}}
                                        </div>
                                    </div>
                                    <!-- docs Tab End -->
                                    <!-- end Tab End -->
                                    <div class="tab-pane fade" id="end" role="tabpanel">
                                        <div class="profile-setting p-5">
                                            <form method="post" action="{{ route('transfert.store') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Selectionner le departement concerner</label>
                                                    <select name="to_dept" class="form-control" required>
                                                        <option value="">Selectionner</option>
                                                        @foreach ($depts as $dept)
                                                            <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Observation</label>
                                                    <textarea name="note" class="form-control" required></textarea>
                                                    <input type="hidden" name="employee_id" value="{{ $emp->employee->id }}">
                                                    <input type="hidden" name="type" value="{{ $emp->type_doc }}">
                                                    <input type="hidden" name="doc_id" value="{{ $emp->id }}">
                                                    @if (Auth::user()->dept->name == "DQE")
                                                     <input type="hidden" name="route" value="pension.index">
                                                    @elseif (Auth::user()->dept->name == "SECRETARIAT")
                                                        <input type="hidden" name="route" value="secretariat.index">
                                                    @elseif (Auth::user()->dept->name == "DIPRES")
                                                        Í<input type="hidden" name="route" value="etude.index">
                                                    @endif
                                                    
                                                </div>
                                                <button type="submit" class="btn btn-success">Transferer</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end Tab End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Profile</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <div class="img-container">
                                                <img id="image" src="vendors/images/photo2.jpg" alt="Picture">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" value="Update" class="btn btn-primary">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center h5 mb-0">Ross C. Lopez</h5>
                        <p class="text-center text-muted font-14">Lorem ipsum dolor sit amet</p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span> FerdinandMChilds@test.com
                                </li>
                                <li>
                                    <span>Phone Number:</span> 619-229-0054
                                </li>
                                <li>
                                    <span>Country:</span> America
                                </li>
                                <li>
                                    <span>Address:</span> 1807 Holden Street<br> San Diego, CA 92115
                                </li>
                            </ul>
                        </div>
                        <div class="profile-social">
                            <h5 class="mb-20 h5 text-blue">Social Links</h5>
                            <ul class="clearfix">
                                <li><a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i></a></li>
                            </ul>
                        </div>
                        <div class="profile-skills">
                            <h5 class="mb-20 h5 text-blue">Key Skills</h5>
                            <h6 class="mb-5 font-14">HTML</h6>
                            <div class="progress mb-20" style="height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-5 font-14">Css</h6>
                            <div class="progress mb-20" style="height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-5 font-14">jQuery</h6>
                            <div class="progress mb-20" style="height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-5 font-14">Bootstrap</h6>
                            <div class="progress mb-20" style="height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Timeline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Tasks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Settings</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Timeline Tab start -->
                                    <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="profile-timeline">
                                                <div class="timeline-month">
                                                    <h5>August, 2020</h5>
                                                </div>
                                                <div class="profile-timeline-list">
                                                    <ul>
                                                        <li>
                                                            <div class="date">12 Aug</div>
                                                            <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 Aug</div>
                                                            <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
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
                                    </div>
                                    <!-- Timeline Tab End -->
                                    <!-- Tasks Tab start -->
                                    <div class="tab-pane fade" id="tasks" role="tabpanel">
                                        <div class="pd-20 profile-task-wrap">
                                            <div class="container pd-0">
                                                <!-- Open Task start -->
                                                <div class="task-title row align-items-center">
                                                    <div class="col-md-8 col-sm-12">
                                                        <h5>Open Tasks (4 Left)</h5>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 text-right">
                                                        <a href="task-add" data-toggle="modal" data-target="#task-add" class="bg-light-blue btn text-blue weight-500"><i class="ion-plus-round"></i> Add</a>
                                                    </div>
                                                </div>
                                                <div class="profile-task-list pb-30">
                                                    <ul>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-1">
                                                                <label class="custom-control-label" for="task-1"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ea earum.
                                                            <div class="task-assign">Assigned to Ferdinand M.
                                                                <div class="due-date">due date <span>22 February 2019</span></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-2">
                                                                <label class="custom-control-label" for="task-2"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet.
                                                            <div class="task-assign">Assigned to Ferdinand M.
                                                                <div class="due-date">due date <span>22 February 2019</span></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-3">
                                                                <label class="custom-control-label" for="task-3"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            <div class="task-assign">Assigned to Ferdinand M.
                                                                <div class="due-date">due date <span>22 February 2019</span></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-4">
                                                                <label class="custom-control-label" for="task-4"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet. Id ea earum.
                                                            <div class="task-assign">Assigned to Ferdinand M.
                                                                <div class="due-date">due date <span>22 February 2019</span></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Open Task End -->
                                                <!-- Close Task start -->
                                                <div class="task-title row align-items-center">
                                                    <div class="col-md-12 col-sm-12">
                                                        <h5>Closed Tasks</h5>
                                                    </div>
                                                </div>
                                                <div class="profile-task-list close-tasks">
                                                    <ul>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-close-1" checked="" disabled="">
                                                                <label class="custom-control-label" for="task-close-1"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ea earum.
                                                            <div class="task-assign">Assigned to Ferdinand M.
                                                                <div class="due-date">due date <span>22 February 2018</span></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-close-2" checked="" disabled="">
                                                                <label class="custom-control-label" for="task-close-2"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet.
                                                            <div class="task-assign">Assigned to Ferdinand M.
                                                                <div class="due-date">due date <span>22 February 2018</span></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-close-3" checked="" disabled="">
                                                                <label class="custom-control-label" for="task-close-3"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            <div class="task-assign">Assigned to Ferdinand M.
                                                                <div class="due-date">due date <span>22 February 2018</span></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-close-4" checked="" disabled="">
                                                                <label class="custom-control-label" for="task-close-4"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet. Id ea earum.
                                                            <div class="task-assign">Assigned to Ferdinand M.
                                                                <div class="due-date">due date <span>22 February 2018</span></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Close Task start -->
                                                <!-- add task popup start -->
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
                                                                <div class="task-list-form">
                                                                    <ul>
                                                                        <li>
                                                                            <form>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Task Type</label>
                                                                                    <div class="col-md-8">
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Task Message</label>
                                                                                    <div class="col-md-8">
                                                                                        <textarea class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Assigned to</label>
                                                                                    <div class="col-md-8">
                                                                                        <select class="selectpicker form-control" data-style="btn-outline-primary" title="Not Chosen" multiple="" data-selected-text-format="count" data-count-selected-text="{0} people selected">
                                                                                            <option>Ferdinand M.</option>
                                                                                            <option>Don H. Rabon</option>
                                                                                            <option>Ann P. Harris</option>
                                                                                            <option>Katie D. Verdin</option>
                                                                                            <option>Christopher S. Fulghum</option>
                                                                                            <option>Matthew C. Porter</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row mb-0">
                                                                                    <label class="col-md-4">Due Date</label>
                                                                                    <div class="col-md-8">
                                                                                        <input type="text" class="form-control date-picker">
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;" class="remove-task" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove Task"><i class="ion-minus-circled"></i></a>
                                                                            <form>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Task Type</label>
                                                                                    <div class="col-md-8">
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Task Message</label>
                                                                                    <div class="col-md-8">
                                                                                        <textarea class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Assigned to</label>
                                                                                    <div class="col-md-8">
                                                                                        <select class="selectpicker form-control" data-style="btn-outline-primary" title="Not Chosen" multiple="" data-selected-text-format="count" data-count-selected-text="{0} people selected">
                                                                                            <option>Ferdinand M.</option>
                                                                                            <option>Don H. Rabon</option>
                                                                                            <option>Ann P. Harris</option>
                                                                                            <option>Katie D. Verdin</option>
                                                                                            <option>Christopher S. Fulghum</option>
                                                                                            <option>Matthew C. Porter</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row mb-0">
                                                                                    <label class="col-md-4">Due Date</label>
                                                                                    <div class="col-md-8">
                                                                                        <input type="text" class="form-control date-picker">
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="add-more-task">
                                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add Task"><i class="ion-plus-circled"></i> Add More Task</a>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary">Add</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- add task popup End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tasks Tab End -->
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <form>
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">Edit Your Personal Setting</h4>
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control form-control-lg" type="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date of birth</label>
                                                            <input class="form-control form-control-lg date-picker" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <div class="d-flex">
                                                                <div class="custom-control custom-radio mb-5 mr-20">
                                                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label weight-400" for="customRadio4">Male</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-5">
                                                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label weight-400" for="customRadio5">Female</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen">
                                                                <option>United States</option>
                                                                <option>India</option>
                                                                <option>United Kingdom</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>State/Province/Region</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Postal Code</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Visa Card Number</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Paypal ID</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1-1">
                                                                <label class="custom-control-label weight-400" for="customCheck1-1">I agree to receive notification emails</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <input type="submit" class="btn btn-primary" value="Update Information">
                                                        </div>
                                                    </li>
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">Edit Social Media links</h4>
                                                        <div class="form-group">
                                                            <label>Facebook URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Twitter URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Linkedin URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Instagram URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dribbble URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dropbox URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Google-plus URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pinterest URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Skype URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Vine URL:</label>
                                                            <input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <input type="submit" class="btn btn-primary" value="Save & Update">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Setting Tab End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div> --}}


@endsection
