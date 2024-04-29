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
                        <li class="breadcrumb-item active" aria-current="page">Deadlines</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <hr>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card-box height-100-p">
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#bd-example-modal-lg"
                    type="button">
                    Ajouter un Delai
                </a>
                <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Ajouter un delai</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="{{ route('deadline.store') }}" method="post" enctype='multipart/form-data'>
                                @csrf
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Departement</label>
                                                <select name="dept_id" id="" class="form-control" required>
                                                    @foreach ($depts as $dept)
                                                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Delais Execution</label>
                                                <input name="name" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>



    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-box mb-30 shadow-lg p-2">
                <div class="pd-20">
                    <h4 class="text-blue h4">Liste de Deadlines</h4>
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
                    <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline"
                        id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead class="bg-success">
                            <tr>

                                <th class="text-white">Departement</th>
                                <th class="text-white">Delais Execution</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deadlines as $delai)
                                <tr>

                                    <td>{{ $delai->departs->name }}</td>
                                    <td>{{ $delai->name }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
