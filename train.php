<?php
    $DATE = date("Y-m-d");





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>   
<body>
    

<form id="form" action="">
    <div class="start">
    <label for="start">Start date:</label>
    <input type="date" id="start" name="trip-start" 
           value="<?php echo $DATE ?>"
           value="<?php echo $DATE ?>" max="2022-07-30">
</div>
    
    <div class="end">
    <label for="start">End date:</label>
    <input type="date" id="start" name="trip-start"
            value="<?php echo $DATE ?>"
            min="<?php echo $DATE ?>" max="2022-07-30">
</div>
<div>
    <button class="btn"
        type="submit">
        Submit date
    </button>
</div>

</form>
</body>

</html>
