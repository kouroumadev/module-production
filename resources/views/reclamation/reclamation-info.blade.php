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
        //dd($emp_app[0]->employer);
    @endphp

    
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
            <div class="pd-20 card-box height-100-p">
                <div class="profile-photo">
                    <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                    @if (sizeof($emp_app) == 0)
                    <img src="{{ public_path('b.jpg') }}" alt="" width="200" height="200" class="avatar-photo">

                    @else
                    <img src="{{ asset('storage/pensionnaireImg/'.$emp_app[0]->photo) }}" alt="" width="200" height="200" class="avatar-photo">

                    @endif
                    {{-- <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body pd-5">
                                    <div class="img-container">
                                        <img id="image" src="{{ asset('storage/pensionnaireImg/'.$emp_app[0]->photo) }}" alt="Picture">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div> --}}
                </div>
            
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
            <div class="card-box height-100-p overflow-hidden">
                <div class="profile-tab height-100-p">
                    <div class="tab height-100-p">
                        
                        <div class="tab-content">
                            <div class="row card-box mb-30 p-2 shadow-lg">
                                <div class="col-md-8">
                                   <div>
                                        <span class="text-left font-weight-bold font-14">No PENSIONNE</span>
                                        <span class="float-right font-weight-bold font-12">{{$pensionne[0]->no_pensionne}}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Prenoms</span>
                                        <span class="float-right font-12">{{$pensionne[0]->prenoms}}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Nom</span>
                                        <span class="float-right font-12 text-danger">{{$pensionne[0]->nom}}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Sexe</span>
                                        <span class="float-right font-12">{{$pensionne[0]->sexe}}</span>
                                   </div>
                                   <div>
                                    
                                        <span class="text-left font-weight-bold font-14">Agence</span>
                                        <span class="float-right font-12">{{ DB::connection('metier')->table('agence')->where('id',$pensionne[0]->agence_id)->value('libelle') }}</span>
                                    
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Date de naissance</span>
                                        <span class="float-right font-12">{{ \Carbon\Carbon::parse($pensionne[0]->date_naissance)->format('d-m-Y') }}</span>
                                   </div>
                                   <div>
                                        <span class="text-left font-weight-bold font-14">Profession</span>
                                        <span class="float-right font-12"></span>
                                   </div>
                                   <div>
                                        
                                        @if (sizeof($emp_app) == 0)
                                            <span class="text-left font-weight-bold font-14">Dernier Employeur</span>
                                            <span class="float-right font-12">{{ DB::connection('metier')->table('employeur')->where('no_employeur',$pensionne[0]->no_employeur)->value('raison_sociale') }}</span>
                                        @else
                                            <span class="text-left font-weight-bold font-14">Dernier Employeur</span>
                                            <span class="float-right font-12">{{$emp_app[0]->employer->raison_sociale}}</span> 
                                        @endif
                                        
                                   </div>
                            
                                </div>
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-center"> HISTORIQUE DE PAIEMENT</h3>
    <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0"
    role="grid" aria-describedby="DataTables_Table_0_info">
    <thead class="bg-success">
        <tr>
            <th class="table-plus text-white">Echeance</th>
            <th class="text-white">Annee</th>
            <th class="text-white">Montant Paye</th>
            <th class="text-white">Date Paiement</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </tbody>
</table>
    @endsection