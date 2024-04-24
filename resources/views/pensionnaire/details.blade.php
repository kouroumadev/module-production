@extends('welcome')

@section('body')
    @php
        $employee = \App\Models\Employee::where('no_ima_employee', $emp->employee->no_ima_employee)->get();
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
                                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i
                                        class="fa fa-eye"></i></a>
                                {{-- <img src="{{ asset('theme/vendors/images/photo1.jpg') }}" alt="" class="avatar-photo"> --}}
                                <img src="{{ asset('storage/pensionnaireImg/' . $emp->employee->photo) }}"
                                    class="avatar-photo" alt="">

                                <div class="modal fade" id="modal" tabindex="-1" role="dialog"
                                    aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body pd-5">
                                                <div class="img-container">
                                                    <img id="image"
                                                        src="{{ asset('storage/pensionnaireImg/' . $emp->employee->photo) }}"
                                                        alt="Picture">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                {{-- <input type="submit" value="Update" class="btn btn-primary"> --}}
                                                <button type="button" class="btn btn-success"
                                                    data-dismiss="modal">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="text-center h5 mb-0">{{ $emp->employee->prenom_employee }} <span
                                    class="text-uppercase">{{ $emp->employee->nom_employee }}</span></h5>
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
                                            <a class="nav-link active" data-toggle="tab" href="#timeline"
                                                role="tab">Employeur</a>
                                        </li>
                                        @if ($emp->type_doc == 'AT MORTEL' || $emp->type_doc == 'AT NON MORTEL')
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#accident"
                                                    role="tab">Accident Info</a>
                                            </li>
                                        @endif

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#deposant"
                                                role="tab">Deposant</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Conjoints et
                                                Enfants</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#setting"
                                                role="tab">Documents</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#end"
                                                role="tab">Transmission</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-- employeur -->
                                        <div class="tab-pane fade show" id="timeline" role="tabpanel">
                                            <div class="profile-setting">
                                                <form>
                                                    <ul class="profile-edit-list row">
                                                        <li class="weight-500 col-md-6">
                                                            {{-- <h4 class="text-blue h5 mb-20">Edit Your Personal Setting</h4> --}}
                                                            <div class="form-group">
                                                                <label>N° Employeur</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employeur->no_employer }}" type="text"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Categorie</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employeur->category }}" type="email"
                                                                    readonly>
                                                            </div>
                                                        </li>
                                                        <li class="weight-500 col-md-6">
                                                            {{-- <h4 class="text-blue h5 mb-20">Edit Social Media links</h4> --}}
                                                            <div class="form-group">
                                                                <label>Raison Sociale</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employeur->raison_sociale }}"
                                                                    type="text" readonly>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- employeur Tab End -->
                                        {{-- Accident Tab --}}
                                        @if ($emp->type_doc == 'AT MORTEL' || $emp->type_doc == 'AT NON MORTEL')
                                            @php
                                                $id = $emp->employee_id;
                                                $accident = \App\Models\Accident::where('employee_id', $id)->get();
                                                //dd($accident[0]->type_accident);
                                            @endphp
                                            <div class="tab-pane fade" id="accident" role="tabpanel">
                                                <div class="profile-setting">

                                                    <ul class="profile-edit-list row">
                                                        <li class="weight-500 col-md-6">
                                                            {{-- <h4 class="text-blue h5 mb-20">Edit Your Personal Setting</h4> --}}
                                                            <div class="form-group">
                                                                <label>Type Accident:</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $accident[0]->type_accident }}"
                                                                    type="text" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Date Accident:</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $accident[0]->date_accident }}"
                                                                    type="email" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Adresse</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->adresse_deposant }}"
                                                                    type="email" readonly>
                                                            </div>
                                                        </li>
                                                        <li class="weight-500 col-md-6">
                                                            {{-- <h4 class="text-blue h5 mb-20">Edit Social Media links</h4> --}}
                                                            <div class="form-group">
                                                                <label>Prenom</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->prenom_deposant }}"
                                                                    type="text" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>CIN</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->cin_deposant }}"
                                                                    type="text" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Adresse Email</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->email_deposant }}"
                                                                    type="text" readonly>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        @endif
                                        {{-- Accident tab end --}}
                                        <!-- deposant -->
                                        <div class="tab-pane fade" id="deposant" role="tabpanel">
                                            <div class="profile-setting">
                                                <form>
                                                    <ul class="profile-edit-list row">
                                                        <li class="weight-500 col-md-6">
                                                            {{-- <h4 class="text-blue h5 mb-20">Edit Your Personal Setting</h4> --}}
                                                            <div class="form-group">
                                                                <label>Nom</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->nom_deposant }}"
                                                                    type="text" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>N° Telephone</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->telephone_deposant }}"
                                                                    type="email" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Adresse</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->adresse_deposant }}"
                                                                    type="email" readonly>
                                                            </div>
                                                        </li>
                                                        <li class="weight-500 col-md-6">
                                                            {{-- <h4 class="text-blue h5 mb-20">Edit Social Media links</h4> --}}
                                                            <div class="form-group">
                                                                <label>Prenom</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->prenom_deposant }}"
                                                                    type="text" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>CIN</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->cin_deposant }}"
                                                                    type="text" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Adresse Email</label>
                                                                <input class="form-control form-control-lg"
                                                                    value="{{ $employee[0]->deposants[0]->email_deposant }}"
                                                                    type="text" readonly>
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
                                                                        <div class="btn btn-block" data-toggle="collapse"
                                                                            data-target="#faq1">
                                                                            Conjoint(e) {{ $key + 1 }} -
                                                                            {{ $value['nom_wife'] }}
                                                                            {{ $value['prenom_wife'] }}
                                                                        </div>
                                                                    </div>
                                                                    <div id="faq1" class="collapse show"
                                                                        data-parent="#accordion">
                                                                        <div class="card-body">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">#</th>
                                                                                        <th scope="col">Nom</th>
                                                                                        <th scope="col">Prenom</th>
                                                                                        <th scope="col">date de
                                                                                            Naissance</th>
                                                                                        <th scope="col">Lieu de
                                                                                            Naissance</th>
                                                                                        <th scope="col">Ordre de
                                                                                            Naissance</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($value->enfants as $key => $enfant)
                                                                                        @if (empty($enfant))
                                                                                            <td>Pas d'enfant</td>
                                                                                        @else
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    {{ $key + 1 }}
                                                                                                </th>
                                                                                                <td>{{ $enfant->nom_enfant }}
                                                                                                </td>
                                                                                                <td>{{ $enfant->prenom_enfant }}
                                                                                                </td>
                                                                                                <td>{{ $enfant->date_naissance_enfant }}
                                                                                                </td>
                                                                                                <td>{{ $enfant->lieu_naissance_enfant }}
                                                                                                </td>
                                                                                                <td>{{ $enfant->ordre_naissance_enfant }}
                                                                                                </td>

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
                                                                    <th scope="col" class="text-white">Nom des Pièces
                                                                        fournis</th>
                                                                    <th scope="col" class="text-white">Voir le Fichier
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($emp->data['paths'] as $key => $doc)
                                                                    <tr>
                                                                        <th scope="row">{{ $key + 1 }}</th>
                                                                        <th scope="row">
                                                                            {{ $emp->data['titles'][$key] }}</th>
                                                                        <th scope="row">
                                                                            <div class="col-md-12 col-sm-12 mb-30">
                                                                                <div class="pd-20 card-box height-100-p">
                                                                                    {{-- <h5 class="h4">Large modal</h5> --}}
                                                                                    <a href="#" class="btn-block"
                                                                                        data-toggle="modal"
                                                                                        data-target="#bd-example-modal-lg{{ $key }}"
                                                                                        type="button">
                                                                                        {{-- <img src="{{ asset('theme/vendors/images/modal-img1.jpg') }}" alt="modal"> --}}
                                                                                        <i class="fa fa-eye fa-2x"
                                                                                            aria-hidden="true"></i>

                                                                                    </a>
                                                                                    <div class="modal fade bs-example-modal-lg"
                                                                                        id="bd-example-modal-lg{{ $key }}"
                                                                                        tabindex="-1" role="dialog"
                                                                                        aria-labelledby="myLargeModalLabel"
                                                                                        aria-hidden="true">
                                                                                        <div
                                                                                            class="modal-dialog modal-lg modal-dialog-centered">
                                                                                            <div class="modal-content"
                                                                                                style="height:855px;">
                                                                                                <div class="modal-header">
                                                                                                    <h4 class="modal-title"
                                                                                                        id="myLargeModalLabel">
                                                                                                        {{ $emp->data['titles'][$key] }}
                                                                                                    </h4>
                                                                                                    <button type="button"
                                                                                                        class="close"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-hidden="true">×</button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <iframe
                                                                                                        src="{{ asset('storage/docs/' . $emp->data['paths'][$key]) }}"
                                                                                                        width="100%"
                                                                                                        height="100%">
                                                                                                        This browser does
                                                                                                        not support PDFs.
                                                                                                        Please download the
                                                                                                        PDF to view it: <a
                                                                                                            href="{{ asset('storage/docs/' . $emp->data['paths'][$key]) }}">Download
                                                                                                            PDF</a>
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
                                                                <option value="{{ $dept->id }}">{{ $dept->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Observation</label>
                                                        <textarea name="note" class="form-control" required></textarea>
                                                        <input type="hidden" name="employee_id"
                                                            value="{{ $emp->employee->id }}">
                                                        <input type="hidden" name="type"
                                                            value="{{ $emp->type_doc }}">
                                                        <input type="hidden" name="doc_id"
                                                            value="{{ $emp->id }}">
                                                        @if (Auth::user()->dept->name == 'DQE')
                                                            <input type="hidden" name="route" value="pension.index">
                                                        @elseif (Auth::user()->dept->name == 'SECRETARIAT')
                                                            <input type="hidden" name="route"
                                                                value="secretariat.index">
                                                        @elseif (Auth::user()->dept->name == 'DIPRES')
                                                            <input type="hidden" name="route" value="etude.index">
                                                        @elseif (Auth::user()->dept->name == 'DIRGA')
                                                            <input type="hidden" name="route" value="dirga.index">
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
@endsection
