<!DOCTYPE html>
<html>
<head>
    <title>Whonnock - Administrace</title>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<p>
<h1><p class="solid">
        Whonnock Servers</h1></p>
<ul>
    <li><a href="index.php">Hlavní</a></li>
    <li><a href="administrace.php">Administrace</a></li>
    <li><a href="cenik.php">Ceník</a></li>
    <li><a href="aktuality.php">Aktuality</a></li>
    <li style="float:right"><a class="active" href="onas.php">O nás</a></li>
</ul>

<img src="icon.jpeg" width="300px" height="300px" style="float:right"  alt="logo"/>
<h2>
    Administrace
</h2>

<h4>
    Výpis databáze serverů
</h4>
<h3>
    <form action="vypis_skript.php" method="post">
        <input type="submit" name="submit_vypis" value="Potvrdit výpis">
    </form>
</h3>

<h4>
    Vložení záznamu
</h4>
<br>
<h3>
    <form action="vlozeni_skript.php" method="post">
        Název serveru: <input type="text" name="nazev_serveru" required><br>
        Číslo serveru: <input type="text" name="cislo_serveru" required><br>
        Typ serveru:
        <select name="typ_serveru" id="typ_serveru">
            <option value="lite">Lite</option>
            <option value="standard">Standard</option>
            <option value="extreme">Extreme</option>
        </select><br>
        Administrátor: <input type="text" name="administrator_serveru" required><br>
        Souhlasím se zpracováním údajů: <input type="checkbox" name="souhlas" value=0><br>
        <input type="submit" name="submit" value="Potvrdit">
    </form>
</h3>

<h4>
  Editace záznamu
</h4>
<br>
<h3>
  <form action="editace_skript.php" method="post">
      ID: <input type="number" name="id" required><br>
      Název serveru: <input type="text" name="nazev_serveru" required><br>
      Typ serveru:
      <select name="typ_serveru" id="typ_serveru">
          <option value="lite">Lite</option>
          <option value="standard">Standard</option>
          <option value="extreme">Extreme</option>
      </select><br>
      Administrátor: <input type="text" name="administrator_serveru" required><br>
      Potvrzuji správnost dat výše: <input type="checkbox" name="potvrzeni_spravnost" value=0><br>
      <input type="submit" name="submit" value="Potvrdit">
  </form>
</h3>

<h4>
  Odstranění záznamu
</h4>
<h3>
  <form action="vymazat_skript.php" method="post">
    ID serveru: <input type="number" name="id" required><br>
    Potvrzuji smazání daného záznamu: <input type="checkbox" name="potvrzeni_smazat" value=0><br>
    <input type="submit" name="submit" value="Odstranit">
  </form>

</h3>




</body>
</html>
