@extends('layouts.app')

@section('content')
  <main class="bg-gray-50">
    <section class="container-max py-10 md:py-14">
      <div class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-xl">
        <div class="grid lg:grid-cols-[0.95fr_1.05fr]">
          <div class="relative hidden min-h-[680px] bg-gray-950 lg:block">
            <img class="absolute inset-0 h-full w-full object-cover opacity-80" src="https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&w=1200&q=80" alt="Fresh market produce">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/55 to-transparent"></div>
            <div class="relative flex h-full flex-col justify-end p-10 text-white">
              <span class="w-fit rounded-full bg-white/15 px-4 py-2 text-sm font-bold backdrop-blur">Fresh customer account</span>
              <h1 class="mt-5 max-w-lg text-5xl font-black leading-tight">Order fresh food without repeating the same details.</h1>
              <div class="mt-8 grid grid-cols-3 gap-3">
                <div class="rounded-lg bg-white/10 p-4 backdrop-blur"><i class="fa-solid fa-truck-fast text-xl text-amber-300"></i><p class="mt-3 text-sm font-bold">Quick delivery</p></div>
                <div class="rounded-lg bg-white/10 p-4 backdrop-blur"><i class="fa-solid fa-fish-fins text-xl text-amber-300"></i><p class="mt-3 text-sm font-bold">Fresh picks</p></div>
                <div class="rounded-lg bg-white/10 p-4 backdrop-blur"><i class="fa-solid fa-shield-heart text-xl text-amber-300"></i><p class="mt-3 text-sm font-bold">Trusted quality</p></div>
              </div>
            </div>
          </div>

          <div class="p-6 md:p-10 lg:p-12">
            <a class="inline-flex items-center gap-3" href="{{ route('home') }}">
              <img class="h-14 w-14 rounded-full border border-gray-100 bg-white object-contain p-1 shadow" src="https://nahidsworld.com/upload/logonahid.webp" alt="Nahids World">
              <div>
                <p class="text-xl font-black uppercase text-green-600">Nahid's World</p>
                <p class="text-xs font-bold text-gray-500">Focus on Quality Not Quantity</p>
              </div>
            </a>

            <div class="mt-10">
              <p class="font-black uppercase tracking-widest text-primary-600">Create account</p>
              <h2 class="mt-2 text-3xl font-black text-gray-950 md:text-4xl">Start shopping fresh.</h2>
              <p class="mt-3 max-w-lg text-sm leading-6 text-gray-500">Save your delivery information and keep checkout quick for fish, meat, grocery, and package orders.</p>
            </div>

            <form class="mt-8 grid gap-5">
              <div class="grid gap-5 md:grid-cols-2">
                <label class="block">
                  <span class="mb-2 block text-sm font-bold text-gray-700">Full name</span>
                  <input class="form-input rounded-lg" type="text" placeholder="Your name">
                </label>
                <label class="block">
                  <span class="mb-2 block text-sm font-bold text-gray-700">Phone number</span>
                  <input class="form-input rounded-lg" type="tel" placeholder="01XXXXXXXXX">
                </label>
              </div>
              <label class="block">
                <span class="mb-2 block text-sm font-bold text-gray-700">Email address</span>
                <input class="form-input rounded-lg" type="email" placeholder="you@example.com">
              </label>
              <label class="block">
                <span class="mb-2 block text-sm font-bold text-gray-700">Delivery area</span>
                <input class="form-input rounded-lg" type="text" placeholder="Area, city">
              </label>
              <div class="grid gap-5 md:grid-cols-2">
                <label class="block">
                  <span class="mb-2 block text-sm font-bold text-gray-700">Password</span>
                  <input class="form-input rounded-lg" type="password" placeholder="Create password">
                </label>
                <label class="block">
                  <span class="mb-2 block text-sm font-bold text-gray-700">Confirm password</span>
                  <input class="form-input rounded-lg" type="password" placeholder="Repeat password">
                </label>
              </div>
              <label class="flex items-start gap-3 rounded-lg bg-red-50 p-4 text-sm font-semibold text-gray-700">
                <input class="mt-1" type="checkbox">
                Send me fresh deals, delivery updates, and seasonal product alerts.
              </label>
              <a class="flex min-h-12 items-center justify-center rounded-lg bg-primary-600 font-black text-white shadow-lg transition hover:bg-primary-700" href="{{ route('login') }}">Create Account</a>
              <p class="text-center text-sm text-gray-600">Already have an account? <a class="font-black text-primary-600" href="{{ route('login') }}">Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
