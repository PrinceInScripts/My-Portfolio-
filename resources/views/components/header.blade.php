<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/home" >@scriptxprince</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="/about">About</a></li>
							<li class="nav-item"><a class="nav-link" href="/service">Services</a></li>
							<li class="nav-item"><a class="nav-link" href="/project">Projects</a></li>
							<li class="nav-item">
								<a href="/blog" class="nav-link">Blog</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<script>
  const currentPath = window.location.pathname;
  console.log(currentPath);
  
  document.querySelectorAll('.menu_nav .nav-link').forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
</script>