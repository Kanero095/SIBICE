<x-templates>
    <title>This page is blank | SIBICE'</title>

    @if (session('danger'))
        <div
            class="alert alert-danger bg-lime-500 text-center text-sm sm:text-lg py-2 font-semibold text-white drop-shadow">
            {{ session('danger') }}
        </div>
    @endif

    <x-particle-blank />
</x-templates>
