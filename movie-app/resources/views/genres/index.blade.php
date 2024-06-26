@extends('_layouts.main') 

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Tables
            </h2>

            <nav>
                <a
                    href="/movies/create"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                >
                    Create
                </a>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table Two Start -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                <div class="col-span-1 flex items-center">
                        <p class="font-medium">Id</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="font-medium">Anime Name</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="font-medium">Description</p>
                    </div>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">1.</p>
                        </div>
                        <div class="w-12 gap-4 col-span-3 flex items-center">
                        <img src="src/images/movie/movie-01.jpg" alt="Product" />
                            <p class="text-sm font-medium text-black dark:text-white">Jojo Bizarre Adventure</p>
                        </div>
                        <div class="col-span-3 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">Jojo's Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.</p>
                        </div>
                </div>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">2.</p>
                        </div>
                        <div class="w-12 gap-4 col-span-3 flex items-center">
                        <img src="src/images/movie/movie-02.jpg" alt="Product" />
                            <p class="text-sm font-medium text-black dark:text-white">Noragami</p>
                        </div>
                        <div class="col-span-3 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.</p>
                        </div>
                </div>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">3.</p>
                            </div>
                        <div class="w-12 gap-4 col-span-3 flex items-center">
                        <img src="src/images/movie/movie-03.jpg" alt="Product" />
                            <p class="text-sm font-medium text-black dark:text-white">Wind Breaker</p>
                        </div>
                        <div class="col-span-3 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">Haruka Sakura wants nothing to do with weaklings—he's only interested in the strongest of the strong.</p>
                        </div>
                </div>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">4.</p>
                        </div>
                        <div class="w-12 gap-4 col-span-3 flex items-center">
                        <img src="src/images/movie/movie-04.jpg" alt="Product" />
                            <p class="text-sm font-medium text-black dark:text-white">Spy x Family</p>
                        </div>
                        <div class="col-span-3 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">Spy x Family is a manga that tells the story of a spy named Twilight who is hired for a secret mission.</p>
                        </div>
                </div>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">5.</p>
                        </div>
                        <div class="w-12 gap-4 col-span-3 flex items-center">
                        <img src="src/images/movie/movie-05.jpg" alt="Product" />
                            <p class="text-sm font-medium text-black dark:text-white">Drifting Home</p>
                        </div>
                        <div class="col-span-3 flex items-center">
                            <p class="text-sm font-medium text-black dark:text-white">Raised like siblings, Kosuke and Natsume have been friends since childhood, but their relationship begins to strain in sixth grade after Kosuke's grandfather Yasuji dies.</p>
                        </div>
                </div>
            </div>

            <!-- ====== Table Two End -->
        </div>
        <!-- ====== Table Section End -->
    </div>
</main>
@endsection
