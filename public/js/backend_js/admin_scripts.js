$(document).ready(function() {
   $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
$(document).ready(function(){ 
	//Check Admin Password is correct or not
	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();
		//alert(current_pwd);
		$.ajax({
			type:'post',
			url:'/admin/check-current-pwd',
			data:{current_pwd:current_pwd},
			success:function(resp){
				//alert(resp);
				if(resp=="false"){
					$("#chkCurrentPwd").html("<font color=red>Current Password is incorrect</font>")
				}else{
					$("#chkCurrentPwd").html("<font color=green>Current Password is correct</font>")

				}
			},error:function(){
				alert("Error");
			}
		});		 
	});

	//Check Admin Password is correct or not
	$("#admin_current_password").keyup(function(){
		var admin_current_password = $("#admin_current_password").val();
		//alert(current_pwd);
		$.ajax({
			type:'post',
			url:'/admin/check-admin-current-pwd',
			data:{admin_current_password:admin_current_password},
			success:function(resp){
				//alert(resp);
				if(resp=="false"){
					$("#checkCurrentPwd").html("<font color=red>Current Password is incorrect</font>")
				}else{
					$("#checkCurrentPwd").html("<font color=green>Current Password is correct</font>")

				}
			},error:function(){
				alert("Error");
			}
		});		
	});
	//Confirm Deletion of Record
	$(".confirmDelete").click(function(){
		//$(document).on("click",".confirmDelete".function(){			
		var record = $(this).attr("record");
		var recordid = $(this).attr("recordid");
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {		    
		    window.location.href="/admin/delete-"+record+"/"+recordid;
		  }
		});	
	});
	
	//Update Admin User Status
	$(".updateAdminUserStatus").click(function(){
		var status = $(this).children("i").attr("status");
		var admin_id = $(this).attr("admin_id");		
		$.ajax({
			type:'post',
			url:'/admin/update-admin-user-status',
			data:{status:status,admin_id:admin_id},
			success:function(resp){
				if(resp['status']==0){
					$("#admin-"+admin_id).html("<i class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
				}else if(resp['status']==1){
					$("#admin-"+admin_id).html("<i class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
				}
			},error:function(){
				alert("Error");
			}
		}); 
	});	
});