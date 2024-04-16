@extends('welcome')

@section('body')


<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>ECHEANCE</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('echeance.index') }}">Echeance</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Paie</li> --}}
                    <li class="breadcrumb-item active" aria-current="page">{{ $echeance_type }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row shadow-lg justify-content-end">
    <div class="col-md-4">
        <a href="{{ route('paye.pdf',$id) }}" target="_blank" class="btn btn-success">PDF</a>
        <a href="{{ route('paye.excel',$id) }}" class="btn btn-info">EXCEL</a>
        {{-- <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal-paye-moi" type="button">DÉTAILS</a> --}}
    </div>

</div>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card-box mb-30 shadow-lg p-3">
            <div class="pb-20">
                <h4 class="text-blue h4">Liste des paies</h4>
                <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead class="bg-success">
                        <tr>
                            {{-- <th class="table-plus text-white">#</th> --}}
                            <th class="text-white">Num Retraite</th>
                            <th class="text-white">Type</th>
                            <th class="text-white">Prénoms</th>
                            <th class="text-white">Nom</th>
                            {{-- <th class="text-white">Date Naiss</th> --}}
                            <th class="text-white">Date Jouiss</th>
                            <th class="text-white">Assignation</th>
                            {{-- <th class="text-white">Assignation 1</th> --}}
                            <th class="text-white">Société Orig</th>
                            <th class="text-white">Montant Paye</th>
                            <th class="datatable-nosort text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($retraites as $ret)

                            <tr>
                                {{-- <td>{{ $loop->index+1 }}</td> --}}
                                <td>{{ $ret->num_retraite }}</td>
                                <td>{{ strtoupper($ret->echeance->type) }}</td>
                                <td>{{ $ret->prenoms }}</td>
                                <td>{{ $ret->nom }}</td>
                                {{-- <td>{{ \Carbon\Carbon::parse($ret->date_de_naiss)->format('d-m-Y') }}</td> --}}
                                <td>{{ \Carbon\Carbon::parse($ret->date_de_jouiss)->format('d-m-Y') }}</td>
                                <td>{{ $ret->assignation }}</td>
                                {{-- <td>{{ $ret->assignation1 }}</td> --}}
                                <td>{{ $ret->aociéte_orig }}</td>
                                <td>{{ number_format((int)$ret->montant_a_paye,0,""," ") }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modal-paye-moi{{ $ret->id }}" type="button" href="#"><i class="dw dw-eye"></i> Détails</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                        <div class="modal fade bs-example-modal-lg" id="modal-paye-moi{{ $ret->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content" style="height:500px;">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Echeance {{ $title }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3 class="text-center text-white bg-success">Détails sur l'echeance {{ $title }} ({{ $echeance_type }})</h3>
                                                        <div class="row p-5">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <span class="text-left font-weight-bold font-18">Num retraite</span>
                                                                    <span class="float-right font-16">{{ $ret->num_retraite }}</span>
                                                               </div>
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Prenoms</span>
                                                                    <span class="float-right font-16">{{ $ret->prenoms }}</span>
                                                               </div>
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Nom</span>
                                                                    <span class="float-right font-16">{{ $ret->nom }}</span>
                                                               </div>
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Titre</span>
                                                                    <span class="float-right font-16">{{ $ret->titre }}</span>
                                                               </div>
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Date de Naissance</span>
                                                                    <span class="float-right font-16">{{ \Carbon\Carbon::parse($ret->date_de_naiss)->format('d-m-Y') }}</span>
                                                               </div>
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Date de Jouissance</span>
                                                                    <span class="float-right font-16">{{ \Carbon\Carbon::parse($ret->date_de_jouiss)->format('d-m-Y') }}</span>
                                                               </div>
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Montant mens reval</span>
                                                                    <span class="float-right font-16">{{ number_format((int)$ret->montant_mens_reval,0,""," ") }} GNF</span>
                                                               </div>
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Montant avance</span>
                                                                    <span class="float-right font-16">{{ number_format((int)$ret->montant_avance,0,""," ") }} GNF</span>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <span class="text-left font-weight-bold font-18">Trim du</span>
                                                                    <span class="float-right font-16">{{ number_format((int)$ret->trim_du,0,""," ") }} GNF</span>
                                                               </div>
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Pour</span>
                                                                    <span class="float-right font-16">{{ number_format((int)$ret->pour,0,""," ") }} GNF</span>
                                                               </div>
                                                               @if ($echeance_type == "reversion")
                                                                <div>
                                                                    <span class="text-left font-weight-bold font-18">Solde Avance</span>
                                                                    <span class="float-right font-16">{{ number_format((int)$ret->solde_avance,0,""," ") }} GNF</span>
                                                                </div>
                                                               @endif

                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Montant arriéré</span>
                                                                    <span class="float-right font-16">{{ number_format((int)$ret->montant_arriere,0,""," ") }} GNF</span>
                                                               </div>
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Montant à payer</span>
                                                                    <span class="float-right font-16">{{ number_format((int)$ret->montant_a_paye,0,""," ") }} GNF</span>
                                                               </div>
                                                               @if ($echeance_type == "reversion")
                                                                <div>
                                                                        <span class="text-left font-weight-bold font-18">Ayant cause</span>
                                                                        <span class="float-right font-16">{{ number_format((int)$ret->ayant_causse,0,""," ") }} GNF</span>
                                                                </div>
                                                               @endif
                                                               <div>
                                                                    <span class="text-left font-weight-bold font-18">Mappr</span>
                                                                    <span class="float-right font-16">{{ number_format((int)$ret->mappr,0,""," ") }} GNF</span>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>


                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
