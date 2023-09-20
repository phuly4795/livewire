<div>

    @if (session('error'))
        <div class="mt-1 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
            
            <p wire:click='close' class="font-bold" style="float: right; font-size: 20px; cursor: pointer;">x</p>
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">Error</p>
                    <p class="text-sm"> {{ session('error') }} </p>
                </div>
            </div>
        </div>
      
    @endif


    @include('livewire.includes.create-todo-box')
    @include('livewire.includes.search-box')
    
    <div id="todos-list">
        
        @foreach ($data as $item)
            @include('livewire.includes.todo-card')
        @endforeach
    
        <div class="my-2">
           {{ $data->links() }}
        </div>
    </div>
</div>