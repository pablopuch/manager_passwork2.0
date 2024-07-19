<div class="space-y-6">
    
    <div>
        <x-input-label for="passgroup_id" :value="__('Passgroup Id')"/>
        <x-text-input wire:model="form.passgroup_id" id="passgroup_id" name="passgroup_id" type="text" class="mt-1 block w-full" autocomplete="passgroup_id" placeholder="Passgroup Id"/>
        @error('form.passgroup_id')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
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
        <x-input-label for="user_pass" :value="__('User Pass')"/>
        <x-text-input wire:model="form.user_pass" id="user_pass" name="user_pass" type="text" class="mt-1 block w-full" autocomplete="user_pass" placeholder="User Pass"/>
        @error('form.user_pass')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="email_pass" :value="__('Email Pass')"/>
        <x-text-input wire:model="form.email_pass" id="email_pass" name="email_pass" type="text" class="mt-1 block w-full" autocomplete="email_pass" placeholder="Email Pass"/>
        @error('form.email_pass')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="password_pass" :value="__('Password Pass')"/>
        <x-text-input wire:model="form.password_pass" id="password_pass" name="password_pass" type="text" class="mt-1 block w-full" autocomplete="password_pass" placeholder="Password Pass"/>
        @error('form.password_pass')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="link" :value="__('Link')"/>
        <x-text-input wire:model="form.link" id="link" name="link" type="text" class="mt-1 block w-full" autocomplete="link" placeholder="Link"/>
        @error('form.link')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="note" :value="__('Note')"/>
        <x-text-input wire:model="form.note" id="note" name="note" type="text" class="mt-1 block w-full" autocomplete="note" placeholder="Note"/>
        @error('form.note')
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
    <div>
        <x-input-label for="favourite" :value="__('Favourite')"/>
        <x-text-input wire:model="form.favourite" id="favourite" name="favourite" type="text" class="mt-1 block w-full" autocomplete="favourite" placeholder="Favourite"/>
        @error('form.favourite')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>