<!DOCTYPE html>
<html lang="en">
<head>
  <title>Webleb</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.vid-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.inner-container {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 10px;
    width: 300px;
}

.box {
    text-align: center;
}

h1 {
    margin-bottom: 20px;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}

    </style>
</head>
<body>
    <form action="<?= base_url('insertproduct') ?>" method="post">
        <div class="vid-container">
        <div class="inner-container">
            <div class="box">
            <h1>Tambah Data</h1>
            <input type="text" name="nama_product" id="nama_product" placeholder="Nama Produk" required>
            <input name="description" id="description" placeholder="Deskripsi" required></input>
            <button type="submit">Tambah</button>
            </div>
        </div>
        </div>
    </form>
</body>
</html>