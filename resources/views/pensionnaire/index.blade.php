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
                    <li class="breadcrumb-item active" aria-current="page">Gestion des Pensions</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<hr>
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="form-group">
            <select class=" form-control" data-style="btn-outline-success" data-size="5">
                <option selected>Selectionner le type de pension</option>
                <option value="Retraite">Retraite</option>
                <option value="reversion">Reversion</option>
                <option value="Invalidite">Invalidite</option>
                <option value="allocation de vieillesse">allocation de vieillesse</option>
                <option value="Deces en Activite">Deces en Activite</option>
                <option value="Pensions Temporaires d'Orphelin">Pensions Temporaires d'Orphelin</option>

            </select>
        </div>
    </div>
    <div class="col-md-8">
        <form id="form-get-pension" action="{{ route('pensionnaire.info') }}" method="POST">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-8">
                    <input type="text" class="form-control mb-2" name="no_immatriculation" id="no_immatriculation" placeholder="Entrer le N° d'Immatriculation ou de Pension" />
                </div>

                <div class="col-auto">
                <button type="submit" class="btn btn-success mb-2">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>

@if ($errors->any())
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops...!</strong> Ce N° d'Immatriculation n'existe pas dans la base de données de la CNSS
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif






{{-- <script>
    function getInfoPension() {
        //// ROUTE FOR GETTING EMPLOYES INFO TO METIER DATABASE

            var no_immatriculation = $("#no_immatriculation").val()
        //  alert(no_immatriculation)
        $.ajax({
                    type: 'GET',
                    url: "{{route('pensionnaire.info')}}",
                    dataType: 'json',
                    data:{no_immatriculation:no_immatriculation},
                    beforeSend: function(){
                        $("#loader").show();
                        // alert("sending.....")
                    },
                    complete: function(){
                        $("#loader").hide();
                        // alert("sent..")
                    },
                    success: function(data) {

                        if (data == "not exist") {
                                    Swal.fire({
                            title: 'Error!',
                            text: 'Ce Numero d\'immatriculation n\'existe pas',
                            icon: 'error',

                            })


                        }
                        else{
                            $("#employe-wrapper").removeClass('d-none')
                            $("#no_immat_disp").val(data.employe[0].no_employe)
                            $("#prenom_employe").val(data.employe[0].prenoms)
                            $("#nom_employe").val(data.employe[0].nom)
                            $("#date_naissance").val(data.employe[0].date_naissance)
                            $("#lieu_naissance").val(data.employe[0].lieu_naissance)
                            $("#prefecture").val(data.employe[0].code_prefecture)
                            $("#statut").val(data.employe[0].statut)

                            $("#no_employeur").val(data.employeur[0].no_employeur)
                            $("#raison_sociale").val(data.employeur[0].raison_sociale)
                            $("#categorie").val(data.employeur[0].categorie)
                            var html =""
                            $("#conj-enf").empty();
                            $.each(data.employeDetails,function(index,value){

                                $("#conj-enf").append(`<div class="accordion-item">
                                <h2 class="accordion-header" id="heading">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="true" aria-controls="collapseOne">`
                                    +value.conjoint_name+
                                 ` </button>
                                </h2>
                                <div id="collapse" class="accordion-collapse collapse show" aria-labelledby="heading" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                                </tr>
                                            </thead>
                                            <tbody>`

                                           ` </tbody>
                                    </table>

                                  </div>
                                </div>
                            </div>`);
                            });
                             console.log(data.employeDetails)
                        }

                    }
                })
    }
</script> --}}

@endsection
