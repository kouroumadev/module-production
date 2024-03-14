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
                    <li class="breadcrumb-item active" aria-current="page">Liste des dossiers a decompter</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Liste des dossiers a decompter</h4>
        {{-- <p class="mb-0">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p> --}}
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead class="bg-success">
                <tr>
                    <th class="table-plus datatable-nosort text-white">#</th>
                    <th class="text-white">NoPensionne</th>
                    <th class="text-white">Nature Pension</th>
                    <th class="text-white">Prenoms</th>
                    <th class="text-white">Nom</th>
                    <th class="text-white">Sexe</th>
                    <th class="text-white">Age</th>
                    <th class="text-white">Date Fin Activite</th>
                    <th class="text-white">Date Immat</th>
                    <th class="datatable-nosort text-white">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $dat)

                    <tr>
                        <td class="table-plus">{{ $loop->index+1 }}</td>
                        <td>{{ $dat->no_pensionne }}</td>
                        <td>{{ $dat->pension_type }}</td>
                        <td>{{ $dat->employee->prenom_employee }}</td>
                        <td>{{ $dat->employee->nom_employee }}</td>
                        <td>{{ $dat->sexe }}</td>
                        <td>{{ $dat->age }} ans</td>
                        <td>{{ $dat->end_job_date }}</td>
                        <td>{{ $dat->date_imma }}</td>
                        <td>
                            <a href="{{ route('miseRetaite.decompte',$dat->id) }}" class="btn btn-warning">Faire le decompte <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>




@endsection
