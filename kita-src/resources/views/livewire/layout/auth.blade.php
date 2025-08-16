<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials.head', ['title' => $title])
   @stack('styles')
   @livewireStyles
   @fluxAppearance
</head>

<body class="bg-[var(--color-background)] w-full h-max">
    {{ $slot }}

   @livewireScripts
   @fluxScripts
</body>
</html>
