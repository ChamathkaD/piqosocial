<x-post>

    <x-slot:heading>
        <x-post.heading :post="$post" />
    </x-slot>

    <div>
       {{ $post->body}}
    </div>

    <x-slot:icons>
        <x-post.icons />
    </x-slot>

    <x-slot:likes>
        <x-post.likes />
    </x-slot>

</x-post>


