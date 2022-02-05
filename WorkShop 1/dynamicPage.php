<!DOCTYPE html>
<title>Static Page</title>
<link rel="stylesheet" href="Style.css" />
<head>
    <div class="header">
        Current date and time
    </div>
</head>
<body>
    <div class="body">
    <?php
    $dateNow = getdate();
    print date("d/m/y"). "<br>";
    print date ("g:i:s/a", time());
    
    ?>
    </div>
</body>