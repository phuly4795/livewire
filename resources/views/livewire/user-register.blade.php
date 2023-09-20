<div class="container">
 
    
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

            <button class="btn btn-primary my-5">Create</button>
        </form>
    </div>
    @if (session('success'))
        <div class="form-group">
            <p class="text-success">{{ session('success') }}</p>
        </div>
    @endif
    @foreach ($listUser as $user)
        <p class="display-6">{{$user->name}}</p>
        <hr>
    @endforeach

    {{$listUser->links()}}

</div>
