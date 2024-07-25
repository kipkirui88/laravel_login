<div>
    <form wire:submit.prevent="register">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" wire:model="name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model="email">
        </div>
        <div>
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" wire:model="phone">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" wire:model="password">
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" wire:model="password_confirmation">
        </div>
        @if ($errorMessage)
            <div>{{ $errorMessage }}</div>
        @endif
        <button type="submit">Register</button>
    </form>
</div>
