<nav class="navigation">
	<div class="navigation__wrapper">
		<div class="navigation__header">
			<a href="/home" class="navigation__title">
				<h1 class="navigation__title-text">Wolfsvale</h1>
			</a>
			<button class="navigation__burger" onclick="toggleNav()">
				<i class="fas fa-bars navigation__burger-icon fa-2xl"></i>
			</button>
		</div>
		<div id="navigation-links" class="navigation__items hidden">
			<ul class="navigation__links">
				<li class="navigation__links-item">
					<a class="navigation__links-item__link" href="/about">About us</a>
				</li>
				<li class="navigation__links-item">
					<a class="navigation__links-item__link" href="/support">Support</a>
				</li>
				<li class="navigation__links-item">
					<a class="navigation__links-item__link" href="/projects">Projects</a>
				</li>
			</ul>
		</div>
		<div id="navigation-icons" class="navigation__items hidden">
			<ul class="navigation__icons">
				<li class="navigation__icons-item">
					<i class="fa-brands fa-github navigation__icons-item__icon"></i>
				</li>
				<li class="navigation__icons-item">
					<i class="fa-brands fa-linkedin navigation__icons-item__icon"></i>
				</li>
				<li class="navigation__icons-item">
					<i class="fa-brands fa-twitter navigation__icons-item__icon"></i>
				</li>
			</ul>
		</div>
	</div>
</nav>

<script>
	let isOpen = false;
	function toggleNav() {
		let links = document.getElementById('navigation-links')
		let icons = document.getElementById('navigation-icons')

		if (isOpen) {
            links.classList.add('hidden')
			icons.classList.add('hidden')
        } else {
            links.classList.remove('hidden')
			icons.classList.remove('hidden')
		}

        isOpen = !isOpen
	}
</script>
