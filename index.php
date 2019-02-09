<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>
<body>
<script>
    $(document).ready(function(){
    $(".dro").click(function(){
        $(".droo").slideToggle();
    });
    });
</script>
<div class="marjvniv">
<div class="search">
    <input type="text" name="search"><button name="sub">ძიება</button>
</div>
<div class="categorys">
    <p>კატეგორია</p>
</div>
<div class="category">
    <ul>
        <li><a href="">საინტერესო ამბები</a></li>
        <li><a href="">პროგრამები</a></li>
        <li><a href="">თამაშები</a></li>
        <li><a href="">მუსიკა</a></li>
        <li><a href="">გაკვეთილები</a></li>
        <li><a href="">ვებ მასტერებს</a></li>
        <li><a href="">ელ-წიგნები</a></li>
    </ul>
</div>
    <div class="dro">
        <p>დრო</p>
    </div>
    <div class="droo">
        <?php
            date_default_timezone_set('Asia/tbilisi');
            $t = date('h:i:s');
            $d = date('m-d-Y');
            echo "<ul><li>საათი: $t</li><li>თარიღი: $d</li></ul>";
        ?>
    </div>
</div>
<div class="back">

</div>
</body>
</html>