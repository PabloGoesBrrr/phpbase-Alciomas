<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // Set session variables
    $_SESSION["favcolor"] = "pink";
    $_SESSION["favanimal"] = "dog";
    $_SESSION["name"] = "Pablo ALberto";
    
    echo "Session variables are set.";
?>

</body>
</html>