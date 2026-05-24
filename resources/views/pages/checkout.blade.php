@extends('layouts.app')

@section('content')
  <main class="bg-[#f5f7fa]">
    <section class="container-max py-8 md:py-12">
      <div class="mx-auto mb-8 max-w-xl">
        <div class="flex items-center justify-center">
          <div class="flex items-center gap-3">
            <div class="flex items-center gap-2">
              <span class="flex h-9 w-9 items-center justify-center rounded-full bg-emerald-600 text-sm font-black text-white">১</span>
              <span class="text-sm font-black text-emerald-700">কার্ট</span>
            </div>
            <span class="h-0.5 w-16 bg-emerald-600"></span>
            <div class="flex items-center gap-2">
              <span class="flex h-9 w-9 items-center justify-center rounded-full bg-emerald-600 text-sm font-black text-white">২</span>
              <span class="text-sm font-black text-emerald-700">চেকআউট</span>
            </div>
            <span class="h-0.5 w-16 bg-slate-300"></span>
            <div class="flex items-center gap-2">
              <span class="flex h-9 w-9 items-center justify-center rounded-full bg-slate-300 text-sm font-black text-slate-600">৩</span>
              <span class="text-sm font-black text-slate-400">সম্পন্ন</span>
            </div>
          </div>
        </div>
      </div>

      <div class="grid gap-6 lg:grid-cols-[minmax(0,1fr)_320px] xl:grid-cols-[minmax(0,1fr)_360px]">
        <form class="space-y-6">
          <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:p-8">
            <h1 class="flex items-center gap-3 text-2xl font-black text-slate-950">
              <span class="flex h-9 w-9 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <i class="fa-solid fa-location-dot text-base"></i>
              </span>
              ডেলিভারি তথ্য
            </h1>

            <div class="mt-6 grid gap-5 md:grid-cols-2">
              <label class="block">
                <span class="mb-2 block text-sm font-semibold text-slate-700">পুরো নাম</span>
                <input class="h-12 w-full rounded-xl border border-slate-300 bg-white px-4 text-sm font-semibold text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-emerald-600 focus:ring-4 focus:ring-emerald-600/10" type="text" value="Md Shariful Islam">
              </label>
              <label class="block">
                <span class="mb-2 block text-sm font-semibold text-slate-700">ফোন নম্বর</span>
                <input class="h-12 w-full rounded-xl border border-slate-300 bg-white px-4 text-sm font-semibold text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-emerald-600 focus:ring-4 focus:ring-emerald-600/10" type="tel" placeholder="01XXXXXXXXX">
              </label>
            </div>

            <label class="mt-5 block">
              <span class="mb-2 block text-sm font-semibold text-slate-700">সম্পূর্ণ ঠিকানা</span>
              <textarea class="min-h-24 w-full resize-none rounded-xl border border-slate-300 bg-white px-4 py-4 text-sm font-semibold text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-emerald-600 focus:ring-4 focus:ring-emerald-600/10" placeholder="বাড়ি নম্বর, রোড, এলাকা"></textarea>
            </label>
          </section>

          <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:p-8">
            <h2 class="flex items-center gap-3 text-2xl font-black text-slate-950">
              <span class="flex h-9 w-9 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <i class="fa-regular fa-credit-card text-base"></i>
              </span>
              পেমেন্ট পদ্ধতি
            </h2>

            <div class="mt-6 space-y-3">
              <label class="flex cursor-pointer items-center gap-4 rounded-xl border-2 border-emerald-600 bg-emerald-50 p-4 transition hover:bg-emerald-100/70">
                <input class="h-4 w-4 accent-emerald-600" type="radio" name="payment" checked>
                <span>
                  <span class="block font-black text-slate-950">ক্যাশ অন ডেলিভারি</span>
                  <span class="mt-1 block text-xs font-semibold text-slate-500">ডেলিভারির সময় পেমেন্ট করুন</span>
                </span>
              </label>

              <label class="flex cursor-not-allowed items-center gap-4 rounded-xl border border-slate-200 bg-slate-50 p-4 text-slate-400">
                <input class="h-4 w-4" type="radio" name="payment" disabled>
                <span class="flex flex-wrap items-center gap-2">
                  <span class="font-black">বিকাশ</span>
                  <span class="rounded-full bg-pink-400 px-2 py-0.5 text-xs font-black text-white">শীঘ্রই</span>
                </span>
              </label>

              <label class="flex cursor-not-allowed items-center gap-4 rounded-xl border border-slate-200 bg-slate-50 p-4 text-slate-400">
                <input class="h-4 w-4" type="radio" name="payment" disabled>
                <span class="flex flex-wrap items-center gap-2">
                  <span class="font-black">নগদ</span>
                  <span class="rounded-full bg-orange-400 px-2 py-0.5 text-xs font-black text-white">শীঘ্রই</span>
                </span>
              </label>
            </div>
          </section>

          <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:p-8">
            <h2 class="text-2xl font-black text-slate-950">অতিরিক্ত নোট (ঐচ্ছিক)</h2>
            <label class="mt-4 block">
              <textarea class="min-h-20 w-full resize-none rounded-xl border border-slate-300 bg-white px-4 py-4 text-sm font-semibold text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-emerald-600 focus:ring-4 focus:ring-emerald-600/10" placeholder="ডেলিভারি সম্পর্কে কোনো বিশেষ নির্দেশনা..."></textarea>
            </label>
          </section>
        </form>

        <aside class="h-fit rounded-2xl border border-slate-200 bg-white p-6 shadow-sm lg:sticky lg:top-32">
          <h2 class="text-2xl font-black text-slate-950">অর্ডার সারাংশ</h2>

          <div class="mt-5 space-y-4">
            <div class="grid grid-cols-[48px_minmax(0,1fr)_auto] items-center gap-3">
              <div class="relative">
                <img class="h-12 w-12 rounded-lg border border-slate-100 object-cover" src="https://nahidsworld.com/upload/fish001/IMG_5780%20Medium.jpeg" alt="হে সুইস এসো রবের পথে">
                <span class="absolute -right-2 -top-2 flex h-5 min-w-5 items-center justify-center rounded-full bg-emerald-600 px-1 text-[10px] font-black text-white">1</span>
              </div>
              <div class="min-w-0">
                <h3 class="truncate text-sm font-black text-slate-900">হে সুইস এসো রবের পথে</h3>
                <p class="mt-0.5 text-xs font-semibold text-slate-500">৳ ২৫০</p>
              </div>
              <strong class="text-sm text-slate-950">৳ ২৫০</strong>
            </div>

            <div class="grid grid-cols-[48px_minmax(0,1fr)_auto] items-center gap-3">
              <div class="relative">
                <img class="h-12 w-12 rounded-lg border border-slate-100 object-cover" src="https://nahidsworld.com/upload/fishes/fishes/690091463625e_1761644870.jpg" alt="ইসলামী জীবন">
                <span class="absolute -right-2 -top-2 flex h-5 min-w-5 items-center justify-center rounded-full bg-emerald-600 px-1 text-[10px] font-black text-white">1</span>
              </div>
              <div class="min-w-0">
                <h3 class="truncate text-sm font-black text-slate-900">ইসলামী জীবন (১-৩ খণ্ড)</h3>
                <p class="mt-0.5 text-xs font-semibold text-slate-500">৳ ৬৩০</p>
              </div>
              <strong class="text-sm text-slate-950">৳ ৬৩০</strong>
            </div>

            <div class="grid grid-cols-[48px_minmax(0,1fr)_auto] items-center gap-3">
              <div class="relative">
                <img class="h-12 w-12 rounded-lg border border-slate-100 object-cover" src="https://nahidsworld.com/upload/others/other_1769687763_697b4ad32bc33.jpeg" alt="মুসলিম মেসেজ">
                <span class="absolute -right-2 -top-2 flex h-5 min-w-5 items-center justify-center rounded-full bg-emerald-600 px-1 text-[10px] font-black text-white">1</span>
              </div>
              <div class="min-w-0">
                <h3 class="truncate text-sm font-black text-slate-900">মুসলিম মেসেজ: ফলপ্রসূ জীবনে...</h3>
                <p class="mt-0.5 text-xs font-semibold text-slate-500">৳ ৪০৮</p>
              </div>
              <strong class="text-sm text-slate-950">৳ ৪০৮</strong>
            </div>
          </div>

          <div class="mt-6 space-y-3 border-t border-slate-200 pt-5 text-sm font-semibold text-slate-600">
            <div class="flex items-center justify-between gap-4">
              <span>সাবটোটাল</span>
              <span class="text-slate-900">৳ ১,২৮৪</span>
            </div>
            <div class="flex items-center justify-between gap-4">
              <span>ডেলিভারি</span>
              <span class="font-black text-emerald-600">ফ্রি</span>
            </div>
            <div class="flex items-center justify-between gap-4 border-t border-slate-200 pt-4 text-lg font-black text-slate-950">
              <span>মোট</span>
              <span>৳ ১,২৮৪</span>
            </div>
          </div>

          <a class="mt-6 flex min-h-12 w-full items-center justify-center rounded-xl bg-emerald-600 px-5 text-sm font-black text-white shadow-lg shadow-emerald-600/20 transition hover:bg-emerald-700" href="{{ route('order-success') }}">অর্ডার নিশ্চিত করুন</a>
          <p class="mt-4 text-center text-xs font-semibold text-slate-400">অর্ডার করলে আপনি শর্তাবলী মেনে নিচ্ছেন</p>
        </aside>
      </div>
    </section>
  </main>
@endsection
