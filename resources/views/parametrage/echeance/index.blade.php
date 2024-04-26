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
                    <li class="breadcrumb-item active" aria-current="page">Gestion des Echeances</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<hr>
<div class="row justify-content-center">
    <div class="col-md-6">

        <form method="post" action="{{ route('echeance.store') }}">
            @csrf
            <div class="form-row">

              <div class="col-md-10 form-group">
                <label for="inputEmail4">Selectionner le Mois<span class="text-danger">*</span></label>
                <select required name="mois" class="custom-select col-12">
                    <option value="">--Aucune selection--</option>
                    @foreach ($mois as $m)
                    <option value="{{ $m->value }}">{{ $m->value }}</option>
                    @endforeach

                </select>
            </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-success" style="margin-top: 33px;">Valider</button>
              </div>
            </div>
        </form>
    </div>
</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8">
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
                <h4 class="text-blue h4">Liste des Échéances</h4>
                <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead class="bg-success">
                        <tr>
                            <th class="table-plus text-white">#</th>
                            <th class="text-white">Échéance</th>
                            <th class="text-white">Status</th>
                            <th class="text-white">Ajouté par</th>
                            <th class="text-white">À la date du</th>
                            <th class="datatable-nosort text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $d->mois }} {{ $d->annee }}</td>
                                <td>
                                    @if ($d->status == '1')
                                        <span class="badge badge-warning">En cours...</span>
                                    @else
                                        <span class="badge badge-secondary">Traité</span>
                                    @endif
                                </td>
                                <td>{{ \AppHelper::getUserName($d->created_by) }}</td>
                                <td>{{ \AppHelper::getDateFormat($d->created_at) }}</td>
                                {{-- <td>{{ DB::table('users')->where('id', $d->created_by)->value('name') }}</td> --}}
                                <td>
                                    @if ($d->status == '1')
                                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#small-modal-echeance{{ $d->id }}" type="button">
                                        {{-- <i class="fa fa-download" aria-hidden="true"></i> --}}
                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                    </a>
                                    @else
                                    <a href="{{ route('paye.index',$d->id ) }}" class="btn btn-success">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    @endif

                                    <div class="modal fade" id="small-modal-echeance{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Chargement du fichier</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="send_echeance_form{{ $d->id }}" class="dropzone" method="post" action="{{ route('paye.store') }}" id="my-awesome-dropzone" enctype='multipart/form-data'>
                                                        @csrf
                                                        <div class="fallback">
                                                            <input type="file" name="file" accept=".xls, .xlsx, .csv" />
                                                            <input type="hidden" name="echeance_id" value="{{ $d->id }}" />
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="send_echeance{{ $d->id }}" onclick="sendForm({{ $d->id }})" type="button" class="btn btn-success" data-dismiss="modal">Charger</button>
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



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    function sendForm(id){
        $("#send_echeance_form"+id).submit();
    }
    //  $(document).ready(function () {

    //     $('#send_echeance').on('click', function() {
    //         $("#send_echeance_form").submit();
    //     });
    //  });
</script>



@endsection
