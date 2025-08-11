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
          <flux:input wire:model="email" type="email" />
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
      <form method="POST" action="{{ route('user.store') }}" class="w-max">
        @csrf

        <h3>SIGN UP</h3>

        <div class="flex flex-row gap-3">
          <flux:field>
            <flux:label>Last Name</flux:label>
            <flux:input wire:model="last_name" clearable />
            <flux:error name="last_name" />
          </flux:field>
          <flux:field>
            <flux:label>First Name</flux:label>
            <flux:input wire:model="first_name" clearable />
            <flux:error name="first_name" />
          </flux:field>
          <flux:field>
            <flux:label badge="Optional">Middle Name</flux:label>
            <flux:input wire:model="middle_name" clearable />
            <flux:error name="middle_name" />
          </flux:field>
        </div>

        <div>
          <flux:field>
            <flux:label>Email</flux:label>
            <flux:input wire:model="email" type="email" clearable />
            <flux:error name="email" />
          </flux:field>
  
          <flux:field>
            <flux:label>Password</flux:label>
            <flux:input type="password" viewable />
            <flux:error name="password" />
            <flux:description>Must be at least 8 characters long, include an uppercase letter, a number, and a special character.</flux:description>
          </flux:field>

          <flux:field>
            <flux:label>Confirm Password</flux:label>
            <flux:input type="password" viewable />
            <flux:error name="confirm_password" />
          </flux:field>
        </div>

        <br>

        <div>
          <flux:fieldset>
            <flux:legend>Address</flux:legend>

            <div class="space-y-6">
              <flux:input label="House Number" placeholder="0000" class="max-w-sm" badge="Optional"/>
              <flux:input label="Street" placeholder="123 Main Street" class="max-w-sm" badge="Optional"/>

              <div class="grid grid-cols-2 gap-x-4">
                <flux:input label="Barangay" badge="Optional" />
                <flux:input label="City" />
                <flux:input label="State / Province" />
                <flux:input label="Postal / Zip code" />
                <flux:select label="Country">
                    <option selected>United States</option>
                    <option>Philippines</option>
                    <!-- ... -->
                </flux:select>
              </div>
            </div>
          </flux:fieldset>
        </div>

        <br>

        <flux:button variant="primary" type="submit">Create Account</flux:button>
      </form>
    </div>
  </div>
</main>