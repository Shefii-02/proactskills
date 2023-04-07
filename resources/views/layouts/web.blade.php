<!DOCTYPE html>
<html lang="en">
<head>
	<title>Proactskills.com</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">


	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    @yield('styles')
</head>

<body>

<!-- Header START -->
<header class="navbar-light navbar-sticky">
	<!-- Nav START -->
	<nav class="navbar navbar-expand-xl z-index-9">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="{{url('assets/images/logo.png')}}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{url('assets/images/logo-2.png')}}" alt="logo">
			</a>
			<!-- Logo END -->
	
	
			<!-- Profile and notification START -->
			<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

				
                <!-- sign out END -->
					@auth
					<!-- Profile dropdown START -->
						<li class="nav-item ms-3 dropdown d-none d-sm-block">
							<!-- Avatar -->
							<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
								<img class="avatar-img rounded-circle" src="{{auth()->user()->image ?? url("assets/images/avatar/01.jpg")}}" alt="avatar">
							</a>
							
							<!-- Profile dropdown START -->
							<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
								<!-- Profile info -->
								<li class="px-3 mb-3">
									<div class="d-flex align-items-center">
										<!-- Avatar -->
										<div class="avatar me-3">
											<img class="avatar-img rounded-circle shadow" src="{{auth()->user()->image ?? url("assets/images/avatar/01.jpg")}}" alt="avatar">
										</div>
										<div>
											<a class="h6" href="#">{{auth()->user()->name}}</a>
											<p class="small m-0">{{auth()->user()->email}}</p>
										</div>
									</div>
								</li>
								<!-- Links -->
								<li> <hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="{{route('profile')}}"><i class="bi bi-person fa-fw me-2"></i>Profile</a></li>
								<li><a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}"
									onclick="event.preventDefault();   document.getElementById('logout-form').submit();"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>  
								</li>
								<li> <hr class="dropdown-divider"></li>
								<!-- Dark mode options START -->
								<li class="nav-item ms-0 ms-sm-2 d-none1 d-sm-block">
							

									<div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
										<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
												<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
												<use href="#"></use>
											</svg> 
										</button>
										<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
												<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
												<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
												<use href="#"></use>
											</svg> 
										</button>
										
									</div>
								</li>
								<!-- Dark mode options END-->
							</ul>
							<!-- Profile dropdown END -->
						</li>
					@else
						<!-- sign in START -->
						<li class="nav-item ms-0 me-2 ms-sm-2 d-none1 d-sm-block">
							<a href="{{ route('sign-in') }}" class="btn btn-sm btn-dark mb-0"><i class="bi bi-power me-2"></i>Sign In</a>
						</li>
						<!-- sign out END -->


						<!-- sign in START -->
						<li class="nav-item ms-0 me-2 ms-sm-2 d-none1 d-sm-block">
						
						</li>
						<li class="nav-item ms-0 ms-sm-2 d-none1 d-sm-block">
							<div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
								<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
										<use href="#"></use>
									</svg> 
								</button>
								<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
										<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
										<use href="#"></use>
									</svg> 
								</button>
							</div>
						</li>
					@endauth
			</ul>
			<!-- Profile and notification END -->
		</div>
	</nav>
	<!-- Nav END -->

</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
	@yield('contents')

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer>
	<div class="container">
		<div class="row mx-auto">
			<div class="col-lg-6 mx-auto text-center my-5">
				<!-- logo -->
					<a class="me-0 mb-3 text-center" href="index-2.html">
						<img class="light-mode-item mx-auto h-40px" src="assets/images/logo.png" alt="logo">
						<img class="dark-mode-item mx-auto h-40px" src="assets/images/logo.png" alt="logo">
					</a>
				<p class="mt-3">Proactskills built specifically for the education centers which is dedicated to teaching and involving learners.</p>
				<!-- Links -->
       
				<!-- Social media button -->
				<ul class="list-inline mb-0 social-media-btn mt-3">
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
				</ul>
				<!-- Bottom footer link -->
				<div class="mt-3">©2023 <a href="#" class="text-reset btn-link text-primary-hover" target="_blank">Proactskills</a>. All rights reserved. </div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>
    @yield('scripts')
</body>
</html>