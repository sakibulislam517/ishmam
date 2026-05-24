



<main>
    <section class="container-max py-8">
      <div class="relative overflow-hidden rounded-[2rem] bg-white shadow-2xl">
        <div class="hero-slide active grid-cols-1 items-center gap-6 bg-gradient-to-r from-red-50 to-white p-6 md:grid-cols-2 md:p-12">
          <div>
            <span class="badge-red">Fresh catch daily</span>
            <h1 class="mt-5 text-4xl font-black leading-tight text-gray-950 md:text-6xl">Premium seafood, meat and groceries delivered fast.</h1>
            <p class="mt-5 max-w-xl text-lg text-gray-600">Shop chef-grade ingredients, crisp produce and pantry staples from a polished fresh-food marketplace.</p>
            <div class="mt-8 flex flex-wrap gap-3">
              <a class="btn-red px-7 py-4" href="{{ route('products') }}">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
              <button class="open-modal btn-light px-7 py-4">View Offer</button>
            </div>
          </div>
          <img class="h-72 w-full rounded-3xl object-cover md:h-[430px]" src="https://images.unsplash.com/photo-1615141982883-c7ad0e69fd62?auto=format&fit=crop&w=1000&q=80" alt="Fresh salmon and seafood">
        </div>
        <div class="hero-slide grid-cols-1 items-center gap-6 bg-gradient-to-r from-white to-red-50 p-6 md:grid-cols-2 md:p-12">
          <div>
            <span class="badge-red">Butcher selected</span>
            <h2 class="mt-5 text-4xl font-black leading-tight text-gray-950 md:text-6xl">Fine cuts for flavorful dinners.</h2>
            <p class="mt-5 max-w-xl text-lg text-gray-600">Choose marbled steaks, fresh poultry, handmade sausages and ready-to-cook meal kits.</p>
            <a class="btn-red mt-8 px-7 py-4" href="{{ route('products') }}">Explore Meat</a>
          </div>
          <img class="h-72 w-full rounded-3xl object-cover md:h-[430px]" src="https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?auto=format&fit=crop&w=1000&q=80" alt="Premium steak cuts">
        </div>
        <button class="slider-prev absolute left-4 top-1/2 hidden h-11 w-11 -translate-y-1/2 rounded-full bg-white text-red-600 shadow-lg md:block"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="slider-next absolute right-4 top-1/2 hidden h-11 w-11 -translate-y-1/2 rounded-full bg-white text-red-600 shadow-lg md:block"><i class="fa-solid fa-chevron-right"></i></button>
        <div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 gap-2">
          <button class="slider-dot h-3 w-8 rounded-full bg-red-600" aria-label="Slide one"></button>
          <button class="slider-dot h-3 w-3 rounded-full bg-red-200" aria-label="Slide two"></button>
        </div>
      </div>
    </section>

    <section class="container-max py-10">
      <div class="mb-8 flex items-end justify-between gap-4">
        <div>
          <p class="font-black uppercase tracking-widest text-red-500">Curated aisles</p>
          <h2 class="section-title">Shop by category</h2>
        </div>
        <a class="font-black text-red-600" href="{{ route('products') }}">View all</a>
      </div>
      <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-5">
        <a class="soft-card group rounded-3xl p-5" href="{{ route('products') }}"><img class="mb-4 h-32 w-full rounded-2xl object-cover transition group-hover:scale-105" src="https://images.unsplash.com/photo-1600699899970-b1c9ca94a2de?auto=format&fit=crop&w=600&q=80" alt="Fresh fish"><h3 class="text-xl font-black">Fish</h3><p class="text-gray-500">36 products</p></a>
        <a class="soft-card group rounded-3xl p-5" href="{{ route('products') }}"><img class="mb-4 h-32 w-full rounded-2xl object-cover transition group-hover:scale-105" src="https://images.unsplash.com/photo-1553163147-622ab57be1c7?auto=format&fit=crop&w=600&q=80" alt="Fresh meat"><h3 class="text-xl font-black">Meat</h3><p class="text-gray-500">42 products</p></a>
        <a class="soft-card group rounded-3xl p-5" href="{{ route('products') }}"><img class="mb-4 h-32 w-full rounded-2xl object-cover transition group-hover:scale-105" src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=600&q=80" alt="Vegetables"><h3 class="text-xl font-black">Vegetables</h3><p class="text-gray-500">58 products</p></a>
        <a class="soft-card group rounded-3xl p-5" href="{{ route('products') }}"><img class="mb-4 h-32 w-full rounded-2xl object-cover transition group-hover:scale-105" src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&w=600&q=80" alt="Fruits"><h3 class="text-xl font-black">Fruits</h3><p class="text-gray-500">31 products</p></a>
        <a class="soft-card group rounded-3xl p-5" href="{{ route('products') }}"><img class="mb-4 h-32 w-full rounded-2xl object-cover transition group-hover:scale-105" src="https://images.unsplash.com/photo-1628088062854-d1870b4553da?auto=format&fit=crop&w=600&q=80" alt="Dairy"><h3 class="text-xl font-black">Dairy</h3><p class="text-gray-500">24 products</p></a>
      </div>
    </section>

    <section id="popular-now" class="py-16 bg-gradient-to-r from-primary-50 to-teal-50">
      <div class="container mx-auto px-4">
        <div class="mb-12 text-center">
          <div class="mb-4 flex items-center justify-center">
            <i class="fa-solid fa-arrow-trend-up mr-3 text-3xl text-primary-600"></i>
            <h2 class="text-3xl font-bold text-gray-800 lg:text-4xl">Popular Now</h2>
            <i class="fa-solid fa-arrow-trend-up ml-3 text-3xl text-primary-600"></i>
          </div>
          <p class="mx-auto max-w-2xl text-xl text-gray-600">Trending products from our collection. Shop what's popular!</p>
        </div>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-6">
          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative">
                <div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50">
                  <img src="https://nahidsworld.com/upload/fish001/IMG_5780%20Medium.jpeg" alt="Golda Prawn" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                </div>
                <div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div>
              </div>
              <div class="p-3">
                <h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Golda Prawn (গলদা চিংড়ি)</h3>
                <div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳1,250</span><span class="text-xs text-gray-500">per kg</span></div>
                <button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button>
              </div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative">
                <div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50">
                  <img src="https://nahidsworld.com/upload/others/other_1769687763_697b4ad32bc33.jpeg" alt="Deshi Mustard Oil" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                </div>
                <div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div>
              </div>
              <div class="p-3">
                <h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">দেশি সরিষার তেল/Deshi Mustard Oil</h3>
                <div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳420</span><span class="text-xs text-gray-500">per kg</span></div>
                <button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button>
              </div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative">
                <div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50">
                  <img src="https://nahidsworld.com/upload/fishes/fishes/690091463625e_1761644870.jpg" alt="River Pangash Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                </div>
                <div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div>
              </div>
              <div class="p-3">
                <h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">River Pangash Fish (নদীর পাঙ্গাস)</h3>
                <div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳1,250</span><span class="text-xs text-gray-500">per kg</span></div>
                <button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button>
              </div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative">
                <div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50">
                  <img src="https://nahidsworld.com/upload/fishes/6900c8eebe570_1761659118.jpg" alt="Tapshi Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                </div>
                <div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div>
              </div>
              <div class="p-3">
                <h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">তাপসি মাছ</h3>
                <div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳780</span><span class="text-xs text-gray-500">per kg</span></div>
                <button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button>
              </div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative">
                <div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50">
                  <img src="https://nahidsworld.com/upload/others/other_1772747439_69a9faaf834d6.jpeg" alt="Gawa Ghee" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                </div>
                <div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div>
              </div>
              <div class="p-3">
                <h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">গাওয়া ঘি (Gawa Ghee)-1kg</h3>
                <div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳1,450</span><span class="text-xs text-gray-500">per kg</span></div>
                <button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button>
              </div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative">
                <div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50">
                  <img src="https://nahidsworld.com/upload/others/other_1776507024_69e358907d849.jpeg" alt="Mixed fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                </div>
                <div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div>
              </div>
              <div class="p-3">
                <h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">দশ মিশালী মাছ (2kg Ready to Cook)</h3>
                <div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳650</span><span class="text-xs text-gray-500">per kg</span></div>
                <button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button>
              </div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative"><div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/6900dd4421e25_1761664324.jpg" alt="Fresh fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div></div>
              <div class="p-3"><h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh River Fish</h3><div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳890</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button></div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative"><div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/fishes/68ffc044434ec_1761591364.jpeg" alt="Premium fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div></div>
              <div class="p-3"><h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Premium Local Fish</h3><div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳720</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button></div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative"><div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1770227758_6983882e8417a.png" alt="Premium dates" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div></div>
              <div class="p-3"><h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Premium Dates Pack</h3><div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳1,200</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button></div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative"><div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fish001/6900b649c770a_1761654345.jpg" alt="Fresh fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div></div>
              <div class="p-3"><h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Fish Cut</h3><div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳840</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button></div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative"><div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/6900c8c0ee0d2_1761659072.jpg" alt="Fresh seafood" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div></div>
              <div class="p-3"><h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Seafood Item</h3><div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳760</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button></div>
            </a>
          </article>

          <article class="group relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="absolute left-2 top-2 z-10 rounded-full bg-primary-600 px-2 py-1 text-xs font-bold text-white">Popular</div>
            <a href="{{ route('products') }}" class="block">
              <div class="relative"><div class="flex h-36 items-center justify-center overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fish001/IMG_2266%20Medium.jpeg" alt="Fresh prawn" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="absolute right-2 top-2 rounded bg-green-500 px-2 py-0.5 text-xs font-semibold text-white">Fresh</div></div>
              <div class="p-3"><h3 class="mb-1 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Prawn Medium</h3><div class="mb-2 flex items-baseline gap-1"><span class="text-base font-bold text-primary-600">৳1,100</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white transition hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1 text-[11px]"></i>Add to Cart</button></div>
            </a>
          </article>
        </div>
      </div>
    </section>

    <section id="discover-products" class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="mb-12 text-center">
          <div class="mb-4 flex items-center justify-center">
            <i class="fa-solid fa-wand-magic-sparkles mr-3 text-3xl text-primary-600"></i>
            <h2 class="text-3xl font-bold text-gray-800 lg:text-4xl">Discover Products</h2>
            <i class="fa-solid fa-wand-magic-sparkles ml-3 text-3xl text-primary-600"></i>
          </div>
          <p class="mx-auto max-w-2xl text-xl text-gray-600">Explore our fresh collection of fish, meat, and more</p>
        </div>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-6">
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fish001/IMG_5780%20Medium.jpeg" alt="Golda Prawn" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Golda Prawn (গলদা চিংড়ি)</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,250</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1769687763_697b4ad32bc33.jpeg" alt="Deshi Mustard Oil" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">দেশি সরিষার তেল/Deshi Mustard Oil</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳420</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/fishes/690091463625e_1761644870.jpg" alt="River Pangash Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">River Pangash Fish (নদীর পাঙ্গাস)</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,250</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/6900c8eebe570_1761659118.jpg" alt="Tapshi Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">তাপসি মাছ</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳780</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1772747439_69a9faaf834d6.jpeg" alt="Gawa Ghee" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">গাওয়া ঘি (Gawa Ghee)-1kg</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,450</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1776507024_69e358907d849.jpeg" alt="Mixed Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">দশ মিশালী মাছ (Ready to Cook)</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳650</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>

          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/6900dd4421e25_1761664324.jpg" alt="Fresh River Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh River Fish</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳890</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/fishes/68ffc044434ec_1761591364.jpeg" alt="Premium Local Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Premium Local Fish</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳720</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1770227758_6983882e8417a.png" alt="Premium Dates" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Premium Dates Pack</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,200</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fish001/6900b649c770a_1761654345.jpg" alt="Fresh Fish Cut" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Fish Cut</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳840</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/6900c8c0ee0d2_1761659072.jpg" alt="Fresh Seafood" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Seafood Item</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳760</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fish001/IMG_2266%20Medium.jpeg" alt="Fresh Prawn Medium" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Prawn Medium</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,100</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>

          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1761718988_6901b2cc93e8a.jpg" alt="Premium Grocery" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Premium Grocery Item</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳560</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1764350004_6929d8344f716.jpg" alt="Dry Food" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Dry Food Pack</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳620</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1763997004_6924754c83eb1.jpg" alt="Fresh Pantry" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Pantry Item</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳790</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1776578203_69e46e9b9717a.jpg" alt="Natural Food" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Natural Food Pack</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳980</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1776664255_69e5bebf52db9.jpeg" alt="Premium Jar" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Premium Jar Item</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳700</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1777732446_69f60b5e089b7.png" alt="Date Pack" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Special Date Pack</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,350</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>

          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1770227356_6983869c679d2.png" alt="Ajwa Dates" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Ajwa Dates Premium</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,500</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1777735837_69f6189db3e37.png" alt="Mango Box" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Gobindobhog Mango Box</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳3,150</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1776935193_69e9e1197741d.jpeg" alt="Fresh Grocery" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Grocery Selection</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳690</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/6900cac2b6194_1761659586.jpg" alt="Fresh Fish Pack" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Fish Pack</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳820</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fish001/IMG_5905%20Medium.jpeg" alt="Fresh Seafood" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Fresh Seafood Cut</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳930</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/fishes/1oAoZxxUxY9w5e51qYxYN9u9fYptgm098fb3Hvfm.jpeg" alt="Premium Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Premium Fish Selection</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,050</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>

          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1769687706_697b4a9a5e639.jpeg" alt="Mustard Oil" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Mustard Oil Special</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳430</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fish001/6900b141680e6_1761653057.jpeg" alt="Local Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Local Fish Fresh</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳850</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/fishes/fishes/693c158a1e6b0_1765545354.jpg" alt="Sea Fish" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Sea Fish Premium</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,180</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1764041185_692521e158072.jpg" alt="Organic Food" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Organic Food Item</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳740</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/69e344df88fcd_1776501983.jpeg" alt="Special Food" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Special Food Pack</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳880</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
          <article class="group overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"><a href="{{ route('products') }}" class="block"><div class="h-40 overflow-hidden bg-primary-50"><img src="https://nahidsworld.com/upload/others/other_1770227637_698387b539d34.png" alt="Premium Dry Fruit" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"></div><div class="p-3"><h3 class="mb-2 min-h-[2.5rem] text-sm font-bold text-gray-800 line-clamp-2">Premium Dry Fruit</h3><div class="mb-3 flex items-baseline gap-1"><span class="font-bold text-primary-600">৳1,100</span><span class="text-xs text-gray-500">per kg</span></div><button type="button" class="add-toast flex w-full items-center justify-center rounded bg-primary-600 py-1.5 text-xs font-semibold text-white hover:bg-primary-700"><i class="fa-solid fa-cart-shopping mr-1"></i>Add to Cart</button></div></a></article>
        </div>
      </div>
    </section>

    <section class="container-max py-10">
      <div class="grid gap-6 lg:grid-cols-3">
        <div class="rounded-[2rem] bg-red-700 p-8 text-white lg:col-span-2">
          <p class="font-black uppercase tracking-widest text-red-100">Flash sale</p>
          <h2 class="mt-3 text-4xl font-black">Weekend fresh box up to 35% off</h2>
          <p class="mt-3 max-w-2xl text-red-100">Build a box with seafood, prime meat and vegetables. Designed for weekly meal prep and family dinners.</p>
          <a class="mt-7 inline-flex rounded-full bg-white px-7 py-4 font-black text-red-700" href="{{ route('products') }}">Grab deal</a>
        </div>
        <div class="rounded-[2rem] bg-white p-8 shadow-xl">
          <p class="font-black text-red-600">Ends in</p>
          <div class="mt-5 grid grid-cols-4 gap-3 text-center">
            <div class="rounded-2xl bg-red-50 p-3"><b class="text-2xl">08</b><span class="block text-xs">Hrs</span></div>
            <div class="rounded-2xl bg-red-50 p-3"><b class="text-2xl">34</b><span class="block text-xs">Min</span></div>
            <div class="rounded-2xl bg-red-50 p-3"><b class="text-2xl">22</b><span class="block text-xs">Sec</span></div>
            <div class="rounded-2xl bg-red-50 p-3"><b class="text-2xl">15</b><span class="block text-xs">%</span></div>
          </div>
          <p class="mt-5 text-gray-600">Use coupon <b>FRESH35</b> at checkout.</p>
        </div>
      </div>
    </section>

    <section class="container-max py-10">
      <div class="mb-8 flex items-end justify-between gap-4">
        <div><p class="font-black uppercase tracking-widest text-red-500">Editor picks</p><h2 class="section-title">Featured products</h2></div>
        <a class="font-black text-red-600" href="{{ route('products') }}">See featured</a>
      </div>
      <div class="grid gap-6 lg:grid-cols-3">
        <article class="soft-card grid gap-5 rounded-3xl p-5 sm:grid-cols-[180px_1fr]">
          <img class="h-44 w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?auto=format&fit=crop&w=600&q=80" alt="Butcher family box">
          <div><span class="badge-red">Bundle</span><h3 class="mt-4 text-2xl font-black">Family Butcher Box</h3><p class="mt-2 text-gray-600">Steak, poultry and sausages packed for weekly meals.</p><p class="mt-4 text-2xl font-black text-red-600">$48.00</p></div>
        </article>
        <article class="soft-card grid gap-5 rounded-3xl p-5 sm:grid-cols-[180px_1fr]">
          <img class="h-44 w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1506617420156-8e4536971650?auto=format&fit=crop&w=600&q=80" alt="Seafood platter">
          <div><span class="badge-red">Chef pick</span><h3 class="mt-4 text-2xl font-black">Seafood Grill Kit</h3><p class="mt-2 text-gray-600">Prawns, fish fillets and seasoning for an easy dinner.</p><p class="mt-4 text-2xl font-black text-red-600">$39.50</p></div>
        </article>
        <article class="soft-card grid gap-5 rounded-3xl p-5 sm:grid-cols-[180px_1fr]">
          <img class="h-44 w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1573246123716-6b1782bfc499?auto=format&fit=crop&w=600&q=80" alt="Organic fruit box">
          <div><span class="badge-red">Organic</span><h3 class="mt-4 text-2xl font-black">Market Fruit Box</h3><p class="mt-2 text-gray-600">Seasonal fruits selected for freshness and color.</p><p class="mt-4 text-2xl font-black text-red-600">$21.90</p></div>
        </article>
      </div>
    </section>

    <section class="container-max py-10">
      <div class="grid gap-6 md:grid-cols-2">
        <div class="relative overflow-hidden rounded-[2rem] bg-white p-8 shadow-xl">
          <img class="absolute inset-y-0 right-0 h-full w-1/2 object-cover opacity-80" src="https://images.unsplash.com/photo-1506617420156-8e4536971650?auto=format&fit=crop&w=800&q=80" alt="Seafood promo">
          <div class="relative max-w-xs"><p class="font-black text-red-600">Chef seafood</p><h3 class="mt-2 text-3xl font-black">Fresh prawns and fish bundles</h3><a class="mt-5 inline-block font-black text-red-600" href="{{ route('products') }}">Shop bundle</a></div>
        </div>
        <div class="relative overflow-hidden rounded-[2rem] bg-white p-8 shadow-xl">
          <img class="absolute inset-y-0 right-0 h-full w-1/2 object-cover opacity-80" src="https://images.unsplash.com/photo-1573246123716-6b1782bfc499?auto=format&fit=crop&w=800&q=80" alt="Fruit promo">
          <div class="relative max-w-xs"><p class="font-black text-red-600">Daily produce</p><h3 class="mt-2 text-3xl font-black">Organic fruits for every table</h3><a class="mt-5 inline-block font-black text-red-600" href="{{ route('products') }}">Order now</a></div>
        </div>
      </div>
    </section>

    <section class="container-max py-10">
      <div class="grid gap-6 lg:grid-cols-3">
        <div class="lg:col-span-1"><p class="font-black uppercase tracking-widest text-red-500">Loved by shoppers</p><h2 class="section-title">Fresh stories</h2></div>
        <div class="soft-card rounded-3xl p-6"><div class="text-amber-400"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="mt-4 text-gray-600">The salmon looked restaurant-grade, packaging was cold and clean, and the checkout design feels effortless.</p><h3 class="mt-5 font-black">Maya Brooks</h3></div>
        <div class="soft-card rounded-3xl p-6"><div class="text-amber-400"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div><p class="mt-4 text-gray-600">Everything is easy to scan, from deals to category cards. It has a polished premium grocery feel.</p><h3 class="mt-5 font-black">Daniel West</h3></div>
      </div>
    </section>

    <section class="container-max py-10">
      <div class="rounded-[2rem] bg-gray-950 p-8 text-white md:p-12">
        <div class="grid gap-6 md:grid-cols-2 md:items-center">
          <div><p class="font-black uppercase tracking-widest text-red-300">Newsletter</p><h2 class="mt-2 text-3xl font-black md:text-4xl">Get fresh deals before they sell out.</h2></div>
          <form class="flex flex-col gap-3 sm:flex-row">
            <input class="min-h-14 flex-1 rounded-full px-5 text-gray-900 outline-none" type="email" placeholder="Email address">
            <button class="btn-red min-h-14 px-7" type="button">Subscribe</button>
          </form>
        </div>
      </div>
    </section>
  </main>


