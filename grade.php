<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulasi</title>
    </head>
<body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Jumbotron for Title -->
<div class="jumbotron">
    <h1 class="text-center">Kalkulasi Nilai</h1>
    <h3 class="text-center"></h3>
</div>

<div class="container">

    <div class="row">

        <!-- Calculator Panel -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Kalkulasi Nilai</h3>
                </div>
                <div class="panel-body">
                <b>RPL</b>
                <br>
                <input type="text" id="RPL">
                <br>
                <b>TKJ</b>
                <br>
                <input type="text" id="TKJ">
                <br>
                <button type"submit" id="Submit">submit</button>
                <br>
                <br>
                <b id="Nilai">Nilai  :</b>
                <br>
                <b id="Grade">Grade  :</b>
                <br>
                <br>
                <script type="text/javascript" src="jquesy.js"> </script>
        <script>
    	$(document).ready(function(){
            $('#Submit').click(function(){
            var rpl=$('#RPL').val();
            var tkj=$('#TKJ').val();
            var nilai=(parseInt(rpl)+parseInt(tkj))/2;
            var intNilai= parseInt(nilai);
            console.log(nilai);
            $('#Nilai').text(nilai);

            var grade=$('#Grade').val();
            console.log(grade);
            switch(true)
            {
                case( intNilai <=10  && intNilai <=20 ):
                $('#Grade').text('Lebih giat lagi belajarnya');
                break;
                case( intNilai >=21  && intNilai <=30):
                $('#Grade').text('E');
                break;
                case( intNilai >=31  && intNilai <=40):
                $('#Grade').text('D');
                break;
                case( intNilai >=41  && intNilai <=50):
                $('#Grade').text('C');
                break;
                case( intNilai >=51  && intNilai <=60):
                $('#Grade').text('B');
                break;
                case( intNilai >=61  && intNilai <=100):
                $('#Grade').text('A');
                default:
                $('#Grade').text('Nilai tidak boleh kosong');
                
            }
            });
        });
        </script>
        </body>
        </html>



