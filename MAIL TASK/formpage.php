<!DOCTYPE html>
<html>
<head>
    <title>MAIL</title>
    <meta charset="UTF-8">
   <style>
    form{

    }
   </style>
</head>
<body>
    <h1>For More Details...Contact</h1>
    
    <form method="post" action="main.php">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>
        
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
        
        <button>Send</button>
    </form>
    
</body>
</html>