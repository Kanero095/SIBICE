<x-templates>
    <title>Activities Manage | SIBICIE'</title>

    @if (session('success'))
        <div
            class="alert alert-success italic bg-red-500 text-center text-sm sm:text-lg py-2 font-semibold text-white drop-shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <div class="py-5 px-3">
            <table class="table border-2 border-black mx-auto text-sm">
                <thead class="border-2 border-black">
                    <tr class="border-2 border-black text-center">
                        <th class="px-10">
                            Author
                        </th>
                        <th class="px-10">
                            Date Created
                        </th>
                        <th class="px-10">
                            Description
                        </th>
                        <th class="px-10">
                            Link Content
                        </th>
                        <th class="px-10">
                            Image Thumbnail
                        </th>
                        <th class="px-10">
                            {{--  --}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                        <tr class="border-b-2 border-black">
                            <td class="px-2">
                                {{ $activity->Author }}
                            </td>
                            <td class="text-center px-2">
                                {{ $activity->dateFormatted }}
                            </td>
                            <td class="px-2">
                                {{ Str::limit($activity->Description, 100) }}
                            </td>
                            <td class="px-2 hover:text-blue-500">
                                <a href="{{ $activity->LinkContent }}">{{ Str::limit($activity->LinkContent, 30) }}</a>
                            </td>
                            <td class="mx-auto px-2 py-2">
                                <img src="{{ asset('Image/Activities/' . $activity->dateFormatted . '/' . $activity->ImageActivities) }}"
                                    class="rounded-lg border-2 border-[#1C6C99] max-h-60 w-full h-full" alt="">
                            </td>
                            <td class="px-2 pt-3 grid grid-cols-1 text-center items-center">
                                <a href="{{ route('activities-edit', $activity->slug) }}"
                                    class="button w-full bg-amber-400 px-3 py-1 rounded-lg text-white font-bold drop-shadow">
                                    Edit
                                </a>
                                <br>
                                <form action="{{ route('activities-delete', $activity->slug) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit"
                                        class="button w-full bg-red-500 px-3 py-1 rounded-lg text-white font-bold drop-shadow">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-templates>
