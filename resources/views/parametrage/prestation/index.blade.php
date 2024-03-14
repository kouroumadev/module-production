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
                    <li class="breadcrumb-item active" aria-current="page">Prestation</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<hr>
<div class="row justify-content-center">
    <div class="col-md-6">
        <form method="post" action="{{ route('prest.store') }}" class="form-inline">
            @csrf
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" name="nom_prestation" class="form-control" id="inputPassword2" placeholder="Nom de prestation" required>
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
                <h4 class="text-blue h4">Liste des Prestations</h4>
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
                            <th class="table-plus text-white">Nom de la Prestation</th>
                            {{-- <th class="text-white">Status</th> --}}
                            <th class="datatable-nosort text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prestations as $prest)
                        <tr>
                            <td class="">{{ $prest->nom_prestation }}</td>
                            {{-- <td class="">
                                @if ($prest->status == '1')
                                    <span class="badge badge-success">Actif</span>
                                @else
                                <span class="badge badge-secondary">Non Actif</span>
                                @endif
                            </td> --}}
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
