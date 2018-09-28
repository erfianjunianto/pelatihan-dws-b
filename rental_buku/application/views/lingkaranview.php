<html>
<head>
<title> Demo Model, View, Controller </title>
</head>
<body>
<h2> Model Lingkaran </h2>

<!-- memanggil metode get_jarijari( ) dari objel $model -->
Nilai Jari Jari : <?php echo $model->get_jarijari(); ?> <br>

<!-- memanggil metode hitung_luas( ) dari objek $model -->
Luas Lingkaran : <?php echo $model->hitung_luas(); ?> <br>

<!-- memanggil metode hitung_keliling( ) dari objek $model -->
Keliling Lingkaran : <?php echo $model->hitung_keliling(); ?>
</body>
</html>
