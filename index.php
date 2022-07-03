<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa (View)</title>
</head>
<body style=" 
            background-image: url(background.jpg);
            background-repeat: no-repeat;
            opacity: 0.9;
            background-size: cover;
            width: 100%;
            background-position: -10px -270px;
            padding:0px;
            margin: 0px;

">
    <h1 style="
            text-align:center; 
            font-size: 3vw;">Tampilan Data Mahasiswa</h1>
    <button name="edit" type="submit"
                style="width: 10vw;
                height: 3vw;
                border-radius: 8%; 
                margin-bottom: 10px;
                font-size:1vw; 
                position: relative;
                transform:translate(-50%);
                left: 50%;
                background-color: lightgreen; 
                font-weight: bold;">Tambah Data</button>
    <table border="1" cellspacing="0" cellpadding="5"
    style="text-align:center;
    background-color: lightgray;
    width: 75%;
    font-size: 1.8vw;
    position: absolute;
    transform: translate(-50%);
    left: 50%;
    
    ";>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        
        include 'koneksi.php';

        $no = 1;
        $query = "SELECT*FROM mahasiswa, data_mahasiswa
                  WHERE mahasiswa.nim_mahasiswa = data_mahasiswa.nim_mahasiswa";
        $tampil = mysqli_query($conn, $query);

        while ($tampilan = mysqli_fetch_assoc($tampil)){ ?>
        <tr>
            <td> <?php echo $no; ?></td>
            <td> <?= $tampilan['nim_mahasiswa'];?></td>
            <td style="width:30%;"> <?= $tampilan['nama_mahasiswa']?></td>
            <td style="width:30%;"> <?= $tampilan['alamat_mahasiswa']?></td>
            <td style="width:20%;"> <?= $tampilan['nomor_telepon']?></td>
            <td>
                <button name="edit" type="submit"
                style="width: 5vw; 
                font-size:1vw; 
                background-color: yellow; 
                font-weight: bold;">Edit</button>
            </td>
            <td>
                <button name="edit" type="submit"
                style="width: 5vw; 
                font-size:1vw; 
                background-color: #ff1a1e; 
                font-weight: bold;">Hapus</button>
            </td>
        </tr>
        <?php $no++; }?>
    </table>
</body>
</html>