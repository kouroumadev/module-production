@extends('welcome')

<style>
    a {
        text-decoration: none !important;
    }

    #card-header-recap-conj1 {
        margin-bottom: 10px;
    }

    #card-header-recap-conj2 {
        background-color: transparent !important;
        color: black;

    }
    a[href="#finish"],a[href="#finish"]:hover{
        background-color: transparent !important;
        display: none;
    }
</style>





@section('body')

    <div class="page-header shadow-lg">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>RECLAMATION</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('reclamation.index') }}">Reclamation</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('avance.pension') }}">Avance Sur Pension</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{-- @if (isset($type_pension))
                                {{ $type_pension }}
                            @else --}}
                                Info Pensionné(e)
                            {{-- @endif --}}

                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <hr>
    @php
        //dd($emp_app);
    @endphp

    @if($emp_app)
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
                                
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
            <div class="card-box height-100-p overflow-hidden">
                <div class="profile-tab height-100-p">
                    <div class="tab height-100-p">
                        
                        <div class="tab-content">
                            <div class="row card-box mb-30 p-2 shadow-lg">
                                <div class="col-md-6">
                                   <div>
                                        <span class="text-left font-weight-bold font-14">No PENSIONNE</span>
                                        <span class="float-right font-weight-bold font-12">01-45678</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Prenoms</span>
                                        <span class="float-right font-12">Ibrahima</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Nom</span>
                                        <span class="float-right font-12 text-danger">Diane</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Sexe</span>
                                        <span class="float-right font-12">M</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Assignation</span>
                                        <span class="float-right font-12"></span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Date de naissance</span>
                                        <span class="float-right font-12"></span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Profession</span>
                                        <span class="float-right font-12"></span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Dernier Employeur</span>
                                        <span class="float-right font-12"></span>
                                   </div>
                            
                                </div>
                            
                                {{-- <div class="col-md-6">
                                    <div>
                                        <span class="text-left font-weight-bold font-14">Date de premiere embauche</span>
                                        <span class="float-right font-12">{{ $data->profession }}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Date de premiere embauche</span>
                                        <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->first_job_date)->format('d-m-Y') }}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Date de mise a la retraite</span>
                                        <span class="float-right font-12 text-danger">{{ \Carbon\Carbon::parse($data->end_job_date)->format('d-m-Y') }}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Date de depart de la pension (date de jouissance)</span>
                                        <span class="float-right font-12 text-primary">{{ \Carbon\Carbon::parse($data->end_job_date)->addMonths()->format('d-m-Y') }}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">NoAssure Sociale</span>
                                        <span class="float-right font-12">{{ $data->employee->no_ima_employee }}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Situation Matrimoniale</span>
                                        <span class="float-right font-12">{{ $data->employee->situation_matri_employee }}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Age</span>
                                        <span class="float-right font-12">{{ $data->age }} ans</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Annuite globale</span>
                                        <span class="float-right font-12 text-danger">{{ $data->annuite }}</span>
                                   </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
   
    
   
    @endsection