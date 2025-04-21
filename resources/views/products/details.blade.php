<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title</title>
 </head>
 <body>
     <h1>Detail Produk</h1>
     <p>Nama Produk: {{ $product['name'] }}</p>
     <p>Harga Produk: Rp{{number_format($product['price'] , 0,',','.') }}</p>
     <p>Jenis bahan: {{ $product['material'] }} </p>
     <p>Merek: {{ $product['merek'] }}</p>
 </body>
 </html>