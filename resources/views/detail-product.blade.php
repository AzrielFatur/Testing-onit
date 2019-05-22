<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/customer.css">
    <title>Onitsuka.id</title>

  </head>
  <body>
    <div class="container mt-5">
        <h1 class="display-4 mb-5">Detail Product</h1>
        <hr>
        <form action="/customer/storeupload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}  
        <div class="row">
            <div class="col-sm-6">
                <h5>Upload Sepatu</h5>
                <div class="form-group">
                    <label class="btn btn-light">
                        <img src="image/upload.png"><br>Upload<input type="file" name="file" hidden>
                    </label>
                </div>
            </div>

            <div class="col-sm-6">
                <h5>Ukuran Sepatu</h5>
                <select name="size" class="form-control">
                    <option>--Pilih Ukuran--</option>
                    <option value="Euro 36">Euro 36</option>
                    <option value="Euro 37">Euro 37</option>
                    <option value="Euro 37.5">Euro 37.5</option>
                    <option value="Euro 38">Euro 38</option>
                    <option value="Euro 39">Euro 39</option>
                    <option value="Euro 39.5">Euro 39.5</option>
                    <option value="Euro 40">Euro 40</option>
                    <option value="Euro 40.5">Euro 40.5</option>
                    <option value="Euro 41.5">Euro 41.5</option>
                    <option value="Euro 42.5">Euro 42.5</option>
                    <option value="Euro 43.5">Euro 43.5</option>
                    <option value="Euro 44">Euro 44</option>
                    <option value="Euro 44.5">Euro 44.5</option>
                    <option value="Euro 45">Euro 45</option>
                    <option value="Euro 46">Euro 46</option>
                    <option value="Euro 46.5">Euro 46.5</option>
                    <option value="Euro 47">Euro 47</option>
                    <option value="Euro 48">Euro 48</option>
                    <option value="Euro 49">Euro 49</option>
                </select>
            </div>
        </div>
    </div>





    <div class="container mt-5">
        <h1 class="display-4 mb-5">Detail Information</h1>
        <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Masukan nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Masukan email">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nomer Telpon</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="phone" placeholder="Masukan nomer telpon">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <textarea type="email" class="form-control" id="exampleFormControlInput1" name="address" placeholder="Masukan alamat"></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" value="Selanjutnya" class="btn btn-dark mt-5">
        </form>
    </div>


    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>