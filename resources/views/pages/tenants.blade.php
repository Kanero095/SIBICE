<x-templates>
    <title>Tenants | SIBICE'</title>

    <div class="px-4 pb-6">
        <div class="pt-4 pb-6">
            <h2 class="text-3xl text-center font-extrabold underline underline-offset-8">
                TENANTS
            </h2>
        </div>
        <div class="grid grid-cols-1 gap-4">
            {{-- content --}}
            @if ($count == null || $count == 0)
                <h1 class="text-xl font-semibold pt-5 text-center italic"> _Tidak Ada Data_ </h1>
            @else
                @foreach ($tenants as $data)
                    <div
                        class="w-full h-fit mx-auto drop-shadow border-2 border-[#000] rounded-lg p-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-90 duration-300">
                        <a href="{{ route('show-tenant', $data->Slug) }}" target="_blank">
                            <div class="grid grid-cols-1 md:flex">
                                <div class="md:h-fit">
                                    <img src="{{ $data->Logo }}"
                                        class="rounded-lg h-60 w-60 md:max-h-44 md:max-w-60 mx-auto"
                                        alt="{{ $data->Logo }}">
                                </div>
                                {{-- <div class="md:grid md:grid-rows-2 md:px-3"> --}}
                                <div class="flex flex-col md:px-3">
                                    <div class="max-h-10 md:px-2">
                                        <h2 class="text-center md:text-left text-lg md:text-4xl font-bold py-1">
                                            {{ $data->nameTenant }}
                                        </h2>
                                    </div>
                                    <div class="md:mt-4 px-1 md:px-2 pb-3 h-24 overflow-hidden md:h-content">
                                        <p class="text-[12px] text-justify rounded-lg drop-shadow-lg md:text-sm">
                                            {!! Str::limit($data->aboutTenant, 750) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="paginate m-auto mt-1">
            {{-- paginate --}}
            {{ $tenants->links() }}
        </div>
    </div>

</x-templates>
