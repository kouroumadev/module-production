@extends('welcome')
@section('body')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <form action="{{ route('mission.assure.info') }}" method="POST">
                @csrf
                <div class="page-header">
                    <div class="row">
                        <h4 class="text-center"> Saisissez Le Numéro d'immatriculation de l'assuré </h4>
                        <div class="col-md-8">

                            <div class="form-row align-items-center">
                                <div class="col-8">
                                    <input type="number" class="form-control mb-2" name="no_immatriculation"
                                        id="no_immatriculation" placeholder="Entrer le N° d'Immatriculation" required />
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-success mb-2">Rechercher</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </form>

        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
                Hingarajiya</a>
        </div>
    </div>
@endsection
