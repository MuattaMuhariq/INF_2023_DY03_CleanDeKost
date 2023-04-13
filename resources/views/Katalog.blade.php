<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Katalog</title>
    @vite('resources/css/app.css')
</head>
<body>
@include("Partials.Navbar1")
    <div class="w-full h-full bg-center bg-cover">
      <div class="flex flex-col justify-center min-h-screen backdrop-blur-sm">
        <div class="flex w-screen h-screen">
          <div
          class="mt-4 grid grid-cols-2 w-full h-full items-center justify-center"
            >
            <div
            class="h-fit w-fit flex items-center justify-center flex-col gap-2"
            >
            <img
                src="Image/ilustrasi-botol-air-kemasan-istock_ratio-16x9.jpg"
                class="ml-32 mt-24 h-52 w-80 object-cover"
            />
            <h1 class="ml-32 text-xl text-center font-bold text-putih">
              Botol Plastik <br />Rp. 200 /pcs
            </h1>
            </div>
            <div
                class="w-fit h-fit flex items-center justify-center flex-col gap-2"
            >
            <img
                src="Image/TIPS-Yuk-Manfaatkan-Botol-Kaca-untuk-4-Hal-Ini.jpg"
                class="ml-60 mt-24 h-52 w-80 object-cover"
                />
                <h1 class="ml-60 text-xl text-center font-bold text-putih">Botol Kaca <br />Rp. 300 /pcs</h1>
              </div>
              <div
              class="w-fit h-fit flex items-center justify-center flex-col gap-2"
              >
              <img src="Image/sampah k.jpg" class="ml-32 mt-24 h-52 w-80 object-cover" />
              <h1 class="ml-32 text-xl font-bold text-center text-putih">Kertas <br />Rp. 5000 /kg</h1>
            </div>
          <div
            class="w-fit h-fit flex items-center justify-center flex-col gap-2"
          >
          <img
          src="Image/besi.jpg" class="ml-60 mt-24 h-52 w-80 object-cover"/>
              <h1 class="ml-60 text-xl text-center font-bold text-putih">Besi <br />Rp.4000 /kg</h1>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    @include("partials.Footer")
  </footer>
</body>
</html>
