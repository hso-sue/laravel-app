<x-app-layout>
    @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
        @guest
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ログイン</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">新規登録</a>
            @endif
        @endguest
    </div>
    @endif
    <header>
        <h1 class="text-xl">Twitter</h1>
        <br>
    </header>
    <ul>
        @foreach ($tweets as $tweet)
            <li><a href="/tweets/{{ $tweet->id }}">{{ $tweet->content }}</a></li>
        @endforeach
    </ul>
</x-app-layout>
