<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="flex flex-col min-h-screen bg-gray-100">
        @include('layouts.navigation')
        <main class="flex-grow container mx-auto p-4">
            @if ($errors->any())
                <ul class="mb-3 p-3 rounded shadow-lg border bg-yellow-200">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach 
                </ul>
            @endif
            {{ $slot }}
        </main>
        <footer class="px-4 py-6 bg-gray-800 text-sm text-gray-400 text-center">
            &copy; Newmonz
        </footer>
    <div>    
</body>
</html>