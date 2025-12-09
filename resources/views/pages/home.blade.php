<x-templates>

    <title>Home | SIBICE'</title>
    {{-- 1 --}}
    <x-particle />

    {{-- 2 --}}
    <div>
        <div class="w-full mx-auto">
            <div class="bg-white overflow-x-hidden shadow-xl pb-5">
                <div class="px-5 md:px-20 mt-5 md:mt-12">
                    <div>
                        <p
                            class="text-2xl font-extrabold md:text-4xl w-fit text-center mx-auto border-b-4 border-[#000]">
                            AKTIVITY
                        </p>
                    </div>

                    <div class="wrapper mt-5 mb-5">
                        <!-- content -->
                        @foreach ($activities as $activity)
                            <div
                                class="card w-68 md:w-80 max-h-[25.3rem] overflow-hidden rounded-lg border-2 border-[#000] drop-shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-90 duration-300">
                                <a href="{{ $activity->LinkContent }}" target="_blank">
                                    <div class="px-2 pt-2 h-60">
                                        <img src="{{ $activity->ImageActivities }}"
                                            class="rounded-lg border-2 border-[#1C6C99] max-h-60 w-full h-full"
                                            alt="" />
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <p class="px-2 pt-2 text-[8.5px] md:text-[11px] font-bold text-start">
                                            👤 {{ $activity->Author }}
                                        </p>

                                        <p class="px-2 pt-2 text-[8.5px] md:text-[11px] text-end font-bold text-center">
                                            🗓️ {{ $activity->dateFormatted }}
                                        </p>
                                    </div>
                                    <div class="px-2 mt-2 pb-3">
                                        <p class="text-[12px] text-justify rounded-lg drop-shadow-lg md:text-sm">
                                            {{ Str::limit($activity->Description, 250) }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{-- more --}}
                    <div class="bg-[#136FA2] w-fit mx-auto rounded-xl">
                        <a href="{{ route('activities') }}" class="font-bold text-white px-4 text-lg">
                            See More...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 3 --}}
    <div class="border-t-2 border-[#1C6C99]/40">
        <div class="w-full mx-auto">
            <div class="bg-white overflow-x-hidden shadow-xl pb-5">
                <div class="px-5 md:px-20 mt-5 md:mt-12">
                    <div>
                        <p
                            class="text-2xl font-extrabold md:text-4xl w-fit text-center mx-auto border-b-4 border-[#000]">
                            TENANTS
                        </p>
                    </div>

                    <div class="wrapper-logo mt-5 mb-5">
                        <!-- content -->
                        @foreach ($tenants as $data)
                            <div
                                class="card w-fit max-h-[20rem] overflow-hidden rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-90 duration-300">
                                <a href="{{ route('show-tenant', $data->Slug) }}">
                                    <div class="size-20 md:size-40">
                                        <img src="{{ $data->Logo }}" class="rounded-full w-full h-full border-2"
                                            alt="" />
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{-- more --}}
                    <div class="bg-[#136FA2] w-fit mx-auto rounded-xl">
                        <a href="{{ route('tenants') }}" class="font-bold text-white px-4 text-lg">
                            See More...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 4 --}}
    <div class="border-t-2 border-[#1C6C99]/40">
        <div class="w-full mx-auto">
            <div class="bg-white overflow-x-hidden shadow-xl pb-5">
                <div class="px-5 md:px-20 mt-5 md:mt-12 mx-auto">
                    <div>
                        <p
                            class="text-2xl font-extrabold md:text-4xl w-fit text-center mx-auto border-b-4 border-[#000]">
                            ABOUT
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-0 mt-7 mb-5">
                        <div class="w-fit mx-auto">
                            <img src="{{ asset('Image/Logo/SIBICE_LOGO.png') }}" class="size-48 w-fit md:size-72"
                                alt="Sriwijaya Bisnis Center Logo">
                        </div>
                        <div class="mx-auto">
                            <p class="md:text-xl font-semibold text-justify">
                                Si Bi Ce' adalah singkatan dari Sriwijawa Bisnis Center, yang dimana adalah tempat
                                inkubator bisnis umkm binaan dari Dinas Koperasi dan UKM Provinsi Sumatera Selatan.
                                Umumnya, inkubator bisnis adalah suatu program yang ditawarkan oleh berbagai lembaga
                                guna mendukung usaha pemula. Dukungan pada program tersebut biasanya berupa bimbingan
                                dan penyediaan ruang untuk mengembangkan ide. Pembinaan melalui program inkubator bisnis
                                akan berjalan selama satu sampai dua tahun.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-templates>
