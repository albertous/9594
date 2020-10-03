
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 bg-green-800 focus:outline-none focus:border-blue-500 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
