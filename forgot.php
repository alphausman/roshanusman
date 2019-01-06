
<?php
	$link = "http://google.com/";
	//print_r($link);

?>




	<div class="col-sm-12 col-md-6 col-lg-5 text-center hvr-float-shadow1">
			    <form name="contactform" id="contactform" method="post" action="submitforgot.php">
				<h3><span class="flaticon-lock"></span> Send Password</h3>
				
				<div class="form-group">
				<div class="emailicon"><i class="glyphicon glyphicon-envelope"></i></div>
				<input type="email" class="form-control" name="email" id="useremail" placeholder="Email">
				</div>
				
				
				<div class="cancel"><a href="http://ivhseniorcare.com">Cancel</a></div>
				<div class="submitpass">
					<div class="form-group form-group-message">
						<input type="submit"  value="Submit" class="btn btn-primary" name="submit">
						<input type="hidden" name="password" id="hiddenField" value="<?php echo "$link" ?>"/>
						<p id="demo"></p>
					</div>
				</div>	
      </form>
	</div>
<script type="text/javascript">
$("#contactform").submit(function(e) {
	
	e.preventDefault();
	var form = $(this);
$.ajax({
    type: "POST",
    url: "/ajax.php?task=forgot",
    data: form.serialize(), 
    success: function(data) {
		//alert(data);
	
		if(data==1){
			$("#contactform").trigger("reset");
		  $('#demo').html("<h3>Password Sent! Check Your Mail.</h3>").show();
		  setTimeout(function() {
        $("#demo").hide('blind', {}, 500)
    }, 5000);
		}
		else{
			 $('#demo').html("<h3>Something Went Wrong Mail not sent</h3>").show();
			setTimeout(function() {
        $("#demo").hide('blind', {}, 500)
    }, 5000);
		}
	}
  });
  });
</script>
<!---<script type="text/javascript">
function valid()
{
if(document.getElementById("enteremail").value=='')
{
alert("Enter The Email");
return false;
}else if(document.getElementById("enteremail").value!=''){
var emailvalue = document.getElementById("enteremail").value;

var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (reg.test(emailvalue) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }
}if(document.getElementById("npwd").value==''){
	alert("Enter The New Passowrd");
    return false;
}else if(document.getElementById("cpwd").value==''){
	alert("Enter The Confirm Passowrd");
    return false;
  }
}

</script>--->