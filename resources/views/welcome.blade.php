@extends('layouts.app')

@section('content')
    @php
        //   $user = \App\Models\User::find(Auth::user()->dept_id);
        $user_dept_id = Auth::user()->dept_id;
        //   $notif = \Illuminate\Support\Facades\DB::table('notifications')->where('notifiable_id',Auth::user()->id)->where('read_at',null)->count();
        $notif = \App\Models\Transfer::where('to_dept', $user_dept_id)->where('read_at', null)->get();
        $notif_count = \App\Models\Transfer::where('to_dept', $user_dept_id)->where('read_at', null)->count();
        //dd($notif);
    @endphp
    <div class="header" style="background: rgb(4, 147, 16)">
        <div class="header-left">
            <h5 class="text-white">Departement: {{ Auth::user()->dept->name }}</h5>

        </div>
        <div class="header-right">
            {{-- <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div> --}}
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification text-white"></i>
                        <span class=" notification-active text-white bg-danger border-radius-20">{{ $notif_count }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                @foreach ($notif as $notification)
                                    <li>
                                        <a href="{{ route('pension.details', $notification->doc_id) }}">
                                            <img src="{{ asset('storage/userImg/' . $notification->users->photo) }}"
                                                alt="">
                                            <h3>{{ $notification->users->name }}</h3>
                                            <p>N° Dossier: {{ $notification->doc->no_dossier }} du
                                                Departement:{{ $notification->from->name }}</p>
                                        </a>
                                    </li>
                                @endforeach




                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            @if (Auth::user()->photo == '')
                                <img src="{{ asset('theme/vendors/images/photo1.jpg') }}" alt="">
                            @else
                                <img src="{{ asset('storage/userImg/' . Auth::user()->photo) }}" alt="">
                            @endif

                        </span>
                        <span class="user-name text-white">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <form action="{{ route('user.logout') }}" method="POST">

                            @csrf
                            <button class="dropdown-item"><i class="dw dw-logout"></i> Log Out</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="github-link">
                <a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg"
                        alt=""></a>
            </div>
        </div>
    </div>



    <div class="left-side-bar" style="background: rgb(4, 147, 16)">
        <div class="brand-logo">
            <a href="{{ route('dashboard') }}">
                {{-- <img src="{{ asset('logos/top-logo.png') }}" alt="" class="dark-logo bg-danger"> --}}
                <img src="{{ asset('logos/top-logo.png') }}" alt="" class="light-logo bg-white rounded p-1">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">

                    @if (Auth::user()->dept->name == 'DQE')
                        @include('dqe.left-menu')
                    @endif

                    @if (Auth::user()->dept->name == 'DIPRES')
                        @include('dipress.left-menu')
                    @endif

                    @if (Auth::user()->dept->name == 'PAYE')
                        @include('paye.left-menu')
                    @endif
                    @if (Auth::user()->dept->name == 'ADMIN')
                        @include('admin.left-menu')
                    @endif


                    {{-- @if (Auth::user()->dept->name == 'ADMIN')
                        <li>
                            <div class="sidebar-small-cap">ESPACE ADMIN</div>
                        </li>
                        <li class="my-menu" onclick="makeActive(this,'12')" id="12">
                            <a href="#" class="dropdown-toggle">
                                <span class="micon dw dw-edit-2"></span><span class="mtext">Parametrage</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="{{ route('user.index') }}">Utilisateurs</a></li>
                                <li><a href="{{ route('dept.index') }}">Departements</a></li>
                                <li><a href="{{ route('doc.index') }}">Documents</a></li>
                                <li><a href="{{ route('prest.index') }}">Prestations</a></li>
                                <li><a href="{{ route('echeance.index') }}">Echeance</a></li>
                                <li><a href="{{ route('fiche-decompte') }}">fiche-decompte</a></li>
                                <li><a href="{{ route('fiche-paie') }}">fiche-paie</a></li>
                                <li><a href="{{ route('carte-retraite') }}">carte-retraite</a></li>

                            </ul>
                        </li>
                    @endif --}}
                    @if (Auth::user()->dept->name == 'SECRETARIAT')
                        <li class="my-menu" onclick="makeActive(this,'13')" id="4">
                            <a href="{{ route('secretariat.index') }}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-edit2"></span><span class="mtext">DOSSIER</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->dept->name == 'DIRGA')
                        <li class="my-menu" onclick="makeActive(this,'14')" id="4">
                            <a href="{{ route('dirga.index') }}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-edit2"></span><span class="mtext">DOSSIER</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->dept->name == 'AT')
                        <li class="my-menu" onclick="makeActive(this,'15')" id="4">
                            <a href="{{ route('at.index') }}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-edit2"></span><span class="mtext">DOSSIER</span>
                            </a>
                        </li>
                        <li class="my-menu" onclick="makeActive(this,'16')" id="4">
                            <a href="{{ route('at.index') }}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-edit2"></span><span class="mtext">IJ et Frais</span>
                            </a>
                        </li>
                        <li class="my-menu" onclick="makeActive(this,'17')" id="4">
                            <a href="{{ route('at.index') }}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-edit2"></span><span class="mtext">AT Mortel</span>
                            </a>
                        </li>
                        <li class="my-menu" onclick="makeActive(this,'18')" id="4">
                            <a href="{{ route('at.index') }}" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-edit2"></span><span class="mtext">AT Non Mortel</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>


    <div class="main-container">
        <div class="pd-ltr-20">
            @yield('body')
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script> --}}
    <script>
        $(document).ready(function() {
            var a = document.getElementsByClassName('my-menu');
            for (i = 0; i < a.length; i++) {
                a[i].classList.remove('my-active')
            }

            setClass();
        });

        function makeActive(elem, val) {
            var a = document.getElementsByClassName('my-menu');
            for (i = 0; i < a.length; i++) {
                a[i].classList.remove('my-active')
            }
            elem.classList.add('my-active');
            localStorage.setItem('activeClass', val);
        }

        function setClass() {
            var activeClass = localStorage.getItem('activeClass');
            if (activeClass) {
                console.log(activeClass);
                document.getElementById(activeClass).classList.add('my-active')
                // $("#accordion-menu li").addClass(activeClass);
            }
        }
    </script>
@endsection
