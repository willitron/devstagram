<div>
    @if ($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            @foreach ($posts as $post)
                <div>
                    <a href="{{ route('post.show', ['post' => $post, 'user' => $post->user]) }}">

                        <img src="{{ asset('uploads/' . $post->imagen) }}" alt="imagen del post" />
                    </a>
                </div>
            @endforeach
        </div>

        <div class="my-10">
            {{ $posts->links() }}
        </div>
    @else
        <p>No hay publicaciones,Sigue a alguien para poder ver publicaciones</p>
    @endif
</div>
