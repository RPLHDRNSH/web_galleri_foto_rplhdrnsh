<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Beranda Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="bg-gradient-to-r from-amber-700 via-amber-600 to-amber-500">
  <header class="absolute inset-x-0.5 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-12 w-auto" src="https://cdn-icons-png.flaticon.com/128/2983/2983067.png" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-amber-500">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-sm font-semibold leading-6 text-white">Galleri</a>
        <a href="#" class="text-sm font-semibold leading-6 text-white">Registrasi</a>
        <a href="#" class="text-sm font-semibold leading-6 text-white">Pricelist</a>
        <a href="#" class="text-sm font-semibold leading-6 text-white">About</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-white">Log in <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gradient-to-r from-amber-600 via-amber-500 to-yellow-600 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://cdn-icons-png.flaticon.com/128/2983/2983067.png" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-white">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-amber-500">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-50 hover:bg-amber-500">Galleri</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-50 hover:bg-amber-500">Registrasi</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-50 hover:bg-amber-500">Pricelist</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-50 hover:bg-amber-500">About</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-50 hover:bg-amber-500">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute insert-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-yellow-500 to-amber-400 opacity-300 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-50 ring-1 ring-gray-50 hover:ring-gray-50">
          Announcing our next round of funding. <a href="#" class="font-semibold text-amber-400"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-50 sm:text-6xl">WELCOME TO THE</h1>
        <h1 class="text-4xl font-bold tracking-tight text-gray-50 sm:text-6xl">RIPAL HADRIANSAH PHOTOGRAPHY</h1>
        <p class="mt-6 text-lg leading-8 text-gray-50">"If dreaming is the only way to be with you, then I'll never open my eyes."</p>
        <p class="mt-auto text-lg leading-8 text-gray-50">(Jika mimpi adalah satu-satunya cara agar aku bisa bersamamu, maka aku tidak akan pernah mau membuka mataku.)</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-amber-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-amber-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-700">Get started</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-50">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-yellow-500 to-amber-400 opacity-300 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-gradient-to-r from-amber-700 via-amber-600 to-amber-500">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
      <h2 class="text-2xl font-bold text-gray-50">Galleri</h2>

      <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
        <div class="group relative">
          <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="https://wallpapercave.com/dwp1x/wp5026371.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
          </div>
          <h3 class="mt-6 text-sm text-gray-50">
            <a href="#">
              <span class="absolute inset-0"></span>
              Animals
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-50">Tiger</p>
        </div>
        <div class="group relative">
          <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="https://wallpapercave.com/uwp/uwp4197114.jpeg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
          </div>
          <h3 class="mt-6 text-sm text-gray-50">
            <a href="#">
              <span class="absolute inset-0"></span>
              Nature
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-50">Pantai</p>
        </div>
        <div class="group relative">
          <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="https://wallpapercave.com/uwp/uwp4216207.jpeg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
          </div>
          <h3 class="mt-6 text-sm text-gray-50">
            <a href="#">
              <span class="absolute inset-0"></span>
              Asset
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-50">Cars</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="isolate bg-gradient-to-r from-amber-700 via-amber-600 to-amber-500 px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
    <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact sales</h2>
    <p class="mt-2 text-lg leading-8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim voluptate.</p>
  </div>
  <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
        <div class="mt-2.5">
          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
        <div class="mt-2.5">
          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
        <div class="mt-2.5">
          <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
        <div class="mt-2.5">
          <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
        <div class="relative mt-2.5">
          <div class="absolute inset-y-0 left-0 flex items-center">
            <label for="country" class="sr-only">Country</label>
            <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
              <option>US</option>
              <option>CA</option>
              <option>EU</option>
            </select>
            <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </div>
          <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
        <div class="mt-2.5">
          <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>
      </div>
      <div class="flex gap-x-4 sm:col-span-2">
        <div class="flex h-6 items-center">
          <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
          <button type="button" class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
            <span class="sr-only">Agree to policies</span>
            <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
            <span aria-hidden="true" class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
          </button>
        </div>
        <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
          By selecting this, you agree to our
          <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
        </label>
      </div>
    </div>
    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
    </div>
  </form>
</div>

</body>
</html>