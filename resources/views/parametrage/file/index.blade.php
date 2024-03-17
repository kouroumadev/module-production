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
                    <li class="breadcrumb-item active" aria-current="page">Documents</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<hr>
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card-box height-100-p">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
                Ajouter un document
            </a>
            <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Ajouter un document</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="{{ route('doc.store') }}" method="post" enctype='multipart/form-data'>
                            @csrf
                            <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Departement</label>
                                                <select name="prestation_id" id="" class="form-control" required>
                                                    @foreach ($prestations as $prest)
                                                    <option value="{{ $prest->id }}">{{ $prest->nom_prestation }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="weight-600">Document Obligatoire</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio mb-5">
                                                            <input type="radio" id="customRadio4" value="1" name="obligation" class="custom-control-input">
                                                            <label class="custom-control-label"  for="customRadio4">Obligatoire</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio mb-5">
                                                            <input type="radio" id="customRadio5" value="0" name="obligation" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio5">Non Obligatoire</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Libelle du document</label>
                                                <textarea class="form-control" name="nom_piece"></textarea>
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
    <div class="col-md-10">
        <div class="card-box mb-30 shadow-lg p-2">
            <div class="pd-20">
                <h4 class="text-blue h4">Liste des Documents</h4>
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
                            <th class="text-white">N°</th>
                            <th class="table-plus text-white">Nom de la Pièce</th>
                            <th class="text-white">Prestation</th>
                            <th class="text-white">Obligation</th>
                            {{-- <th class="text-white">Mot de Pass Temporaire</th>
                            <th class="text-white">Status</th> --}}
                            <th class="datatable-nosort text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pieces as $key => $piece)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $piece->nom_piece }}</td>
                                <td>{{ $piece->prestation->nom_prestation }}</td>
                                
                                {{-- <td>{{ $piece->obligation}}</td> 
                                
                                {{-- <td>{{ $piece->c_password }}</td>--}}
                                <td>
                                    @if ($piece->obligation == '1')
                                        <span class="badge badge-danger">Obligatoire</span>
                                    @else
                                    <span class="badge badge-secondary">Non Obligatoire</span>
                                    @endif
                                </td> 
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    function readURL(input) {
      if (input.files && input.files[0]) {

        var reader = new FileReader();
        reader.onload = function (e) {
          document.querySelector("#img22").setAttribute("src",e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
</script>


@endsection
