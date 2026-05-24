<footer class="mt-10 bg-gray-950 text-white">
    <div class="container mx-auto px-4 py-12">
      <div class="grid gap-10 lg:grid-cols-[1.05fr_1fr_1.1fr]">
        <div>
          <a href="{{ route('home') }}" class="inline-flex items-center">
            <img src="https://nahidsworld.com/upload/logonahid.webp" alt="Nahids World" class="h-16 w-16 rounded-full bg-white object-contain p-1">
            <div class="ml-3">
              <h2 class="text-2xl font-black uppercase tracking-wide text-green-500">Nahid's World</h2>
              <p class="text-xs font-semibold text-green-300">Focus on Quality Not Quantity</p>
            </div>
          </a>
          <p class="mt-5 max-w-md text-sm leading-7 text-gray-100">Fresh fish &amp; meat delivered to your doorstep. Nahids World provides high quality seafood with guaranteed freshness and competitive prices.</p>
          <div class="mt-6">
            <h3 class="flex items-center gap-2 text-sm font-bold text-gray-200">
              <i class="fa-solid fa-share-nodes text-purple-400"></i>
              Follow Us
            </h3>
            <div class="mt-4 flex gap-3">
              <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600 text-white transition hover:-translate-y-1 hover:shadow-lg" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg bg-sky-500 text-white transition hover:-translate-y-1 hover:shadow-lg" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg bg-pink-600 text-white transition hover:-translate-y-1 hover:shadow-lg" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-700 text-white transition hover:-translate-y-1 hover:shadow-lg" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg bg-red-600 text-white transition hover:-translate-y-1 hover:shadow-lg" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
          </div>
        </div>

        <div>
          <h3 class="flex items-center gap-3 text-lg font-bold">
            <i class="fa-solid fa-headphones text-orange-400"></i>
            Customer Support
          </h3>
          <nav class="mt-5 space-y-4 text-sm">
            <a href="{{ route('about-us') }}" class="flex items-center gap-3 text-gray-100 transition hover:text-red-300"><i class="fa-regular fa-circle-question text-cyan-400"></i>About Us</a>
            <a href="{{ route('contact-us') }}" class="flex items-center gap-3 text-gray-100 transition hover:text-red-300"><i class="fa-regular fa-comment text-green-400"></i>Contact Us</a>
            <a href="#" class="flex items-center gap-3 text-gray-100 transition hover:text-red-300"><i class="fa-solid fa-truck text-blue-400"></i>Shipping Info</a>
            <a href="#" class="flex items-center gap-3 text-gray-100 transition hover:text-red-300"><i class="fa-solid fa-rotate-left text-yellow-400"></i>Returns &amp; Refunds</a>
            <a href="#" class="flex items-center gap-3 text-gray-100 transition hover:text-red-300"><i class="fa-solid fa-shield-heart text-emerald-400"></i>Quality Guarantee</a>
          </nav>
        </div>

        <div>
          <h3 class="flex items-center gap-3 text-lg font-bold">
            <i class="fa-solid fa-phone text-green-400"></i>
            Contact Info
          </h3>
          <div class="mt-5 space-y-4 text-sm text-gray-100">
            <p class="flex items-center gap-3"><i class="fa-solid fa-location-dot text-red-400"></i>Dhaka, Bangladesh</p>
            <p class="flex items-center gap-3"><i class="fa-solid fa-phone text-green-400"></i>01604016929</p>
            <p class="flex items-center gap-3"><i class="fa-regular fa-envelope text-yellow-400"></i>info@nahidsworld.com</p>
            <div class="flex items-start gap-3">
              <i class="fa-regular fa-clock mt-1 text-orange-400"></i>
              <div>
                <p>Daily: 6:00 AM - 10:00 PM</p>
                <p class="mt-1 text-xs text-gray-400">7 Days a Week</p>
              </div>
            </div>
          </div>

          <div class="mt-6 border-t border-white/15 pt-5">
            <h3 class="flex items-center gap-2 text-sm font-bold">
              <i class="fa-regular fa-envelope text-blue-400"></i>
              Newsletter
            </h3>
            <form class="mt-3 flex gap-2">
              <input type="email" class="min-h-10 flex-1 rounded-lg border border-white/10 bg-white/10 px-4 text-sm text-white outline-none placeholder:text-gray-400 focus:border-red-400" placeholder="Your email">
              <button type="button" class="flex min-h-10 w-12 items-center justify-center rounded-lg bg-primary-600 text-white transition hover:bg-primary-700" aria-label="Subscribe">
                <i class="fa-regular fa-paper-plane"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="mt-10 border-t border-white/10 pt-5 text-center text-xs text-gray-400">
        © 2026 Nahid's World. Premium fresh food ecommerce frontend design.
      </div>
    </div>
  </footer>

  <div class="modal-backdrop">
    <div class="mx-auto mt-24 max-w-md rounded-3xl bg-white p-6 shadow-2xl">
      <button class="close-modal float-right text-gray-500"><i class="fa-solid fa-xmark"></i></button>
      <h2 class="text-2xl font-black">FreshBox Offer</h2>
      <p class="mt-3 text-gray-600">Save on curated fish, meat and grocery bundles with demo coupon FRESH35.</p>
      <a class="btn-red mt-6 w-full py-3" href="{{ route('products') }}">Explore Deals</a>
    </div>
  </div>

  <div class="side-cart-overlay fixed inset-0 z-[70] bg-black/40 backdrop-blur-[1px]"></div>
  <aside class="side-cart-drawer fixed right-0 top-0 z-[80] flex h-screen w-full max-w-[460px] translate-x-full flex-col bg-white shadow-2xl transition-transform duration-300" aria-label="Shopping cart drawer">
    <div class="flex items-center justify-between bg-primary-600 px-6 py-5 text-white">
      <div class="flex items-center gap-3">
        <i class="fa-solid fa-bag-shopping text-2xl"></i>
        <h2 class="text-xl font-bold">Shopping Cart</h2>
        <span class="side-cart-item-count flex h-6 min-w-6 items-center justify-center rounded-full bg-white px-2 text-sm font-bold text-primary-600">1</span>
      </div>
      <button type="button" class="close-side-cart text-2xl leading-none text-white transition hover:rotate-90" aria-label="Close cart">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>

    <div class="side-cart-items flex-1 space-y-4 overflow-y-auto px-6 py-8">
      <div class="side-cart-empty rounded-lg border border-dashed border-gray-300 p-8 text-center">
        <i class="fa-solid fa-cart-shopping text-3xl text-gray-300"></i>
        <p class="mt-3 font-semibold text-gray-600">Your cart is empty.</p>
        <a href="{{ route('products') }}" class="mt-3 inline-block text-sm font-bold text-primary-600 hover:text-primary-800">Browse Products</a>
      </div>
    </div>

    <div class="border-t border-gray-200 bg-white px-6 py-4">
      <div class="mb-4 flex gap-2">
        <input type="text" class="min-h-10 flex-1 rounded-lg border border-gray-300 px-3 text-sm outline-none transition focus:border-primary-600" placeholder="Coupon code">
        <button type="button" class="rounded-lg bg-secondary-600 px-5 text-sm font-bold text-white transition hover:bg-purple-700">Apply</button>
      </div>
      <div class="mb-3 flex items-center justify-between text-sm text-gray-700">
        <span>Subtotal</span>
        <span class="side-cart-subtotal">৳1400.00</span>
      </div>
      <div class="mb-5 border-t border-gray-300 pt-3 flex items-center justify-between text-lg font-bold">
        <span>Total</span>
        <span class="side-cart-total text-primary-600">৳1400.00</span>
      </div>
      <a href="{{ route('cart') }}" class="mb-2 flex min-h-12 items-center justify-center rounded-lg border-2 border-primary-600 font-bold text-primary-600 transition hover:bg-primary-50">View Cart</a>
      <a href="{{ route('checkout') }}" class="flex min-h-12 items-center justify-center rounded-lg bg-primary-600 font-bold text-white transition hover:bg-primary-700">Checkout</a>
    </div>
  </aside>

  <div class="side-added-toast hidden fixed right-4 top-24 z-[100] w-[255px] rounded-lg border-l-4 border-green-500 bg-white p-3 shadow-2xl">
    <button type="button" class="close-added-toast absolute right-3 top-3 text-gray-400 hover:text-gray-700" aria-label="Close added notification">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <div class="flex gap-3 pr-5">
      <img class="side-added-image h-14 w-16 rounded-md object-cover" src="https://nahidsworld.com/upload/others/other_1769687763_697b4ad32bc33.jpeg" alt="Added product">
      <div>
        <h3 class="text-sm font-bold text-gray-900">Added to Cart</h3>
        <p class="side-added-title mt-1 line-clamp-2 text-sm font-semibold leading-snug text-gray-700">তাল মরিচা/দানাদার গুড়</p>
        <p class="side-added-meta mt-1 text-xs text-gray-600">Qty: 1 × ৳680.00</p>
        <a href="{{ route('cart') }}" class="mt-2 inline-flex items-center text-sm font-bold text-primary-600">
          <i class="fa-solid fa-cart-shopping mr-1 text-xs"></i>View Cart
        </a>
      </div>
    </div>
  </div>

  <div class="toast rounded-2xl bg-gray-950 px-5 py-4 text-white shadow-2xl"><i class="fa-solid fa-circle-check mr-2 text-red-400"></i>Added to cart design preview.</div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script>
    $(function () {
      const CART_KEY = 'nahidsworld_cart';

      function money(amount) {
        return "৳" + amount.toFixed(2);
      }

      function parsePrice(value) {
        const number = String(value).replace(/[^0-9.]/g, "");
        return parseFloat(number) || 0;
      }

      function getCart() {
        const stored = localStorage.getItem(CART_KEY);
        return stored ? JSON.parse(stored) : [];
      }

      function saveCart(cart) {
        localStorage.setItem(CART_KEY, JSON.stringify(cart));
      }

      function buildCartItem(product) {
        return `
          <div class="side-cart-item rounded-lg border border-gray-200 bg-white p-3 shadow-sm" 
               data-id="${product.id}" 
               data-price="${product.price}" 
               data-qty="${product.qty}"
               data-title="${product.title.replace(/"/g, "&quot;")}">
            <div class="grid grid-cols-[80px_1fr_auto] gap-3">
              <img class="h-20 w-20 rounded-lg object-cover" src="${product.image}" alt="${product.title.replace(/"/g, "&quot;")}">
              <div>
                <h3 class="text-sm font-bold leading-snug text-gray-900">${product.title}</h3>
                <p class="mt-2 text-xs text-gray-500"><span class="side-cart-unit-price">${money(product.price)}</span> × <span class="side-cart-qty-text">${product.qty}</span></p>
                <div class="mt-2 flex items-center gap-3">
                  <button type="button" class="side-qty-minus flex h-6 w-6 items-center justify-center rounded bg-gray-200 text-gray-700 transition hover:bg-gray-300" aria-label="Decrease quantity">−</button>
                  <span class="side-cart-qty min-w-4 text-center text-sm font-bold">${product.qty}</span>
                  <button type="button" class="side-qty-plus flex h-6 w-6 items-center justify-center rounded bg-gray-200 text-gray-700 transition hover:bg-gray-300" aria-label="Increase quantity">+</button>
                </div>
              </div>
              <div class="flex flex-col items-end justify-center gap-3">
                <strong class="side-cart-line-total whitespace-nowrap text-sm text-primary-600">${money(product.price * product.qty)}</strong>
                <button type="button" class="side-cart-remove text-primary-600 transition hover:text-red-800" aria-label="Remove product">
                  <i class="fa-regular fa-trash-can"></i>
                </button>
              </div>
            </div>
          </div>
        `;
      }

      function renderCartFromStorage() {
        const cart = getCart();
        const $itemsContainer = $(".side-cart-items");
        
        $itemsContainer.find(".side-cart-item").remove();
        
        if (cart.length === 0) {
          $itemsContainer.find(".side-cart-empty").removeClass("hidden");
        } else {
          $itemsContainer.find(".side-cart-empty").addClass("hidden");
          cart.forEach(product => {
            $itemsContainer.append(buildCartItem(product));
          });
        }
        
        refreshSideCart();
      }

      function refreshSideCart() {
        const cart = getCart();
        let total = 0;
        let count = 0;

        cart.forEach(item => {
          count += item.qty;
          total += item.price * item.qty;
        });

        $(".side-cart-empty").toggleClass("hidden", count > 0);
        $(".side-cart-item-count, #cart-count-display").text(count);
        $(".side-cart-subtotal, .side-cart-total, #cart-total-display").text(money(total));
        $("#cart-count-display").toggle(count > 0);
        
        if (count > 0) {
          $("#cart-count-display").removeClass('hidden');
        } else {
          $("#cart-count-display").addClass('hidden');
        }
      }

      function openSideCart() {
        renderCartFromStorage();
        $(".side-cart-overlay, .side-cart-drawer").addClass("active");
        $("body").addClass("cart-open");
      }

      function closeSideCart() {
        $(".side-cart-overlay, .side-cart-drawer").removeClass("active");
        $("body").removeClass("cart-open");
      }

      function showAddedToast(product) {
        $(".side-added-image").attr("src", product.image);
        $(".side-added-title").text(product.title);
        $(".side-added-meta").text("Qty: 1 × " + money(product.price));
        $(".side-added-toast").removeClass("hidden");

        clearTimeout(window.sideAddedTimer);
        window.sideAddedTimer = setTimeout(function () {
          $(".side-added-toast").addClass("hidden");
        }, 3500);
      }

      function addProductToSideCart(product) {
        let cart = getCart();
        const existingIndex = cart.findIndex(item => item.id === product.id);

        if (existingIndex > -1) {
          cart[existingIndex].qty += 1;
        } else {
          cart.push({
            id: product.id || Date.now().toString(),
            title: product.title,
            image: product.image,
            price: product.price,
            qty: 1
          });
        }

        saveCart(cart);
        renderCartFromStorage();
        showAddedToast(product);
      }

      function updateCartItemQty(id, delta) {
        let cart = getCart();
        const index = cart.findIndex(item => item.id === id);
        
        if (index > -1) {
          cart[index].qty = Math.max(1, cart[index].qty + delta);
          saveCart(cart);
          renderCartFromStorage();
        }
      }

      function removeCartItem(id) {
        let cart = getCart();
        cart = cart.filter(item => item.id !== id);
        saveCart(cart);
        renderCartFromStorage();
      }

      renderCartFromStorage();

      $(".open-side-cart").on("click", function (event) {
        event.preventDefault();
        openSideCart();
      });

      $(".close-side-cart, .side-cart-overlay").on("click", closeSideCart);

      $(document).on("keydown", function (event) {
        if (event.key === "Escape") {
          closeSideCart();
        }
      });

      $(".side-cart-items").on("click", ".side-qty-plus", function () {
        const item = $(this).closest(".side-cart-item");
        const id = item.data("id");
        updateCartItemQty(id, 1);
      });

      $(".side-cart-items").on("click", ".side-qty-minus", function () {
        const item = $(this).closest(".side-cart-item");
        const id = item.data("id");
        updateCartItemQty(id, -1);
      });

      $(".side-cart-items").on("click", ".side-cart-remove", function () {
        const item = $(this).closest(".side-cart-item");
        const id = item.data("id");
        removeCartItem(id);
      });

      $(".close-added-toast").on("click", function () {
        $(".side-added-toast").addClass("hidden");
      });

      $(".add-toast").off("click").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        const card = $(this).closest("article");
        const product = {
          id: card.data("product-id") || Date.now().toString(),
          title: $.trim(card.find("h3").first().text()) || "Fresh product",
          image: card.find("img").first().attr("src") || "https://nahidsworld.com/upload/others/other_1769687763_697b4ad32bc33.jpeg",
          price: parsePrice(card.find(".text-primary-600").first().text()) || 680
        };

        addProductToSideCart(product);
      });
    });
  </script>





    </body>
</html>

