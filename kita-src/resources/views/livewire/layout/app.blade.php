<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials.head', ['title' => $title])
   @stack('styles')
   @livewireStyles
   @fluxAppearance
</head>

<body class="bg-[var(--color-background)] w-full h-max">

   <div>
      <div class="">
         <button class="flex flex-row justify-center items-center gap-3 px-5 py-2">
            <img src="{{ asset('favicon.svg') }}" width="20px">
            <span class="font-medium text-[var(--color-foreground)]">Kita</span>
         </button>

         <livewire:components.button href="/" icon="home" label="Home" variant="link"/>
         <livewire:components.button icon="calculate" label="Calculator" variant="link"/>
         <livewire:components.button icon="notifications" label="Notifications" variant="link" badge="2"/>
      </div>

      <div>
         <button class="btn btn-primary gap-1 px-2">
            <span class="material-symbols-outlined !text-[20px]">add</span>
            <span class="font-thin">|</span>
            <span class="material-symbols-outlined">arrow_drop_down</span>
         </button>

         <button class="flex flex-row justify-center items-center gap-3 px-3 py-2 bg-[var(--color-muted)] text-[var(--color-muted-foreground)] rounded-xl rounded-br-none">
            <span class="material-symbols-outlined">search</span>
            <span>Search</span>
         </button>
      </div>
   </div>

   <div> {{ $slot }} </div>
   
   @livewireScripts
   @fluxScripts
</body>
</html>
