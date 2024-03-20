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
                    <li class="breadcrumb-item active" aria-current="page"> Details Decompte Pensionne</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="card-box mb-30">
    <div class="pd-20">
        {{-- <h4 class="text-blue h4">Liste des dossiers a decompter</h4> --}}
        {{-- <p class="mb-0">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p> --}}
    </div>
    <div class="pb-10">
        <div class="pd-20">
           <h5 class="text-blue h4">Details Compte Individuel</h5>
       </div>
       <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline"
       id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
           <thead class="bg-success">
               <tr>
                   <th class="table-plus text-white">Date Effet</th>
                   <th class="text-white">Periode</th>
                   <th class="text-white">Salaire Brute</th>
                   <th class="text-white">SSC</th>
                   <th class="text-white">Montant Coti</th>
                   <th class="text-white">Part Salariale</th>
                   <th class="text-white">Ajouter le</th>
                   {{-- <th class="datatable-nosort text-white">Action</th> --}}
               </tr>
           </thead>
           <tbody>
               @foreach ($comptes as $cpt)
               <tr>
                   <td class="">{{ \Carbon\Carbon::parse($cpt->dateeffet)->format('d/m/Y') }}</td>
                   <td class="">{{ $cpt->periode }}</td>
                   <td class="text-center">{{ number_format((int)$cpt->salairebrut,0,""," ") }}</td>
                   <td class="text-center">{{ number_format((int)$cpt->salaire_soumis_cotisation,0,""," ") }}</td>
                   <td class="text-center">{{ number_format((int)$cpt->montant_cotisation,0,""," ") }}</td>
                   <td class="text-center">
                    @if ($cpt->part == '')
                        0.00
                    @else
                        {{ number_format((int)$cpt->part,0,""," ") }}
                    @endif
                   </td>
                   <td>{{ \Carbon\Carbon::parse($cpt->date_created)->format('d/m/Y')  }}</td>
               </tr>
               @endforeach
           </tbody>
       </table>
   </div>
</div>



@endsection
