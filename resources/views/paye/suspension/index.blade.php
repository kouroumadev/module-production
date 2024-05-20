@extends('welcome')

@section('body')


<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>SUSPENSION</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ url()->previous() }}"><i class="fa fa-angle-left" aria-hidden="true"></i> Retour</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Liste des Echeances</li> --}}
                </ol>
            </nav>
        </div>
    </div>
</div>



<div class="row justify-content-center">
    <div class="col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card-box mb-30 shadow-lg p-3">
            <div class="pb-20">
                <h4 class="text-blue h4">Liste des cas de suspension</h4>
                <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead class="bg-success">
                        <tr>
                            <th class="table-plus text-white">N°</th>
                            <th class="text-white">Prenom</th>
                            <th class="text-white">Nom</th>
                            <th class="text-white">Type</th>
                            <th class="text-white">Num Pension</th>
                            <th class="text-white">Date Naiss</th>
                            <th class="text-white">Date Suspension</th>
                            <th class="text-white">Societe Ori</th>
                            <th class="text-white">Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($suspendus as $d)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $d->retraite->nom }}</td>
                            <td>{{ $d->retraite->prenom }}</td>
                            <td>{{ $d->retraite->type }}</td>
                            <td style="font-weight: bold;">{{ $d->retraite->num_pension }}</td>
                            <td>{{ $d->retraite->date_naiss }}</td>
                            <td>{{  \AppHelper::getDateFormat($d->created_at) }}</td>
                            <td>{{ $d->retraite->societe_orig }}</td>
                            <td><a href="{{ route('payeSuspension.update', $d->id ) }}" class="btn btn-warning">Annuler</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
