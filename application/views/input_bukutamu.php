<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Selamaat datang di buku tamu unilak 2022</h1>
    <h2>silahkan masukkan data diri anda</h2>
    <table>
        <form action="<?php echo base_url('index.php/Beranda/AksiInput')?>" method ="post">
                <div class="justify-content-center">
                <div class="col-md-3">
                <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name = "nim" class="form-control"   placeholder="Enter nim">
                        
                    </div>
                    <div class="form-group">
                        <label>nama</label>
                        <input type="text" name = "nama" class="form-control"   placeholder="Enter nama"> 
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name = "email" class="form-control"   placeholder="Enter email">
                        
                    </div>
                    <div class="form-group">
                        <label>pesan</label>
                        <!-- <input type="text" name = "pesan" class="form-control"   placeholder="Enter pesan"> -->
                        <textarea name="pesan" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" value ="SIMPAN" class="btn btn-primary">Save</button>
                </div>
                </div>
        </form>
    </table>
</body>
</html>