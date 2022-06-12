<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <!--
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        -->
    </head>
    <body class="font-sans antialiased">
        <header>
            <h1>Annotated Container</h1>
            <ul>
                <li><a href="https://github.com/cspray/annotated-container">Repository</a></li>
                <li><a href="https://github.com/cspray/annotated-container/tree/main/docs">Documentation</a></li>
                <li><a href="https://github.com/users/cspray/projects/1">Project Roadmap</a></li>
                <li><a href="https://www.cspray.io/tags/annotated-container/">Blog Articles</a></li>
            </ul>
        </header>
        <main>
            @yield('body')
        </main>
        <footer>
            <p>Copyright (c) 2022 Charles Sprayberry</p>
            <p>Annotated Container is released under <a href="https://opensource.org/licenses/MIT">MIT License</a>.</p>
        </footer>
    </body>
</html>
