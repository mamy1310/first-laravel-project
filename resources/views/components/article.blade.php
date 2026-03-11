<h3><a href="{{ route('article.details', ['id' => $id]) }}">{{ $titre }}</a></h3>
<p>{{ Str::limit($description, 30) }}</p>
