<div class="">
        <div class="form-group">
            <form wire:submit='CreateUser' action=""  >
                <input wire:model='email' type="email" placeholder="email" class="form-control my-4 ">
                
                @error('email')
                    <span class="text-red-500 text-xs"> {{$message}} </span>
                @enderror
    
                <input wire:model='name' type="text" placeholder="name"  class="form-control my-4">
    
                @error('name')
                    <span class="text-red-500 text-xs"> {{$message}} </span>
                @enderror
    
                <input wire:model='password' type="password" placeholder="password"  class="form-control my-4">
    
                @error('password')
                    <span class="text-red-500 text-xs"> {{$message}} </span>
                @enderror
    
                <input wire:model='image' accept="image/png, image/jpg" type="file" placeholder="image"  class="form-control my-4">
    
                @error('image')
                    <span class="text-red-500 text-xs"> {{$message}} </span>
                @enderror
    
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" alt="" srcset="">
                @endif
    
                <div wire:loading wire:target='image'>
                    <span class="text-green-500">Uploading...</span>
                </div>
    
                <div wire:loading.delay.longest>
                    <span class="text-green-500 ">Creating...</span>
                </div>
    
                <button wire:loading.attr="disable" class="btn btn-primary my-5">Create</button>
                <button wire:click.prevent='reload' class="btn btn-primary my-5">Reload</button>
            </form>
            @if (session('success'))
                <div class="form-group">
                    <p class="text-success">{{ session('success') }}</p>
                </div>
            @endif
        
    </div>

        {{-- @livewire('list-user') --}}
    <livewire:list-user lazy/>
</div>
