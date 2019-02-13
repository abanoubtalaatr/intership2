<?php 
require_once 'controller.php';
require_once 'tasks_model.php';

class tasks extends controller{
	
 public function __construct(){
 	
 	if(isset($_POST['first_name'])){
      self::send_task();
 	}

 }
 public function defaultAction(){}
 public function notfound(){}

  
 public function send_task(){

    // $task = new tasks_model();
    // $data [] =  $task->fetch_all_data();
    



 	if(isset($_POST['email'])){
 	   
       
        try {

        $mail = new PHPMailer();

        //Enable SMTP debugging. 
         $mail->SMTPDebug = 2;                               
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();   
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );         
        // //Set SMTP host name                          
         $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
         $mail->SMTPAuth = true;                         
        // //Provide username and password     
         $mail->Username = "abanoubtalaat50@gmail.com";                 
         $mail->Password = "rzbkzfriedbwfyfp";                           
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "ssl";                           
        // //Set TCP port to connect to 
         $mail->Port = 465;                                   

        $mail->From = 'intershipc@gmail.com';//company
        $mail->FromName = 'intership company';

        $mail->addAddress($_POST['email'], 'abanoub');
         $mail->AddReplyTo('intershipc@gmail.com','intership');
        $mail->isHTML(true);

        $mail->Subject ='log in ';
        $mail->Body ="we need from you to make log in from and to able to sign";     //"<i>Mail body in HTML</i>";
    
        $mail->send();
        	
       
    }
     catch (Exception $e) {
        // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

 }
}
}