@extends('layouts.app')

@section('content')
  <main class="bg-gray-50">
    <section class="container-max py-10 md:py-14">
      <div class="grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-center">
        <div>
          <p class="font-black uppercase tracking-widest text-primary-600">About Us</p>
          <h1 class="mt-3 max-w-3xl text-4xl font-black leading-tight text-gray-950 md:text-5xl">Fresh food sourcing with a quality-first standard.</h1>
          <p class="mt-5 max-w-2xl text-base leading-8 text-gray-600">Nahid's World brings fish, seafood, meat, grocery staples, and seasonal products into one clean shopping experience. The focus is simple: reliable freshness, careful packing, and quick customer support.</p>
          <div class="mt-8 grid gap-4 sm:grid-cols-3">
            <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-sm"><strong class="text-3xl font-black text-primary-600">6+</strong><p class="mt-1 text-sm font-bold text-gray-600">Fresh categories</p></div>
            <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-sm"><strong class="text-3xl font-black text-primary-600">7d</strong><p class="mt-1 text-sm font-bold text-gray-600">Weekly support</p></div>
            <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-sm"><strong class="text-3xl font-black text-primary-600">100%</strong><p class="mt-1 text-sm font-bold text-gray-600">Quality focus</p></div>
          </div>
        </div>
        <div class="grid gap-4">
          <img class="h-72 w-full rounded-lg object-cover shadow-xl" src="https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?auto=format&fit=crop&w=900&q=80" alt="Fresh meat">
          <div class="grid grid-cols-2 gap-4">
            <img class="h-40 w-full rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1615141982883-c7ad0e69fd62?auto=format&fit=crop&w=700&q=80" alt="Fresh seafood">
            <img class="h-40 w-full rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=700&q=80" alt="Fresh vegetables">
          </div>
        </div>
      </div>
    </section>

    <section class="container-max pb-14">
      <div class="grid gap-5 md:grid-cols-3">
        <div class="rounded-lg border border-gray-100 bg-white p-6 shadow-sm"><i class="fa-solid fa-medal text-3xl text-primary-600"></i><h2 class="mt-4 text-xl font-black text-gray-950">Selected quality</h2><p class="mt-2 text-sm leading-6 text-gray-600">Products are presented for customers who care about freshness, cut, and cleanliness.</p></div>
        <div class="rounded-lg border border-gray-100 bg-white p-6 shadow-sm"><i class="fa-solid fa-box-open text-3xl text-primary-600"></i><h2 class="mt-4 text-xl font-black text-gray-950">Careful packing</h2><p class="mt-2 text-sm leading-6 text-gray-600">Cold, dry, and pantry goods are organized clearly for a confident checkout flow.</p></div>
        <div class="rounded-lg border border-gray-100 bg-white p-6 shadow-sm"><i class="fa-solid fa-headset text-3xl text-primary-600"></i><h2 class="mt-4 text-xl font-black text-gray-950">Helpful support</h2><p class="mt-2 text-sm leading-6 text-gray-600">Customers can reach the team quickly for delivery and order questions.</p></div>
      </div>
    </section>
  </main>
@endsection
