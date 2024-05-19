<li onclick="makeActive(this,'1')" class="my-menu my-active" id="1">
    <a href="{{ route('dashboard') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-home"></span><span class="mtext">ACCEUIL</span>
    </a>
</li>
<hr>
<li>
    <div class="sidebar-small-cap">ESPACE MISSION</div>
</li>
<li onclick="makeActive(this,'2')" class="my-menu" id="2">
    <a href="{{ route('mission.index') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-home"></span><span class="mtext">Recherche Assuré</span>
    </a>
</li>
<li>
    <div class="sidebar-small-cap">ESPACE DQE</div>
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

<li>
    <div class="sidebar-small-cap">ESPACE DIPRES</div>
</li>

<li class="my-menu" onclick="makeActive(this,'10')" id="17">
    <a href="#" class="dropdown-toggle">
        <span class="micon dw dw-edit-2"></span><span class="mtext">DOSSIER</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('dipress.vieillesse') }}">Tous les dossiers</a></li>
        <li><a href="{{ route('dipress.maladie') }}">Reception</a></li>
        <li><a href="{{ route('dipress.prestation') }}">Transfert</a></li>
        <li><a href="{{ route('dipress.risque') }}">Acceptation</a></li>
        <li><a href="{{ route('dipress.risque') }}">Rejet</a></li>
        <li><a href="{{ route('dipress.risque') }}">Reouverture de dossier</a></li>

    </ul>
</li>
<li class="my-menu" onclick="makeActive(this,'11')" id="111">
    <a href="{{ route('etude.index') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">SALARIE</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'12')" id="17">
    <a href="#" class="dropdown-toggle">
        <span class="micon dw dw-edit-2"></span><span class="mtext">IMMATRICULATION</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('dipress.vieillesse') }}">Pensionne</a></li>
        <li><a href="{{ route('dipress.maladie') }}">Conjoint(s) Pensionne</a></li>
        <li><a href="{{ route('dipress.prestation') }}">Enfant(s) Pensionne</a></li>
        <li><a href="{{ route('dipress.risque') }}">Beneficiaire</a></li>
        <li><a href="{{ route('dipress.risque') }}">Mandataire</a></li>

    </ul>
</li>
<li class="my-menu" onclick="makeActive(this,'13')" id="17">
    <a href="#" class="dropdown-toggle">
        <span class="micon dw dw-edit-2"></span><span class="mtext">GESTION PENSION</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('dipress.vieillesse') }}">Decompte</a></li>
        <li><a href="{{ route('dipress.maladie') }}">Activation de pension</a></li>
        <li><a href="{{ route('dipress.prestation') }}">Generation Droit</a></li>
        <li><a href="{{ route('dipress.risque') }}">Generation ecritures comptables</a></li>
        <li><a href="{{ route('dipress.risque') }}">Edition</a></li>
        <li><a href="{{ route('dipress.risque') }}">Les Droits</a></li>
        <li><a href="{{ route('dipress.risque') }}">Compte beneficiaire</a></li>
        <li><a href="{{ route('dipress.risque') }}">Avance Pension</a></li>
        <li><a href="{{ route('dipress.risque') }}">Annulation Liquidation</a></li>

    </ul>
</li>
<li class="my-menu" onclick="makeActive(this,'14')" id="17">
    <a href="#" class="dropdown-toggle">
        <span class="micon dw dw-edit-2"></span><span class="mtext">PRESTATIONS</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('dipress.vieillesse') }}">Assurances Vieilesse</a></li>
        <li><a href="{{ route('dipress.maladie') }}">Assurances Maladies</a></li>
        <li><a href="{{ route('dipress.prestation') }}">Prestations familiales</a></li>
        <li><a href="{{ route('dipress.risque') }}">Risques Professionnels</a></li>

    </ul>
</li>
<li class="my-menu" onclick="makeActive(this,'15')" id="17">
    <a href="#" class="dropdown-toggle">
        <span class="micon dw dw-edit-2"></span><span class="mtext">COMPTABILITE</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('dipress.vieillesse') }}">Assurances Vieilesse</a></li>
        <li><a href="{{ route('dipress.maladie') }}">Assurances Maladies</a></li>
        <li><a href="{{ route('dipress.prestation') }}">Prestations familiales</a></li>
        <li><a href="{{ route('dipress.risque') }}">Risques Professionnels</a></li>

    </ul>
</li>
<li class="my-menu" onclick="makeActive(this,'16')" id="111">
    <a href="{{ route('etude.index') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">TABLEAU DE BORD</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'17')" id="111">
    <a href="{{ route('etude.index') }}" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">ETUDE DE DOSSIER</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'18')" id="112">
    <a href="#" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">DECOMPTE</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'19')" id="113">
    <a href="#" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">NOUVELLE CONCESSION</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'20')" id="114">
    <a href="#" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">BIOMETRIE</span>
    </a>
</li>
<li class="my-menu" onclick="makeActive(this,'21')" id="115">
    <a href="#" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-edit2"></span><span class="mtext">ANCIENNE CONCESSION</span>
    </a>
</li>
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
        <li><a href="{{ route('doc.index') }}">Documents</a></li>
        <li><a href="{{ route('prest.index') }}">Prestations</a></li>
        <li><a href="{{ route('echeance.index') }}">Echeance</a></li>
        <li><a href="{{ route('deadline.index') }}">DeadLine</a></li>
        <li><a href="{{ route('fiche-decompte') }}">fiche-decompte</a></li>
        <li><a href="{{ route('fiche-paie') }}">fiche-paie</a></li>
        <li><a href="{{ route('carte-retraite') }}">carte-retraite</a></li>

    </ul>
</li>
