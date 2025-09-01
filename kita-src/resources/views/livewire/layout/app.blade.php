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
      <livewire:navigations.navbar/>
   </div>

   <div class="stack-center">
      <div class="layout">
         <div class="inline-start">
            <div class="w-1/4"> <livewire:navigations.sidebar/> </div>

            <div class="w-full pl-8"> 
               @php $routeName = Route::currentRouteName(); @endphp

               @if ($routeName === 'page.dashboard')
                  <livewire:pages.dashboard />
               @elseif ($routeName === 'page.inventory')
                  <livewire:pages.inventory />
               @elseif ($routeName === 'page.sales')
                  <livewire:pages.dashboard />
               @elseif ($routeName === 'page.expenses')
                  <livewire:pages.dashboard />
               @elseif ($routeName === 'page.reports')
                  <livewire:pages.dashboard />
               @endif
            </div>
         </div>
      </div>
   </div>
   
   @livewireScripts
   @fluxScripts
</body>
</html>
