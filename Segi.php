<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jquery</title>
    </head>
<body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Jumbotron for Title -->
<div class="jumbotron">
    <h1 class="text-center">Segitiga</h1>
    <h3 class="text-center"></h3>
</div>

<div class="container">

    <div class="row">

        <!-- Calculator Panel -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Bintang</h3>
                </div>
                &nbsp&nbsp&nbspSegitiga
                <div class="panel-body">
                <input type='text' id='tx'>&nbsp&nbsp<button class='btn btn-primary' type='submit' id='simpan'>Submit</button>
                <br>
                <center>
                </center> 
                <b id='st'></b>
                Piramida terbalik
                <br>
                <input type='text' id='text'>&nbsp&nbsp<button class='btn btn-primary' type='submit' id='simpan2'>Submit</button>
                <br>
                <center>
                </center> 
                <b id='stt'></b>
                <b id='str'></b>
                <script type="text/javascript" src="jquesy.js"> </script>
                <script>
                $(document).ready(function(){
                     //segitiga
                     $('#simpan').click(function(){
                        var ulang = parseInt($('#tx').val());
                        for(var r = 1; r<=ulang; r++){
                            for(var h=1; h<=r; h ++){
                                $('#st').append("")
                            }
                            for(var k=r; k<=ulang; k++){
                                $('#st').append(" *");

                            }
                            $('#st').append("<br>");
                        }
                    });
                    $('#simpan2').click(function(){
                        var ulang = parseInt($('#text').val());
                        for (var r=ulang; r>=1 ;r--){
                            for (var j=ulang;j>=r;j--){
                                $('#stt').append("&nbsp;");
                            }
                        for (var k=1;k<=r;k++){
                            $('#stt').append("* ");
                            }
                            $('#stt').append("<br>");
                         }
                    });
                });
                </script>
                </body>
                