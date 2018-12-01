<script>
	$(document).ready(function(){

	load_menu();

	load_cart_data();
    
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

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_to_cart', function(){
		var id = $(this).attr("id");
		var nama = $('#nama'+id+'').val();
		var harga = $('#harga'+id+'').val();
		var jumlah = $('#jumlah'+id).val();
		var aksi = "add";
		if(jumlah > 0)
		{
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