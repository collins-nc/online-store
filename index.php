<?php
    require "head.php";
?>
<body>

    <?php
    
        if(!isset($_SESSION['username']) || !isset($_SESSION['userid'])){
            include "signup.page.php";
            
        }

        header("Location: content.page.html");
    ?>

</body>
</html>




