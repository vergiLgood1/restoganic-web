@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
focus:pt-6
focus:pb-2
[&:not(:placeholder-shown)]:pt-6
[&:not(:placeholder-shown)]:pb-2
autofill:pt-6
autofill:pb-2']) !!}>
