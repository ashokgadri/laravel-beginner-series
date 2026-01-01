<h1>Home Page</h1>
<p>Welcome {{ $name ?? 'Guest' }}</p>

<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About</a>