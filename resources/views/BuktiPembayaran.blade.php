<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>


<div class="relative overflow-hidden bg-[url('../../public/Images/pexels-huseyn-kamaladdin-667838.jpg')] bg-center bg-cover">
  <div class="flex flex-col justify-center min-h-screen backdrop-blur-sm">

<nav class="bg-sky-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <img src="{{asset('images\24650 [Converted].png')}}" class="h-14 mr-3" alt="Clean De Kost" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Clean De Kost</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 ">
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">ORDER</a>
        </li>
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">HISTORY</a>
        </li>
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">ABOUT US</a>
        </li>
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">KATALOG</a>
        </li>
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">HALAMAN UTAMA</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="min-h-screen  py-6 flex flex-col justify-center sm:py-12">
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
      <div class="max-w-md mx-auto">
        <div class="flex items-center space-x-5">
          <div class="h-14 w-14 bg-blue-200 rounded-full flex flex-shrink-0 justify-center items-center text-blue-500 text-2xl font-mono">U</div>
          <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
            <h2 class="leading-relaxed">Upload Bukti Pembayaran</h2>
            <p class="text-sm text-gray-500 font-normal leading-relaxed">Silakan upload bukti pembayaran Anda disini.</p>
          </div>
        </div>
        <div class="divide-y divide-gray-200">
          <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
            <div class="flex flex-col">
              <label class="leading-loose">Jumlah Pembayaran</label>
              <input type="number" class="form-input w-full" placeholder="Masukkan jumlah pembayaran">
            </div>
            <div class="flex flex-col">
              <label class="leading-loose">Upload Bukti Pembayaran</label>
              <div class="relative border-dotted h-48 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                <div class="absolute">
                  <div class="flex flex-col items-center">
                    <i class="fa fa-cloud-upload fa-3x text-blue-700"></i>
                    <span class="block text-gray-400 font-normal">Attach your files here</span>
                    <span class="block text-gray-400 font-normal">or</span>
                    <span class="block text-blue-700 font-normal">Drag & Drop</span>
                  </div>
                </div>
                <input type="file" class="h-full w-full opacity-0" name="attachment">
              </div>
            </div>
          </div>
          <div class="pt-4 flex items-center space-x-4">
            <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Upload Bukti Pembayaran</button>
          </div>
       

<div class="my-4 bg-gray-100 rounded-lg p-4">
  <p class="text-gray-800 font-semibold">Bukti Pembayaran</p>
  <p class="text-gray-600">Terima kasih telah melakukan pembayaran</p>
</div>

<footer>
  @include("partials.footer")
</footer>
</body>