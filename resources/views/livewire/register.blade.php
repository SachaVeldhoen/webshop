<div>
    <h1>hier registreren</h1>
    <form wire:submit.prevent="submit">

        <input type="text" wire:model="email" placeholder="E-mailadres">
        @error('email') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="password" placeholder="Password">
        @error('password') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Register</button>
    </form>
</div>
