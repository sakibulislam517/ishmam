@extends('layouts.app')

@section('content')
  <main class="bg-gray-50">
    <section class="container-max py-10 md:py-14">
      <div class="grid gap-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-stretch">
        <div class="rounded-lg border border-gray-100 bg-white p-6 shadow-xl md:p-10">
          <a class="inline-flex items-center gap-3" href="{{ route('home') }}">
            <img class="h-14 w-14 rounded-full border border-gray-100 bg-white object-contain p-1 shadow" src="https://nahidsworld.com/upload/logonahid.webp" alt="Nahids World">
            <div>
              <p class="text-xl font-black uppercase text-green-600">Nahid's World</p>
              <p class="text-xs font-bold text-gray-500">Fresh food marketplace</p>
            </div>
          </a>

          <div class="mt-10">
            <p class="font-black uppercase tracking-widest text-primary-600">Welcome back</p>
            <h1 class="mt-2 text-3xl font-black text-gray-950 md:text-4xl">Login to your account.</h1>
            <p class="mt-3 text-sm leading-6 text-gray-500">Use your saved account for faster checkout, order history, and delivery updates.</p>
          </div>

          <form class="mt-8 space-y-5">
            <label class="block">
              <span class="mb-2 block text-sm font-bold text-gray-700">Email or phone</span>
              <input class="form-input rounded-lg" type="text" placeholder="you@example.com or 01XXXXXXXXX">
            </label>
            <label class="block">
              <span class="mb-2 block text-sm font-bold text-gray-700">Password</span>
              <input class="form-input rounded-lg" type="password" placeholder="Your password">
            </label>
            <div class="flex flex-wrap items-center justify-between gap-3 text-sm">
              <label class="flex items-center gap-2 font-semibold text-gray-600"><input type="checkbox"> Remember me</label>
              <a class="font-black text-primary-600" href="{{ route('signup') }}">Create account</a>
            </div>
            <a class="flex min-h-12 items-center justify-center rounded-lg bg-primary-600 font-black text-white shadow-lg transition hover:bg-primary-700" href="{{ route('home') }}">Sign In</a>
          </form>
        </div>

        <div class="relative min-h-[520px] overflow-hidden rounded-lg bg-gray-950 shadow-xl">
          <img class="absolute inset-0 h-full w-full object-cover opacity-80" src="https://images.unsplash.com/photo-1506617420156-8e4536971650?auto=format&fit=crop&w=1200&q=80" alt="Fresh seafood">
          <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/35 to-transparent"></div>
          <div class="relative flex h-full flex-col justify-end p-8 text-white md:p-10">
            <span class="w-fit rounded-full bg-amber-400 px-4 py-2 text-sm font-black text-white">Today fresh</span>
            <h2 class="mt-5 max-w-xl text-4xl font-black leading-tight md:text-5xl">Premium fish, meat, and groceries delivered with care.</h2>
            <div class="mt-8 grid gap-3 sm:grid-cols-3">
              <div class="rounded-lg bg-white/10 p-4 backdrop-blur"><strong class="text-2xl">6AM</strong><p class="text-sm text-white/80">Market sourcing</p></div>
              <div class="rounded-lg bg-white/10 p-4 backdrop-blur"><strong class="text-2xl">Cold</strong><p class="text-sm text-white/80">Packed delivery</p></div>
              <div class="rounded-lg bg-white/10 p-4 backdrop-blur"><strong class="text-2xl">7d</strong><p class="text-sm text-white/80">Support</p></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
