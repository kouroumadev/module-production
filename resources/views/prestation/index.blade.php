@extends('welcome')

@section('body')

<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>PRESTATIONS</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href={{ route('pension.index') }}>Acceuil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Liste des Prestations</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 mb-30">
        <a href="{{ route('pension.index') }}" class="btn btn-block">
            <div class="card-box height-100-p widget-style1 bg-success">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold text-left">
                        Pension
                    </div>
                    <div class="progress-data">
                        <i class="icon-copy fa fa-users fa-3x text-white" aria-hidden="true"></i>
                    </div>
                    <small class="pl-1 text-white">heloooo babyyyyy</small>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 mb-30">
        <a href="#" class="btn btn-block">
            <div class="card-box height-100-p widget-style1 bg-success">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold text-left">
                        Assurance Maladie
                    </div>
                    <div class="progress-data">
                        <i class="icon-copy fa fa-ambulance fa-3x text-white" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 mb-30">
        <a href="#" class="btn btn-block">
            <div class="card-box height-100-p widget-style1 bg-success">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold text-left">
                        Assurance Viellesse
                    </div>
                    <div class="progress-data">
                        <i class="icon-copy fa fa-wheelchair fa-3x text-white" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 mb-30">
        <a href="#" class="btn btn-block">
            <div class="card-box height-100-p widget-style1 bg-success">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold text-left">
                        Risques Professionnels
                    </div>
                    <div class="progress-data">
                        <i class="icon-copy fa fa-warning fa-3x text-white" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>


@endsection
