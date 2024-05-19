@extends('welcome')

@section('body')


<div class="page-header shadow-lg">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>DÉCÈS</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('paye.index') }}">Retraite</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Liste des Echeances</li> --}}
                </ol>
            </nav>
        </div>
    </div>
</div>



<div class="row justify-content-center">
    <div class="col-md-10">
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
                <h4 class="text-blue h4">Liste des cas de décès</h4>
                <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead class="bg-success">
                        <tr>
                            <th class="table-plus text-white">N°</th>
                            <th class="text-white">Prenom</th>
                            <th class="text-white">Nom</th>
                            <th class="text-white">Type</th>
                            <th class="text-white">Num Pension</th>
                            <th class="text-white">Date Naiss</th>
                            <th class="text-white">Date Jouiss</th>
                            <th class="text-white">Societe Ori</th>
                            <th class="text-white">Mnt Trim Reval (GNF)</th>
                            <th class="text-white">Mnt Mens Reval (GNF)</th>
                            <th class="text-white">Mens du</th>
                            <th class="text-white">Mnt arriérés (GNF)</th>
                            <th class="text-white">Mnt à payer (GNF)</th>
                            <th class="text-white">Mnt avance (GNF)</th>
                            <th class="text-white">Pour</th>
                            <th class="text-white">Observation</th>
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
                                {{-- <td>{!! $d->example !!}</td> --}}
                                {{-- <td>{{ DB::table('users')->where('id', $d->created_by)->value('name') }}</td> --}}
                                <td>
                                    <a class="btn btn-success" href="{{ route('payeRetraite.index', $d->id) }}">
                                        Traitement <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    </a>
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


{{-- <script>
    $(document).ready(function() {
        // new DataTable('#examplell');

     $.ajax({
         url: '/paye/test',
         type: 'GET',
         dataType: 'json',
         success: function(data) {
             console.log('baby', data);

             var table = $('#examplell').DataTable({
                 searching: true,
                 paging: true,
                 pageLength: 10,
             });


             data.forEach(function(item) {

                 table.row.add([
                     item.id ,
                     item.mois,
                     item.status,
                     item.created_by,
                     item.created_at.split("T")[0],
                     item.example,
                     ' '

                 ]).draw();
             });
         },
         error: function(error) {

             console.log(error);
         }
     });


    });

</script> --}}
<script>


    function sendForm(id){
        $("#send_echeance_retraite"+id).submit();
    }
    //  $(document).ready(function () {

    //     $('#send_echeance').on('click', function() {
    //         $("#send_echeance_form").submit();
    //     });
    //  });
</script>



@endsection
