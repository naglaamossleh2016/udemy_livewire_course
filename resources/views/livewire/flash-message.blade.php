<div class="w-50 m-auto mt-5">

    <button class="btn btn-primary" wire:click="submit">Send</button>
    <button class="btn btn-primary" wire:click="remove" wire:loading.attr="disabled">remove</button>

    <small class="alert alert-primary" wire:loading wire:target="remove">loading....</small>
</div>
