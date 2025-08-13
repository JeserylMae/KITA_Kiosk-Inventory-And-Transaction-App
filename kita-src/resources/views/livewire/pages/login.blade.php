<div class="w-full h-full flex flex-row justify-center items-center">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <form class="flex flex-col gap-8" action="{{ route('user.login') }}" method="POST">
        @csrf
        @if (session('fail'))
            <flux:callout icon="x-circle" variant="danger" x-data="{ show: false }" 
                x-init="show = true; setTimeout(() => show = false, 3000)" x-show="show">
                    <flux:callout.heading> {{ session('header')}} </flux:callout.heading>
                    <flux:callout.text> {{ session('content') }} </flux:callout.text>
            </flux:callout>
        @endif

        <flux:heading class="self-center" size="xl">Create your account.</flux:heading>
        
        <div>
            <flux:input name="email" label="Email" type="email" clearable/>
            <flux:input name="password" label="Password" type="password" viewable/>
        </div>
    
        <button class="btn btn-primary" type="submit">Log In</button>
    </form>
</div>
