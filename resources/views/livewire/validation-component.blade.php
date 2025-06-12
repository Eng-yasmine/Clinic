<div>
    <form wire:submit.prevent="submit" class="form">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" wire:model="password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember" wire:model="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
            @error('remember') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary" wire:click.prevent="submit">Submit</button>
    </form>
</div>
