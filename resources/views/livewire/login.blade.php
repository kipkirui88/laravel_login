<div>
    <form wire:submit.prevent="login">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" wire:model="password">
        </div>
        @if ($errorMessage)
            <div>{{ $errorMessage }}</div>
        @endif
        <button type="submit">Login</button>
    </form>
</div>
