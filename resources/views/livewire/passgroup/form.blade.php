<div class="space-y-6">
    
    <div>
        <x-input-label for="user_id" :value="__('User Id')"/>
        <x-text-input wire:model="form.user_id" id="user_id" name="user_id" type="text" class="mt-1 block w-full" autocomplete="user_id" placeholder="User Id"/>
        @error('form.user_id')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Name"/>
        @error('form.name')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="url_img" :value="__('Url Img')"/>
        <x-text-input wire:model="form.url_img" id="url_img" name="url_img" type="text" class="mt-1 block w-full" autocomplete="url_img" placeholder="Url Img"/>
        @error('form.url_img')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>