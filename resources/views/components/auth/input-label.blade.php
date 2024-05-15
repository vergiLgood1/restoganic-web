@props(['value'])

<label {{ $attributes->merge(['class' => 'absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
    peer-focus:scale-90
    peer-focus:translate-x-0.5
    peer-focus:-translate-y-1.5
    peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
    peer-[:not(:placeholder-shown)]:scale-90
    peer-[:not(:placeholder-shown)]:translate-x-0.5
    peer-[:not(:placeholder-shown)]:-translate-y-1.5
    peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500']) }}>
    {{ $value ?? $slot }}
</label>
