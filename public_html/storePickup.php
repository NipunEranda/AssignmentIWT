<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<title> Store PickUP </title>
		<link rel="stylesheet" href="css/style.css">
		
		<script>    
    function validateForms() 
	{
    var a = document.forms["login"]["un"].value;
    if (a == "")
	{
        alert("Name must be filled out");
        return false;
    }
	var b = document.forms["login"]["pw"].value;
    if (b == "")
	{
        alert("Password must be filled out");
        return false;
    }
 }
</script>

	</head>
	
	
	<body style ="background-color:#808080;">
		
			
		<div class="box">
			<h2> Store PickUP </h2>
			<form name="storepickup" onSubmit="return validateForms()"action="pick_query.php" method="post">
				<div class="inputBox">
					<input type="text" name="name" required="">
					<label> Customer Name  </label>
				</div>
				
				<div class="inputBox">
					<input type="text" name="nic" required="">
					<label>NIC Number</label>
				</div>
				
				<div class="inputBox">
					<input type="text" name="address" required="">
					<label> Address</label>
				</div>
				
				<div class="inputBox">
            <div class="tab-content">
              <div class="tab-pane" id="accountLogin" role="tabpanel">
			  
                <form class="modal-account__form js-account-form" id="formLogin" action="#" method="POST" data-toggle="validator">
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required="required"/>
                    <div class="help-block with-errors"></div>
                  </div>
				  
				  <div class="inputBox">
					<input type="text" name="itemcode" required="">
					<label> Item Code #</label>
					
					<div class="inputBox">
					<input type="date" name="datetime" required="">
					<label></label>
				</div>
				</div>
				  
				
              </div>
            
				
				
				
				
				<input type="submit" name="" value="Complete Order " >
			</form>
		</div>
	
	</body>
	
</html>
