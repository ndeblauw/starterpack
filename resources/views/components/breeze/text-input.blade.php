@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-2xs px-2 py-1    ']) }}>
