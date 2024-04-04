@extends('welcome')

<style>
    a {
        text-decoration: none !important;
    }

    #card-header-recap-conj1 {
        margin-bottom: 10px;
    }

    #card-header-recap-conj2 {
        background-color: transparent !important;
        color: black;

    }
    a[href="#finish"],a[href="#finish"]:hover{
        background-color: transparent !important;
        display: none;
    }
</style>





@section('body')

    <div class="page-header shadow-lg">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>RECLAMATION</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('reclamation.index') }}">Reclamation</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{-- @if (isset($type_pension))
                                {{ $type_pension }}
                            @else --}}
                                Avance sur Pension
                            {{-- @endif --}}

                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <hr>

    <form id="form-get-pension" action="{{ route('reclamation.info') }}" method="POST">
        <div class="row justify-content-center">

            @csrf
            <input type="hidden" name="type_pension" value="reclamation">
            
            <div class="col-md-8">

                <div class="form-row align-items-center">
                    <div class="col-8">
                        <input type="text" class="form-control mb-2" name="no_pension" id="no_pension"
                            placeholder="Entrer le Numero de Pension" required />
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-success mb-2">Rechercher</button>
                    </div>
                </div>

            </div>

        </div>
    </form>
    <hr>
    @endsection