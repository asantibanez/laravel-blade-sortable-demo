<li {{ $attributes->merge(['class' => 'py-4 flex']) }}>
    <img class="h-10 w-10 rounded-full"
         src="{{ $avatar }}"
         alt=""
    >
    <div class="ml-3">
        <p class="text-sm font-medium text-gray-900">{{ $name }}</p>
        <p class="text-sm text-gray-500">{{ $email }}</p>
    </div>
</li>
