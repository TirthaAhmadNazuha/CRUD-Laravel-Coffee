<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="./css/app.css">
</head>
<body>
  <header>
    <nav>CRUD Laravel Coffee</nav>
  </header>
  <main>
    <h2>Tambahkan menu kopi baru</h2>
    <form action="addNewCoffee" method="post">
      <fieldset data-name="nama">
        <legend>Nama</legend>
        <input type="text" name="nama">
      </fieldset>
      <fieldset data-name="harga">
        <legend>Harga</legend>
        <input type="number" name="harga">
      </fieldset>
      <fieldset data-name="bahanPokok">
        <legend>Bahan pokok</legend>
        <div class="chips"><div class="chip">ekpresso</div></div>
        <div class="inputChip">
          <input type="text" name="inputChip" id="inpAddingChip">
          <button class="btnAddingChip">Add</button>
        </div>
      </fieldset>
      <fieldset data-name="description">
        <legend>Deskripsi</legend>
        <textarea name="description"></textarea>
      </fieldset>
      <button type="submit">Tambah</button>
    </form>
  </main>
  <script src="./js/pages/home.js" type="module"></script>
</body>
</html>