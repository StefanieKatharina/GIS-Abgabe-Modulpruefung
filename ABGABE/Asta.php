

<?php

$dom = new DOMDocument;
$dom->load('index.php');
$mysqli = new mysqli("localhost", "steffi", "steffi", "Steffi");
if ($mysqli->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM artikel";



?>
<html>
<head>
    <script
        src="https://code.jquery.com/jquery-3.5.1.slim.js"
        integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
        crossorigin="anonymous"></script>
    <script type="text/javascript"
            src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <style>
        <?php
        include ("style.css");
        ?>
    </style>

<img src="banner.png" alt="HFULOGO" class='logoneu'>
<br>
<br>
<ul>
  <li><a class="active" href="#home">AStA</a></li>
  <li><a href="#news">Neu reserviert</a></li>
  <li><a href="#contact">Abgabefrist</a></li>
  <li><a href="#contact">Freigaben</a></li>
  <li style="float:right"><a href="#about">Account</a></li>
</ul>
</head>

<body>
<div class="menue">
<a href=" " > AStA </a> 
<a> > <a>
<a href=" " > Freigaben </a> 
</div>
<br>

<h1> Freigaben </h1>
<h3> Diese Artikel wurden erfolgreich zurückgegeben und können freigeschaltet werden:</h3>

<script type="application/javascript">
    var number=0;
    $article=[];
    function check(elem){
        if (elem.checked==true){
            number++;
            $article.push(elem.id);
            document.getElementById("number").innerHTML=number;
        }else {
            number--;
            $article = $.grep($article, function(value) {
                return value != elem.id;
            });
            document.getElementById("number").innerHTML=number;
        }
    }

    function store(){
        $.each($article, function (index){
            $.ajax({
                type: "POST",
                url: 'dataAsta.php',
                data: {id:$article[index]},
                dataType: 'JSON',
                success: function(data){
                    console.log(data);
                }
            });
        });
location.reload();
    }
</script>
<?php
echo "<div class='page'>";
foreach ($mysqli->query($sql) as $row) {
    //print_r($row);
    if ($row['verfuegbar']==0){
        echo "<div class='article'>
<img class='img' src=" . $row['bild'] . ">
<div class='text'>
<h2>" . $row['name'] . "</h2>
<div class='beschreibung'>"
            . $row['artikelbeschreibung'] .
            "</div>
<input onchange='check(this)' class='box' type='checkbox' id=" . $row['id'] . ">
</div>
</div>";
    }
}
?>
<div class='card' id='card'>
    <div class='counter'>Sie haben aktuell <span id="number" class="placeholder" data-placeholder="0"></span> Artikel ausgewählt</div>
</div>
<div class="submit">
    <button class='button' onclick="store()">Artikel freigeben</button>
</div>
</body>
</html>