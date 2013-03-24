<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>

</head>
<body>

<div id="pagina">
	<?print_r($_SESSION);?>
	<h1><?=$titulo;?></h1>
	<h1><?foreach($resultado[0] as $r) echo $r;?></h1>

</div>

</body>
</html>