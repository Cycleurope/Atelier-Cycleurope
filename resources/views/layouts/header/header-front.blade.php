<header id="topnav">

    <!-- Topbar Start -->
    <div class="navbar-custom" style="background-color: #a0978a;">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>


                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ml-1">
                            {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Bienvenue !</h6>
                        </div>

                        <!-- item-->
                        <a href="{{ route('profile') }}" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Mon compte</span>
                        </a>
                        <a href="{{ route('favorites') }}" class="dropdown-item notify-item">
                            <i class="fe-heart text-danger"></i>
                            <span>Mes favoris</span>
                        </a>
                        <a href="{{ route('front.masterclasses.records') }}" class="dropdown-item notify-item">
                            <i class="mdi mdi-teach"></i>
                            <span>Mes inscriptions</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fe-log-out"></i>
                            <span>Se déconnecter</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="/" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{ asset('img/horizontal-logo.png') }}" alt="" height="30">
                    </span>
                    <span class="logo-sm">
                    </span>
                </a>
            </div>

        </div> <!-- end container-fluid-->
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu ">

                    <li class="has-submenu">
                        <a href="{{ route('home') }}"><i class="mdi mdi-view-dashboard"></i>Tableau de bord</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-teach"></i> Formations<div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="{{ route('front.masterclasses.index') }}">Toutes les formations</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fe-heart mr-1 text-danger"></i>Favoris</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.feedbacks.index') }}"><i class="mdi mdi-book-outline mr-1 text-purple"></i>Retours de formation</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route('front.masterclasses.records') }}">Mes inscriptions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-bike"></i> Vues Eclatées<div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="{{ route('front.explodedviews.index') }}">Toutes les vues éclatées</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.explodedviews.favorites') }}"><i class="fe-heart mr-1 text-danger"></i>Favoris</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi mdi-file-document-box-multiple-outline"></i> Documents Techniques<div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="{{ route('front.documents.index') }}">Tous les documents</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.documents.favorites') }}"><i class="fe-heart mr-1 text-danger"></i>Favoris</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('front.faq.index') }}"><i class="mdi mdi-comment-question-outline"></i> F.A.Q.</a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('front.videos.index') }}"><i class="mdi mdi-movie-outline"></i> Vidéos</a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('front.phonebook.index') }}"><i class="mdi mdi-library-books"></i> Annuaire</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi mdi-file-document-box-multiple-outline"></i> Espace Garantie<div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="{{ route('front.warranties.index') }}">Tous mes demandes</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.warranties.create') }}">Nouvelle demande</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                </ul>

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->

</header>