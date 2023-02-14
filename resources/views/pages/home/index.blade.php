<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoffeeApp Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />  <link rel="stylesheet" href="./css/app.css">
</head>
<body>
  <header class="relative h-screen flex flex-col">
    <nav>
      <div class="logo bg-orange-900 text-white flex justify-center py-1 text-lg"><span class="text-amber-200">Coffee</span><b>App</b><span class="text-zinc-300 ml-2">Admin</span></div>
      <div class="navigation flex relative h-16 capitalize items-center bg-amber-200 px-3 sm:px-5 py-3 text-lg">
        <a href="#" class="mr-3 hidden md:inline hover:underline">beranda</a>
        <a href="#" class="mr-3 hidden md:inline hover:underline">tambahkan coffee</a>
        <a href="#" class="mr-3 hidden md:inline hover:underline">list coffee</a>
        <a href="#" class="mr-auto hidden md:inline hover:underline">pengaturan</a>
        <button data-type="navigation" data-for="menu" class="md:hidden mr-1 sm:mr-0 hover:brightness-75 flex items-center justify-center px-2 py-1">
          <span class="material-symbols-outlined">menu</span>
        </button>
        <input type="text" name="searchInp" placeholder="Search Coffee" class="placeholder:text-neutral-400 ml-5 md:max-w-xs xl:ml-0 flex-grow xl:absolute min-w-0 xl:left-1/2 xl:-translate-x-1/2 h-10 px-3 bg-white bg-opacity-75 caret-amber-500 outline-none rounded-xl">
        <span class="displayName hidden xl:inline-block">Admin</span>
        <button class="sign out hidden xl:inline-block ml-2 bg-orange-500 text-white px-4 py-1 rounded-lg">sign out</button>
      </div>
    </nav>
    <div class="jumbotron flex-grow p-5 bg-orange-50">
      <div class="row flex mb-6">
        <article class="bg-white w-full md:min-w-[400px] drop-shadow-md md:w-2/5 p-4 sm:p-6 inline-block rounded-2xl">
          <h1 class="text-2xl font-semibold border-b-2 border-amber-400 pb-2">Selamat Datang <span class="displayName">Admin</span></h1>
          <p>Semoga harimu menyenangkan</p>
        </article>
      </div>
      <div class="row">
        <article data-type="view" data-for="selledCoffee" class="bg-white drop-shadow-md relative p-4 sm:p-6 rounded-2xl inline-flex flex-col items-center">
          <span class="text-8xl material-symbols-outlined text-amber-400">
            coffee_maker
          </span>
          <span class="number text-7xl absolute top-12 font-semibold">70</span>
          <p>Kopi terjual</p>
        </article>
      </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fbbf24" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,170.7C384,192,480,224,576,213.3C672,203,768,149,864,144C960,139,1056,181,1152,170.7C1248,160,1344,96,1392,64L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
  </header>
  <main>
  </main>
  <script src="./js/pages/add.js" type="module"></script>
</body>
</html>