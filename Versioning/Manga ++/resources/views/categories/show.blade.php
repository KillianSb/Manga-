<!DOCTYPE html>
<html>
<head>
	<title>category</title>
</head>
<body>
	<h1>bienvenue sur la catégorie {{ $category->name }}</h1>
	<a href="{{ route('category.index') }}" title="retour a la liste">retour a la liste</a>
	<a href="{{ route('category.edit', $category->id) }}" title="modifier">modifier</a>
	<a href="{{ route('category.delete', $category->id) }}" title="supprimer">supprimer</a>
</body>
</html>