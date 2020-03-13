<header id="topnav">

    <!-- Topbar Start -->
    <div class="navbar-custom">
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
                            <?php echo e(Auth::user()->name); ?> <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Bienvenue !</h6>
                        </div>

                        <!-- item-->
                        <a href="<?php echo e(route('profile')); ?>" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Mon compte</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fe-log-out"></i>
                            <span>Se déconnecter</span>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="/" class="logo text-center">
                    <span class="logo-lg">
                        L'Atelier Cycleurope
                        <!-- <span class="logo-lg-text-light">UBold</span> -->
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
                        <a href="<?php echo e(route('admin.dashboard')); ?>"><i class="mdi mdi-view-dashboard"></i>Tableau de bord</a>
                    </li>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>

                    <li class="has-submenu">
                        <a href="#">Formations<div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('admin.masterclasses.index')); ?>">Prochaines formations</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.masterclasses.archives')); ?>">Formations passées</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.masterclasses.create')); ?>" class="text-success"><i class="mdi mdi-plus-circle-outline"></i> Nouvelle formation</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="<?php echo e(route('admin.feedbacks.index')); ?>">Retours de formation</a>
                                    </li>
                                    <?php if(App\Models\Masterclass::archive()->count() > 0): ?>
                                    <li>
                                        <a href="<?php echo e(route('admin.feedbacks.create')); ?>" class="text-success"><i class="mdi mdi-plus-circle-outline"></i> Nouveau Retour de formation</a>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Librairie<div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('admin.brands.index')); ?>">Marques</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.products.index')); ?>">Produits</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.seasons.index')); ?>">Saisons</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.families.index')); ?>">Familles</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="<?php echo e(route('admin.documents.index')); ?>">Documents Techniques</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.doctypes.index')); ?>">Types de documents</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-comment-question-outline"></i> F.A.Q.<div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('admin.faq.index')); ?>">Tous les questions</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="<?php echo e(route('admin.faq.create')); ?>" class="text-success"><i class="mdi mdi-plus-circle-outline"></i> Nouvelle question</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Comptes Clients <div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('admin.users.index')); ?>">Tous les comptes</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="<?php echo e(route('admin.passwords.import.form')); ?>">Importer des mots de passe M3</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo e(route('admin.videos.index')); ?>"><i class="mdi mdi-movie-outline"></i> Vidéos</a>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo e(route('admin.weblinks.index')); ?>"><i class="mdi mdi-movie-outline"></i> Liens Web</a>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo e(route('admin.phonebook.index')); ?>"><i class="mdi mdi-library-books"></i> Annuaire</a>
                    </li>

                    <?php endif; ?>


                </ul>
                <!-- End navigation menu -->
                <ul class="navigation-menu float-right">    

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>

                    <li class="has-submenu">
                        <a href="#">Utilisateurs <div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('admin.users.cycleurope')); ?>">Tous les comptes utilisateurs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.users.withrole', 'admin')); ?>">Administrateurs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.users.withrole', 'support')); ?>">Support</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.users.withrole', 'sales')); ?>">Agents Commerciaux</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.users.create')); ?>" class="text-success">Nouveau compte utilisateur</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Statistiques  <div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('stats.logins.index')); ?>">Historiques de connexions</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('stats.logins.most-active')); ?>">Utilisateurs les plus actifs</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <?php endif; ?>


                </ul>

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->

</header><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/layouts/header/header.blade.php ENDPATH**/ ?>