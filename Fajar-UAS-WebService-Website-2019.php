<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaScript - read JSON from URL</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>


<body>
	
    <div class="mypanel"></div>
    <h1>Cuaca Hari Ini</h1>
<table class="table" border="1">
  <thead class="text-white bg-primary">
    <tr>
      <th scope="col">Kota</th>
      <th scope="col">Siang</th>
      <th scope="col">Malam</th>
      <th scope="col">Dini Hari</th>
      <th scope="col">Suhu</th>
      <th scope="col">Kelembapan</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     $json = file_get_contents('http://papaside.com/data.php');
     $json_a = json_decode($json);
    foreach($json_a as $value){ ?>
    <tr>
      <th scope="row"><?= $value->Kota?></th>
      <td><?= $value->siang?></td>
      <td><?= $value->malam?></td>
      <td><?= $value->dini_hari?></td>
      <td><?= $value->suhu?></td>
      <td><?= $value->Kelembapan?></td>
    </tr>
    <?php }?>
  </tbody>
</table>
    
</body>
</html>