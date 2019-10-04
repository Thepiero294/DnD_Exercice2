<!-- Fichier qui affiche le haut de page

@author Pier-Olivier Fontaine et Marc-Antoine Fournier
-->
<nav class="navbar navbar-expand-lg">
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">{{ __('layout.navBarAccueil') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/personnages/creer">{{ __('layout.navBarLien') }}</a>
      </li>
    </ul>
    </div>
    <span class="navbar-text titre">
    {{ __('layout.nomAuteur') }}
    </span>

</nav>
