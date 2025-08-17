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
               <h2>hskdsh</h2>
               {{ $slot }} 
            </div>
         </div>
      </div>
   </div>
   
   @livewireScripts
   @fluxScripts
</body>
</html>
