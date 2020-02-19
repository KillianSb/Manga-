<!DOCTYPE html>
<html>
<head>
	<title>categories</title>
</head>
<body>
	<h1>bienvenue sur les catégories</h1>
	<a href="{{ route('category.create') }}" title="créer une catégorie">créer une catégorie</a>
	<ul>
		@foreach($categories as $category)
			<li>
				<a href="{{ route('category.show', $category->id) }}" title="{{ $category->name }}">{{ $category->name }} ({{ count($category->posts) }}) </a>

				@if(count($category->posts) > 0)
				<ul>
					@foreach($category->posts as $post)
						<li>
							<a href="{{ route('post.show', $post->id) }}" title="{{ $post->name }}">{{ $post->name }}</a>
						</li>
					@endforeach
				</ul>
				@endif

			</li>
		@endforeach
	</ul>
</body>
</html>