  <nav id="nav">
    <div class="nav-wrapper">
      <a class="text-uppercase text-center brand-logo"><img src="/assets/img/icons/layers.png" width="50px" alt="demo">Menu</a>
	  <a href="#mobile-demo" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li <?php if ($pagina =="home") {?>class="active" <?php } ?>><a href="/">Start</a></li>
        <li <?php if ($pagina =="opleiding") {?>class="active" <?php } ?>><a href="/opleiding">Opleiding</a></li>
        <li <?php if ($pagina =="vaardigheden") {?>class="active" <?php } ?>><a href="/vaardigheden">Vaardigheden</a></li>
        <li <?php if ($pagina =="ervaring") {?>class="active" <?php } ?>><a href="/ervaring">Ervaring</a></li>
        <li <?php if ($pagina =="foto") {?>class="active" <?php } ?>><a href="/foto">Foto-album</a></li>
        <li <?php if ($pagina =="muziek") {?>class="active" <?php } ?>><a href="/muziek">Muziek</a></li>
        <li <?php if ($pagina =="blog") {?>class="active" <?php } ?>><a href="/blog">Blog</a></li>
		<li>
		<form method=get action="https://www.google.com/search">
				<input type=text name=q size=20 id="searchingid" maxlength=255 value="" placeholder="Zoeken..." required>
				<button class="searchb" for="searchingid"><i class="material-icons">search</i></button>
		</form>
	  </li>
      </ul>
	  <ul class="side-nav" id="mobile-demo">
        <li <?php if ($pagina =="home") {?>class="active" <?php } ?>><a href="/">Start</a></li>
        <li <?php if ($pagina =="opleiding") {?>class="active" <?php } ?>><a href="/opleiding">Opleiding</a></li>
        <li <?php if ($pagina =="vaardigheden") {?>class="active" <?php } ?>><a href="/vaardigheden">Vaardigheden</a></li>
        <li <?php if ($pagina =="ervaring") {?>class="active" <?php } ?>><a href="/ervaring">Ervaring</a></li>
        <li <?php if ($pagina =="foto") {?>class="active" <?php } ?>><a href="/foto">Foto-album</a></li>
        <li <?php if ($pagina =="muziek") {?>class="active" <?php } ?>><a href="/muziek">Muziek</a></li>
        <li <?php if ($pagina =="blog") {?>class="active" <?php } ?>><a href="/blog">Blog</a></li>
		<li>
		<form method=get class="center" action="https://www.google.com/search">
				<input class="side" type=text name=q size=20 id="searchingid1" maxlength=255 value="" placeholder="Zoeken..." required>
				<button class="searchb" for="searchingid1"><i class="material-icons side">search</i></button>
		</form>
	  </li>
      </ul>
    </div>
  </nav>