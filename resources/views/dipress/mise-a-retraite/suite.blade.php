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
                    <li class="breadcrumb-item active" aria-current="page">Suite Decompte Pensionne</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row card-box mb-30 p-2 shadow-lg">
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
            <span class="float-right font-12">{{ $data->age }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Annuite globale</span>
            <span class="float-right font-12 text-danger">{{ $data->annuite }}</span>
       </div>
    </div>
</div>

<div class="row card-box mb-30 p-2 shadow-lg">
    <div class="col-md-4">
        <span class="font-weight-bold font-14">LIBELLE</span><br>
        <span class="font-12">AVANT 2006</span> <br>
        <span class="font-12">DE 2006 AU 04 SEPTEMBRE 2009</span> <br>
        <span class="font-12">DE 05 SEPTEMBRE 2009 AU 31 DECEMBRE 2010</span> <br>
        <span class="font-12">DEPUIS 2011</span> <br>
        <span class="font-12">DEPUIS 2019</span>
    </div>
    <div class="col-md-2 text-right">
        <span class="font-weight-bold font-14">DATE DEBUT</span><br>
        <span class="font-12">01/01/1960</span> <br>
        <span class="font-12">01/01/2006</span> <br>
        <span class="font-12">05/09/2009</span> <br>
        <span class="font-12">01/01/2011</span> <br>
        <span class="font-12">01/01/2019</span>
    </div>
    <div class="col-md-2 text-right">
        <span class="font-weight-bold font-14">DATE FIN</span><br>
        <span class="font-12">31/12/2005</span> <br>
        <span class="font-12">04/04/2009</span> <br>
        <span class="font-12">31/12/2010</span> <br>
        <span class="font-12">31/12/2018</span> <br>
        <span class="font-12">24/01/2055</span>
    </div>
    <div class="col-md-2 text-right">
        <span class="font-weight-bold font-14">PLANCHER</span><br>
        <span class="font-12">75000</span> <br>
        <span class="font-12">100000</span> <br>
        <span class="font-12">100000</span> <br>
        <span class="font-12">200000</span> <br>
        <span class="font-12">440000</span>
    </div>
    <div class="col-md-2 text-right">
        <span class="font-weight-bold font-14">PLAFOND</span><br>
        <span class="font-12">400000</span> <br>
        <span class="font-12">800000</span> <br>
        <span class="font-12">800000</span> <br>
        <span class="font-12">1500000</span> <br>
        <span class="font-12">2500000</span>
    </div>
</div>

<div class="card-box mb-30 shadow-lg">
    <div class="pd-20">
        {{-- <h4 class="text-blue h4">Liste des dossiers a decompter</h4> --}}
        {{-- <p class="mb-0">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p> --}}
    </div>
    <div class="pb-10">

       <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline"
       id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
           <thead class="bg-success">
               <tr>
                   <th class="table-plus text-white">#</th>
                   <th class="text-white text-center">ANNEE</th>
                   <th class="text-white text-center">SALAIRE ANNUEL</th>
                   <th class="text-white text-center">NBRE DE MOIS</th>
                   <th class="text-white text-center">SALAIRE MENSUEL</th>
                   <th class="text-white text-center">SSC MENSUEL</th>

                   {{-- <th class="datatable-nosort text-white">Action</th> --}}
               </tr>
           </thead>
           <tbody>
            <?php
                 $salaire_an=0;
                 $total_mois=0;
                 $total_ssc=0;
            ?>

               @foreach ($comptes as $cpt)
               <?php
                $salaire_an += (int)$cpt->salaireAnnuel;
                $total_mois += (int)$cpt->mois;
                $val = (int)$cpt->salairebrut;

                if((1900 <= $cpt->annee) && ($cpt->annee <= 2005)){
                    if($val> 0 && $val<= 75000){
                        $soumis = 75000;
                    } else if($val > 75000 && $val <= 400000){
                        $soumis = $val;
                    } else{
                        $soumis = 400000;
                    }
                }
                if((2006 <= $cpt->annee) && ($cpt->annee <= 2010)){
                    if($val> 0 && $val<= 100000){
                        $soumis = 100000;
                    } else if($val > 100000 && $val <= 800000){
                        $soumis = $val;
                    } else{
                        $soumis = 800000;
                    }
                }
                if((2011 <= $cpt->annee) && ($cpt->annee <= 2018)){
                    if($val> 0 && $val<= 200000){
                        $soumis = 200000;
                    } else if($val > 200000 && $val <= 1500000){
                        $soumis = $val;
                    } else{
                        $soumis = 1500000;
                    }
                }
                if((2019 <= $cpt->annee) && ($cpt->annee <= 2055)){
                    if($val> 0 && $val<= 550000){
                        $soumis = 550000;
                    } else if($val > 550000 && $val <= 2500000){
                        $soumis = $val;
                    } else{
                        $soumis = 2500000;
                    }
                }

                $total_ssc += $soumis;

               ?>
               <tr>
                   <td class="">{{ $loop->index+1 }}</td>
                   <td class="text-center">{{ $cpt->annee }}</td>
                   <td class="text-center">{{ (int)$cpt->salaireAnnuel }}</td>
                   <td class="text-center">{{ $cpt->mois }}</td>
                   <td class="text-center">{{ (int)$cpt->salairebrut }}</td>
                   <td class="text-center">{{ $soumis }}</td>
               </tr>
               @endforeach
               <tr>
                    <td class="font-weight-bold">Total:</td>
                    <td></td>
                    <td class="text-center">{{ number_format($salaire_an) }}</td>
                    <td class="text-center">{{ $total_mois }}/120</td>
                    <td></td>
                    <td class="text-center">{{ $total_ssc }}</td>
               </tr>
           </tbody>
       </table>
   </div>
</div>

<div class="footer-wrap pd-20 mb-20 card-box justify-content-lg-end">
    <div class="col-md-4 justify-content-end">
        <a href="{{ route('miseRetaite.decompte.suite', $data->id) }}" class="btn btn-success text-white">Suite Decompte <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</div>


@endsection
