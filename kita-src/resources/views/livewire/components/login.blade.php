
@push('styles')
    @vite(['resources/css/auth.css'])
@endpush


<div class="flex-row-jstart-amid w-full">
    <div class="flex-col-jcenter-astart justify-between h-screen hidden md:flex">
        <button class="btn-logo active-btn">
            <img src="assets/kita-logo.png" alt="Kita Logo">
        </button>

        <img class="welcome-img" src="{{ asset('assets/login-welcome-character.png') }}" alt="Welcome to Kita">
    </div>
    
    <div class="bg-styling flex-col-jcenter-acenter ">
        <form class="flex-col-jcenter-acenter form-layout"
              wire:submit="login">

            <h2 class="text-white"> Log in to your account.</h2>

            <flux:field>
                <flux:label>Email</flux:label>
                <flux:input type="email" clearable/>
            </flux:field>

             <flux:field>
                <flux:label>Password</flux:label>
                <flux:input type="password" viewable/>
            </flux:field>

            <flux:field variant="inline">
                <flux:checkbox wire:model="terms" />
                <flux:label>I agree to the terms and conditions</flux:label>
                <flux:error name="terms" />
            </flux:field>

            <div class="w-full gap-2 flex-col-jcenter-acenter items-end">
                <hr class="w-full border-white">

                <p class="small-text">
                    Don't have an account?
                    <a href=""><u> Sign In </u></a>
                </p>
            </div>

            <flux:button class="primary-btn active-btn px-16 border-0 !rounded-full">Log In</flux:button>
        </form>

        <img src="{{ asset('assets/curvy-dark-green-frame.svg') }}" class="curvy-frame-styling">
    </div>
</div>
