<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Warung Rizky | Tugas</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/banner.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img alt="" src="<?php echo AST; ?>/img/banner.png" class="brand">
			<div class="user">Warung Rizky</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/kategori">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Pelanggan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/golongan">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Golongan
					</a>
				</li>

				<li>
					<a href="<?php echo URL; ?>/user">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> User
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Designed by Rizky Akbar Siregar
		</footer>
	</main>

</body>

</html>