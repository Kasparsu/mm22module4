@extends('partials.layout')
@section('content')
    <div class="w-full h-screen">
        <div class="absolute top-auto w-full h-screen bg-[url('/public/header.png')] brightness-40"></div>
        <div class="relative z-10 text-white pt-96 ml-24">
            <div class="text-6xl font-primary">
                <p class="mb-6">Professional eports team
                    <span class="uppercase text-primary">Undead Seekers</span>
                </p>
                <p class="font-secondary text-8xl capitalize">From beyond the grave,</p>
                <p class="font-secondary text-8xl capitalize mb-12">
                    We
                    <span class="text-primary">play to win</span>.
                </p>
            </div>
            <div class="flex z-10 font-primary text-2xl space-x-6">
                <button class="flex items-center border-2 border-white rounded-xl py-2 px-16 hover:bg-white hover:text-primary">
                    <i class="nf nf-fa-youtube me-4"></i>Meet the team</button>
                <button class="flex items-center border-2 border-white rounded-xl py-2 px-16 hover:bg-white hover:text-primary">
                    <i class="nf nf-md-cart me-4"></i>Merch store</button>
            </div>
        </div>
    </div>
    <div class="w-full h-screen">
        <div class="absolute w-full top-auto bg-cover bg-[url('/public/background.gif')] h-full brightness-40"></div>
        <div class="relative z-10 h-full mx-24 text-white flex items-center gap-6">
            <img class="rounded-xl" src="https://picsum.photos/seed/kaspar/845/514">
            <div class="font-primary flex flex-col gap-6">
                <h1 class="text-6xl">Who are we?</h1>
                <p class="text-3xl">
                    Welcome to Undead Seekers, where we rise from the shadows to dominate the esports arena. As a team forged in
                    determination and skill, we bring unmatched strategy and execution to every game. Our passion for gaming drives us to
                    set new standards in competitive esports.
                </p>
                <p class="text-3xl">
                    Founded by dedicated gamers, Undead Seekers values teamwork, perseverance, and excellence. Our diverse members unite
                    with a common goal: to be the best.
                </p>
                <p class="text-3xl">
                    Join us on this epic journey. Whether you're a fan, fellow gamer, or potential partner, we're excited to have you with
                    us. Together, we are the Undead Seekers—unrelenting, unstoppable, and always hungry for victory.
                </p>
                <button class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Read more</button>
            </div>
        </div>
    </div>
    <div class="bg-black font-primary text-center py-16">
        <h1 class="text-6xl text-white font-primary mb-4">Our top team players</h1>
        <div class="mx-24 grid grid-cols-5 gap-8 ">
            <div class="h-[500px] group ">
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-[url('https://picsum.photos/seed/kaspar/320/500')]"></div>
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-gradient-to-b from-transparent to-primary group-hover:bg-black
                    group-hover:to-transparent group-hover:opacity-90 transition-all duration-300"></div>
                <div class="relative z-10 mt-8">
                    <div class="px-10 mb-44 opacity-0 group-hover:opacity-100 text-2xl text-white text-start">
                        <h3>Wins: 7</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Losses: 4</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>Kills: 154</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Deaths: 78</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>1v1s: 67%</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <h3 class="text-white text-2xl">CS2</h3>
                    <h1 class="text-white text-6xl">Gr1m</h1>
                </div>
            </div>
            <div class="h-[500px] group ">
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-[url('https://picsum.photos/seed/kaspar/320/500')]"></div>
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-gradient-to-b from-transparent to-primary group-hover:bg-black
                    group-hover:to-transparent group-hover:opacity-90 transition-all duration-300"></div>
                <div class="relative z-10 mt-8">
                    <div class="px-10 mb-44 opacity-0 group-hover:opacity-100 text-2xl text-white text-start">
                        <h3>Wins: 7</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Losses: 4</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>Kills: 154</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Deaths: 78</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>1v1s: 67%</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <h3 class="text-white text-2xl">League Of Legends</h3>
                    <h1 class="text-white text-6xl">Ph2ntom</h1>
                </div>
            </div>
            <div class="h-[500px] group ">
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-[url('https://picsum.photos/seed/kaspar/320/500')]"></div>
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-gradient-to-b from-transparent to-primary group-hover:bg-black
                    group-hover:to-transparent group-hover:opacity-90 transition-all duration-300"></div>
                <div class="relative z-10 mt-8">
                    <div class="px-10 mb-44 opacity-0 group-hover:opacity-100 text-2xl text-white text-start">
                        <h3>Wins: 7</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Losses: 4</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>Kills: 154</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Deaths: 78</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>1v1s: 67%</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <h3 class="text-white text-2xl">CS2</h3>
                    <h1 class="text-white text-6xl">N1ghty_2k</h1>
                </div>
            </div>
            <div class="h-[500px] group ">
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-[url('https://picsum.photos/seed/kaspar/320/500')]"></div>
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-gradient-to-b from-transparent to-primary group-hover:bg-black
                    group-hover:to-transparent group-hover:opacity-90 transition-all duration-300"></div>
                <div class="relative z-10 mt-8">
                    <div class="px-10 mb-44 opacity-0 group-hover:opacity-100 text-2xl text-white text-start">
                        <h3>Wins: 7</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Losses: 4</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>Kills: 154</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Deaths: 78</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>1v1s: 67%</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <h3 class="text-white text-2xl">PUBG</h3>
                    <h1 class="text-white text-6xl">B3N_WO</h1>
                </div>
            </div>
            <div class="h-[500px] group ">
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-[url('https://picsum.photos/seed/kaspar/320/500')]"></div>
                <div class="absolute rounded-xl h-[500px] w-[320px] bg-gradient-to-b from-transparent to-primary group-hover:bg-black
                    group-hover:to-transparent group-hover:opacity-90 transition-all duration-300"></div>
                <div class="relative z-10 mt-8">
                    <div class="px-10 mb-44 opacity-0 group-hover:opacity-100 text-2xl text-white text-start">
                        <h3>Wins: 7</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Losses: 4</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>Kills: 154</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <h3>Deaths: 78</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <h3>1v1s: 67%</h3>
                        <div class=" bg-gray-200 rounded-full h-0.5 mb-1 ">
                            <div class="bg-primary h-0.5 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <h3 class="text-white text-2xl">Valorant</h3>
                    <h1 class="text-white text-6xl">MAM3A</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-fit">
        <div class="absolute w-full top-auto bg-cover bg-[url('/public/background.gif')] h-full brightness-40"></div>
        <div class="relative z-10 h-full mx-24 text-white text-center font-primary">
            <h1 class="text-6xl p-16">We play a lot of games</h1>
            <div class="flex gap-6 justify-center">
                <img src="lollogo.webp">
                <img src="cs2logo.webp">
                <img src="pubglogo.webp">
                <img src="valorantlogo.webp">
            </div>
        </div>
    </div>
    <div class="w-full h-fit ">
        <div class="absolute w-full top-auto bg-cover bg-[url('/public/background.gif')] h-full brightness-40"></div>

        <div class="relative z-10 h-full pt-32 mx-32 text-white text-center font-primary">
            <div class="grid grid-cols-2 gap-6">
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between items-center">
                        <div class="text-left">
                            <h3 class="text-primary text-4xl">recent</h3>
                            <h3 class="text-6xl uppercase">Matches</h3>
                        </div>
                        <div class="inline-flex rounded-md shadow-sm h-fit" role="group">
                            <button type="button" class="px-4 py-2 text-2xl font-medium rounded-s-xl bg-primary text-white">
                                CS2
                            </button>
                            <button type="button" class="px-4 py-2 text-2xl font-medium  bg-black text-primary">
                                PUBG
                            </button>
                            <button type="button" class="px-4 py-2 text-2xl font-medium  bg-black text-primary">
                                LOL
                            </button>
                            <button type="button" class="px-4 py-2 text-2xl font-medium rounded-e-xl bg-black text-primary">
                                Valorant
                            </button>
                        </div>
                    </div>
                    <div class="bg-black flex justify-between p-8 rounded-xl">
                        <div class="grid grid-cols-3 gap-2">
                            <img class="h-12" src="teamundead.webp">
                            <h1 class="text-6xl text-primary">VS<h1>
                            <img class="h-12" src="teamastralis.webp">
                        </div>
                        <div class="text-start">
                            <h1 class="text-2xl uppercase">Undead Seekers <span class="text-primary">vs</span> Astralis</h1>
                            <h3 class="text-xl">December 18 2024</h3>
                        </div>
                        <div>
                            <h1 class="text-6xl text-success">13:8</h1>
                        </div>
                        <div>
                            <h3 class="text-2xl">Watch replay on</h3>
                            <div class="flex justify-between text-3xl">
                                <i class="nf nf-fa-twitch"></i>
                                <i class="nf nf-fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-black flex justify-between p-8 rounded-xl">
                        <div class="grid grid-cols-3 gap-2">
                            <img class="h-12" src="teamundead.webp">
                            <h1 class="text-6xl text-primary">VS<h1>
                            <img class="h-12" src="teamastralis.webp">
                        </div>
                        <div class="text-start">
                            <h1 class="text-2xl uppercase">Undead Seekers <span class="text-primary">vs</span> Astralis</h1>
                            <h3 class="text-xl">December 18 2024</h3>
                        </div>
                        <div>
                            <h1 class="text-6xl text-defeat">13:8</h1>
                        </div>
                        <div>
                            <h3 class="text-2xl">Watch replay on</h3>
                            <div class="flex justify-between text-3xl">
                                <i class="nf nf-fa-twitch"></i>
                                <i class="nf nf-fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-black flex justify-between p-8 rounded-xl">
                        <div class="grid grid-cols-3 gap-2">
                            <img class="h-12" src="teamundead.webp">
                            <h1 class="text-6xl text-primary">VS<h1>
                            <img class="h-12" src="teamastralis.webp">
                        </div>
                        <div class="text-start">
                            <h1 class="text-2xl uppercase">Undead Seekers <span class="text-primary">vs</span> Astralis</h1>
                            <h3 class="text-xl">December 18 2024</h3>
                        </div>
                        <div>
                            <h1 class="text-6xl text-success">13:8</h1>
                        </div>
                        <div>
                            <h3 class="text-2xl">Watch replay on</h3>
                            <div class="flex justify-between text-3xl">
                                <i class="nf nf-fa-twitch"></i>
                                <i class="nf nf-fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between items-center">
                        <div class="text-left">
                            <h3 class="text-primary text-4xl">upcoming</h3>
                            <h3 class="text-6xl uppercase">Matches</h3>
                        </div>
                        <div class="inline-flex rounded-md shadow-sm h-fit" role="group">
                            <button type="button" class="px-4 py-2 text-2xl font-medium rounded-s-xl bg-primary text-white">
                                CS2
                            </button>
                            <button type="button" class="px-4 py-2 text-2xl font-medium  bg-black text-primary">
                                PUBG
                            </button>
                            <button type="button" class="px-4 py-2 text-2xl font-medium  bg-black text-primary">
                                LOL
                            </button>
                            <button type="button" class="px-4 py-2 text-2xl font-medium rounded-e-xl bg-black text-primary">
                                Valorant
                            </button>
                        </div>
                    </div>
                    <div class="bg-black flex justify-between p-8 rounded-xl">
                        <div class="grid grid-cols-3 gap-2">
                            <img class="h-12" src="teamundead.webp">
                            <h1 class="text-6xl text-primary">VS<h1>
                            <img class="h-12" src="teamastralis.webp">
                        </div>
                        <div class="text-start">
                            <h1 class="text-2xl uppercase">Undead Seekers <span class="text-primary">vs</span> Astralis</h1>
                            <h3 class="text-xl">December 18 2024</h3>
                        </div>
                        <div>
                            <h1 class="text-6xl text-primary">coming</h1>
                        </div>
                        <div>
                            <h3 class="text-2xl">Watch replay on</h3>
                            <div class="flex justify-between text-3xl">
                                <i class="nf nf-fa-twitch"></i>
                                <i class="nf nf-fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-black flex justify-between p-8 rounded-xl">
                        <div class="grid grid-cols-3 gap-2">
                            <img class="h-12" src="teamundead.webp">
                            <h1 class="text-6xl text-primary">VS<h1>
                            <img class="h-12" src="teamastralis.webp">
                        </div>
                        <div class="text-start">
                            <h1 class="text-2xl uppercase">Undead Seekers <span class="text-primary">vs</span> Astralis</h1>
                            <h3 class="text-xl">December 18 2024</h3>
                        </div>
                        <div>
                            <h1 class="text-6xl text-primary">coming</h1>
                        </div>
                        <div>
                            <h3 class="text-2xl">Watch replay on</h3>
                            <div class="flex justify-between text-3xl">
                                <i class="nf nf-fa-twitch"></i>
                                <i class="nf nf-fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-black flex justify-between p-8 rounded-xl">
                        <div class="grid grid-cols-3 gap-2">
                            <img class="h-12" src="teamundead.webp">
                            <h1 class="text-6xl text-primary">VS<h1>
                            <img class="h-12" src="teamastralis.webp">
                        </div>
                        <div class="text-start">
                            <h1 class="text-2xl uppercase">Undead Seekers <span class="text-primary">vs</span> Astralis</h1>
                            <h3 class="text-xl">December 18 2024</h3>
                        </div>
                        <div>
                            <h1 class="text-6xl text-primary">coming</h1>
                        </div>
                        <div>
                            <h3 class="text-2xl">Watch replay on</h3>
                            <div class="flex justify-between text-3xl">
                                <i class="nf nf-fa-twitch"></i>
                                <i class="nf nf-fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="w-full h-fit ">
        <div class="absolute w-full top-auto bg-cover bg-[url('/public/background.gif')] h-full brightness-40"></div>

        <div class="relative z-10 h-full pt-32 mx-32 text-white text-center font-primary">
            <h3 class="text-primary text-2xl">Check out our merch</h3>
            <h1 class="text-6xl">Our most popular</h1>
            <div class="grid grid-cols-4 gap-16">
                @foreach($products as $product)
                    <div class="bg-black rounded-xl overflow-hidden">
                        <div class="h-96">
                            <img class="object-cover h-inherit w-inherit"  src="{{Storage::disk('public')->url($product->image[0])}}">
                        </div>
                        <div class="p-4">
                            <h2 class="text-3xl">{{$product->name}}</h2>
                            <h2 class="text-2xl text-primary">€{{$product->price}}</h2>
                            <a href="{{route('product', ['product' => $product])}}" class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Add to cart</a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="bg-black rounded-xl overflow-hidden">
                    <div class="h-96">
                        <img class="object-cover h-inherit w-inherit"  src="/hoodie.webp">
                    </div>

                    <div class="p-4">
                        <h2 class="text-3xl">Undead seekers hoodie</h2>
                        <h2 class="text-2xl text-primary">$35.99</h2>
                        <button class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Add to cart</button>
                    </div>
                </div>
                <div class="bg-black rounded-xl overflow-hidden">
                    <div class="h-96">
                        <img class="object-cover h-inherit w-inherit"  src="/banner.webp">
                    </div>

                    <div class="p-4">
                        <h2 class="text-3xl">Undead seekers big-banner</h2>
                        <h2 class="text-2xl text-primary">$35.99</h2>
                        <button class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Add to cart</button>
                    </div>
                </div>
                <div class="bg-black rounded-xl overflow-hidden">
                    <div class="h-96">
                        <img class="object-cover h-inherit w-inherit"  src="/stickers.webp">
                    </div>

                    <div class="p-4">
                        <h2 class="text-3xl">Undead seekers stickers combo</h2>
                        <h2 class="text-2xl text-primary">$35.99</h2>
                        <button class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Add to cart</button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
