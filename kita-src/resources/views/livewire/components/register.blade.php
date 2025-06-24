
@push('styles')
    @vite(['resources/css/auth.css'])
@endpush 

<div class="flex-row-jstart-amid w-full">
    <div class="bg-styling flex-col-jcenter-acenter ml-0 mr-auto">
        <form class="flex-col-jcenter-acenter form-layout mr-0 sm:mr-16"
              method="POST"
              action="{{ route('user.store') }}">

            @csrf
            @if (session('success'))
                <div 
                    x-data="{ show: true }" 
                    x-init="
                        setTimeout(() => show = false, 3000)
                        setTimeout(() => window.location.href = '/login', 3000)" 
                    x-show="show"
                    x-transition
                    class="fixed top-15 left-80 bg-[var(--color-white-80)] text-black px-4 py-2 rounded-lg shadow-lg z-50 w-1/3">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <h2 class="text-white">Create your account.</h2>

            <flux:field>
                <flux:label>Name</flux:label>
                <flux:input name="name" clearable/>
                <flux:error name="name" />
            </flux:field>

            <flux:field>
                <flux:label>Email</flux:label>
                <flux:input name="email" type="email" clearable/>
                <flux:error name="email" />
            </flux:field>

            <flux:field>
                <flux:label>Password</flux:label>
                <flux:input name="password" type="password" viewable/>
                <flux:error name="password" />
            </flux:field>

            <flux:field>
                <flux:label>Confirm Password</flux:label>
                <flux:input name="password_confirmation" type="password" viewable/>
            </flux:field>

            <flux:field variant="inline">
                <flux:checkbox wire:model="terms" wire:change="termsAccepted"/>
                <flux:label> I agree to the terms and conditions. </flux:label>
                <flux:error name="terms"/>
            </flux:field>

            <div class="w-full gap-2 flex-col-jcenter-acenter items-end">
                <hr class="w-full border-white">

                <p class="small-text">
                    Already have an account?
                    <a href="{{ route('login') }}"><u> Sign In </u></a>
                </p>
            </div>

            <flux:button class="primary-btn active-btn px-16 border-0 !rounded-full" type="submit" :disabled="$isDisabled">Register</flux:button>
        </form>

        <img class="curvy-frame-styling scale-x-[-1] left-0" src="{{ asset('assets/curvy-dark-green-frame.svg') }}" alt="curvy-frame-styling">
    </div>

    <div class="flex-col-jcenter-astart justify-between h-screen hidden md:flex">
        <button class="btn-logo active-btn self-end m-4" onClick="window.location.href='{{ route('landing') }}'">
            <img src="assets/kita-logo.png" alt="Kita Logo">
        </button>

        <img class="welcome-img" src="{{ asset('assets/signup-welcome-character.png') }}" alt="Welcome to Kita">
    </div>
</div>
