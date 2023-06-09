<x-app-layout>
<div class="relative overflow-hidden bg-[url('/Images/pexels-huseyn-kamaladdin-667838.jpg')] bg-center bg-cover">
  <div class="flex flex-col justify-center min-h-screen backdrop-blur-sm">

  <!-- form reservasi -->
  <form action="{{ route('order.store') }}" method="post">
    @csrf
    <div class="overflow-hidden bg-gray-100 sm:rounded-xl relative w-1/2 ml-50% mb-40 drop-shadow-2xl container px-4 mx-auto">
        <div class="container mx-auto">
                <h1 class="text-2xl font-bold mb-4">Form Reservasi Layanan Pembersihan</h1>
        </div>
        <div class="px-4 py-5 sm:px-6">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2 pt-3" for="address">
                  Nama
                </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="nama" placeholder="Masukkan Nama Pemesan"></input>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="time and date">
                    Waktu dan Tanggal Pengerjaan
                </label>
            </div>
            <div class="flex">
                <div class="w-1/2 pr-2">
                      <input id="waktu" type="time" name="waktu" waktu class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div class="w-1/2 pl-2">
                      <input id="tanggal" type="date" name="tanggal" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2 pt-3" for="address">
                  Alamat
                </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="alamat" name="alamat" type="text" placeholder="Masukkan alamat tempat dibersihkan"></input>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">
                  No.Hp
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="NoHp" type="text" name="NoHp" placeholder="Masukkan nomor hp"></input>
            </div>
              <!--<div class= "bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-10 rounded focus:outline-none focus:shadow-outline float-right">-->
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-10 rounded focus:outline-none focus:shadow-outline float-right"  id="open-btn" onclick="Pesan()">Pesan</button>
          </div>
    </div>
  </div>
</div>
</form>

<!---Modal -->
<div class="fixed hidden  insert-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="modal">
  <div class="relative insert-0 mx-auto p-5 border w-1/3 shadow-lg rounded-md bg-white">
      <div class="mt-3 text-center">
          <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-blue-100">
              <svg class="h-6 w-6 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 20 20">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                  </path>
              </svg>
              </div>
          <h3 class="text-lg leading-6 font-medium text-gray-900">Sukses</h3>
          <div class="mt-2 px-7 py-3">
              <p class="text-sm text-gray-500">Pesanan anda telah diterima!</p>
  </div>
          <div class="items-center px-4 py-3">
              <a href="{{ route('history') }}" id="ok-btn" class="px-4 py-2 bg-blue-500 text-white
                              text-base font-medium rounded-md w-full
                              shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                  OK
</a>
  
          </div>
      
  
  </div>
  </div>
  </div>
  
  <style>
    #modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  
    </style>
  
  <script>
    let modal = document.getElementById('modal');
     let btn = document.getElementById('open-btn');
      let button = document.getElementById('ok-btn');
  
      btn.onclick = function () {
              modal.style.display = 'block';
          };
  
          button.onclick = function () {
              modal.style.display = 'none';
          };
  
  window.onclick = function (event) {
  if (event.target == modal) {
  modal.style.display = "none";
  }
  }
  
  </script>
  </button>
  
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

<!--Footer container-->
<footer class="bg-sky-600 mt-2 text-center text-white">
  <div class="container px-6 pt-6">
    <div class="mb-6 flex justify-center">
  <a
        href="#!"
        type="button"
        class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
        data-te-ripple-init
        data-te-ripple-color="light">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mx-auto h-full w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
      </a>


      <a
        href="#!"
        type="button"
        class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
        data-te-ripple-init
        data-te-ripple-color="light">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mx-auto h-full w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
      </a>

      <a
        href="#!"
        type="button"
        class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
        data-te-ripple-init
        data-te-ripple-color="light">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mx-auto h-full w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
        </svg>
      </a>
    </div>
  </div>

  <!--Copyright section-->
  <div
    class="p-4 text-center"
    style="background-color: rgba(0, 0, 0, 0.2)">
    © 2023 Copyright:
    <a class="text-whitehite" href="https://tailwind-elements.com/"
      >Clean De kost</a
    >
  </div>
</footer>

</x-app-layout>