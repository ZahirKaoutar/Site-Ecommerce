<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="Image/logo.png">


        <title>{{ $title ?? 'K2' }}</title>
        @vite(['resources/css/app.css','resources/js/app.js']);
        @livewireStyles
    </head>
    <body class="bg-slate-200 dark:bg-slate-200">
              @livewire('partials.navbar')
       <main>

        {{ $slot }}
      </main>
      @livewire('partials.footer')
    @livewireScripts
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <x-livewire-alert::scripts />
    </body>
</html>
