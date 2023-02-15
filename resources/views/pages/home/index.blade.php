<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoffeeApp Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="./css/app.css">
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
  <main class="bg-orange-50 relative min-h-screen">
    <div class="jumbotron flex-grow p-5 grid gap-6 grid-cols-5 grid-rows-2 relative z-10">
      <article class="bg-white drop-shadow-md col-span-2 p-4 sm:p-5 inline-block rounded-2xl">
        <h1 class="text-2xl font-semibold border-b-2 border-amber-400 pb-2">Selamat Datang <span class="displayName">Admin</span></h1>
        <p>Semoga harimu menyenangkan</p>
      </article>
      <article data-for="notes" class="p-2 bg-amber-400 border rounded-2xl">
        <h3 class="text-xl font-semibold text-white border-b-2 border-amber-50 text-center py-1">Notes</h3>
        <button data-type="action" data-for="addNotes" class="w-16 h-16 rounded-full bg-amber-50 bg-opacity-30 p-4 mx-auto mt-5 flex justify-center items-center">
        <span class="text-6xl text-white material-symbols-outlined">add</span>
        </button>
      </article>
      <article data-for="chat" class="bg-white border flex flex-col col-span-2 drop-shadow-md rounded-2xl overflow-hidden row-span-2">
        <div class="header flex items-end pt-2 px-3 pb-1">
          <h3 class="font-semibold text-lg mx-auto">Message</h3>
          <button class="flex items-center justify-center p-1">
            <span class="material-symbols-outlined">more_vert</span>
          </button>
        </div>
        <span class="w-[96%] h-[2px] bg-amber-400 block mx-auto"></span>
        <div class="con h-36 p-2 my-1 flex flex-col flex-grow overflow-y-auto">
          <div class="chat flex items-end mb-3">
            <div class="image mr-2 rounded-full bg-zinc-300 w-9 h-9"></div>
            <div class="max-w-[70%]">
              <span class="name block font-semibold ml-2 text-sm">another</span>
              <p class="message px-3 h-9 rounded-2xl rounded-bl-none flex items-center bg-zinc-200">Hello</p>
            </div>
          </div>
          <div class="chat flex items-end mb-3">
            <div class="image mr-2 rounded-full bg-zinc-300 w-9 h-9"></div>
            <div class="max-w-[70%]">
              <span class="name block font-semibold ml-2 text-sm">another</span>
              <p class="message px-3 py-1 rounded-2xl rounded-bl-none flex items-center bg-zinc-200">
                What did you use to make this CoffeeApp?
              </p>
            </div>
          </div>
          <div class="chatYou flex items-end mb-3">
            <p class="message ml-auto max-w-[70%] px-3 py-1 rounded-2xl rounded-br-none flex items-center bg-amber-400 text-zinc-100">I use Laravel and TailwindCSS.</p>
          </div>
          <div class="chat flex items-end mb-3">
            <div class="image mr-2 rounded-full bg-zinc-300 w-9 h-9"></div>
            <div class="max-w-[70%]">
              <span class="name block font-semibold ml-2 text-sm">another</span>
              <p class="message px-3 py-1 rounded-2xl rounded-bl-none flex items-center bg-zinc-200">arigato na!</p>
            </div>
          </div>
        </div>
        <div class="bottom flex items-center p-4 h-16 rounded-lg bg-amber-300">
          <input type="text" name="messageInput" placeholder="Type here" class="h-[38px] placeholder:text-neutral-400 caret-amber-400 rounded-full outline-none px-3 flex-grow ">
          <button data-type="action" data-for="sendMessage" class="w-[44px] ml-2 bg-amber-400 h-[44px] flex items-center justify-center rounded-full">
            <span class="material-symbols-outlined text-2xl filled text-white">send</span>
          </button>
        </div>
      </article>
      <article data-type="view" data-for="selledCoffee" class="bg-white border drop-shadow-md relative p-4 sm:p-6 rounded-2xl inline-flex flex-col items-center">
        <span class="text-8xl material-symbols-outlined text-amber-400">
          coffee_maker
        </span>
        <span class="number text-7xl absolute top-12 font-semibold">70</span>
        <p>Kopi terjual</p>
      </article>
      <article data-type="view" data-for="lengthCoffee" class="bg-white border drop-shadow-md relative p-4 sm:p-6 rounded-2xl inline-flex flex-col items-center">
        <span class="text-8xl material-symbols-outlined text-amber-400">
          local_cafe
        </span>
        <span class="number text-7xl absolute top-12 font-semibold">53</span>
        <p>Menu kopi</p>
      </article>
      <article data-type="view" data-for="selledCoffee" class="bg-white border drop-shadow-md relative p-4 sm:p-6 rounded-2xl inline-flex flex-col items-center">
        <span class="text-8xl material-symbols-outlined text-amber-400">
          star
        </span>
        <span class="number text-7xl absolute top-12 font-semibold">4.6</span>
        <p>Rating rata-rata</p>
      </article>
    </div>
    <div class="fixed bottom-0 left-0 right-0">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fbbf24" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,170.7C384,192,480,224,576,213.3C672,203,768,149,864,144C960,139,1056,181,1152,170.7C1248,160,1344,96,1392,64L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
  </main>
  <script src="./js/pages/add.js" type="module"></script>
</body>
</html>