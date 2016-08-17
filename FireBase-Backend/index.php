 
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <head>
 <title>Android Push Notification using FireBase</title>
 </head>
 
 <body>
 
 <h1>Android Push Notification using FireBase</h1>
 
 <form method='post' action='push_notification_select.php'>
 
 <input type='text' name='regtoken' placeholder='Cihaz Token' /><br><br><br>
 <textarea name='message' placeholder='Mesajınızı Giriniz'></textarea><br><br><br>
 
 <button>Notification Gönder</button>
 </form>


 <p>
 <?php
 //if success request came displaying success message 
 if(isset($_REQUEST['success'])){
 echo "<strong>Cool!</strong> Message sent successfully check your device...";
 }
 //if failure request came displaying failure message 
 if(isset($_REQUEST['failure'])){
 echo "<strong>Oops!</strong> Could not send message check API Key and Token...";
 }
 ?>
 </p>
 <div>Total Views <br /><span><?php echo $count; ?></span></div>

 </body>
 
</html>
