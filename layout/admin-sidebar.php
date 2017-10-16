<div class="admin-sidebar">
    <div class="header">
        <a href="index.php" class="dashboard-label"><img src="img/logo.png" height="40"></a>
    </div>
    <?php if (isset($_GET['s']) && ($_GET['s'] == 'e')): ?>
        <ul class="sidebar-menu">
            <li><a href="entreprise-profile.php"><i class="fa fa-user fa-lg"></i>Mon profil</a></li>
            <li><a href="entreprise-fiche.php"><i class="fa fa-clipboard fa-lg"></i>Fiche entreprise</a></li>
            <li><a href="#"><i class="fa fa-calendar fa-lg"></i>Mes événements</a></li>
            <li><a href="#"><i class="fa fa-bullhorn fa-lg"></i>Mes publicités</a></li>
        </ul>
    <?php elseif(isset($_GET['s']) && ($_GET['s'] == 'a')):?>
        <ul class="sidebar-menu">
            <li><a href="#"><i class="fa fa-dashboard fa-lg"></i>Tableau de bord</a></li>
            <li><a href="#"><i class="fa fa-users fa-lg"></i>Utilisateurs</a></li>
            <li><a href="#"><i class="fa fa-building fa-lg"></i>Entreprises</a></li>
            <li><a href="#"><i class="fa fa-calendar fa-lg"></i>Événements</a></li>
            <li><a href="#"><i class="fa fa-bullhorn fa-lg"></i>Publicités</a></li>
            <li><a href="#"><i class="fa fa-photo fa-lg"></i>Médias</a></li>
            <li><a href="#" data-toggle="collapse" data-target="#parametres"><i class="fa fa-cog fa-lg"></i>Paramètres <i class="fa fa-caret-down pull-right"></i></a>
                <ul id="parametres" class="collapse list-unstyled">
                    <li><a href="#">Villes</a></li>
                    <li><a href="#">Quartiers</a></li>
                </ul>
            </li>

        </ul>
    <?php else:?>
        <ul class="sidebar-menu">
            <li><a href="entreprise-fiche.php"><i class="fa fa-clipboard fa-lg"></i>Fiche entreprise</a></li>
            <li><a href="admin-medias.php"><i class="fa fa-photo fa-lg"></i>Médias</a></li>
            <li><a href="#"><i class="fa fa-calendar fa-lg"></i>Mes événements</a></li>
            <li><a href="#"><i class="fa fa-bullhorn fa-lg"></i>Mes publicités</a></li>
            <li><a href="entreprise-profile.php"><i class="fa fa-user fa-lg"></i>Mon profil</a></li>
            <li><a href="parametres-referentiels.php"><i class="fa fa-copy fa-lg"></i>Références</a></li>
            <li><a href="parametres-formulaires.php"><i class="fa fa-pencil fa-lg"></i>Formulaires</a></li>
        </ul>
    <?php endif;?>
</div>