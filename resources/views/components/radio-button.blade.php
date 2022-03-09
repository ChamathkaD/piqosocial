@props([
    'checked' => false
])

<input type="radio" {!! $attributes->merge(['class' => 'form-radio focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 h-4 w-4 text-indigo-600 border-gray-300 shadow-sm']) !!} @checked($checked) />