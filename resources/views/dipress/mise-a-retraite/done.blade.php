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
                    <li class="breadcrumb-item"><a href="{{ route('miseRetaite.decompte.suite', $data->miseRetraite->id) }}">Suite Decompte Pensionne</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Fin Decompte Pensionne</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<h5 class="text-center text-success">DECOMPTE VALIDE DE: {{ $data->miseRetraite->no_pensionne }}-{{ $data->employee->prenom_employee }} {{ $data->employee->nom_employee }}</h5>
<div class="text-center mt-2">
    <img class="img-thumbnail" style="width: 150px; height: 150px;" id="image" src="{{ asset('storage/pensionnaireImg/'.$data->employee->photo) }}" alt="Picture">
</div>


<div class="row mt-2 card-box mb-30 p-2 shadow-lg">
    <div class="col-md-6">
       <div>
            <span class="text-left font-weight-bold font-14">No PENSIONNE</span>
            <span class="float-right font-weight-bold font-12">{{ $data->miseRetraite->no_pensionne }}</span>
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
            <span class="float-right font-12">{{ $data->miseRetraite->sexe }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Prefecture de naissance</span>
            <span class="float-right font-12">{{ DB::table('prefecture')->where('code',$data->miseRetraite->prefecture_id)->value('code') }}-{{ DB::table('prefecture')->where('code',$data->miseRetraite->prefecture_id)->value('libelle') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Categorie socioprefessionnelle</span>
            <span class="float-right font-12">{{ $data->miseRetraite->socio_profess }}</span>
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
            <span class="float-right font-12">{{ DB::table('prefecture')->where('code',$data->miseRetraite->assign_pref_id)->value('code') }}-{{ DB::table('prefecture')->where('code',$data->miseRetraite->assign_pref_id)->value('libelle') }}</span>
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
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->miseRetraite->first_job_date)->format('d-m-Y') }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Annuite globale:</span>
            <span class="float-right font-weight-bold text-success font-12">{{ $data->miseRetraite->annuite }} ans</span>
        </div>
    </div>
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">Date Immatriculation en Cotisation</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->employee->date_imma)->format('d-m-Y') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Date de cessation activites</span>
            <span class="float-right font-weight-bold text-danger font-12">{{ \Carbon\Carbon::parse($data->miseRetraite->end_job_date)->format('d-m-Y') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Taux acquis</span>
            <span class="float-right font-12">{{ (int)$data->miseRetraite->annuite*2 }} %</span>
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
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->miseRetraite->created_at)->format('d/m/Y') }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Date de première jouisssance</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->miseRetraite->end_job_date)->addMonths()->format('d/m/Y') }}</span>
        </div>
    </div>
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">NoDossier</span>
            <span class="float-right font-12">{{ $data->employee->no_dossier }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Date validation du dossier</span>
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->miseRetraite->created_at)->format('d/m/Y') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Service actuel:</span>
            <span class="float-right font-weight-bold text-success font-12">SERVICE PENSION</span>
       </div>
    </div>
</div>

<div class="row mt-2 card-box mb-30 p-2 shadow-lg">
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">Date de première jouissance</span>
            <span class="float-right font-12 font-weight-bold text-danger">{{ \Carbon\Carbon::parse($data->miseRetraite->end_job_date)->addMonths()->format('d/m/Y') }}</span>
        </div>
        <hr>
        <div>
            <span class="text-left font-weight-bold font-14">Salaire Moyen Mensuel</span>
            <span class="float-right font-12 font-weight-bold">{{ $data->sal_moy_mens }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Montant Mensuel Pension</span>
            <span class="float-right font-12 font-weight-bold text-success">{{ $data->mont_mens_pens }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">PENSION TRIMESTRIELLE</span>
            <span class="float-right font-12 font-weight-bold text-success">{{ $data->pens_trimes }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Montant des arriérés</span>
            <span class="float-right font-12 font-weight-bold">{{ number_format($data->montant_arr,0,""," ") }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Montant revalorisation</span>
            <span class="float-right font-12 font-weight-bold">{{ $data->mont_revalo }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Supplément AF</span>
            <span class="float-right font-12 font-weight-bold">{{ number_format(count($data->employee->enfants)*9000,0,""," ") }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Montant total de la pension</span>
            <span class="float-right font-12 font-weight-bold text-danger">{{ number_format($data->montant_tot_pens,0,""," ") }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Montant du prenier paiement</span>
            <span class="float-right font-12 font-weight-bold">{{ number_format($data->montant_tot_first_pay,0,""," ") }}</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Nombre de mois total</span>
            <span class="float-right font-12 font-weight-bold">{{ $data->nbre_mois_tot }} mois</span>
        </div>

    </div>
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">Date prévue du premier paiement</span>
            <span class="float-right font-12 font-weight-bold">{{ \Carbon\Carbon::parse($data->miseRetraite->created_at)->addMonths()->firstOfMonth()->format('d/m/Y')}}</span>
        </div>
        <hr>
        <div>
            <span class="text-left font-weight-bold font-14">Solde du compte</span>
            <span class="float-right font-12 font-weight-bold">0</span>
        </div>
        <div>
            <span class="text-left font-weight-bold font-14">Montant Annuel Pension</span>
            <span class="float-right font-12 font-weight-bold">{{ $data->mont_annu_pension }}</span>
        </div>

    </div>
</div>

<div class="row mt-2 card-box mb-30 p-2 shadow-lg">
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">Conjoint(s)</span>
            @foreach ($data->employee->wifes as $wife)
                <span class="float-right font-14">{{ $wife->no_conjoint_wife }}-{{ $wife->prenom_wife }}-{{ $wife->nom_wife }}</span> <br>
            @endforeach
        </div>
        <hr>

        <div>
            <span class="text-left font-weight-bold font-14">Dernier Employeur</span>
            <span class="float-right font-12 font-weight-bold text-success">{{ $data->employee->employer->no_employer }}-{{ $data->employee->employer->raison_sociale }}</span>
        </div>

    </div>
    <div class="col-md-6">
        <div>
            <span class="text-left font-weight-bold font-14">Enfant(s)</span>
            @foreach ($data->employee->enfants as $enf)
                <span class="float-right font-14">{{ $enf->prenom_enfant }}-{{ $enf->nom_enfant }}</span> <br>
            @endforeach
        </div>
    </div>

</div>











<div class="footer-wrap pd-20 mb-20 card-box justify-content-lg-end">
    {{-- <div class="col-md-4 justify-content-end">
        <a href="{{ route('miseRetaite.decompte.done', $data->id) }}" class="btn btn-success text-white">Terminer <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div> --}}
</div>



@endsection
