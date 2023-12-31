<nav id="sidebar">
    <h1><a href="#" class="logo"><i class="bi bi-book-half"></i> Librarias</a></h1>
    <ul class="list-unstyled components mb-5">
        <li class="{{ Request::is('dashboards') ? 'active' : '' }}">
            <a href="/dashboards"><span class="fa fa-dashboard mr-3"></span> Main</a>
        </li>
        <li class="{{ Request::is('dashboardsBooks*') ? 'active' : '' }}">
            <a href="/dashboardsBooks"><span class="fa fa-book mr-3"></span> Books</a>
        </li>
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="/"><span class="bi bi-door-open mr-3"></span>
                Back</a>
        </li>
    </ul>

</nav>
