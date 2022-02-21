<x-app-layout>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        
        <x-profile-header />

        <div class="my-3">

            <x-profile-navbar />
            
        </div>

        <div class="grid grid-cols-12 gap-4">

            <div class="col-span-4 h-fit p-6  bg-white border-b border-gray-200 rounded-2xl">
                
                @include('profile.partials.intro')
                
            </div>

            <div class="col-span-8 h-fit p-6  bg-white border-b border-gray-200 rounded-2xl">

                <x-create-post/>

            </div>

        </div>

    </div>
    
</x-app-layout>
