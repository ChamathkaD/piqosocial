<li class="flex justify-between items-center">
    <div class="flex items-center">
        
        {{ $itemIcon }}

        <div class="ml-3 leading-none">
            {{ $slot }}
        </div>
    </div>

    @isset($data)
        <x-profile.visibility-icon :data="$data"/>
    @endisset
</li>