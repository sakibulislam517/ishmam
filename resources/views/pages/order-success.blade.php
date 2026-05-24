@extends('layouts.app')

@section('content')
  <main class="bg-gray-50">
    <section class="container-max py-12 md:py-16">
      <div class="mx-auto max-w-5xl overflow-hidden rounded-lg border border-gray-100 bg-white shadow-xl">
        <div class="grid lg:grid-cols-[0.9fr_1.1fr]">
          <div class="bg-primary-600 p-8 text-white md:p-10">
            <div class="flex h-20 w-20 items-center justify-center rounded-full bg-white text-4xl text-green-600 shadow-lg">
              <i class="fa-solid fa-check"></i>
            </div>
            <p class="mt-8 font-black uppercase tracking-widest text-white/80">Order Success</p>
            <h1 class="mt-3 text-4xl font-black leading-tight md:text-5xl">Your fresh order is confirmed.</h1>
            <p class="mt-4 text-sm leading-7 text-white/90">We have received your order and will prepare it for careful packing and delivery.</p>
            <div class="mt-8 rounded-lg bg-white/10 p-5 backdrop-blur">
              <div class="flex items-center justify-between gap-4"><span class="text-white/80">Order number</span><strong>NW-2026-1048</strong></div>
              <div class="mt-3 flex items-center justify-between gap-4"><span class="text-white/80">Payment</span><strong>Cash on delivery</strong></div>
              <div class="mt-3 flex items-center justify-between gap-4"><span class="text-white/80">Estimated delivery</span><strong>Today, 6:00 PM</strong></div>
            </div>
          </div>

          <div class="p-6 md:p-10">
            <h2 class="text-2xl font-black text-gray-950">What happens next</h2>
            <div class="mt-6 space-y-4">
              <div class="flex gap-4 rounded-lg border border-gray-100 p-4">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-red-50 font-black text-primary-600">1</div>
                <div><h3 class="font-black text-gray-950">Order review</h3><p class="mt-1 text-sm text-gray-500">The team checks product availability and confirms your items.</p></div>
              </div>
              <div class="flex gap-4 rounded-lg border border-gray-100 p-4">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-red-50 font-black text-primary-600">2</div>
                <div><h3 class="font-black text-gray-950">Fresh packing</h3><p class="mt-1 text-sm text-gray-500">Fish, seafood, and grocery items are packed for delivery.</p></div>
              </div>
              <div class="flex gap-4 rounded-lg border border-gray-100 p-4">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-red-50 font-black text-primary-600">3</div>
                <div><h3 class="font-black text-gray-950">Delivery update</h3><p class="mt-1 text-sm text-gray-500">You receive a call or message before the rider arrives.</p></div>
              </div>
            </div>
            <div class="mt-8 flex flex-wrap gap-3">
              <a class="flex min-h-12 items-center justify-center rounded-lg bg-primary-600 px-6 font-black text-white shadow-lg transition hover:bg-primary-700" href="{{ route('products') }}">Continue Shopping</a>
              <a class="flex min-h-12 items-center justify-center rounded-lg border border-primary-600 px-6 font-black text-primary-600 transition hover:bg-red-50" href="{{ route('home') }}">Back Home</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
