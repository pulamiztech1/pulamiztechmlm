$(document).ready(function() {
   $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

$(document).ready(function(){
	$(document).on('click','.btnItemDelete',function(){
		var cartid = $(this).data('cartid');
		var result = confirm("Want to delete this cart item?");
		if(result){
			$.ajax({
				data:{"cartid":cartid},
				url:'/delete-cart-item',
				type:'post',
				success:function(resp){
					$("#AppendCartItems").html(resp.view);
				},error:function(){
					alert("Error");
				}
			});
		}
		
	});
});