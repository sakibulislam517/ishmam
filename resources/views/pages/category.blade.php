@extends('layouts.app')

@section('content')
  <main class="bg-gray-50">
    <section class="bg-primary-600 text-white">
      <div class="container mx-auto px-4 py-12 md:py-14">
        <div class="flex items-center gap-5">
          <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white p-2 shadow-lg">
            <img class="h-full w-full rounded-full object-cover" src="{{ $category['icon'] }}" alt="{{ $category['name'] }}">
          </div>
          <div>
            <h1 class="text-3xl font-black md:text-4xl">{{ $category['name'] }}</h1>
            <p class="mt-2 text-sm font-medium text-white/90 md:text-base">{{ $category['description'] }}</p>
            <p class="mt-3 flex items-center gap-2 text-sm text-white/90">
              <i class="fa-solid fa-cube"></i>
              {{ $category['count'] }} Products Available
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="container mx-auto px-4 py-8">
      <div class="grid gap-6 lg:grid-cols-[232px_1fr]">
        <aside class="h-fit overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm">
          <div class="flex items-center justify-between border-b border-gray-200 px-3 py-3">
            <h2 class="text-sm font-bold text-gray-800">Filters</h2>
            <button type="button" class="text-xs font-semibold text-primary-600">Clear</button>
          </div>
          <div class="border-b border-gray-200 p-3">
            <h3 class="mb-3 flex items-center gap-2 text-sm font-bold text-gray-800"><span class="text-primary-600">৳</span> Price Range</h3>
            <div class="flex items-center gap-2">
              <input class="h-9 w-full rounded border border-gray-300 px-2 text-sm outline-none focus:border-primary-600" type="text" value="0">
              <span class="text-gray-400">-</span>
              <input class="h-9 w-full rounded border border-gray-300 px-2 text-sm outline-none focus:border-primary-600" type="text" value="5000">
            </div>
          </div>
          <div class="border-b border-gray-200 p-3">
            <h3 class="mb-3 text-sm font-bold text-gray-800">Quick Price</h3>
            <div class="space-y-2 text-xs font-medium text-gray-600">
              <label class="flex items-center gap-2"><input type="radio" name="price"> Under ৳500</label>
              <label class="flex items-center gap-2"><input type="radio" name="price"> ৳500 - ৳1000</label>
              <label class="flex items-center gap-2"><input type="radio" name="price"> ৳1000 - ৳2000</label>
              <label class="flex items-center gap-2"><input type="radio" name="price"> ৳2000+</label>
            </div>
          </div>
          <div class="p-3">
            <h3 class="mb-3 text-sm font-bold text-gray-800">Categories</h3>
            <div class="space-y-2 text-xs font-semibold text-gray-600">
              <label class="flex items-center justify-between gap-2"><span><input class="mr-2" type="checkbox" checked> Fish & Seafood</span><span>6</span></label>
              <label class="flex items-center justify-between gap-2"><span><input class="mr-2" type="checkbox"> Meat Items</span><span>4</span></label>
              <label class="flex items-center justify-between gap-2"><span><input class="mr-2" type="checkbox"> Grocery</span><span>8</span></label>
            </div>
          </div>
        </aside>

        <div>
          <div class="mb-6 flex flex-col gap-4 rounded-lg border border-gray-100 bg-white p-4 shadow-md md:flex-row md:items-center md:justify-between">
            <p class="text-sm font-medium text-gray-700">Showing 1 to {{ count($products) }} of {{ count($products) }} products</p>
            <div class="flex flex-wrap items-center gap-2">
              <span class="text-sm font-medium text-gray-700">View:</span>
              <button class="flex h-9 w-9 items-center justify-center rounded border border-gray-300 bg-white text-gray-900"><i class="fa-solid fa-table-cells"></i></button>
              <button class="flex h-9 w-9 items-center justify-center rounded border border-gray-300 bg-white text-gray-700"><i class="fa-solid fa-border-all"></i></button>
              <button class="flex h-9 w-9 items-center justify-center rounded border border-gray-300 bg-white text-gray-700"><i class="fa-solid fa-table-list"></i></button>
              <select class="ml-2 h-10 rounded border border-gray-300 bg-white px-4 text-sm font-medium outline-none focus:border-primary-600">
                <option>Newest First</option>
                <option>Price Low to High</option>
                <option>Price High to Low</option>
              </select>
            </div>
          </div>

          <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4">
            @foreach ($products as $product)
              <x-product-card :product="$product" />
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
