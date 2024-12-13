@extends('partials.layout')
@section('content')
<div class="w-full h-fit ">
    <div class="absolute w-full top-auto bg-cover bg-[url('/public/background.gif')] h-full brightness-40"></div>

    <div class="relative z-10 h-full pt-32 mx-32 text-white text-center font-primary">

                <div class="bg-black rounded-xl overflow-hidden">
                    <div class="h-96">
                        <img class="object-cover h-inherit w-inherit"
                            src="{{ Storage::disk('public')->url($product->image[0]) }}">
                    </div>
                    <div class="p-4">
                        <h2 class="text-3xl">{{ $product->name }}</h2>
                        <h2 class="text-2xl text-primary">€{{ $product->price }}</h2>
                        <p class="text-xl">{{ $product->description }}</p>
                        <p class="text-xl">{{ $product->size }}</p>
                        <p class="text-xl">{{ $product->color }}</p>
                        <a href="{{ route('product', ['product' => $product]) }}"
                            class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Add
                            to cart</a>
                    </div>
                </div>

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
