@extends('welcome')

@section('body')

<div class="row">
    <div class="col-xl-3 mb-30">
        <a href="{{ route('pension.index') }}" class="btn btn-block">
            <div class="card-box bg-success height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold">
                        Pension
                    </div>
                    <div class="progress-data">
                        <i class="icon-copy fa fa-users fa-3x text-white" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 mb-30">
        <a href="#" class="btn btn-block">
            <div class="card-box bg-success height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold">
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
            <div class="card-box bg-success height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold">
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
            <div class="card-box bg-success height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="widget-data text-white text-uppercase font-weight-bold">
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
