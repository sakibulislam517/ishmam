@props(['product'])

<article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
  <a href="{{ route('products') }}" class="block">
    <div class="relative h-48 overflow-hidden bg-gray-50">
      <img class="h-full w-full object-cover transition duration-500 group-hover:scale-105" src="{{ $product['image'] }}" alt="{{ $product['title'] }}">
      <span class="absolute left-3 top-3 inline-flex items-center gap-1 rounded-full bg-amber-400 px-3 py-1 text-xs font-bold text-white shadow-lg">
        <i class="fa-regular fa-circle-check"></i>
        {{ $product['badge'] ?? 'In Stock' }}
      </span>
    </div>
  </a>
  <div class="p-4">
    <a href="{{ route('products') }}" class="block">
      <div class="mb-2 flex items-center gap-1 text-xs text-amber-400">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        <span class="ml-1 font-semibold text-gray-400">4.8</span>
      </div>
      <h3 class="min-h-12 text-sm font-black leading-snug text-gray-900 line-clamp-2">{{ $product['title'] }}</h3>
      <p class="mt-1 min-h-5 text-xs font-semibold text-gray-500">{{ $product['subtitle'] ?? '' }}</p>
    </a>
      <div class="mt-3 flex items-end justify-between gap-3">
        <div>
          <div class="flex items-baseline gap-2">
            <span class="text-lg font-black text-primary-600">{{ $product['price'] }}</span>
            <span class="text-xs text-gray-400 line-through">{{ $product['old_price'] ?? '' }}</span>
          </div>
          <span class="text-xs font-semibold text-gray-500">{{ $product['unit'] ?? 'per kg' }}</span>
        </div>
        <button type="button" class="add-toast flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600 text-white transition hover:bg-primary-700" aria-label="Add to cart">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
  </div>
</article>
