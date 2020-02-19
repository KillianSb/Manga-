<!DOCTYPE html>
<html>
<head>
	<title>category</title>
</head>
<body>
	<h1>creation d'une catégorie</h1>
	<form method="post" action="{{ route('category.store') }}">
		@csrf
		<input type="text" name="name">
		<button type="submit">envoyer</button>
	</form>
</body>
</html>