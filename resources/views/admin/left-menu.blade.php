<li onclick="makeActive(this,'1')" class="my-menu my-active" id="1">
    <a href="{{ route('dashboard') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-home"></span><span class="mtext">ACCEUIL</span>
    </a>
</li>
<hr>



<li>
    <div class="sidebar-small-cap">ESPACE PAYE</div>
</li>
<li class="my-menu" onclick="makeActive(this,'11155')" id="11155">
    <a href="{{ route('paye.index') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">RETRAITE</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'111555')" id="111555">
    <a href="#" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">REVERSION</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'1115555')" id="1115555">
    <a href="#" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">ALLOC DE VIEILLESSE</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'111555555')" id="111555555">
    <a href="{{ route('paye.deces') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">DÉCÈS</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'11155555555')" id="11155555555">
    <a href="{{ route('paye.suspension') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">SUSPENSION</span>
    </a>
</li>
<li>
    <div class="sidebar-small-cap">ESPACE ADMIN</div>
</li>
<li class="my-menu" onclick="makeActive(this,'22')" id="12">
    <a href="#" class="dropdown-toggle">
        <span class="micon dw dw-edit-2"></span><span class="mtext">Parametrage</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('user.index') }}">Utilisateurs</a></li>
        <li><a href="{{ route('dept.index') }}">Departements</a></li>
        {{-- <li><a href="{{ route('doc.index') }}">Documents</a></li> --}}
        {{-- <li><a href="{{ route('prest.index') }}">Prestations</a></li> --}}
        <li><a href="{{ route('echeance.index') }}">Echeance</a></li>
        {{-- <li><a href="{{ route('deadline.index') }}">DeadLine</a></li> --}}
        {{-- <li><a href="{{ route('fiche-decompte') }}">fiche-decompte</a></li>
        <li><a href="{{ route('fiche-paie') }}">fiche-paie</a></li>
        <li><a href="{{ route('carte-retraite') }}">carte-retraite</a></li> --}}

    </ul>
</li>
