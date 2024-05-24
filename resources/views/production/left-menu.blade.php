<li class="my-menu" onclick="makeActive(this,'17766')" id="17766">
    <a href="#" class="dropdown-toggle">
        <span class="micon dw dw-edit-2"></span><span class="mtext">PRODUCTION</span>
    </a>
    <ul class="submenu">
        @if(Auth::user()->dept->name == 'DIPRES')
            <li><a href="{{ route('prod.nc.create') }}">Nouvelle Concession</a></li>
        @endif
        <li><a href="{{ route('prod.ac.index') }}">Retraite</a></li>
    </ul>
</li>
