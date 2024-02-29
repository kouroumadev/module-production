@extends('welcome')

@section('body')

<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>PRESTATIONS</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('prestation.index') }}">Prestations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Liste des Pensions</li>
                </ol>
            </nav>
        </div>
    </div>
</div>




<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table Simple</h4>
        @if (session('yes'))
            <div class="alert alert-success" role="alert">
                {{ session('yes') }}
            </div>
        @endif
        @if (session('no'))
            <div class="alert alert-danger" role="alert">
                {{ session('no') }}
            </div>
        @endif
    </div>
    <div class="pb-20">
        <table class="table stripe hover">
            <thead class="bg-success">
                <tr>
                    <th class="table-plus text-white">Immat.</th>
                    <th class="text-white">Prenom & Nom</th>
                    <th class="text-white">Raison Sociale</th>
                    <th class="text-white">Date Creation</th>
                    <th class="text-white">Etat</th>
                    <th class="text-white">Etape</th>
                    <th class="datatable-nosort text-white">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emps as $emp)
                <tr>
                    <td class="">{{ $emp->no_ima_employee }}</td>
                    <td class="">{{ $emp->prenom_employee }} <span class="text-uppercase">{{ $emp->nom_employee }}</span></td>
                    <td>{{ $emp->employer->raison_sociale }}</td>
                    <td>{{ $emp->created_at }}</td>
                    <td><span class="badge badge-warning">En Cours...</span></td>
                    <td>DCG</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('pension.details',$emp->id) }}">Traitement <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
