
@push('styles')
    @vite(['resources/css/auth.css'])
@endpush


<div class="flex-row-jstart-amid w-full fade-on-entry-animation">
    <div class="flex-col-jcenter-astart justify-between h-screen hidden md:flex">
        <button class="btn-logo active-btn m-4" onClick="window.location.href='{{ route('landing') }}'">
            <img src="assets/kita-logo.png" alt="Kita Logo">
        </button>

        <img class="welcome-img" src="{{ asset('assets/login-welcome-character.png') }}" alt="Welcome to Kita">
    </div>
    
    <div class="bg-styling flex-col-jcenter-acenter ml-auto mr-0">
        <form class="flex-col-jcenter-acenter form-layout ml-0 sm:ml-16"
              method="POST"
              action="{{ route('user.login') }}">

            @csrf
            @if (session('success'))
            <flux:callout variant="success" icon="check-circle" heading="{{ session('success') }}"
                          class="w-100 bg-transparent"
                          x-data="{ show: true }" 
                          x-init="setTimeout(() => show = false, 3000)
                                  setTimeout(() => window.location.href = '/dashboard', 3000)" 
                          x-show="show"
                          x-transition/>
            @endif

            <h2 class="text-white"> Log in to your account.</h2>

            <flux:field>
                <flux:label>Email</flux:label>
                <flux:input type="email" name="email" clearable/>
                <flux:error name="email" />
            </flux:field>

             <flux:field>
                <flux:label>Password</flux:label>
                <flux:input type="password" name="password" viewable/>
                <flux:error name="password" />
            </flux:field>

            <div class="w-full gap-2 flex-col-jcenter-acenter items-end">
                <hr class="w-full border-white">

                <p class="small-text">
                    Don't have an account?
                    <a href="{{ route('register') }}"><u> Sign Up </u></a>
                </p>
            </div>

            <flux:button class="primary-btn active-btn px-16 border-0 !rounded-full" type="submit">Log In</flux:button>
        </form>
        
        <img src="{{ asset('assets/curvy-dark-green-frame.svg') }}" class="curvy-frame-styling right-0">
    </div>
</div>
