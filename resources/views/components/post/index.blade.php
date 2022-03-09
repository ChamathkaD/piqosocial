<div class="p-6 bg-white border-b border-gray-200 rounded-2xl space-y-2">

    <div class="flex justify-between items-center">
        {{ $heading }}
    </div>

    {{ $slot }}

    <div class="flex items-center justify-between py-3">
        {{ $icons }}
    </div>

    <div class="flex items-center space-x-3">
       {{ $likes }}
    </div>

    <div>
        {{ $comments ?? null }}
    </div>

    <div class="flex items-center">
        {{ $createComment ?? null }}
    </div>

</div>
