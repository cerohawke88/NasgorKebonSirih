<?php
 
// Start Session
session_start();
 
// Application library ( with ShopingCart class )
require ('config.php');
 
$app = new Config();
 
if(isset($_POST['add_to_cart']))
{
    $app->addToCart($_POST['menu_id']);
}
 
if (isset($_GET['id_to_remove']) && isset($_GET['id_to_remove']) != '') {
    $app->hapusMenu($_GET['id_to_remove']);
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang Pesanan</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
</head>
<body>
 
    <div class="container">
 
       <div class="card">
        <h5 class="card-header">Keranjang Pesanan</h5>
            <div class="card-body">
 
                <?php
                    if(isset($_SESSION['menu_cart']) && count($_SESSION['menu_cart']) > 0)
                    {
                        $menu = $_SESSION['menu_cart'];
 
                 ?>
                                <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col" width="100">Hapus</th>
                                    </tr>
                                </thead>
                <?php
                        $item_number = 1;        
                        $total = 0;
                        foreach ($menu as $item) {
                ?>
                                <tbody>
                                    <tr>
                                    <th scope="row"><?php echo $item_number?></th>
                                    <td><?php echo $item['nama'] ?></td>
                                    <td><?php echo $item['quantity']?></td>
                                    <td><?php echo $item['harga']?></td>
                                    <td>
                                        <a href="cart.php?id_to_remove=<?php echo $item_number ?>" class="btn btn-danger btn-lg">X</a>
                                    </td>
                                    </tr>
                                </tbody>
                <?php
                           $total += ($item['harga'] * $item['quantity']);
                            $item_number++;    
                        }
 
                ?>
                                <tr>
                                    <th colspan="4" align="right">
                                        Total:
                                    </th>
                                    <td>
                                        <?php echo $total ?>
                                    </td>
                                </tr>
                                </table>
                <?php
                    }
                    else {
                ?>          <div class="alert alert-primary" role="alert">
                              Keranjang pesanan kosong, silakan menuju <a href="home.php" class="alert-link">halaman menu</a> untuk mengisi pesanan anda.
                            </div>
                <?php
                        }
                ?>
                
            </div>
             <div class="card-footer">
                <button class="btn btn-primary float-right">Konfirmasi Pesanan</button>
            </div>
        </div>
 
    </div>
 
    <?php include("partials/footer.php"); ?>
</body>
</html>
