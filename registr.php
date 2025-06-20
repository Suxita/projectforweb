<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Tsu recipes</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>  
    <?php include 'fragments/header.php'; ?>
   
    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
       
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
    
    
        $registration_date = date('Y-m-d H:i:s');
        $user_data = "მომხმარებელი: " . $username . "|პაროლი: " . $password . "| დრო:" . $registration_date . "\n";
        
        $file = fopen("users.txt", "a");
        
        if ($file) {
            if (fwrite($file, $user_data)) {
                echo "<p style='color: green;'>მონაცემები წარმატებით ჩაიწერა!</p>";
            } else {
                echo "<p style='color: red;'>ვერ მოხერხდა ჩაწერა.</p>";
            }
            fclose($file);
        } else {
            echo "<p style='color: red;'>ვერ მოხერხდა ფაილის გახსნა.</p>";
        }
    }
    ?>
    
    <div class="registration-container">
        <div class="registration form">
            <span class="registr-title">Please Register first!</span>
            <form method="POST" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
         
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
       
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
    
    <?php include 'fragments/footer.php'; ?>
   
</body>
</html>