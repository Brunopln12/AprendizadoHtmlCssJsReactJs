<!DOCTYPE>
<html lang="pt-br">
	<head>
		<meta Charset="UTF-8">
		<title>Aula 15</title>
	</head>
	<body>
		<pre>
		<?php
			require_once'Video.php';
			require_once'Gafanhoto.php';
			require_once'Visualizacao.php';

			$video = new Video("Aula de PHP");

			$aluno = new Gafanhoto('João', 13, 'M', 'Jubileu01');

			$vis[0] = new Visualizacao($aluno, $video);

			$vis[0]->avaliarPorc(85);

			print_r($vis[0]);
		?>
		</pre>
	</body>
</html>