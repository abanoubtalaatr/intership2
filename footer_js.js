
$('.carousel').carousel();


// this code for hidden and appear the form join us

let button_log_in = document.getElementById('log_in'),
    div_form = document.getElementsByClassName('form'),
    cover_div = document.getElementById('cover');
button_log_in.onclick = function(){
	cover_div.style.display = 'block';
    div_form[0].style.display = 'block';
}
//this code for hidden the form 
let close = document.getElementById('close');
close.onclick = function(){
	div_form[0].style.display = 'none';
}


// this code for send the first name and last name and
// email to receiver the task to check if this person able to join to us


/* 
  ** join_button is the button to submit to send the
  ** task to the user to check him if he able to pass the
  ** tast 
*/
let join_button = document.getElementById('join_submit');
join_button.onclick = function(evt){
  console.log(this.parentNode);
  console.log(document.forms[0]);
	evt.preventDefault();
	ajaxRequest = new XMLHttpRequest();
	ajaxRequest.onreadystatechange = function() {
  if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
	  let text =  ajaxRequest.response;
		  
		   		   
	}// end if is set response
  }//onchange
	let dataForm = new FormData(document.forms[0]);
	ajaxRequest.open('POST','/tasks',true);
	ajaxRequest.send(dataForm);
}//end button