<x-templates>
    <title>Registrasi Binaan UKM | SIBICE'</title>

    @if (session('success'))
        <div
            class="alert alert-success bg-green-500 italic text-center text-sm sm:text-lg py-2 font-semibold text-white drop-shadow">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div
            class="alert alert-success bg-red-500 italic text-center text-sm sm:text-lg py-2 font-semibold text-white drop-shadow">
            {{ session('error') }}
        </div>
    @endif

    <div class="text-center py-4">
        <div>
            <h2 class="text-4xl font-extrabold">
                Registrasi
            </h2>
        </div>
        <div class="mt-1">
            <h2 class="text-3xl font-extrabold  border-b-2 border-black w-fit mx-auto">
                Pembinaan UKM
            </h2>
        </div>
    </div>

    {{-- persyaratan --}}
    <div class="px-4 md:px-16 py-5">
        <div class="px-5 md:px-10 pb-5 bg-[#D9D9D9]/25 rounded-xl text-justify">
            <div class="text-center">
                <h2 class="text-2xl font-extrabold py-3">
                    PERSYARATAN
                </h2>
            </div>
            <div class="px-5">
                <ul class="list-disc list-outside">
                    <li>
                        Pemilik usaha harus berumur min.18 tahun.
                    </li>
                    <li>
                        Memiliki nama tenant/usaha.
                    </li>
                    <li>
                        Email dan No.Hp aktif yang dapat dihubungi.
                    </li>
                    <li>
                        Memiliki Logo Usaha.
                    </li>
                    <li>
                        Memiliki legalitas, minimal 2 dari 6 diantara berikut ini:
                    </li>
                </ul>
            </div>
            <div class="px-10">
                <ol class="list-decimal">
                    <li>
                        NIB
                    </li>
                    <li>
                        Halal
                    </li>
                    <li>
                        PIRT
                    </li>
                    <li>
                        HKI
                    </li>
                    <li>
                        BPOM
                    </li>
                    <li>
                        SNI
                    </li>
                </ol>
            </div>
        </div>
    </div>

    {{-- form --}}
    <div class="px-4 md:px-16 py-5">
        <form action="{{ route('registBinaanUKM-submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                {{-- Name --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="Name" id="Name"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ Auth::user()->name }}" required />
                    <label for="Name"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nama Anda*
                    </label>
                </div>
            </div>

            <div class="">
                {{-- Age --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="Age" id="Age" inputmode="numeric"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="Age"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Umur Anda* (Tahun)
                    </label>
                </div>
            </div>

            <div class="">
                {{-- Gender --}}
                <div class="relative z-0 w-full mb-5 group">
                    <label for="Gender" class="text-sm">
                        Jenis Kelamin*
                    </label>
                    <br>
                    <div class="flex">
                        <div class="me-4">
                            <input type="radio" name="Gender" id="Gender" value="Laki-Laki"
                                class="bg-gray-100 focus:ring-[#F58441] text-[#F58441]">
                            <label for="Gender" class="text-sm">Laki-Laki</label>
                        </div>
                        <div class="me-4">
                            <input type="radio" name="Gender" id="Gender" value="Perempuan"
                                class="bg-gray-100 focus:ring-[#F58441] text-[#F58441]">
                            <label for="Gender" class="text-sm">Perempuan</label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="">
                {{-- Email --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="Email" id="Email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ Auth::user()->email }}" readonly />
                    <label for="Email"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Email anda*
                    </label>
                </div>
            </div>

            <div class="">
                {{-- NoContactTenant --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="NoContactTenant" id="NoContactTenant" inputmode="numeric"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="NoContactTenant"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        No Bisnis / Pribadi*
                    </label>
                </div>
            </div>

            <div class="">
                {{-- nameTenant --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nameTenant" id="nameTenant"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="nameTenant"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nama Tenant Anda*
                    </label>
                </div>
            </div>

            <div class="">
                {{-- sectorTenant --}}
                <div class="relative z-0 w-full mb-10 group">
                    <select id="underline_select" name="sectorTenant" id="sectorTenant"
                        class="block py-2.5 px-1 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        required>
                        <option selected>Bidang Usaha Anda*</option>
                        <option value="Makanan & Minuman">Makanan & Minuman</option>
                        <option value="Jasa Komputer & Perangkatnya">Jasa Komputer & Perangkatnya</option>
                        <option value="Periklanan, Percetakan, dan Media">Periklanan, Percetakan, dan Media</option>
                        <option value="Properti dan Real Estat">Properti dan Real Estat</option>
                        <option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
                        <option value="Bibit dan Pangan Hewan">Bibit dan Pangan Hewan</option>
                        <option value="Fashion & Aksesoris">Fashion & Aksesoris</option>
                        <option value="Elektronik">Elektronik</option>
                    </select>
                </div>
            </div>

            <div class="">
                {{-- addreasTenant --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="addreasTenant" id="addreasTenant"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="addreasTenant"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Alamat Tenant Anda*
                    </label>
                </div>
            </div>

            <div class="my-8">
                {{-- aboutTenant --}}
                <div class="relative z-0 w-full mb-5 group">
                    <textarea type="text" name="aboutTenant" id="myeditorinstance"
                        class="block py-2.5 px-0 w-full h-40 text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder="Tentang Tenant Anda" required> </textarea>
                </div>
            </div>

            <div class="">
                {{-- Logo --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="Logo" id="Logo" accept="image/jpg,image/jpeg,image/png"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="Logo"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Upload file Logo: <i class="font-bold">*jpg, jpeg, png</i>
                    </label>
                </div>
            </div>

            {{-- legalitas --}}
            <div class="">
                <h2 class="py-3">
                    Legalitas*
                </h2>
                {{-- NIB --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="LNIB" id="LNIB" accept=".pdf"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="LNIB"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Upload file Sertifikat NIB: <i class="font-bold">*pdf</i>
                    </label>
                </div>

                {{-- HALAL --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="LHALAL" id="LHALAL" accept=".pdf"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="LHALAL"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Upload file Sertifikat HALAL: <i class="font-bold">*pdf</i>
                    </label>
                </div>

                {{-- PIRT --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="LPIRT" id="LPIRT" accept=".pdf"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="LPIRT"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Upload file Sertifikat PIRT: <i class="font-bold">*pdf</i>
                    </label>
                </div>

                {{-- HKI --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="LHKI" id="LHKI" accept=".pdf"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="LHKI"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Upload file Sertifikat HKI: <i class="font-bold">*pdf</i>
                    </label>
                </div>

                {{-- BPOM --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="LBPOM" id="LBPOM" accept=".pdf"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="LBPOM"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Upload file Sertifikat BPOM: <i class="font-bold">*pdf</i>
                    </label>
                </div>

                {{-- SNI --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="file" name="LSNI" id="LSNI" accept=".pdf"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="LSNI"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Upload file Sertifikat SNI: <i class="font-bold">*pdf</i>
                    </label>
                </div>
            </div>

            <div class="">
                {{-- FB --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="FB" id="FB"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="FB"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Link Profil Facebook Bisnis/Pribadi anda
                    </label>
                </div>
            </div>

            <div class="">
                {{-- IG --}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="IG" id="IG"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="IG"
                        class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Link Profil Instagram Bisnis/Pribadi anda
                    </label>
                </div>
            </div>

            <div>
                <button type="submit"
                    class="bg-lime-600 px-3 py-1 rounded-xl font-bold text-white hover:bg-lime-700 hover:border-2 hover:border-lime-600 hover:bg-white hover:text-lime-600 mr-3">Simpan</button>
                <button type="reset"
                    class="bg-red-600 px-3 py-1 rounded-xl font-bold text-white hover:bg-lime-700 hover:border-2 hover:border-red-600 hover:bg-white hover:text-red-600 mr-3">Reset</button>
            </div>
        </form>
    </div>
</x-templates>
