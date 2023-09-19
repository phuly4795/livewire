<div>
    <h1>Title: "{{ $title }}"</h1>

    <span>Author: {{ $author }}</span>
</div>


<div>
    @foreach ( $posts as $post )
      
        <div>
            <h3>{{$post['name']}}</h3>
        </div>
    @endforeach
</div>