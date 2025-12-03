<x-templates>
    <title>Registration Verify | SIBICIE'</title>

    @if (session('success'))
        <div
            class="alert alert-success italic bg-red-500 text-center text-sm sm:text-lg py-2 font-semibold text-white drop-shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-auto">
        <div class="py-5 px-3">
            <table class="table border-2 border-black mx-auto text-sm w-full">
                <thead class="border-2 border-black">
                    <tr class="border-2 border-black text-center">
                        <th class="px-10">
                            Nama Pemilik
                        </th>
                        <th class="px-10">
                            Email
                        </th>
                        <th class="px-10">
                            No. Kotak Usaha
                        </th>
                        <th class="px-10">
                            Nama Tenant
                        </th>
                        <th class="px-10">
                            Bidang Tenant
                        </th>
                        <th class="px-20">
                            Alamat Tenant
                        </th>
                        <th class="px-10">
                            NIB
                        </th>
                        <th class="px-10">
                            HALAL
                        </th>
                        <th class="px-10">
                            PIRT
                        </th>
                        <th class="px-10">
                            HKI
                        </th>
                        <th class="px-10">
                            BPOM
                        </th>
                        <th class="px-10">
                            SNI
                        </th>
                        <th class="px-10">
                            FB
                        </th>
                        <th class="px-10">
                            IG
                        </th>
                        <th class="px-10">
                            Waktu Registrasi
                        </th>
                        <th class="px-40">
                            Tentang
                        </th>
                        <th class="px-10">
                            Logo
                        </th>
                        <th class="px-10">
                            Status Registrasi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr class="border-b-2 border-black">
                            <td class="text-center px-2">
                                {{ $data->Name }}
                            </td>
                            <td class="text-center px-2">
                                {{ $data->Email }}
                            </td>

                            <td class="text-center px-2">
                                {{ $data->NoContactTenant }}
                            </td>
                            <td class="text-center px-2">
                                {{ $data->nameTenant }}
                            </td>
                            <td class="text-center px-2">
                                {{ $data->sectorTenant }}
                            </td>
                            <td class="text-justify px-2">
                                {{ $data->addreasTenant }}
                            </td>
                            <td class="px-2 text-center">
                                <a href="{{ $data->LNIB }}" target="_blank">Download</a>
                            </td>
                            <td class="px-2 text-center">
                                <a href="{{ $data->LHALAL }}" target="_blank">Download</a>
                            </td>
                            <td class="px-2 text-center">
                                <a href="{{ $data->LPIRT }}" target="_blank">Download</a>
                            </td>
                            <td class="px-2 text-center">
                                <a href="{{ $data->LHKI }}" target="_blank">Download</a>
                            </td>
                            <td class="px-2 text-center">
                                <a href="{{ $data->LBPOM }}" target="_blank">Download</a>
                            </td>
                            <td class="px-2 text-center">
                                <a href="{{ $data->LSNI }}" target="_blank">Download</a>
                            </td>
                            <td class="px-2">
                                <a href="{{ $data->FB }}" target="_blank">{{ Str::limit($data->FB, 100) }}</a>
                            </td>
                            <td class="px-2">
                                <a href="{{ $data->IG }}" target="_blank">{{ Str::limit($data->IG, 100) }}</a>
                            </td>
                            <td class="text-center px-2">
                                {{ $data->DateRegist }}
                            </td>
                            <td class="text-justify px-2">
                                {{ Str::limit($data->aboutTenant, 100) }}
                            </td>
                            <td class="px-2">
                                <img src="{{ asset('Image/Tenants/' . $data->Logo) }}" class="max-h-60 w-full h-full"
                                    alt="">
                            </td>
                            <td class="text-center px-2">
                                @if ($data->statusTenant == 'Diterima' || $data->statusTenant == 'Di Terima')
                                    <div class="text-green-400 text-lg font-bold rounded-lg">
                                        {{ $data->statusTenant }}
                                    </div>
                                @elseif ($data->statusTenant == 'Ditolak' || $data->statusTenant == 'Di Tolak')
                                    <div class="text-red-500 text-lg font-bold rounded-lg">
                                        {{ $data->statusTenant }}
                                    </div>
                                @else
                                    <div class="text-amber-500 text-lg font-bold rounded-lg">
                                        {{ $data->statusTenant }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-templates>
