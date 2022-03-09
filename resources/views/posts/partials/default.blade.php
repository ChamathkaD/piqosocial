<x-post>

    <x-slot:heading>
        <x-post.heading :post="$post" :routeName="'posts'" />
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

    <x-slot:comments>
        <x-post.comments />
    </x-slot>

    <x-slot:createComment>
        <x-post.create-comment />
    </x-slot>

</x-post>


