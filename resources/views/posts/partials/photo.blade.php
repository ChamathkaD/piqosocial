<x-post>

    <x-slot:heading>
        <x-post.heading :post="$photo" :routeName="'photos'"/>
    </x-slot>

    <div class="space-y-2">
        <span>{{ $photo->description }}</span>
        <img src="{{ asset($photo->photo) }}" alt="default img" class="rounded-lg h-full w-full" />
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