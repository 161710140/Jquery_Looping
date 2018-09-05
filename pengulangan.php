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
                    <h3 class="panel-title">Looping</h3>
                </div>
                <div class="panel-body">
                While : <b id="While"></b>
                <br>
                Do While : <b id="Dowhile"></b>
                <br>
                For : <b id="For"></b>
                <br>
                <br>
                <input type="number" id="text"> <button class='btn btn-primary' id='simpan' type='submit'>Simpan
                </input>
                </button>
                <br> 
                Hasil : <b id ='hasil'> </b>
                <br>
                <br>
                <script type="text/javascript" src="jquesy.js"> </script>
                <script>
                $(document).ready(function(){
                    $('#simpan').click(function(){
                    var ulang= parseInt($('#text').val());
                    var d = 1;
                    while(d <= ulang){
                        $('#hasil').append(d);
                        d++;
                    }
                    });
                    var i = 1;
                    while(i < 10) {
                        $('#While').append(i);
                        i++;
                    }
                    var a = 1;
                    do{
                        $('#Dowhile').append(a);
                        a++;
                    }
                    while(a <= 8);
                    for (s=1; s <= 9; s++){
                        $('#For').append(s);
                    }
                    
                     
                }); 
</script>

