
@push('styles')
    @vite(['resources/css/auth.css'])
@endpush 

<div class="flex-row-jstart-amid w-full">
    <div class="bg-styling flex-col-jcenter-acenter ml-0 mr-auto">
        <form class="flex-col-jcenter-acenter form-layout mr-0 sm:mr-16">
            <h2 class="text-white">Create your account.</h2>

            <flux:field>
                <flux:label>Name</flux:label>
                <flux:input clearable/>
            </flux:field>

            <flux:field>
                <flux:label>Email</flux:label>
                <flux:input type="email" clearable/>
            </flux:field>

            <flux:field>
                <flux:label>Password</flux:label>
                <flux:input type="password" viewable/>
            </flux:field>

            <flux:field>
                <flux:label>Confirm Password</flux:label>
                <flux:input type="password" viewable/>
            </flux:field>

            <flux:field variant="inline">
                <flux:checkbox wire:model="terms"/>
                <flux:label> I agree to the terms and conditions. </flux:label>
                <flux:error name="terms"/>
            </flux:field>

            <div class="w-full gap-2 flex-col-jcenter-acenter items-end">
                <hr class="w-full border-white">

                <p class="small-text">
                    Already have an account?
                    <a href=""><u> Sign In </u></a>
                </p>
            </div>

            <flux:button class="primary-btn active-btn px-16 border-0 !rounded-full">Register</flux:button>
        </form>

        <img class="curvy-frame-styling scale-x-[-1] left-0" src="{{ asset('assets/curvy-dark-green-frame.svg') }}" alt="curvy-frame-styling">
    </div>

    <div class="flex-col-jcenter-astart justify-between h-screen hidden md:flex">
        <button class="btn-logo active-btn self-end m-4" wire:click="landingRedirect">
            <img src="assets/kita-logo.png" alt="Kita Logo">
        </button>

        <img class="welcome-img" src="{{ asset('assets/signup-welcome-character.png') }}" alt="Welcome to Kita">
    </div>
</div>
