<li onclick="makeActive(this,'1')" class="my-menu my-active" id="1">
    <a href="{{ route('dashboard') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-home"></span><span class="mtext">ACCEUIL</span>
    </a>
</li>
<li onclick="makeActive(this,'2')" class="my-menu" id="2">
    <a href="{{ route('prestation.index') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-home"></span><span class="mtext">PRESTATIONS</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'3')" id="3">
    <a href="{{ route('reclamation.index') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">RECLAMATION</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'4')" id="7">
    <a href="{{ route('pension.show') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-diagram"></span><span class="mtext">DEMAT</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'5')" id="4">
    <a href="{{ route('demande.index') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">DEMANDE</span>
    </a>
</li>

<li class="my-menu" onclick="makeActive(this,'6')" id="6">
    <a href="#" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">PROCURATION</span>
    </a>
</li>

<li class="my-menu" onclick="makeActive(this,'7')" id="9">
    <a href="#" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">ASSISTANCE</span>
    </a>
</li>

<li class="my-menu" onclick="makeActive(this,'8')" id="10">
    <a href="#" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-library"></span><span class="mtext">DOSSIERS DOUTEUX</span>
    </a>
</li>

<li class="my-menu" onclick="makeActive(this,'9')" id="11">
    <div class="dropdown-divider"></div>
</li>
