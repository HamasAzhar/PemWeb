<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-0lax">Picture</th>
    <th class="tg-0lax"><img src="img/<?= $_GET["image"]; ?>"></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0lax">Name<br></td>
    <td class="tg-0lax"><?= $_GET["name"]; ?><br></td>
  </tr>
  <tr>
    <td class="tg-0lax">Engine</td>
    <td class="tg-0lax"><?= $_GET["engine"]; ?><br></td>
  </tr>
  <tr>
    <td class="tg-0lax">Power<br></td>
    <td class="tg-0lax"><?= $_GET["power"]; ?><br></td>
  </tr>
  <tr>
    <td class="tg-0lax">Torque</td>
    <td class="tg-0lax"><?= $_GET["torque"]; ?></td>
  </tr>
</tbody>
</table>