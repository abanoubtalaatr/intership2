// This code for hidden the placeholder and appear it agin when you onblur 
// and send the content to class add_new.php to stor it in database


let content_title = document.getElementById('title'),
    title = content_title.textContent,
    content_description = document.getElementById('description'),
    description = content_description.textContent,
    send_content = document.getElementById('send_content');

content_title.onclick = function (){
	content_title.textContent = '';
}
content_title.onblur = function (){
	if(content_title.textContent ==''){
        content_title.textContent = title;
	}
}   
content_description.onclick =  function (){
	content_description.textContent = '';
}
 
content_description.onblur = function(){
	if(content_description.textContent ==''){
		content_description.textContent = description;
	}
}
send_content.onclick = function(event){
   
	event.preventDefault();
	ajaxRequest = new XMLHttpRequest();

	ajaxRequest.onreadystatechange = function() {	
	  if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
	  	if(content_description.textContent !=''){
	  		
	  	}
	  	    document.getElementById("hide").style.display = "block";

            setTimeout(function(){
			  document.getElementById("hide").style.display = "none"; 
			 }, 2000);

	        content_title.value =content_title.textContent;
	        content_description.value = content_description.textContent;
	  }
	}


  ajaxRequest.open('POST','/post',true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send("title="+content_title.value+"& description="+content_description.value);
}



