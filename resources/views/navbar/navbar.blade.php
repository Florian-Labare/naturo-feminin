<nav id="main-nav"
     class="bg-white max-w-7xl mx-auto font-poppins p-4 flex items-center justify-between lg:text-grey"
>
    <div class="logo w-24 md:w-32">
        <img
            src="{{url('/images/logo.png')}}"
        />
    </div>
    <div class="toggle">
        <i class="fas fa-bars ouvrir"></i>
        <i class="fas fa-times fermer" style=" color: #f7cac5;"></i>
    </div>
    <ul class="menu">
        <li>
            <div class="group">
                <a href="#prestations-container" class="nav-link uppercase" data-tab>Prestations</a>
                @include('navbar.dropDownPrestationsItem')
            </div>
        </li>
        <li>
            <a href="#prestations-container" class="nav-link uppercase" data-tab>Vos enjeux</a>
        </li>
        <li>
            <div class="group">
                <a href="#" class="nav-link uppercase" data-tab>A propos</a>
                @include('navbar.dropDownAproposItem')
            </div>
        </li>
        <li>
            <a href="#" class="nav-link uppercase" data-tab>Contact</a>
        </li>
    </ul>
</nav>
