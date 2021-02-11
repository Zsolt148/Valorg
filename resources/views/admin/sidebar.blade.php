<ul id="myTab2" class="nav nav-pills boot-tabs my-4">
    <li class="nav-item"><a class="nav-link disabled" href="#">Admin menü:</a></li>

    <li class="nav-item dropdown ml-2">
        <a class="nav-link dropdown-toggle @if(Route::is('admin.news.*')) active @endif" href="#" id="race" data-toggle="dropdown">Hírek</a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="race">
            <a class="dropdown-item @if(Route::is('admin.news.index')) active @endif" href="{{ route('admin.news.index') }}" tabindex="-1" >Hírek szerkesztése</a>
            <a class="dropdown-item @if(Route::is('admin.news.create')) active @endif" href="{{ route('admin.news.create') }}" tabindex="-1" >Hír létrehozása</a>
        </ul>
    </li>

    <li class="nav-item dropdown ml-2">
        <a class="nav-link dropdown-toggle @if(Route::is('admin.files.*')) active @endif" href="#" id="race" data-toggle="dropdown">Fájlok</a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="race">
            <a class="dropdown-item @if(Route::is('admin.files.index')) active @endif" href="{{ route('admin.files.index') }}" tabindex="-1" >Feltöltött fájlok szerkesztése</a>
            <a class="dropdown-item @if(Route::is('admin.files.create')) active @endif" href="{{ route('admin.files.create') }}" tabindex="-1" >Fájlok feltöltése</a>
        </ul>
    </li>

    <li class="nav-item ml-2"><a class="nav-link @if(Route::is('admin.forms.index')) active @endif" href="{{ route('admin.forms.index') }}">Nyomtatványok</a></li>

    <li class="nav-item ml-2"><a class="nav-link @if(Route::is('admin.companies.index')) active @endif" href="{{ route('admin.companies.index') }}">Cégek</a></li>

    <li class="nav-item ml-2"><a class="nav-link @if(Route::is('admin.links.index')) active @endif" href="{{ route('admin.links.index') }}">Linkek</a></li>
</ul>
