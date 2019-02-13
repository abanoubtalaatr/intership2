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

          console.log(ajaxRequest.response);
  }
}

  ajaxRequest.open('POST','/news_add/',true);
  
  ajaxRequest.send('id='+'abanoub');
}



