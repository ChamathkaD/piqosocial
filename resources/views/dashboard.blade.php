<x-app-layout>

    <div class="py-6 lg:py-12">

        <div class="max-w-full mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 px-4 sm:px-0">

                @include('partials.activity')

                <div class="col-span-12 lg:col-span-6 space-y-3">

                    @include('partials.friends')

                    @include('posts.partials.create')

                    @foreach ($posts as $post)
                        @include('posts.partials.default')
                    @endforeach

                    @foreach ($photos as $photo)
                        @include('posts.partials.photo')
                    @endforeach

                </div>

                @include('partials.add-friends')

            </div>

        </div>

    </div>

</x-app-layout>