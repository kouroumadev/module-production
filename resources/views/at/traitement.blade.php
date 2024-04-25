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
                        <li class="breadcrumb-item"><a href="#">AT</a></li>
                        {{-- <li class="breadcrumb-item"><a href="#">Etude de dossier</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Traitement</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row py-2 shadow-lg">
        <div class="col-md-6">
            <div>
                <span class="text-left font-weight-bold font-14">N° Dossier:</span>
                <span class="float-right font-weight-bold font-12">{{ $emp->docs[0]->no_dossier }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">NoAssure Social</span>
                <span class="float-right font-weight-bold font-12">{{ $emp->no_ima_employee }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Prenom</span>
                <span class="float-right font-12">{{ $emp->prenom_employee }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Sexe</span>
                <span class="float-right font-12">{{ $emp->sexe }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Prefecture</span>
                <span
                    class="float-right font-12">{{ DB::table('prefecture')->where('code', $emp->prefecture_employee)->value('libelle') }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Date de naissance</span>
                <span
                    class="float-right font-12">{{ \Carbon\Carbon::parse($emp->date_naissance_employee)->format('d-m-Y') }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Age actuel</span>
                <span
                    class="float-right font-12">{{ \Carbon\Carbon::parse($emp->date_naissance_employee)->diff(\Carbon\Carbon::now())->format('%y ans et %m mois') }}
                </span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Nationalite</span>
                <span class="float-right font-12">{{ $emp->nationalite }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Profession</span>
                <span class="float-right font-12">{{ $emp->profession }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Date de décès</span>
                <span class="float-right font-12">{{ $accident[0]->date_deces }}</span>
            </div>

            <div>
                <span class="text-left font-weight-bold font-14">Employeur(s)</span>
                <span class="float-right font-12">{{ $emp->employer->raison_sociale }}</span>
            </div>
        </div>

        <div class="col-md-6">
            <div>
                <span class="text-left font-weight-bold font-14">Nom</span>
                <span class="float-right font-12">{{ $emp->nom_employee }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Situation matrimoniale</span>
                <span class="float-right font-12">{{ $emp->situation_matri_employee }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Date Accident</span>
                <span class="float-right font-12">{{ $accident->date_accident }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Lieu de naissance</span>
                <span class="float-right font-12">{{ $emp->lieu_naissance_employee }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Pays</span>
                <span class="float-right font-12">{{ $emp->pays_id }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Salaire Mensuel</span>
                <span class="float-right font-12">{{ number_format((int) $decomptes[0]->salairebrut, 0, '', ' ') }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Date immatriculation en cotisation</span>
                <span
                    class="float-right font-12">{{ \Carbon\Carbon::parse($emp->date_immatriculation)->format('d-m-Y') }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Date acception dossier</span>
                <span class="float-right font-12">{{ $emp->created_at->format('d-m-Y') }}</span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">NoDossier depose</span>
                <span class="float-right font-12"></span>
            </div>
            <div>
                <span class="text-left font-weight-bold font-14">Date de premier depot</span>
                <span class="float-right font-12">{{ $emp->created_at->format('d-m-Y') }}</span>
            </div>
        </div>
    </div>
@endsection
