<h1>About Page</h1>
<p>This is a {{ $framework }} beginner series</p>

<ul>
    @foreach($topics as $topic)
        <li>{{ $topic }}</li>
    @endforeach
</ul>

<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About</a>