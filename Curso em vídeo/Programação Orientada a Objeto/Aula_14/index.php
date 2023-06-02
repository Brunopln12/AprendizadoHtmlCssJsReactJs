<!DOCTYPE>
<html lang="pt-br">
	<head>
		<meta Charset="UTF-8">
		<title>Aula 14</title>
	</head>
	<body>
		<pre>
		<?php
			require_once'Video.php';
			require_once'Gafanhoto.php';
			$video = new Video("Aula de PHP");
			print_r($video);

			$aluno = new Gafanhoto('João', 13, 'M', 'Jubileu01');
			print_r($aluno);
		?>
		</pre>
	</body>
</html>