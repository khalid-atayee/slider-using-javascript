<?php require '__partials/connection.php' ;
$sql_query = "SELECT * FROM slide";
$data = $connection->query($sql_query);
$results = $data->fetch_all(MYSQLI_ASSOC);
$ratingCount = 5;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@100&family=Raleway:wght@300&family=Roboto&family=Stardos+Stencil:wght@400;700&display=swap"
        rel="stylesheet">

</head>


<body>
    

    <div class="slider-container">
        <p><i class="arrow left" onclick="goPrev()" ></i></p>
        <div class="demo">
            <?php foreach ($results as $key=> $result) {
                $count=0;
                
                ?>
                <div class="slider-content" data-id="<?=$key ?>">
                   
                    <img src="images/<?= $result['slider_image']?>" alt="">
                    <div class="slider-text">
                        <h2><?= $result['slider_title'] ?></h2>
                        <div class="rating">
                            <?php 
                            
                             for($counter=0; $counter<$result['rating']; $counter++){
                                echo '<span class="fa fa-star rate checked"></span>';
                             }

                             for($counter=0;$counter<$ratingCount-$result['rating']; $counter++){
                                echo '<span class="fa fa-star rate"></span>';
                             }
                            
                            ?> 

                         
                        </div>
    
                        <p> <?= $result['slider_description'] ?>
                        </p>
                        <div class="hole-btns">
                            <?php if(count($results)){
                                for($counter=0; $counter<count($results); $counter++){?>
                                    <span class='hole' data-id="<?=$counter?>"></span>
                                    <?php
                                }
                            } 
                            ?>
                        </div>
    
                    </div>`
    
                </div>
               
           <?php  }?> 
           
        </div>
        <p> <i class="arrow right arrow-right" onclick="goNext()"></i></p>
    </div>

    <script src="script.js"></script>
</body>

</html>

