<?php

session_start();

$total_harga = 0;
$total_item = 0;
include('partials/header.php');
?>
<div class="table-responsive" id="order_table">
    <table class="table table-bordered table-striped">
        <tr>  
            <th width="40%">Menu</th>  
            <th width="10%">Jumlah</th>  
            <th width="20%">Harga</th>  
            <th width="15%">Total</th>  
        </tr>
<?php
if(!empty($_SESSION["menu_cart"]))
{
    foreach($_SESSION["menu_cart"] as $keys => $values)
    {
?>
        <tr>
            <td><?php echo $values["nama"] ?> </td>
            <td><?php echo $values["jumlah"] ?> </td>
            <td>Rp <?php echo $values["harga"] ?> </td>
            <td>Rp <?php echo $values["jumlah"] * $values["harga"] ?></td>
        </tr>
<?php
        $total_harga = $total_harga + ($values["jumlah"] * $values["harga"]);
        $total_item = $total_item + 1;

    }
?>
    <tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">Rp <?php echo $total_harga ?></td>  
    </tr>
    
<?php
}
?>
    </table>

<?php
    if(isset($_SESSION['success'])):
?>
<div class="alert alert-success" role="alert"><?php echo $_SESSION['success'] ?></div>

<?php
    elseif(isset($_SESSION['failed'])):
?>

<div class="alert alert-danger" role="alert"><?php echo $_SESSION['failed'] ?></div>

<?php
    endif
?>

<form method="get" class="col-md-6" name="confirm-order" action="proses-confirm-order.php">
    <div class="form-group">
        <div class="input-group">
            <label>Waktu Ambil Pesanan</label>
            <input type="datetime-local" name="waktu-ambil" placeholder="yyyy-mm-dd hh:mm:dd">   
        </div>

        <div class="input-group">
            <label>Catatan Tambahan</label>
            <input type="text" name="notes" size="50" placeholder="Catatan Tambahan" style="height: 50px">  
        </div>
        <input type="submit" name="confirm" class="btn btn-default glyphicon glyphicon-shopping-cart" value="Konfirmasi Pesanan">
    </div>
</form>

</div>

<?php 
unset($_SESSION['success']);
unset($_SESSION['failed']);

?>