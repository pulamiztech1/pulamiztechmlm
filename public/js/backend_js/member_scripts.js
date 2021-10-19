$(document).ready(function() {
   $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
$(document).ready(function(){ 
	//Check Admin Password is correct or not
	$("#user_current_pwd").keyup(function(){
		var user_current_pwd = $("#user_current_pwd").val();
		//alert(current_pwd);
		$.ajax({
			type:'post',
			url:'/check-user-current-pwd',
			data:{user_current_pwd:user_current_pwd},
			success:function(resp){
				//alert(resp);
				if(resp=="false"){
					$("#chkUserCurrentPwd").html("<font color=red>Current Password is incorrect</font>")
				}else{
					$("#chkUserCurrentPwd").html("<font color=green>Current Password is correct</font>")

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
		    window.location.href="/delete-"+record+"/"+recordid;
		  }
		});	
	});
	//Update Admin User Status
	$(".updateMemberUserStatus").click(function(){
		var status = $(this).children("i").attr("status");
		var member_id = $(this).attr("member_id");		
		$.ajax({
			type:'post',
			url:'/update-my-member-status',
			data:{status:status,member_id:member_id},
			success:function(resp){
				if(resp['status']==0){
					$("#member-"+member_id).html("<i class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
				}else if(resp['status']==1){
					$("#member-"+member_id).html("<i class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
				}
			},error:function(){
				alert("Error");
			}
		}); 
	});	
	
});