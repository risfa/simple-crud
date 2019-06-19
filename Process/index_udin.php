<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <p>Nama : </p> <input type="text" id="input_id">
    <input type="number" id="number_id">
    <button type="button" id="button_id" name="button">Click</button>

    <div class="tampilkan_nama">

    </div>


        <div class="tampilkan_nomor">

        </div>

    <script type="text/javascript">

    var nama = ''
    var number = ''

    // $('#button_id').click(function(){
    //   nama = $('#input_id').val();
    //   number = $('#number_id').val()
    //   $.get('process_api.php?nama='+nama+'&nomor='+number+' ',function(data,status){
    //
    //     var data = JSON.parse(data);
    //     console.log(data)
    //       console.log(data.nama + ' - ' + data.nomor)
    //
    //       $('.tampilkan_nama').html(data.nama)
    //
    //                 $('.tampilkan_nomor').html(data.nomor)
    //
    //   })
    // });

    </script>
  </body>
</html>
