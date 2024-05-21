@extends('_layouts.main')

@section('content')
<main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <!-- Breadcrumb Start -->
                        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                            Review Data
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
                            <!-- ====== Table Three Start -->
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">Id</p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="font-medium">Anime Name</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="font-medium">User Name</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                        <p class="font-medium">Rating Comment</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">Date
                                    </div>
                                </div>

                        <div class="flex flex-col gap-10">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">1.</p>
                                    </div>
                                    <div class="col-span-3 gap-4 flex items-center">
                                    <img class="w-12" src="src/images/movie/movie-01.jpg" alt="Product" />
                                        <p class="text-sm font-medium text-black dark:text-white">Jojo Bizarre Adventure</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">Salsabila</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">"5 Star for Jojo Bizarre Adventure!! it's a dynamic anime series <br> Jojo's Bizarre Adventure is a title that has an incredible variety of situations through its story. <br> But Golden Wind consolidates the work Hiroiko Araki has done since the series began, not only in terms of drawing style, but also in narrative style."</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        21/05/2021 <br> 09:45 AM
                                        </p>
                                    </div>
                                </div>

                        <div class="flex flex-col gap-10">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">2.</p>
                                    </div>
                                    <div class="col-span-3 gap-4 flex items-center">
                                    <img class="w-12" src="src/images/movie/movie-02.jpg" alt="Product" />
                                        <p class="text-sm font-medium text-black dark:text-white">Noragami</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">Deli sartika</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        "Best anime ever!! Highly recommend it 💕✨ <br> Have you ever felt that you wanted an anime with relatable and well-written characters,<br>coupled with an interesting story filled with action and comedy? Well, look no further, because Noragami is here."</p>
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        03/04/2014 <br> 08:30 AM
                                        </p>
                                    </div>
                                </div>

                        <div class="flex flex-col gap-10">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">3.</p>
                                    </div>
                                    <div class="col-span-3 gap-4 flex items-center">
                                    <img class="w-12" src="src/images/movie/movie-03.jpg" alt="Product" />
                                        <p class="text-sm font-medium text-black dark:text-white">Wind Breaker</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">Sakinatun najah</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                    "10 out of 10, This Movie delivers an electrifying <br> extension of the beloved anime series.<br> For those of you who love fighting scenes, <br> this anime is worth watching. The movements of the characters can be quite dynamic and the tempo is fairly fast but can still be followed without making the eyes tired. Plus, the accompanying music also manages to add a tense atmosphere to the dueling moments."</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        11/06/2021 <br> 10:12 PM
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-10">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">4.</p>
                                    </div>
                                    <div class="col-span-3 gap-4 flex items-center">
                                    <img class="w-12" src="src/images/movie/movie-04.jpg" alt="Product" />
                                        <p class="text-sm font-medium text-black dark:text-white">Spy X Family</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">Ilham Al-Farel</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                    "10 out of 10, This Movie delivers an electrifying <br> This "anime" is the only anime I have ever watched <br> in my life - and I love it! Its a bit violent in some scenes <br> and some times it has swear word but apart from that <br> it is a brilliant anime that the whole family can sit down and watch."</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        17/04/2022 <br> 11:12 PM
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-10">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">5.</p>
                                    </div>
                                    <div class="col-span-3 gap-4 flex items-center">
                                    <img class="w-12" src="src/images/movie/movie-05.jpg" alt="Product" />
                                        <p class="text-sm font-medium text-black dark:text-white">Drifting Home</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">Afifa Putri</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                    "Best anime ever!! recommend 💕✨ <br> Drifting Home delivers a strong cast and deep <br> emotional moments, even if it leaves too many <br> questions unanswered and gets a bit drawn out in <br> its final act."</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        15/04/2023 <br> 09:12 PM
                                        </p>
                                    </div>
                                </div>
                        </div>
                        <!-- ====== Table Section End -->
                    </div>
                </main>
@endsection