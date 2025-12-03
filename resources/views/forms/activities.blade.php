<x-templates>
    <title>Activities-Create | SIBICE'</title>

    @if (session('success'))
        <div
            class="alert alert-success bg-lime-500 italic text-center text-sm sm:text-lg py-2 font-semibold text-white drop-shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="px-10 py-5 pb-6">
        <div class="px-10 py-5 rounded-xl bg-white drop-shadow">
            <h2 class="text-lg md:text-3xl text-center font-extrabold underline underline-offset-8">
                CREATE ACTIVITIES
            </h2>
            <div class="pt-7">
                <form action="{{ route('activities-submit') }}" method="POST" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="hidden">
                        {{-- Author --}}
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="Author" id="Author"
                                class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ Auth::user()->name }}" />
                            <label for="Author"
                                class="peer-focus:font-medium absolute text-sm text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Author
                            </label>
                        </div>
                    </div>

                    <div>
                        {{-- Description --}}
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="Description" id="Description"
                                class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="Description"
                                class="peer-focus:font-medium absolute text-sm text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Description
                            </label>
                        </div>
                    </div>

                    <div>
                        {{-- LinkContent --}}
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="LinkContent" id="LinkContent"
                                class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="LinkContent"
                                class="peer-focus:font-medium absolute text-sm text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Link Your Content
                            </label>
                        </div>
                    </div>

                    <div>
                        {{-- image --}}
                        <div class="relative z-0 w-full mb-5 group">
                            <label class="block mb-2 text-sm font-medium text-black" for="ImageActivities">Upload
                                Thumbnail Image : <i class="text-xs">.jpg .jpeg .png</i></label>
                            <input
                                class="block w-full text-sm text-gray-900 bg-transparent cursor-pointer bg-sky-100 focus:outline-none"
                                aria-describedby="ImageActivities_help" name="ImageActivities" id="ImageActivities"
                                type="file" accept="image/*" required>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="bg-lime-600 px-3 py-1 rounded-xl font-bold text-white hover:bg-lime-700 hover:border-2 hover:border-lime-600 hover:bg-white hover:text-lime-600 mr-3">Submit</button>
                        <button type="reset"
                            class="bg-red-600 px-3 py-1 rounded-xl font-bold text-white hover:bg-lime-700 hover:border-2 hover:border-red-600 hover:bg-white hover:text-red-600 mr-3">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-templates>
