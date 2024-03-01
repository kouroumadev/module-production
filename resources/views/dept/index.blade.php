@extends('welcome')

@section('body')


<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>PARAMETRAGES</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('prestation.index') }}">Parametrages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Departements</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<hr>
<div class="row justify-content-center">
    <div class="col-md-6">
        <form method="post" action="{{ route('dept.store') }}" class="form-inline">
            @csrf
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" name="name" class="form-control" id="inputPassword2" placeholder="Nom de departement" required>
            </div>
            <button type="submit" class="btn btn-success mb-2">Ajouter</button>
        </form>
    </div>
</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-box mb-30 shadow-lg">
            <div class="pd-20">
                <h4 class="text-blue h4">Liste des departements</h4>
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
                            <th class="table-plus text-white">Nom du Departement</th>
                            <th class="text-white">Status</th>
                            <th class="datatable-nosort text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($depts as $dept)
                        <tr>
                            <td class="">{{ $dept->name }}</td>
                            <td class="">
                                @if ($dept->status == '1')
                                    <span class="badge badge-success">Actif</span>
                                @else
                                <span class="badge badge-secondary">Non Actif</span>
                                @endif
                            </td>
                            <td>coming</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
