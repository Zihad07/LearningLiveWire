<div>
    <a class="pl-2 cursor-pointer" wire:click.prevent="logout">Logout({{ auth()->user()->name ?? ''}})</a>
</div>
