
function clearField(pObj)
{
	pObj.className 	= '';
	pObj.value 	= '';
}

function setSuccessField(pObj)
{
	pObj.className = 'success';
}

function setErrorField(pObj, msg)
{
	//$(pObj).addClass('error');
	$(pObj).attr('value', msg);
}


function isEmail(s_email) {
	var r1 = new RegExp("(@.*@)|(\\.\\.)|(@\\.)|(^\\.)");
	var r2 = new RegExp("^.+\\@(\\[?)[a-zA-Z0-9\\-\\.]+\\.([a-zA-Z]{2,3}|[0-9]{1,3})(\\]?)$");
	return (!r1.test(s_email) && r2.test(s_email));
}

function isEmpty ( pString ) {

	return !isBlank(pString);
}

function isBlank ( pString ) {
	return Boolean( /^\s*$/.test( pString ) );
}

function clearAllFields(pForm)
{
	var len = pForm.length;

	for (var i=0 ;  i<len ; i++){
		var tmpObj=pForm.elements[i];
		clearField(tmpObj);
	}	
}

function remove_result()
{
	$('#sent').fadeOut(250);
	$('#error-sending').fadeOut(250);
}

function sendForm()
{
	remove_result(); 
	
	var dataArr = jQuery('#frm_contact').serializeArray();  
	var tAreaId = null;        
	var params = "";

	for (index = 0; index < dataArr.length; ++index) 
	{
		entry = dataArr[index];

		name  = entry.name;
		value = entry.value;    
		msg   = $('#'+entry.name).attr('data-error');  

		if (name.indexOf('mail') >= 0)
		{
		    ok = isEmail(value);			
		}
		else
		{
		    ok = isEmpty(value);
		}

		if (!ok){
			alert(msg);
			return false;			
		}
		//alert(name+" : "+value);
		params += name + "=" + value + "&";
	}

	$.ajax({
	   type: "POST",           
	   url: "mails/mailer.php",
	   data: params,
	   loading: $('#sending').fadeIn(250),
	   success: function(msg){
		
		//refreshCaptchaCode();
		
		if (msg.match(/SUCCESS/))
		{
			$('#sending').fadeOut(250);
			$('#sent').fadeIn(250);
			clearAllFields(document.frm_contact);
		
                        setTimeout(function(){
                            $('#sent').fadeOut(250);
                        }, 3000);
		}		
		else
		{
			$('#sending').fadeOut(250);
			$('#error-sending').fadeIn(250);			
		}
	     
	   }
	 });
	 return false;
}


function sendUploadForm()
{
	remove_result(); 
	
	var dataArr = jQuery('#frm_contact').serializeArray();  
	var tAreaId = null;        
	var params = "";

	for (index = 0; index < dataArr.length; ++index) 
	{
		entry = dataArr[index];

		name  = entry.name;
		value = entry.value;    
		msg   = $('#'+entry.name).attr('data-error');  

		if (name.indexOf('mail') >= 0)
		{
		    ok = isEmail(value);			
		}
		else
		{
		    ok = isEmpty(value);
		}

		if (!ok){
			alert(msg);
			return false;			
		}		
	}

        jQuery('#frm_contact').submit();
}
