@extends('layouts.app')

@section('content')


<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>

    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('theme/vendors/images/img.jpg') }}" alt="">
                                    <h3>John Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
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
                            </li>
                            <li>
                                <a href="#">
                                    <img src="vendors/images/photo3.jpg" alt="">
                                    <h3>John Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{ asset('theme/vendors/images/photo1.jpg') }}" alt="">
                    </span>
                    <span class="user-name">{{ Auth::user()->name }}</span>
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

{{-- <div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="weight-600 font-18 pb-10">Header Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
            <div class="sidebar-radio-group pb-10 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
                    <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
                    <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
                    <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
                </div>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
            <div class="sidebar-radio-group pb-30 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
                    <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
                    <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
                    <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
                    <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
                    <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
                    <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                </div>
            </div>

            <div class="reset-options pt-30 text-center">
                <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
            </div>
        </div>
    </div>
</div> --}}

<div class="left-side-bar bg-success">
    <div class="brand-logo bg-white">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('logos/top-logo.png') }}" alt="" class="dark-logo">
            <img src="{{ asset('logos/top-logo.png') }}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-home"></span><span class="mtext">ACCEUIL</span>
                    </a>
                </li>

                <li onclick="makeActive(this)" class="my-menu my-active">
                    <a href="{{ route('prestation.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-home"></span><span class="mtext">PRESTATIONS</span>
                    </a>
                </li>
                <li class="my-menu" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">RECLAMATION</span>
                    </a>
                </li>
                <li class="my-menu" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">DEMANDE</span>
                    </a>
                </li>
                <li class="dropdown" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-list3"></span><span class="mtext">DECLARATION</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="image-cropper.html">Declaration d'Accident de Travail</a></li>
                        <li><a href="image-cropper.html">Declaration d'Accident de Trajet</a></li>
                    </ul>
                </li>
                <li class="my-menu" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">PROCURATION</span>
                    </a>
                </li>

                <li class="my-menu" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-diagram"></span><span class="mtext">DEMAT</span>
                    </a>
                </li>
                <li class="my-menu" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">QUITTANCE</span>
                    </a>
                </li>

                <li class="my-menu" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">ASSISTANCE</span>
                    </a>
                </li>

                <li class="my-menu" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-library"></span><span class="mtext">DOSSIERS DOUTEUX</span>
                    </a>
                </li>

                <li class="my-menu" onclick="makeActive(this)">
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">ESPACE ADMIN</div>
                </li>
                <li class="my-menu" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-edit-2"></span><span class="mtext">Parametrage</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li><a href="third-party-plugins.html">Third Party Plugins</a></li>
                    </ul>
                </li>
                <li class="my-menu" onclick="makeActive(this)">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li><a href="third-party-plugins.html">Third Party Plugins</a></li>
                    </ul>
                </li>
                <li class="my-menu" onclick="makeActive(this)">
                    <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-paper-plane1"></span>
                        <span class="mtext">Landing Page <img src="vendors/images/coming-soon.png" alt="" width="25"></span>
                    </a>
                </li>
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


<script>

    function makeActive(elem) {
        // get all 'a' elements
        var a = document.getElementsByClassName('my-menu');
        // loop through all 'a' elements
        for (i = 0; i < a.length; i++) {
            // Remove the class 'active' if it exists
            a[i].classList.remove('my-active')
        }
        // add 'active' classs to the element that was clicked
        elem.classList.add('my-active');
    }

</script>


@endsection
