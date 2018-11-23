<?php

//fetch_cart.php

session_start();

$total_harga = 0;
$total_item = 0;

$output = '
<div class="table-responsive js-sticky" id="order_table">
    <table class="table table-bordered table-striped">
        <tr>  
            <th width="40%">Menu</th>  
            <th width="10%">Jumlah</th>  
            <th width="20%">Harga</th>  
            <th width="15%">Total</th>  
            <th width="5%">Aksi</th>  
        </tr>
';
if(!empty($_SESSION["menu_cart"]))
{
    foreach($_SESSION["menu_cart"] as $keys => $values)
    {
        $output .= '
        <tr>
            <td>'.$values["nama"].'</td>
            <td>'.$values["jumlah"].'</td>
            <td align="right">Rp '.number_format($values["harga"], 2,',','.').'</td>
            <td align="right">Rp '.number_format($values["jumlah"] * $values["harga"], 2,',','.').'</td>
            <td><button name="hapus" class="btn btn-danger btn-xs delete" id="'. $values["id"].'">Hapus</button></td>
        </tr>
        ';
        $total_harga = $total_harga + ($values["jumlah"] * $values["harga"]);
        $total_item = $total_item + 1;
    }
    $output .= '
    <tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">Rp '.number_format($total_harga,2,',','.').'</td>  
        <td></td>  
    </tr>
    ';
}
else
{
    $output .= '
    <tr>
        <td colspan="5" align="center">
            Keranjang anda kosong!
        </td>
    </tr>
    ';
}
$output .= '</table></div>';
$data = array(
    'cart_details'      =>  $output,
    'total_harga'       =>  'Rp' . number_format($total_harga,2,',','.'),
    'total_item'        =>  $total_item
);  

echo json_encode($data);


?>