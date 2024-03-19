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
                    <li class="breadcrumb-item"><a href="{{ route('miseRetaite.decompte.suite', $data->id) }}"></a>Suite Decompte Pensionne</li>
                    <li class="breadcrumb-item active" aria-current="page">Fin Decompte Pensionne</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<h5 class="text-center text-success">OPERATION REUSSIE: CET ASSURE EST MAINTENANT PENSIONNE: RETRAITE</h5>
<div class="text-center mt-2">
    <img class="img-thumbnail" style="width: 150px; height: 150px;" id="image" src="{{ asset('storage/pensionnaireImg/'.$data->employee->photo) }}" alt="Picture">
</div>


<div class="row mt-2 card-box mb-30 p-2 shadow-lg">
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
            <span class="text-left font-weight-bold font-14">NATURE PENSION</span>
            <span class="float-right font-weight-bold text-success font-12">{{ $data->employee->type_pension }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Sexe</span>
            <span class="float-right font-12">{{ $data->sexe }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Prefecture de naissance</span>
            <span class="float-right font-12">{{ DB::table('prefecture')->where('code',$data->prefecture_id)->value('code') }}-{{ DB::table('prefecture')->where('code',$data->prefecture_id)->value('libelle') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Categorie socioprefessionnelle</span>
            <span class="float-right font-12">{{ $data->socio_profess }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Date de naissance</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->employee->date_naissance_employee)->format('d-m-Y') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Nationalite</span>
            <span class="float-right font-12">{{ $data->employee->nationalite }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Prenom du pere</span>
            <span class="float-right font-12">{{ $data->employee->prenom_pere }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Prenom du mere</span>
            <span class="float-right font-12">{{ $data->employee->prenom_mere }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Profession</span>
            <span class="float-right font-12">{{ $data->employee->profession }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Date etablissement CIN</span>
            <span class="float-right font-12">{{ $data->employee->date_etabl_cin }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Email</span>
            <span class="float-right font-12">{{ $data->employee->email_employee }}</span>
       </div>

    </div>

    <div class="col-md-6">
       <div>
            <span class="text-left font-weight-bold font-14">NoASSURE SOCIAL</span>
            <span class="float-right font-12">{{ $data->employee->no_ima_employee }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Nom</span>
            <span class="float-right font-12">{{ $data->employee->nom_employee }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">STATUT</span>
            <span class="float-right font-weight-bold text-danger font-12">INACTIF</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Situation Matrimoniale</span>
            <span class="float-right font-12">{{ $data->employee->situation_matri_employee }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Agence</span>
            <span class="float-right font-12">{{ $data->employee->agencecode_id }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Assignation</span>
            <span class="float-right font-12">{{ DB::table('prefecture')->where('code',$data->assign_pref_id)->value('code') }}-{{ DB::table('prefecture')->where('code',$data->assign_pref_id)->value('libelle') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Lieu de naissance</span>
            <span class="float-right font-12">{{ $data->employee->lieu_naissance_employee }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Pays</span>
            <span class="float-right font-12">{{ $data->employee->pays_id }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Nom pere</span>
            <span class="float-right font-12">{{ $data->employee->nom_pere }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Nom mere</span>
            <span class="float-right font-12">{{ $data->employee->nom_mere }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">NoCNI</span>
            <span class="float-right font-12">{{ $data->employee->no_cin }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Lieu etablissement CIN</span>
            <span class="float-right font-12">{{ $data->employee->lieu_etab_cin }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Telephone</span>
            <span class="float-right font-12">{{ $data->employee->tel_employee }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Dernière adresse</span>
            <span class="float-right font-12">{{ $data->employee->adresse_employee }}</span>
       </div>

    </div>
</div>

<div class="row mt-2 card-box mb-30 p-2 shadow-lg">
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">Date Immatriculation en Pension</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->employee->created_at)->format('d-m-Y') }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Date de première embauche</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->first_job_date)->format('d-m-Y') }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Annuite globale:</span>
            <span class="float-right font-weight-bold text-success font-12">{{ $data->annuite }} ans</span>
        </div>
    </div>
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">Date Immatriculation en Cotisation</span>
            <span class="float-right font-12"></span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Date Immatriculation en Cotisation</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->end_job_date)->format('d-m-Y') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Taux acquis</span>
            <span class="float-right font-12"></span>
       </div>
    </div>
</div>

<div class="row mt-2 card-box mb-30 p-2 shadow-lg">
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">Etat du dossier</span>
            <span class="float-right font-12 text-success">10-IMMATRUCULÉ, BON A FAIRE DECOMPTE</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Date de dépot du dossier</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Date de première jouisssance</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->end_job_date)->addMonths()->format('d/m/Y') }}</span>
        </div>
    </div>
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">NoDossier</span>
            <span class="float-right font-12">{{ $data->employee->no_dossier }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Date validation du dossier</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Service actuel:</span>
            <span class="float-right font-weight-bold text-success font-12">SERVICE PENSION</span>
       </div>
    </div>
</div>











<div class="footer-wrap pd-20 mb-20 card-box justify-content-lg-end">
    <div class="col-md-4 justify-content-end">
        <a href="{{ route('miseRetaite.decompte.done', $data->id) }}" class="btn btn-success text-white">Terminer <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</div>



@endsection
