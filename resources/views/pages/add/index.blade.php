<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoffeeApp Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<header class="flex flex-col sticky top-[-40px]">
    <nav>
      <div class="logo bg-orange-900 text-white flex justify-center py-1 text-lg"><span class="text-amber-200">Coffee</span><b>App</b><span class="text-zinc-300 ml-2">Admin</span></div>
      <div class="navigation flex relative h-16 capitalize items-center bg-amber-200 px-3 sm:px-5 py-3 text-lg">
        <a href="/" class="mr-3 hidden md:inline hover:underline">beranda</a>
        <a href="/coffee/add" class="mr-3 hidden md:inline hover:underline">tambahkan coffee</a>
        <a href="/coffee" class="mr-3 hidden md:inline hover:underline">list coffee</a>
        <a href="/setting" class="mr-auto hidden md:inline hover:underline">pengaturan</a>
        <button data-type="navigation" data-for="menu" class="md:hidden mr-1 sm:mr-0 hover:brightness-75 flex items-center justify-center px-2 py-1">
          <span class="material-symbols-outlined">menu</span>
        </button>
        <input type="text" name="searchInp" placeholder="Search Coffee" class="placeholder:text-neutral-400 text-base ml-5 md:max-w-xs xl:ml-0 flex-grow xl:absolute min-w-0 xl:left-1/2 xl:-translate-x-1/2 h-10 px-3 bg-white caret-amber-500 outline-none rounded-full">
        <span class="displayName hidden xl:inline-block">Admin</span>
        <button class="sign out hidden xl:inline-block ml-2 bg-orange-500 text-white px-4 py-1 rounded-lg">sign out</button>
      </div>
    </nav>
  </header>
  <main class="bg-orange-50 relative flex flex-col items-center min-h-screen">
    <h2 class="text-2xl font-semibold my-2 relative z-10">Tambahkan menu kopi baru</h2>
    <form class="pb-4 w-[350px] max-w-full overflow-hidden bg-white border pt-0 rounded-2xl relative z-10 shadow-md" action="./save" method="get">
      <div class=" bg-amber-400 h-[5px] w-full"></div>
      <fieldset class="mx-4 border-b-2 p-1 h-14 mt-3 border-t-2 border-l-2 border-r-2 border-amber-400 rounded-xl overflow-hidden" data-name="nama">
        <legend class="text-sm text-amber-400 -mb-1 ml-2 px-1">Nama</legend>
        <input class=" outline-none px-1 caret-amber-400 h-full w-full" type="text" name="coffeeName">
      </fieldset>
      <fieldset class="mx-4 border-b-2 p-1 h-14 mt-3 border-t-2 border-l-2 border-r-2 border-amber-400 rounded-xl overflow-hidden" data-name="harga">
        <legend class="text-sm text-amber-400 -mb-1 ml-2 px-1">Harga</legend>
        <input class=" outline-none px-1 caret-amber-400 h-full w-full" type="number" name="harga">
      </fieldset>
      <fieldset class="mx-4 border-b-2 p-1 h-14 border-t-2 mt-3 border-l-2 border-r-2 border-amber-400 rounded-xl overflow-hidden" data-name="bahanPokok">
        <legend class="text-sm text-amber-400 -mb-1 ml-2 px-1">Bahan pokok</legend>
        <input class=" outline-none px-1 caret-amber-400 h-full w-full" type="text" name="ingridients">
      </fieldset>
      <fieldset class="mx-4 border-b-2 p-1 h-24 mt-3 border-t-2 border-l-2 border-r-2 border-amber-400 rounded-xl overflow-hidden" data-name="description">
        <legend class="text-sm text-amber-400 ml-2 px-1">Deskripsi</legend>
        <textarea name="description" class="w-full min-h-full px-1 caret-amber-400 resize-none -my-1 outline-none"></textarea>
      </fieldset>
      <button type="submit" class="mx-4 px-5 py-2 bg-amber-400 my-3 rounded-lg">Tambah</button>
    </form>
    <div class="fixed bottom-0 left-0 right-0">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fbbf24" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,170.7C384,192,480,224,576,213.3C672,203,768,149,864,144C960,139,1056,181,1152,170.7C1248,160,1344,96,1392,64L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
  </main>
  <script src="../js/pages/add.js" type="module"></script>
</body>
</html>