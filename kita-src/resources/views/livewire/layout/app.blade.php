<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials.head', ['title' => $title])
   @stack('styles')
   @livewireStyles
   @fluxAppearance
</head>

<body class="bg-[var(--color-background)] w-full h-max">

   <div class="stack-center card">
      <div class="navbar inline-between ">
         <div class="inline-between">
            <button class="flex flex-row justify-center items-center gap-3 px-5 py-2">
               <img src="{{ asset('favicon.svg') }}" width="20px">
               <span class="font-medium text-[var(--color-foreground)]">Kita</span>
            </button>

            <livewire:components.button href="/" icon="home" label="Home" variant="link" size="text-sm"/>
            <livewire:components.button icon="calculate" label="Calculator" variant="link" size="text-sm"/>
            <livewire:components.button icon="notifications" label="Notifications" variant="link" badge="2" size="text-sm"/>
         </div>
   
         <div class="inline-between">
            <livewire:components.button icon="add" variant="primary" label="|" trailing="arrow_drop_down" size="text-sm" style="gap-1 rounded-br-none"/>
            <livewire:components.button icon="search" label="Search" style="rounded-lg rounded-br-none pr-5 mx-2" size="text-sm"/>
            <livewire:components.button icon="info" variant="ghost"/>
            <livewire:components.button icon="settings" variant="ghost"/>

            <flux:dropdown position="bottom" align="end" class="ml-1">
               <flux:profile avatar="{{ asset('favicon.svg') }}" name="Olivia Martin" />

               <flux:navmenu>
                  <flux:navmenu.item href="#" icon="user">Account</flux:navmenu.item>
                  <flux:navmenu.item href="#" icon="building-storefront">Profile</flux:navmenu.item>
                  <flux:navmenu.item href="#" icon="arrow-right-start-on-rectangle">Logout</flux:navmenu.item>
               </flux:navmenu>
            </flux:dropdown>
         </div>
      </div>
   </div>

   <div> {{ $slot }} </div>
   
   @livewireScripts
   @fluxScripts
</body>
</html>
