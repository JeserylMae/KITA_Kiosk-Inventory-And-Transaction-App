<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? 'Kita' }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/css/landing.css', 'resources/js/app.js'])
    {{-- @fluxAppearance --}}
</head>
<body class="bg-white">
    <div class="bg-dark-green-80">
        <div class="flex flex-col justify-self-center min-w-[320px] w-5xl max-w-5xl min-h-screen p-5">
            <div class="flex flex-row w-full justify-end">
                <flux:button variant="ghost">Log In</flux:button>
                <flux:button variant="primary">Sign Up</flux:button>
            </div>
            <flux:heading size='xl' class="text-white mt-[10%]">Welcome!!</flux:heading>
            <flux:text>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </flux:text>
        </div>
    </div>
</body>
</html>