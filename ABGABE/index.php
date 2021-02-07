

<?php

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
  <li><a class="active" href="#home">Startseite</a></li>
  <li><a href="#news">Bibliothekskatalog</a></li>
  <li><a href="#contact">Neuerscheinungen</a></li>
  <li><a href="#contact">Thema</a></li>
  <li><a href="#contact">Erscheinungsjahr</a></li>
  <li><a href="#contact">Merkliste</a></li>
  <li style="float:right"><a href="#about">Account</a></li>
</ul>

<input type="search" style="float:right" id="suche" placeholder="Suche...">
</head>

<body>
<br>
<br>
<div class="menue">
<a href=" " > Suche </a> 
<a> > <a>
<a href=" " > Fernleihe </a> 
<a> > <a>
<a href=" " > Marketing </a> 
</div>
<br>

<script type="application/javascript">
   var number=0;
     $article=[];
    let kosten=0;
    $mail="";

    function check(elem){
        if (elem.checked==true){
            number++;
            $article.push(elem.id);
            document.getElementById("number").innerHTML=number;
            $preis= parseInt(elem.getAttribute("data-attr"));
            console.log($preis);
            kosten=kosten + $preis;
            console.log(kosten);
            document.getElementById("kosten").innerHTML=kosten;
        }else {
            number--;
            article = $.grep($article, function(value) {
                return value != elem.id;
            });
            document.getElementById("number").innerHTML=number;
            $preis= elem.getAttribute("data-attr");
            kosten=kosten-$preis;
            document.getElementById("kosten").innerHTML=kosten;
        }
    }
function mail(){
        var mail= document.getElementById("mail").value;
    console.log(mail);
    var emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( emailReg.test( mail )){
        $mail=mail;
        return $mail;
    }else {
        alert("Bitte geben Sie eine richtige Mail an");
        stop();
    };
}
    function store(){
    mail();

            $.each($article, function (index){
                $.ajax({
                    type: "POST",
                    url: 'data.php',
                    data: {id:$article[index],
                        email: $mail
                    },
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
        echo "<div class='noArticle'>
<img class='img' src=" . $row['bild'] . ">
<div class='text'>
<h2> " . $row['name'] . "</h2>
<div class='beschreibung'>"
            . $row['artikelbeschreibung'] .
            "</div>
<div class='preis'>".$row['Preis']."€</div>
<input data-attr='".$row['Preis']."'   onclick='return false'  class='box' type='checkbox' id=" . $row['id'] . ">
</div>
</div>";
    }else{
        echo "<div class='article'>
<img class='img' src=" . $row['bild'] . ">
<div class='text'>
<h2>" . $row['name'] . "</h2>
<div class='beschreibung'>"
            . $row['artikelbeschreibung'] .
            "</div>
<div  class='preis'>".$row['Preis']."€</div>
<input data-attr='".$row['Preis']."'  onchange='check(this)' class='box' type='checkbox' id=" . $row['id'] . ">
</div>
</div>";
    }
}
?>
<div class='card' id='card'>
    <br>
<div class='counter'>Sie haben aktuell <span id="number" class="placeholder" data-placeholder="0"></span> Artikel ausgewählt</div>
<br>
<div class="preis"><span id="kosten" class="placeholder"></span>€</div>
</div>
<div class="submit">
    <br>
    <br>
    <input type="email" id="mail" placeholder="E-Mail Adresse ">
    <br>
    <button class="button" onclick="store()">Reservieren</button>
</div>

<br>
<br>
<br>
</body>

</html>