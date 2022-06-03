<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            responsive: true
        } );
     
        new $.fn.dataTable.FixedHeader( table );
    });
</script>
    <title>Tampil Data</title>
</head>
<body>
    <h3>Tampil buku tamu unilak</h3>
    <div>
        <table id ="example" class="display nowrap table-striped table-bordered table" style="width:50%">
            <tr>
            <th>NO</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Aksi</th>
            </tr>
            <?php
                $count = 0;
                foreach($data_bkt as $row){
                    $count = $count+1;
                
            ?>
            <tbody>
            <tr>
               <td><?php echo $count ?></td>
               <td><?php echo $row->nim ?></td>
               <td><?php echo $row->nama ?></td>
               <td><?php echo $row->email ?></td>
               <td><?php echo $row->pesan ?></td>
               <td> <button type="button" class="btn btn-warning"><a href="<?php echo base_url ('index.php/Beranda/formEdit/'),$row->nim ?>">Edit</a></button> <button type="button" class="btn btn-danger"><a href="<?php echo base_url ('index.php/Beranda/AksiDelete/'),$row->nim ?>">hapus</a></button>  </td>
        </tr>
            </tbody>
          
        <?php }?>
        </table>
    </div>
    
</body>
</html>