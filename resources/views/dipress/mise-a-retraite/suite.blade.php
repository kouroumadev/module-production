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
            <span class="float-right font-12 font-weight-bold text-danger">{{ $data->pension_type }}</span>
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
            <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->first_job_date)->format('d-m-Y') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Nom</span>
            <span class="float-right font-12">{{ $data->employee->nom_employee }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Date de mise a la retraite</span>
            <span class="float-right font-12 font-weight-bold text-danger">{{ \Carbon\Carbon::parse($data->end_job_date)->format('d-m-Y') }}</span>
       </div>
       <div>
            <span class="text-left font-weight-bold font-14">Date de depart de la pension (date de jouissance)</span>
            <span class="float-right font-12 font-weight-bold text-primary">{{ \Carbon\Carbon::parse($data->end_job_date)->addMonths()->format('d-m-Y') }}</span>
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

            <span class="float-right font-12 font-weight-bold text-danger">{{ $data->annuite }}</span>
            {{-- <span class="float-right font-12 font-weight-bold text-danger">{{ \Carbon\Carbon::parse($data->employee->date_embauche)->diff($data->created_at)->format('%y ans de %m mois '); }}</span> --}}
       </div>
    </div>
</div>

<div class="row card-box mb-30 p-2 shadow-lg">
    <div class="col-md-1">
        <span class="font-weight-bold font-14 text-danger">CODE</span><br>
        <span class="font-12 font-weight-bold">A1</span> <br>
        <span class="font-12 font-weight-bold">A2</span> <br>
        <span class="font-12 font-weight-bold">A2</span> <br>
        <span class="font-12 font-weight-bold">A3</span> <br>
        <span class="font-12 font-weight-bold">A4</span> <br>
        <span class="font-12 font-weight-bold">A5</span>
    </div>
    <div class="col-md-3">
        <span class="font-weight-bold font-14 text-danger">LIBELLE</span><br>
        <span class="font-12">AVANT 2006</span> <br>
        <span class="font-12">DE 2006 AU 04 SEPTEMBRE 2009</span> <br>
        <span class="font-12">DE 05 SEPTEMBRE 2009 AU 31 DECEMBRE 2010</span> <br>
        <span class="font-12">DEPUIS 2011</span> <br>
        <span class="font-12">DE 2019 A 2021</span> <br>
        <span class="font-12">DE 2021 A 2055</span>
    </div>
    <div class="col-md-2 text-right">
        <span class="font-weight-bold font-14 text-danger">DATE DEBUT</span><br>
        <span class="font-12">01/01/1960</span> <br>
        <span class="font-12">01/01/2006</span> <br>
        <span class="font-12">05/09/2009</span> <br>
        <span class="font-12">01/01/2011</span> <br>
        <span class="font-12">01/01/2019</span> <br>
        <span class="font-12">01/01/2021</span>
    </div>
    <div class="col-md-2 text-right">
        <span class="font-weight-bold font-14 text-danger">DATE FIN</span><br>
        <span class="font-12">31/12/2005</span> <br>
        <span class="font-12">04/04/2009</span> <br>
        <span class="font-12">31/12/2010</span> <br>
        <span class="font-12">31/12/2018</span> <br>
        <span class="font-12">31/12/2020</span> <br>
        <span class="font-12">31/12/2055</span>
    </div>
    <div class="col-md-2 text-right">
        <span class="font-weight-bold font-14 text-danger">PLANCHER</span><br>
        <span class="font-12">75 000</span> <br>
        <span class="font-12">100 000</span> <br>
        <span class="font-12">100 000</span> <br>
        <span class="font-12">200 000</span> <br>
        <span class="font-12">440 000</span> <br>
        <span class="font-12">550 000</span>
    </div>
    <div class="col-md-2 text-right">
        <span class="font-weight-bold font-14 text-danger">PLAFOND</span><br>
        <span class="font-12">400 000</span> <br>
        <span class="font-12">800 000</span> <br>
        <span class="font-12">800 000</span> <br>
        <span class="font-12">1 500 000</span> <br>
        <span class="font-12">2 500 000</span> <br>
        <span class="font-12">2 500 000</span>
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
                   {{-- <th class="table-plus text-white">#</th> --}}
                   <th class="text-white text-center">CODE</th>
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
                 $i=1;
            ?>

               @foreach ($comptes as $cpt)
               <?php
                $salaire_an += (int)$cpt->salaireAnnuel;
                $total_mois += (int)$cpt->mois;
                $val = (int)$cpt->salairebrut;

                if((1900 <= $cpt->annee) && ($cpt->annee <= 2005)){
                    $code = "A1";
                    if($val> 0 && $val<= 75000){
                        $soumis = 75000;
                    } else if($val > 75000 && $val <= 400000){
                        $soumis = $val;
                    } else{
                        $soumis = 400000;
                    }
                }
                if((2006 <= $cpt->annee) && ($cpt->annee <= 2010)){
                    $code = "A2";
                    if($val> 0 && $val<= 100000){
                        $soumis = 100000;
                    } else if($val > 100000 && $val <= 800000){
                        $soumis = $val;
                    } else{
                        $soumis = 800000;
                    }
                }
                if((2011 <= $cpt->annee) && ($cpt->annee <= 2018)){
                    $code = "A3";
                    if($val> 0 && $val<= 200000){
                        $soumis = 200000;
                    } else if($val > 200000 && $val <= 1500000){
                        $soumis = $val;
                    } else{
                        $soumis = 1500000;
                    }
                }
                if((2019 <= $cpt->annee) && ($cpt->annee <= 2021)){
                    $code = "A4";
                    if($val> 0 && $val<= 440000){
                        $soumis = 440000;
                    } else if($val > 440000 && $val <= 2500000){
                        $soumis = $val;
                    } else{
                        $soumis = 2500000;
                    }
                }

                if((2022 <= $cpt->annee) && ($cpt->annee <= 2055)){
                    $code = "A5";
                    if($val> 0 && $val<= 550000){
                        $soumis = 550000;
                    } else if($val > 550000 && $val <= 2500000){
                        $soumis = $val;
                    } else{
                        $soumis = 2500000;
                    }
                }

                $total_ssc += $soumis;

                // print_r($soumis);

               ?>
               <tr>
                   {{-- <td class="">{{ $i }}</td> --}}
                   <td class="text-center font-weight-bold">{{ $code }}</td>
                   <td class="text-center">{{ $cpt->annee }}</td>
                   <td class="text-center font-weight-bold">{{ number_format((int)$cpt->salaireAnnuel,0,""," ") }}</td>
                   <td class="text-center">{{ $cpt->mois }}</td>
                   <td class="text-center font-weight-bold">{{ number_format((int)$cpt->salairebrut,0,""," ") }}</td>
                   <td class="text-center font-weight-bold">{{ number_format($soumis,0,""," ") }}</td>
               </tr>
               {{-- @php
                   $i++;
               @endphp --}}

               @endforeach
               @php
                   $total_ssc_final = $total_ssc*12;

               @endphp
               <tr>
                    <td class="text-center font-weight-bold">Total:</td>
                    {{-- <td></td> --}}
                    <td class="text-center font-weight-bold text-danger">{{ number_format($salaire_an,0,""," ") }}</td>
                    <td class="text-center font-weight-bold text-danger">{{ $total_mois }}/120</td>
                    <td></td>
                    <td></td>
                    <td class="text-center font-weight-bold text-danger">{{ number_format($total_ssc_final,0,""," ") }}</td>
               </tr>
           </tbody>
       </table>
   </div>
</div>

<div class="row card-box mb-30 shadow-lg p-2">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6">
                <span class="font-12">SALAIRE MENSUEL MOYEN :</span> <br>
                <span class="font-12">SALAIRE MENSUEL MOYEN SOUMIS EN {{ \Carbon\Carbon::parse($data->end_job_date)->format('Y') }} :</span> <br>
                <span class="font-12"></span> <br>
            </div>
            <div class="col-md-6 text-right">
                @php
                    $sal_moy_mens = number_format($total_ssc_final/$total_mois,0,""," ");
                    $annuite_string = explode(" ",$data->annuite);
                    $annuite = (int)$annuite_string[0];
                    $month = (int)$annuite_string[3];

                    $added_mon = ($month*2)/12;

                @endphp
                <span class="font-12">{{ number_format($total_ssc_final,0,""," ") }} / {{ $total_mois }} = <span class="font-weight-bold">{{ $sal_moy_mens }}</span></span> <br>
                <span class="font-12 font-weight-bold text-danger" style="margin-left: 98px;">{{ number_format($total_ssc_final/$total_mois,0,""," ") }}</span> <br>

            </div>
        </div>

    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-8">
                <span class="font-12">MONTANT MENSUEL DE LA PENSION : {{ number_format($total_ssc_final/$total_mois,0,""," ") }} x {{ $annuite }} x 2% + {{ $added_mon }}% = </span> <br>
                <span class="font-12">MONTANT ANNUEL DE LA PENSION :</span> <br>
                <span class="font-12">PENSION <span class="font-weight-bold">TRIMESTRIELLE</span> :</span> <br>
                {{-- <span class="font-12">test {{  $added_mon }} <br> --}}
            </div>
            <div class="col-md-4 text-right">
                @php
                    $mont_mens_pens = number_format((($total_ssc_final/$total_mois)*$annuite*(2+$added_mon))/100,0,""," ");
                    $pens_trimes = number_format((((($total_ssc_final/$total_mois)*$annuite*(2+$added_mon))/100)*12)/4,0,""," ");
                    $mont_annu_pension = number_format(((($total_ssc_final/$total_mois)*$annuite*(2+$added_mon))/100)*12,0,""," ");
                @endphp
                <span class="font-14 font-weight-bold text-danger">{{ $mont_mens_pens }}</span> <br>
                <span class="font-14 font-weight-bold">{{ $mont_annu_pension }}</span> <br>
                <span class="font-14 font-weight-bold text-danger">{{ $pens_trimes }}</span> <br>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('miseRetaite.decompte.store') }}" method="post" id="decompte_form">
    @csrf
    <div class="row card-box mb-30 shadow-lg p-2">
        <div class="col-md-6">
            <div>
                <span class="text-left font-weight-bold font-12">Date de depot du dossier</span>
                <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</span>
        </div>
        <div>
                <span class="text-left font-weight-bold font-12">Date de cessation d'activites</span>
                <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->end_job_date)->format('d/m/Y') }}</span>
        </div>
        <div>
                <span class="text-left font-weight-bold font-12">Date de depart de la pension (date de jouissance)</span>
                <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->end_job_date)->addMonths()->format('d/m/Y') }}</span>
        </div>
        <div>
                @php
                    $data_first_pay =  \Carbon\Carbon::parse($data->created_at)->addMonths()->firstOfMonth()->format('d/m/Y');
                    $nbre_mois_tot =  \Carbon\Carbon::createFromDate(null, 12, 31)->diffInMonths(\Carbon\Carbon::parse($data->created_at));
                @endphp
                <span class="text-left font-weight-bold font-12">Date prevu de 1er paiement</span>
                <span class="float-right font-12">{{ $data_first_pay }}</span>
        </div>
        <div>
                <span class="text-left font-weight-bold font-12">Nombre de mois total</span>
                <span class="float-right font-12">{{ $nbre_mois_tot }} mois</span>
        </div>
        <div>
                <span class="text-left font-weight-bold font-12">Nombre de mois a payer</span>
                <span class="float-right font-12">{{ $nbre_mois_tot }} mois</span>
        </div>
        <hr>
        <div>
                @php
                    $montant_base_pens = (((($total_ssc_final/$total_mois)*$annuite*(2+$added_mon))/100)*12)/4;
                @endphp
                <span class="text-left font-weight-bold font-14">Montant de base de la pension</span>
                <span class="float-right font-weight-bold font-14 text-danger">{{ number_format($montant_base_pens,0,""," ") }}</span>
        </div>
        <div>
                <span class="text-left font-weight-bold font-14">Montant revalorisation</span>
                <span class="float-right font-weight-bold font-14 ">0</span>
        </div>
        <div>
                @php
                    $supp_af = count($data->employee->enfants)*9000;
                    $montant_tot_pens = $montant_base_pens+$supp_af;
                    $mois = \Carbon\Carbon::now()->diffInMonths($data_first_pay);
                    $montant_arr = $montant_tot_pens*$mois;
                    $montant_tot_first_pay = $montant_tot_pens+$montant_arr;
                @endphp
                <span class="text-left font-weight-bold font-14">Supplément AF</span>
                <span class="float-right font-weight-bold font-14 ">{{ number_format($supp_af,0,""," ") }}</span>
        </div>
        <div>
                <span class="text-left font-weight-bold font-14">Montant total de la pension</span>
                <span class="float-right font-weight-bold font-14 text-info">{{ number_format($montant_tot_pens,0,""," ") }}</span>
        </div>
        <div>
                <span class="text-left font-weight-bold font-14">Montant des arriérés</span>
                <span class="float-right font-weight-bold font-14">{{ number_format($montant_arr,0,""," ") }}</span>
        </div>
        <div>
                <span class="text-left font-weight-bold font-14">Montant total du premier paiement</span>
                <span class="float-right font-weight-bold font-14 text-success">{{ number_format($montant_tot_first_pay,0,""," ") }}</span>
        </div>
        </div>
        <div class="col-md-6">
            <div>
                <input type="hidden" name="employee_id" value="{{ $data->employee_id }}">
                <input type="hidden" name="mise_retraite_id" value="{{ $data->id }}">
                <input type="hidden" name="sal_moy_mens" value="{{ $sal_moy_mens }}">
                <input type="hidden" name="mont_mens_pens" value="{{ $mont_mens_pens }}">
                <input type="hidden" name="pens_trimes" value="{{ $pens_trimes }}">
                <input type="hidden" name="montant_arr" value="{{ $montant_arr }}">
                <input type="hidden" name="mont_revalo" value="0">
                <input type="hidden" name="montant_tot_pens" value="{{ $montant_tot_pens }}">
                <input type="hidden" name="montant_tot_first_pay" value="{{ $montant_tot_first_pay }}">
                <input type="hidden" name="nbre_mois_tot" value="{{ $nbre_mois_tot }}">
                <input type="hidden" name="solde_compte" value="0">
                <input type="hidden" name="mont_annu_pension" value="{{ $mont_annu_pension }}">

                <span class="text-left font-weight-bold font-12">Date validation dossier</span>
                <span class="float-right font-12">{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</span>
            </div>
            <div>
                    <span class="text-left font-weight-bold font-12">Prescription</span>
                    <span class="float-right font-12">NON</span>
            </div>
        </div>
    </div>

    <div class="footer-wrap pd-20 mb-20 card-box justify-content-lg-end">
        <div class="col-md-4 justify-content-end">
            {{-- <button type="submit" class="btn btn-success">Valider</button> --}}
            <button type="button" id="conf_modal_suite" class="btn btn-success my-3">Valider</button>

            <div class="modal fade" id="patapata_suite" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-success text-white">
                        <div class="modal-body text-center font-18">
                            <h4 class=" text-white padding-top-30 mb-30 weight-500">Confirmez-vous le decompte pour cet employer ?</h4>
                            <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary btn-light border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    NON
                                </div>
                                <div class="col-6">
                                    <button type="button" id="send_decompte_form" class="btn btn-primary btn-light border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-check"></i></button>
                                    OUI
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</form>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
     $(document).ready(function () {

        $('#conf_modal_suite').on('click', function() {
            $('#patapata_suite').modal('show');
        });

        $('#send_decompte_form').on('click', function() {
            $("#decompte_form").submit();
        });
     });
</script>



@endsection
