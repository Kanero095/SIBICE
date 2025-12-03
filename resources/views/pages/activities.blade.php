<x-templates>
    <title>Activities | SIBICE'</title>

    <div class="px-4 pb-6">
        <div class="pt-6 pb-4">
            <h2 class="text-3xl text-center font-extrabold underline underline-offset-8">
                ACTIVITIES
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
            {{-- content --}}
            @foreach ($activities as $activity)
                <div
                    class="w-full xl:w-72 drop-shadow border-2 border-[#000] rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-90 duration-300">
                    <a href="{{ $activity->LinkContent }}" target="_blank">
                        <div class="px-2 pt-2 h-60">
                            <img src="{{ asset('Image/Activities/' . $activity->dateFormatted . '/' . $activity->ImageActivities) }}"
                                class="rounded-lg border-2 border-[#1C6C99] max-h-60 w-full h-full" alt="">
                        </div>
                        <div class="grid grid-cols-2">
                            <p class="px-2 pt-2 text-[11px] font-bold text-start">
                                👤 {{ $activity->Author }}
                            </p>

                            <p class="px-2 pt-2 text-[11px] text-end font-bold text-center">
                                🗓️ {{ $activity->dateFormatted }}
                            </p>
                        </div>
                        <div class="px-2 mt-2 pb-3">
                            <p class="text-[13px] text-justify rounded-lg drop-shadow-lg xl:text-sm">
                                {{ Str::limit($activity->Description, 250) }}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="paginate m-auto mt-1">
            {{-- paginate --}}
            {{ $activities->links() }}
        </div>
    </div>

</x-templates>
