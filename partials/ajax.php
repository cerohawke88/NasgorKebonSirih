<script>

// fungsi ajax untuk memproses pesanan tanpa perlu menunggu loading
	$(document).ready(function(){

	load_menu();

	load_cart_data();
    
    // memuat data semua menu
	function load_menu()
	{
		$.ajax({
			url:"templates/menu_all.php",
			method:"POST",
			success:function(data)
			{
				$('#display_menu').html(data);
			}
		});
	}

	// memuat data keranjang dalam bentuk JSON
	function load_cart_data()
	{
		$.ajax({
			url:"cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.badge').text(data.total_item);
			}
		});
	}

	// memproses kerangka dan konten dari popover keranjang
	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	// memproses event setelah menekan tombol Konfirmasi Pesanan
	$(document).on('click', '.add_to_cart', function(){
		var id = $(this).attr("id");
		var nama = $('#nama'+id+'').val();
		var harga = $('#harga'+id+'').val();
		var jumlah = $('#jumlah'+id).val();
		var aksi = "add";
		if(jumlah > 0)
		{
			// memasukkan data pesanan ke php tersebut
			$.ajax({
				url:"proses-order.php",
				method:"POST",
				data:{id:id, nama:nama, harga:harga, jumlah:jumlah, aksi:aksi},
				success:function(data)
				{
					load_cart_data();
					alert("Item telah ditambahkan ke keranjang.");
				}
			});
		}
		else
		{
			alert("Masukkan item minimal 1 buah.");
		}
	});

	// memproses event setelah menekan tombol Hapus
	$(document).on('click', '.delete', function(){
		var id = $(this).attr("id");
		var aksi = 'remove';
		if(confirm("Apakah anda yakin ingin menghapus item?"))
		{
			$.ajax({
				url:"proses-order.php",
				method:"POST",
				data:{id:id, aksi:aksi},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item telah dihapus.");
				}
			})
		}
		else
		{
			return false;
		}
	});

	// memproses event setelah menekan tombol Hapus Keranjang
	$(document).on('click', '#clear_cart', function(){
		var aksi = 'empty';
		$.ajax({
			url:"proses-order.php",
			method:"POST",
			data:{aksi:aksi},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Keranjang telah dihapus.");
			}
		});
	});
    
});

</script>