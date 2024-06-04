3<?php
include("dbconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
       
</head> 
<body>
    <h2>TODO List Application</h2>
    <div class="container">
        
        <form action="action.php" method="post">
            <div class="input-container">
                <input type="text" class="inputBox" name="note" placeholder="Add note" >
                <button type="submit" name="addNote" class="add">Add</button>
        </form>
            </div>
                <ul class="list">
                    <?php
                    $itemList = get_items();
                    while($row=$itemList->fetch_assoc()){

                    

                    ?>
                    <li class="item">
                        <P><?php echo $row["item"];?></P>
        <form action="action.php" method="post">
            <div class="icon-container">
                
                <li>
                    <button type="submit" name="check" id="check" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-circle-check"></i></i></button>
            
                </li>
            </div>
        </form>
        <form action="action.php" method="post">
            <div class="icon-container">
                <li>
                <button type="submit" name="delete" id="delete" value="<?php echo $row["id"];?>"><i class="fa-solid fa-trash"></i></button>

                </li>
               
            </div>
        </form>
                       
                        

                        
                    </li>
                    <?php } ?>
                </ul>
                <hr>
                </div>
                <ul class="list">
                    <?php
                    $itemList = get_items_checked();
                    while($row=$itemList->fetch_assoc()){

                    

                    ?>
                    <li class="item">
                        <P><?php echo $row["item"];?></P>
                        <form action="action.php" method="post">
                            <div class="icon-container">
                

                               
                                <button type="submit" name="delete" id="delete" value="<?php echo $row["id"];?>"><i class="fa-solid fa-trash"></i></button>
                    </li>
                        <?php } ?>

                </div>
       
    </div>
    <script src="https://kit.fontawesome.com/f17f5b3bd9.js" crossorigin="anonymous"></script>
</body>
</html>