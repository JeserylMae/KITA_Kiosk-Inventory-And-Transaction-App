<main class="w-full min-h-screen flex justify-center items-center p-10">
  <div class="flex flex-col justify-center items-center">

    <h1>Welcome to KITA!</h1>

    <br>

    <div class="p-5 border-1 rounded-md w-max">
      <form nethod="POST" action="{{ route('user.login') }}" class="w-max">
        @csrf

        <h3>SIGN IN</h3>

        <flux:field>
          <flux:label>Email</flux:label>
          <flux:input name="email" type="email" />
          <flux:error name="email" />
        </flux:field>

        <flux:field>
          <flux:label>Password</flux:label>
          <flux:input type="password" />
          <flux:error name="password" />
          <flux:description>Must be at least 8 characters long, include an uppercase letter, a number, and a special character.</flux:description>
        </flux:field>

        <br>

        <flux:button variant="primary" type="submit">Login</flux:button>
      </form>
    </div>

    <br><br>

    <div class="p-5 border-1 rounded-md w-max">
      <form method="POST" action="{{ route('user.signup') }}" class="w-max">
        @csrf

        @if (session('success'))
          <flux:callout icon="check-circle" variant="success" 
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"
            x-show="show"
            x-transition>
            <flux:callout.heading>You're all set!</flux:callout.heading>
            <flux:callout.text>{{ session('success') }}</flux:callout.text>
            {{-- <flux:callout.text>Registration completed successfully.</flux:callout.text> --}}
          </flux:callout>
        @endif

        <h3>SIGN UP</h3>

        <div class="flex flex-row gap-3">
          <flux:field>
            <flux:label>Last Name</flux:label>
            <flux:input name="last_name" clearable />
            <flux:error name="last_name" />
          </flux:field>
          <flux:field>
            <flux:label>First Name</flux:label>
            <flux:input name="first_name" clearable />
            <flux:error name="first_name" />
          </flux:field>
          <flux:field>
            <flux:label badge="Optional">Middle Name</flux:label>
            <flux:input name="middle_name" clearable />
            <flux:error name="middle_name" />
          </flux:field>
        </div>

        <div>
          <flux:field>
            <flux:label>Email</flux:label>
            <flux:input name="email" type="email" clearable />
            <flux:error name="email" />
          </flux:field>
  
          <flux:field>
            <flux:label>Password</flux:label>
            <flux:input name="password" type="password" viewable />
            <flux:error name="password" />
            <flux:description>Must be at least 8 characters long, include an uppercase letter, a number, and a special character.</flux:description>
          </flux:field>

          <flux:field>
            <flux:label>Confirm Password</flux:label>
            <flux:input name="password_confirmation" type="password" viewable />
            <flux:error name="confirm_password" />
          </flux:field>
        </div>

        <br>

        <div>
          <flux:fieldset>
            <flux:legend>Address</flux:legend>

            <div class="space-y-6">
              <flux:input name="house_number" label="House Number" placeholder="0000" class="max-w-sm" badge="Optional"/>
              <flux:input name="street" label="Street" placeholder="123 Main Street" class="max-w-sm" badge="Optional"/>

              <div class="grid grid-cols-2 gap-x-4">
                <flux:input name="barangay" label="Barangay" badge="Optional" />
                <flux:input name="city" label="City" />
                <flux:input name="province" label="State / Province" />
                <flux:input name="postal_code" label="Postal / Zip code" />
                {{-- <flux:select label="Country">
                    <option selected>United States</option>
                    <option>Philippines</option>
                    <!-- ... -->
                </flux:select> --}}
              </div>
            </div>
          </flux:fieldset>
        </div>

        <input type="hidden" name="role" value="owner" />
        {{-- <flux:input name="role" value="owner" hidden/> --}}

        <br>

        <flux:button variant="primary" type="submit">Create Account</flux:button>
      </form>
    </div>
  </div>
</main>