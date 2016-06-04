<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>My Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .mylink{
            color: white;
            float: right;
            display: block;
            padding: 5px;
            background-color: green;
        }
        .mylink:hover{
            color: red;
        }
    .jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 7px;
padding-bottom: 7px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
    </style>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });

    
    </script>
</head>
<body>
    <div class="jumbotron jumbotron-sm" style="height:120px">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    My Form Entries&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="index.php" class='mylink'>GO TO FORM</a></h1>
            </div>
        </div>
    </div>
</div>
    <div class="col-lg-1" style="font-size:large">NAME</div>
    <div class="col-lg-2" style="font-size:large">EMAIL</div>
    <div class="col-lg-1" style="font-size:large">PHONE NUMBER</div>
    <div class="col-lg-2" style="font-size:large">ADDRESS</div>
    <div class="col-lg-1" style="font-size:large">GENDER</div>
    <div class="col-lg-1" style="font-size:large">NATIONALITY</div>
    <div class="col-lg-2" style="font-size:large">EDUCATIONAL BACKGROUND</div>
    <div class="col-lg-1" style="font-size:large">DATE OF BIRTH</div>
    <div class="col-lg-1" style="font-size:large">MODE OF CONTACT</div>
    <br><br>
        <?php

            include 'myform.php';

            $obj1 = new MyForm();
            
            $returned = $obj1->getContents();
            
            $rows = count($returned);
            for($row = 0;$row<$rows;$row++){
           $cols = count($returned[$row]);
                for($col=0;$col<$cols;$col++){
                    if($col==1||$col==3||$col==6){
                echo "<div class='col-lg-2' style='font-size:medium'>".$returned[$row][$col]."</div>";
                    }
                    else{
                        echo "<div class='col-lg-1' style='font-size:medium'>".$returned[$row][$col]."</div>";
                    }
                }               
                echo '<br><br><br><br><br>';
             }
         ?>
</body>
</html>