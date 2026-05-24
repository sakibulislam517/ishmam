@extends('layouts.app')

@section('content')
  <main class="bg-gray-50">
    <section class="bg-primary-600 text-white">
      <div class="container-max py-12">
        <div class="max-w-3xl">
          <p class="font-black uppercase tracking-widest text-white/80">Contact Us</p>
          <h1 class="mt-3 text-4xl font-black leading-tight md:text-5xl">Fast support for fresh orders.</h1>
          <p class="mt-4 text-base leading-7 text-white/90">Ask about delivery areas, product availability, order changes, or special cutting and packing requests.</p>
        </div>
      </div>
    </section>

    <section class="container-max -mt-8 pb-14">
      <div class="grid gap-6 lg:grid-cols-[0.8fr_1.2fr]">
        <div class="space-y-4">
          <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-lg">
            <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 text-primary-600"><i class="fa-solid fa-phone"></i></div>
            <h2 class="mt-4 text-lg font-black text-gray-950">Call</h2>
            <p class="mt-1 font-semibold text-gray-600">01604016929</p>
          </div>
          <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-lg">
            <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 text-primary-600"><i class="fa-regular fa-envelope"></i></div>
            <h2 class="mt-4 text-lg font-black text-gray-950">Email</h2>
            <p class="mt-1 font-semibold text-gray-600">info@nahidsworld.com</p>
          </div>
          <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-lg">
            <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 text-primary-600"><i class="fa-solid fa-location-dot"></i></div>
            <h2 class="mt-4 text-lg font-black text-gray-950">Service area</h2>
            <p class="mt-1 font-semibold text-gray-600">Dhaka, Bangladesh</p>
          </div>
        </div>

        <form class="rounded-lg border border-gray-100 bg-white p-6 shadow-xl md:p-8">
          <div class="grid gap-5 md:grid-cols-2">
            <label class="block"><span class="mb-2 block text-sm font-bold text-gray-700">Name</span><input class="form-input rounded-lg" type="text" placeholder="Your name"></label>
            <label class="block"><span class="mb-2 block text-sm font-bold text-gray-700">Phone</span><input class="form-input rounded-lg" type="tel" placeholder="01XXXXXXXXX"></label>
          </div>
          <div class="mt-5 grid gap-5 md:grid-cols-2">
            <label class="block"><span class="mb-2 block text-sm font-bold text-gray-700">Email</span><input class="form-input rounded-lg" type="email" placeholder="you@example.com"></label>
            <label class="block"><span class="mb-2 block text-sm font-bold text-gray-700">Topic</span><select class="form-input rounded-lg"><option>Order support</option><option>Delivery question</option><option>Product availability</option></select></label>
          </div>
          <label class="mt-5 block"><span class="mb-2 block text-sm font-bold text-gray-700">Message</span><textarea class="form-input min-h-40 rounded-lg" placeholder="Write your message"></textarea></label>
          <button class="mt-6 flex min-h-12 w-full items-center justify-center gap-2 rounded-lg bg-primary-600 font-black text-white shadow-lg transition hover:bg-primary-700" type="button">
            <i class="fa-regular fa-paper-plane"></i>
            Send Message
          </button>
        </form>
      </div>
    </section>
  </main>
@endsection
