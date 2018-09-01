// JavaScript Document

	function saveChanges(type) {
	disableControls(type);
	sendBatchRequest(type);
		
	}
	function disableControls(type) {
		document.getElementById(type).classList.add("disabled");
		document.getElementById(type).classList.add("btn-warning");
	}
	function enableControls(type) {
		document.getElementById(type).classList.remove("disabled");
		document.getElementById(type).classList.remove("btn-warning");
	}
	function sendBatchRequest(type) {
   		var formData = $("#add").serializeArray();
		var jqxhr = $.post( "functions/save.php?type=" + type, formData)
		  .done(function( data ) {
			  
			  clearForm();
		  })
		  .fail(function() {
			alert( "error"); // if something goes wrong
		  })
		  .always(function() {
			
			enableControls(type);  
			
		});
	}
	function newBatch() {
		
		var formData = $("#add").serializeArray();
		var jqxhr = $.post( "functions/newBatch.php", formData)
		  .done(function() {
			  
		  })
		  .fail(function() {
			alert( "error" ); // if something goes wrong
		  })
		  .always(function() {
			  window.location.href = "?";
		});
		
	}
	function prodChanged() {
  		var searchtext = $("#prodsearch").val();
		
	}
	function clearForm() {
		$(':input').val('');
	}
	function updateProdItem(formName) {
		var url = "functions/updateItem.php?item=" + formName;
		formName = "#P" + formName;
		var formData = $(formName).serializeArray();
		var jqxhr = $.post(url , formData)
		  .done(function( data ) {
		  })
		  .fail(function() {
			alert( "error" ); // if something goes wrong
		  })
		  .always(function() {
			
		});
		

	}
	
	
		