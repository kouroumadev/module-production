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
                    <li class="breadcrumb-item active" aria-current="page">Paie</li>
                </ol>
            </nav>
        </div>
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
                            <th class="text-white">Prénoms</th>
                            <th class="text-white">Nom</th>
                            <th class="text-white">Date Naiss</th>
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
                            @php

                            @endphp
                            <tr>
                                {{-- <td>{{ $loop->index+1 }}</td> --}}
                                <td>{{ $ret->num_retraite }}</td>
                                <td>{{ $ret->prenoms }}</td>
                                <td>{{ $ret->nom }}</td>
                                <td>{{ \Carbon\Carbon::parse($ret->date_de_naiss)->format('d-m-Y') }}</td>
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
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
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
