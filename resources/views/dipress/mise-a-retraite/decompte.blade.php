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
                    <li class="breadcrumb-item"><a href="#">Etude de dossier</a></li>
                    <li class="breadcrumb-item"><a href="#"></a>Mise a la retraite</li>
                    <li class="breadcrumb-item active" aria-current="page">Decompte Pensionne</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row py-2 shadow-lg">
    <div class="col-md-6">
       <div>
            <span class="text-left font-weight-bold font-14">No PENSIONNE</span>
            <span class="float-right font-weight-bold font-12">{{ $data->no_pensionne }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Prenoms</span>
            <span class="float-right font-12">{{ $data->employee->prenom_employee }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Droits</span>
            <span class="float-right font-12 text-danger">. {{ $data->pension_type }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Sexe</span>
            <span class="float-right font-12">{{ $data->sexe }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Assignation</span>
            <span class="float-right font-12">{{ DB::table('prefecture')->where('code',$data->assign_pref_id)->value('libelle') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Date de naissance</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->employee->date_naissance_employee)->format('d-m-Y') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Profession</span>
            <span class="float-right font-12">{{ $data->profession }} </span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Dernier Employeur</span>
            <span class="float-right font-12">{{ $data->employee->employer->no_employer }}-{{ $data->employee->employer->raison_sociale }}</span>
       </div>

    </div>

    <div class="col-md-6">
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
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->end_job_date)->addMonths()->format('d-m-Y') }}</span>
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
            <span class="float-right font-12">{{ $data->age }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Annuite globale</span>
            <span class="float-right font-12 text-danger">{{ $data->annuite }}</span>
       </div>
    </div>
</div>

@endsection
