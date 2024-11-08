<x-layout>
    <h1 class="text-3xl mb-4 font-semibold uppercase border px-6 py-2 rounded absolute top-40">Random ratings to some of
        the Languages.</h1>

    <p class="bg-gray-600 rounded-full px-2 py-1 mb-4">Click on anyone to see their ratings</p>
    <ul>
        @foreach ($langs as $lang)
            <li class="text-2xl border text-center px-6 py-2">
                <a class="m-5 hover:text-blue-800" href="/langs/{{ $lang['id'] }}">
                    {{ $lang['name'] }}</a>
            </li>
            
        @endforeach
    </ul>

    <div class="absolute bottom-0 mb-8">
        <a href="/" class=" text-sm p-1 hover:text-blue-800">Home Page</a>
        <a href="/about" class=" text-sm p-1 hover:text-blue-800">About Page</a>
    </div>
</x-layout>
