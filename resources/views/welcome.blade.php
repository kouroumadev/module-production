@extends('layouts.app')

@section('content')

@php
  $user = \App\Models\User::find(Auth::user()->id);
  $notif = \Illuminate\Support\Facades\DB::table('notifications')->where('notifiable_id',Auth::user()->id)->where('read_at',null)->count();
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
                    <span class=" notification-active text-white bg-danger border-radius-20">{{$notif}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            @foreach ($user->unreadNotifications as $notification)
                                <li>
                                    <a href="{{route('message.read',$notification->id)}}">
                                        <img src="{{ asset('storage/userImg/'.$user->photo) }}" alt="">
                                        <h3>{{$notification->data['from_user_name']}}</h3>
                                        <p>N° Dossier: {{$notification->data['no_dossier']}} du Departement:{{$notification->data['from_dept_name']}}</p>
                                    </a>
                                </li>
                            @endforeach
                            
                            {{-- <li>
                                <a href="#">
                                    <img src="{{ asset('theme/vendors/images/photo1.jpg') }}" alt="">
                                    <h3>Lea R. Frith</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('theme/vendors/images/photo2.jpg') }}" alt="">
                                    <h3>Erik L. Richards</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li> --}}


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        @if (Auth::user()->photo == "")
                        <img src="{{ asset('theme/vendors/images/photo1.jpg') }}" alt="">
                        @else
                        <img src="{{ asset('storage/userImg/'.Auth::user()->photo) }}" alt="">
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
                        <button class="dropdown-item" ><i class="dw dw-logout"></i> Log Out</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="github-link">
            <a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
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



                <li onclick="makeActive(this,'1')" class="my-menu my-active" id="1">
                    <a href="{{ route('dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-home"></span><span class="mtext">ACCEUIL</span>
                    </a>
                </li>

                @if (Auth::user()->dept->name == 'ADMIN' || Auth::user()->dept->name == 'DQE')
                <li onclick="makeActive(this,'2')" class="my-menu" id="2">
                    <a href="{{ route('prestation.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-home"></span><span class="mtext">PRESTATIONS</span>
                    </a>
                </li>
                @endif

                @if (Auth::user()->dept->name == 'ADMIN' || Auth::user()->dept->name == 'DIPRES')

                    @include('dipress.left-menu')

                @endif

                @if (Auth::user()->dept->name == 'ADMIN' || Auth::user()->dept->name == 'DQE')



                <li class="my-menu" onclick="makeActive(this,'3')" id="3">
                    <a href="{{ route('reclamation.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">RECLAMATION</span>
                    </a>
                </li>
                <li class="my-menu" onclick="makeActive(this,'7')" id="7">
                    <a href="{{ route('pension.show') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-diagram"></span><span class="mtext">DEMAT</span>
                    </a>
                </li>
                <li class="my-menu" onclick="makeActive(this,'4')" id="4">
                    <a href="{{ route('demande.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">DEMANDE</span>
                    </a>
                </li>
                {{-- <li class="dropdown" onclick="makeActive(this,'5')" id="5">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-list3"></span><span class="mtext">DECLARATION</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="image-cropper.html">Declaration d'Accident de Travail</a></li>
                        <li><a href="image-cropper.html">Declaration d'Accident de Trajet</a></li>
                    </ul>
                </li> --}}
                <li class="my-menu" onclick="makeActive(this,'6')" id="6">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">PROCURATION</span>
                    </a>
                </li>


                {{-- <li class="my-menu" onclick="makeActive(this,'8')" id="8">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">QUITTANCE</span>
                    </a>
                </li> --}}

                <li class="my-menu" onclick="makeActive(this,'9')" id="9">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">ASSISTANCE</span>
                    </a>
                </li>

                <li class="my-menu" onclick="makeActive(this,'10')" id="10">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-library"></span><span class="mtext">DOSSIERS DOUTEUX</span>
                    </a>
                </li>

                <li class="my-menu" onclick="makeActive(this,'11')" id="11">
                    <div class="dropdown-divider"></div>
                </li>
                @endif
                @if (Auth::user()->dept->name == 'ADMIN')


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
                        <li><a href="{{ route('fiche-decompte') }}">fiche-decompte</a></li>
                        <li><a href="{{ route('fiche-paie') }}">fiche-paie</a></li>
                        <li><a href="{{ route('carte-retraite') }}">carte-retraite</a></li>
                        
                    </ul>
                </li>
                
                @endif
                @if (Auth::user()->dept->name == 'SECRETARIAT')
                <li class="my-menu" onclick="makeActive(this,'13')" id="4">
                    <a href="{{ route('secretariat.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">DOSSIER</span>
                    </a>
                </li>
                @endif
                @if ( Auth::user()->dept->name == 'DIRGA')
                <li class="my-menu" onclick="makeActive(this,'14')" id="4">
                    <a href="{{ route('dirga.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">DOSSIER</span>
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
