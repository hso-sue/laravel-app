<x-layout>
    <header>
        <h1>Twitter</h1>
    </header>
    <ul>
        @foreach ($tweets as $tweet)
            <li><a href="/tweets/{{ $tweet->id }}">{{ $tweet->content }}</a></li>
        @endforeach
    </ul>
</x-layout>
