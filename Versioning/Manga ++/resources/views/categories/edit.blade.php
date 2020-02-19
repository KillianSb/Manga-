<!DOCTYPE html>
<html>
<head>
	<title>category</title>
</head>
<body>
	<h1>Modification d'une catégorie</h1>
	<form method="post" action="{{ route('category.update', $category->id) }}">
		@csrf
		@method('PUT')
		<input type="text" name="name" value="{{ $category->name }}">
		<button type="submit">envoyer</button>
	</form>
</body>
</html>