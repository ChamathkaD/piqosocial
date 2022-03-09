<div class="flex">
    <div {{ $attributes->merge(['class' => 'p-1 text-base px-3 bg-white text-black font-semibold rounded-full border border-gray-200 hover:cursor-pointer hover:bg-gray-100']) }}>
        {{ $slot }}
    </div>
</div>