<div class="w-full h-full flex flex-row justify-center items-center">
    {{-- The best athlete wants his opponent at his best. --}}
    <form class="flex flex-col gap-8" action="{{ route('user.signup') }}" method="POST">
        @csrf
        @if (session('success'))
            <flux:callout icon="check-circle" variant="success" x-data="{ show: false }" 
                x-init="show = true; setTimeout(() => show = false, 3000)" x-show="show">
                    <flux:callout.heading> {{ session('header')}} </flux:callout.heading>
                    <flux:callout.text> {{ session('content') }} </flux:callout.text>
            </flux:callout>
        @endif

        <flux:heading class="self-center" size="xl">Create your account.</flux:heading>

        <div class="flex flex-col gap-3">
            <flux:separator text="NAME" />
            <div class="grid grid-cols-3 gap-4">
                <flux:input name="last_name" label="Last Name" clearable/> 
                <flux:input name="first_name" label="First Name" clearable/> 
                <flux:input name="middle_name" label="Middle Name" badge="Optional" clearable/>
            </div>
        </div>
        
        <div class="flex flex-col gap-3">
            <flux:separator text="ADDRESS" />
            <div>
                <flux:input name="house_number" label="House Number" clearable/>
                <flux:input name="street" label="Street" clearble/>
                <flux:input name="barangay" label="Baranagay" clearable/>
                <flux:input name="city" label="City/Municipality" clearable/>
               
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <flux:separator text="ACCOUNT INFORMATION" />
            <flux:input name="contact_number" label="Contact Number" mask="+63 999 999 9999" value="+63" /> 
            <flux:input name="email" label="Email" type="email" clearable />

            <div class="grid grid-cols-2 gap-4">
                <flux:input name="password" label="Password" type="password" viewable />
                <flux:input name="password_confirmation" label="Confirm Password" type="password" viewable />
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Create Account</button>
    </form>
</div>
