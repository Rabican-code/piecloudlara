<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Piecloud') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex my-4 h-[80px] w-[1200px] bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div
                    class=" flex justify-center items-center my-4 mx-6 h-[50px] w-[120px] bg-blue-500 shadow-xl sm:rounded-lg">
                    <p class="text-white text-2xl">Stats</p>
                </div>
                <div class=" flex justify-center items-center my-4 mx-2 h-[50px] w-[120px]  sm:rounded-lg">
                    <p class="text-black text-2xl">Tasks</p>
                </div>
                <div class=" flex justify-center items-center my-4 mx-2 h-[50px] w-[120px]  sm:rounded-lg">
                    <p class="text-black text-2xl">Support</p>
                </div>
                <div class=" flex justify-center items-center my-4 mx-2 h-[50px] w-[120px] sm:rounded-lg">
                    <p class="text-black text-2xl">Status</p>
                </div>

            </div>

            <div class="flex ">
                <div class="mx-6 h-[300px] w-[600px] bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="w-[540px] flex justify-between mt-4">
                        <div>
                            <p class="ml-6 w-2 text-black text-2xl">2000

                            </p>
                            <p class="ml-6 w-2 text-black text-sm">USERS </p>
                        </div>
                        <svg class=" h-6 w-6" fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 32.055 32.055" xml:space="preserve" transform="rotate(90)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M3.968,12.061C1.775,12.061,0,13.835,0,16.027c0,2.192,1.773,3.967,3.968,3.967c2.189,0,3.966-1.772,3.966-3.967 C7.934,13.835,6.157,12.061,3.968,12.061z M16.233,12.061c-2.188,0-3.968,1.773-3.968,3.965c0,2.192,1.778,3.967,3.968,3.967 s3.97-1.772,3.97-3.967C20.201,13.835,18.423,12.061,16.233,12.061z M28.09,12.061c-2.192,0-3.969,1.774-3.969,3.967 c0,2.19,1.774,3.965,3.969,3.965c2.188,0,3.965-1.772,3.965-3.965S30.278,12.061,28.09,12.061z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <img class="mt-8 mx-5" src="{{ url('/images/graph.png') }}">

                </div>

                <div class="mx-4 h-[300px] w-[600px] bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="w-[540px] flex justify-between mt-4">
                        <div>
                            <p class="ml-6 w-2 text-black text-2xl">123

                            </p>
                            <p class="ml-6 w-2 text-black text-sm">SUBCRIBERS </p>
                        </div>
                        <svg class=" h-6 w-6" fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 32.055 32.055" xml:space="preserve" transform="rotate(90)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M3.968,12.061C1.775,12.061,0,13.835,0,16.027c0,2.192,1.773,3.967,3.968,3.967c2.189,0,3.966-1.772,3.966-3.967 C7.934,13.835,6.157,12.061,3.968,12.061z M16.233,12.061c-2.188,0-3.968,1.773-3.968,3.965c0,2.192,1.778,3.967,3.968,3.967 s3.97-1.772,3.97-3.967C20.201,13.835,18.423,12.061,16.233,12.061z M28.09,12.061c-2.192,0-3.969,1.774-3.969,3.967 c0,2.19,1.774,3.965,3.969,3.965c2.188,0,3.965-1.772,3.965-3.965S30.278,12.061,28.09,12.061z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <img class="mt-8 mx-5" src="{{ url('/images/graph.png') }}">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
