<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    @php
        $products = [
            [
                'name' => 'Minimal Desk Lamp',
                'price' => '$42',
                'tag' => 'Home',
                'image' => 'https://picsum.photos/seed/lamp/800/1000',
            ],
            [
                'name' => 'Canvas Weekender Bag',
                'price' => '$68',
                'tag' => 'Travel',
                'image' => 'https://picsum.photos/seed/bag/800/1000',
            ],
            [
                'name' => 'Wireless Headphones',
                'price' => '$129',
                'tag' => 'Audio',
                'image' => 'https://picsum.photos/seed/headphones/800/1000',
            ],
            [
                'name' => 'Ceramic Coffee Set',
                'price' => '$35',
                'tag' => 'Kitchen',
                'image' => 'https://picsum.photos/seed/coffee/800/1000',
            ],
            [
                'name' => 'Everyday Sneakers',
                'price' => '$89',
                'tag' => 'Fashion',
                'image' => 'https://picsum.photos/seed/sneakers/800/1000',
            ],
            [
                'name' => 'Desk Organizer Set',
                'price' => '$24',
                'tag' => 'Office',
                'image' => 'https://picsum.photos/seed/organizer/800/1000',
            ],
        ];
    @endphp

    <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(96,165,250,0.18),_transparent_34%),linear-gradient(180deg,_#0f172a_0%,_#111827_48%,_#1f2937_100%)] px-4 py-8 text-slate-100 sm:px-6 lg:px-8">
        <div class="mx-auto flex w-full max-w-7xl flex-col gap-8">
            <section class="overflow-hidden rounded-[2rem] border border-white/10 bg-white/8 p-6 shadow-[0_24px_80px_rgba(15,23,42,0.35)] backdrop-blur md:p-8">
                <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <div class="max-w-2xl">
                        <p class="text-sm font-medium uppercase tracking-[0.28em] text-sky-300/90">Cardstore marketplace</p>
                        <h1 class="mt-3 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Curated cards, compact sizing, and quick buy actions.</h1>
                        <p class="mt-3 max-w-xl text-sm leading-6 text-slate-300 sm:text-base">A cleaner marketplace layout with image-first product cards, stronger hierarchy, and smaller tiles so more items fit on screen without losing the design language you already had.</p>
                    </div>

                    <div class="grid grid-cols-3 gap-3 text-center text-sm text-slate-300 sm:w-auto sm:min-w-[280px]">
                        <div class="rounded-2xl border border-white/10 bg-slate-950/35 px-4 py-3">
                            <div class="text-lg font-semibold text-white">24</div>
                            Items
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-slate-950/35 px-4 py-3">
                            <div class="text-lg font-semibold text-white">4.8</div>
                            Rating
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-slate-950/35 px-4 py-3">
                            <div class="text-lg font-semibold text-white">24h</div>
                            Delivery
                        </div>
                    </div>
                </div>
            </section>

            <section class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
                @foreach ($products as $product)
                    <article class="group flex h-full flex-col overflow-hidden rounded-[1.75rem] border border-white/10 bg-white shadow-[0_20px_50px_rgba(15,23,42,0.18)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_28px_60px_rgba(15,23,42,0.28)]">
                        <div class="relative aspect-[4/5] overflow-hidden bg-slate-100">
                            <img
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                src="{{ $product['image'] }}"
                                alt="{{ $product['name'] }}"
                            />
                            <div class="absolute left-4 top-4 rounded-full bg-slate-950/75 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-white backdrop-blur">
                                {{ $product['tag'] }}
                            </div>
                        </div>

                        <div class="flex flex-1 flex-col gap-4 p-5">
                            <div class="space-y-2">
                                <h2 class="text-lg font-semibold tracking-tight text-slate-900">{{ $product['name'] }}</h2>
                                <p class="text-sm leading-6 text-slate-500">Sized to fit a tighter marketplace grid while keeping the same clean, card-based presentation.</p>
                            </div>

                            <div class="mt-auto flex items-center justify-between gap-4 border-t border-slate-100 pt-4">
                                <div>
                                    <div class="text-xs font-medium uppercase tracking-[0.24em] text-slate-400">Price</div>
                                    <div class="text-2xl font-semibold tracking-tight text-slate-900">{{ $product['price'] }}</div>
                                </div>

                                <a
                                    href="#"
                                    class="inline-flex items-center justify-center rounded-full bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/25 transition hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500/40"
                                >
                                    Buy
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </section>
        </div>
    </div>
</x-layout>