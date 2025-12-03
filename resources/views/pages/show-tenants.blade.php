<x-templates>
    <title>
        {{ $dataTenant->nameTenant }} | SIBICE'
    </title>

    <div class="px-3 pt-3">
        <a href="{{ route('tenants') }}"
            class="px-5 py-1 bg-red-500 rounded-lg text-white font-bold hover:text-black hover:bg-red-700">
            Back
        </a>
    </div>
    <div class="p-3 w-full">
        <div class="bg-[#FDBF0D] rounded-t-2xl">
            <div class="flex flex-rows p-3">
                <div class="md:px-3">
                    <img src="{{ asset('Image/Tenants/' . $dataTenant->Logo) }}"
                        class="h-28 w-28 lg:h-40 lg:w-44 md:h-full md:max-w-60 rounded-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"
                        alt="">
                </div>
                <div class="flex flex-col my-auto">
                    <div class="px-3 xl:px-5">
                        <h2
                            class="text-left text-base md:text-xl lg:text-4xl font-bold py-1 drop-shadow-lg hover:text-white">
                            {{ $dataTenant->nameTenant }}
                        </h2>
                    </div>
                    <div class="px-3 xl:px-5 overflow-hidden md:h-content">
                        <p
                            class="text-xs text-left font-semibold rounded-lg drop-shadow-lg md:text-lg xl:text-xl hover:text-white">
                            {{ $dataTenant->sectorTenant }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-x-2 border-b-2 rounded-b-2xl border-[#FDBF0D]">
            <div class="p-2 xl:px-4 text-[9px] md:text-[12px] lg:text-base font-semibold">
                <table>
                    {{-- nameTenant --}}
                    <tr>
                        <td class="block">
                            Nama Tenant
                        </td>
                        <td class="px-3 align-top">
                            :
                        </td>
                        <td>
                            {{ $dataTenant->nameTenant }}
                        </td>
                    </tr>
                    {{-- Owner --}}
                    <tr>
                        <td class="block">
                            Pemilik Tenant
                        </td>
                        <td class="px-3 align-top">
                            :
                        </td>
                        <td>
                            {{ $dataTenant->Name }}
                        </td>
                    </tr>
                    {{-- address --}}
                    <tr>
                        <td class="block">
                            Alamat Tenant
                        </td>
                        <td class="px-3 align-top">
                            :
                        </td>
                        <td>
                            {{ $dataTenant->addreasTenant }}
                        </td>
                    </tr>
                    {{-- sector --}}
                    <tr>
                        <td class="block">
                            Bidang Tenant
                        </td>
                        <td class="px-3 align-top">
                            :
                        </td>
                        <td>
                            {{ $dataTenant->sectorTenant }}
                        </td>
                    </tr>

                    {{-- Sosmed --}}
                    <tr>
                        <td class="block">
                            Sosial Media
                        </td>
                    </tr>
                    {{-- IG --}}
                    <tr>
                        <td class="block">
                            - Instagram
                        </td>
                        <td class="px-3 align-top">
                            :
                        </td>
                        <td>
                            @if ($dataTenant->IG == true)
                                <a href="{{ $dataTenant->IG }}" target="_blank">Klik Di sini</a>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    {{-- FB --}}
                    <tr>
                        <td class="block">
                            - Facebook
                        </td>
                        <td class="px-3 align-top">
                            :
                        </td>
                        <td>
                            @if ($dataTenant->FB == true)
                                <a href="{{ $dataTenant->FB }}" target="_blank">Klik Di sini</a>
                            @else
                                -
                            @endif
                        </td>
                    </tr>

                    {{-- Description Tenant --}}
                    <tr>
                        <td class="w-24 lg:w-40 block">
                            Deskripsi Tenant
                        </td>
                        <td class="px-3 align-top">
                            :
                        </td>
                        <td class="text-justify leading-loose">
                            {!! $dataTenant->aboutTenant !!}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-templates>
