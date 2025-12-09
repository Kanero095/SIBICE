<nav x-data="{ open: false }" class="bg-[#FDBF0D] border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-3 sm:px-6 lg:px-8 py-2 xl:py-4">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <table class="w-full">
                            <tr>
                                <td rowspan="2">
                                    <x-application-mark class="block h-9 w-auto" />
                                </td>
                                <td class="px-3 lg:px-5">
                                    <span
                                        class="text-xl lg:text-4xl font-extrabold inline-block align-baseline mt-3 text-[#0D7DC3] text-stroke-1">Si
                                        Bi
                                        Ce'</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-3 lg:px-5">
                                    <span
                                        class="text-base lg:text-2xl font-bold inline-block align-top mb-4 text-[#F58441] text-stroke-1">SRIWIJAYA
                                        BISNIS
                                        CENTER</span>
                                </td>
                            </tr>
                        </table>
                    </a>
                </div>
            </div>

            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-5 sm:flex text-shadow-3">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
                        class="text-white font-extrabold text-base">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-5 sm:flex text-shadow-3">
                    <x-nav-link href="{{ route('tenants') }}" :active="request()->routeIs('tenants')"
                        class="text-white font-extrabold text-base">
                        {{ __('Tenants') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-5 sm:flex text-shadow-3">
                    <x-nav-link href="{{ route('activities') }}" :active="request()->routeIs('activities')"
                        class="text-white font-extrabold text-base">
                        {{ __('Activities') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-5 sm:flex">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownOthers"
                        class="flex items-center justify-between w-full pt-2 px-3 text-white rounded md:border-0 md:pr-2 md:p-0 font-extrabold text-shadow-3">
                        Others
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <div id="dropdownOthers" class="z-10 hidden font-normal bg-white rounded-lg">
                        <ul class="py-2 text-sm" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('registBinaanUKM') }}"
                                    class="block px-4 py-2 hover:bg-[#398FBF] text-black hover:font-bold hover:text-white">
                                    Registrasi Binaan UKM
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('visi-misi') }}"
                                    class="block px-4 py-2 hover:bg-[#398FBF] text-black hover:font-bold hover:text-white">
                                    Visi & Misi
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('galery') }}"
                                    class="block px-4 py-2 hover:bg-[#398FBF] text-black hover:font-bold hover:text-white">
                                    Galery
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @if (Auth::check())
                    <div class="hidden space-x-8 sm:-my-px sm:ms-5 sm:flex items-center justify-between">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-bold rounded-md text-white bg-[#0D7DC3] hover:text-gray-700 focus:outline-none focus:bg-[#F58441] active:bg-gray-50 transition ease-in-out duration-150">
                                            @if (Auth::user()->roles == 'Super Admin' || Auth::user()->roles == 'Admin' || Auth::user()->roles == 'admin')
                                                {{ Auth::user()->name }}
                                                ({{ Auth::user()->roles }})
                                            @else
                                                {{ Auth::user()->name }}
                                            @endif

                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                @if (Auth::user()->roles == 'Super Admin' || Auth::user()->roles == 'Admin')
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <x-dropdown-link href="{{ route('activities-create') }}">
                                        {{ __('Aktivities Create') }}
                                    </x-dropdown-link>

                                    <x-dropdown-link href="{{ route('activities-manage') }}">
                                        {{ __('Aktivities Manage') }}
                                    </x-dropdown-link>

                                    <x-dropdown-link href="{{ route('registBinaanUKM-Verify') }}">
                                        {{ __('Verifikasi Data Registrasi Binaan UKM') }}
                                    </x-dropdown-link>
                                @else
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <x-dropdown-link href="{{ route('halamanPengajuan') }}">
                                        {{ __('Halaman Pengajuan') }}
                                    </x-dropdown-link>
                                @endif

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-200"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <div class="hidden space-x-8 sm:-my-px sm:ms-5 sm:flex items-center justify-between">
                        <x-nav-link href="{{ route('login') }}"
                            class="text-white font-extrabold text-base bg-[#0D7DC3] px-5 h-10 rounded-xl hover:bg-white hover:text-[#0D7DC3]">
                            {{ __('Login') }}
                        </x-nav-link>
                    </div>
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-[#F58441] focus:outline-none focus:bg-white focus:text-[#F58441] transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }"
        class="hidden sm:hidden bg-[#FDBF0D] px-3 pt-2 pb-3 border-t border-gray-200">
        @if (Auth::check())
            <div class="space-x-8 sm:-my-px sm:ms-5 sm:flex items-center justify-between">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-bold rounded-md text-white bg-[#0D7DC3] hover:text-gray-700 focus:outline-none focus:bg-[#F58441] active:bg-gray-50 transition ease-in-out duration-150">
                                    @if (Auth::user()->roles == 'Super Admin' || Auth::user()->roles == 'Admin' || Auth::user()->roles == 'admin')
                                        {{ Auth::user()->name }}
                                        ({{ Auth::user()->roles }})
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif

                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                        @endif
                    </x-slot>

                    <x-slot name="content" class="w-full">
                        <!-- Account Management -->
                        @if (Auth::user()->roles == 'Super Admin' || Auth::user()->roles == 'admin')
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('activities-create') }}">
                                {{ __('Aktivities Create') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('activities-manage') }}">
                                {{ __('Aktivities Manage') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('registBinaanUKM-Verify') }}">
                                {{ __('Verifikasi Data Registrasi Binaan UKM') }}
                            </x-dropdown-link>
                        @else
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('halamanPengajuan') }}">
                                {{ __('Halaman Pengajuan') }}
                            </x-dropdown-link>
                        @endif

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                        @endif

                        <div class="border-t border-gray-200"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        @else
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link class="text-white font-bold text-shadow-3" href="{{ route('login') }}"
                    :active="request()->routeIs('login')">
                    {{ __('Login') }}
                </x-responsive-nav-link>
            </div>
        @endif


        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link class="text-white font-bold text-shadow-3" href="{{ route('dashboard') }}"
                :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link class="text-white font-bold text-shadow-3" href="{{ route('tenants') }}"
                :active="request()->routeIs('tenants')">
                {{ __('Tenants') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link class="text-white font-bold text-shadow-3" href="{{ route('activities') }}"
                :active="request()->routeIs('activities')">
                {{ __('Activities') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <button id="dropdownNavbarLinkMobile" data-dropdown-toggle="dropdownNavbarMobile"
                class="flex items-center justify-between w-full pt-2 px-3 text-white rounded md:border-0 md:pr-2 md:p-0">
                Others
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <div id="dropdownNavbarMobile"
                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-black" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="{{ route('registBinaanUKM') }}"
                            class="block px-4 py-2 hover:bg-[#398FBF] text-black">
                            Registrasi Binaan UKM
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('visi-misi') }}"
                            class="block px-4 py-2 hover:bg-[#398FBF] text-black hover:font-bold hover:text-white">
                            Visi & Misi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('galery') }}"
                            class="block px-4 py-2 hover:bg-[#398FBF] text-black hover:font-bold hover:text-white">
                            Galery
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
