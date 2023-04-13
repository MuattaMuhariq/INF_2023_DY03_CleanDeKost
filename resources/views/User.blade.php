<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>User</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include("Partials.Navbar1")
    <div class="relative overflow-hidden bg-[url('public/Image/pexels-huseyn-kamaladdin-667838.png')] bg-center bg-cover">
        <div class="flex flex-col justify-center min-h-screen backdrop-blur-sm">
            <div class="container ml-3 p-28 flex items-center justify-center flex-col gap-10">
                <div class="rounded-full border-2 shadow-md p-8 scale-150">
                    <img src=""> 
                </div>
                <div class="rounded-md border-2 bg-gray-100/75 shadow-md p-8 w-[30rem]">
                    <h1>Nama</h1>
                    <p class="bg-white rounder border-2 p-2"></p>
                    <h1>No.Hp</h1>
                    <p class=" bg-white rounder border-2 p-2"></p>
                    <h1>Email</h1>
                    <p class="bg-white rounder border-2 p-2"></p>
                    <h1>Tanggal Lahir</h1>
                    <p class="bg-white rounder border-2 p-2"></p>
                    <h1>Alamat</h1>
                    <p class="bg-white rounder border-2 p-2"></p>
                </div>
            </div>
        </div>    
    </div>
    <footer>
        @include("partials.Footer")
    </footer>            
</body>
</html>