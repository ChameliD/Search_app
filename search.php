<?php
    include 'header.php';
?>

<h1 class="subtitles">Search Page</h1>

<div class="article-container">
<?php

$searchFeatureTbl= mysqli_real_escape_string($conn,$_POST['searchBy']);
$resultTbl=mysqli_real_escape_string($conn,$_POST['searchOnTbl']);
$searchFeacher=mysqli_real_escape_string($conn,$_POST['searchFeacherBy']);


    if(isset($_POST['submit-search']))
    {
        $search=mysqli_real_escape_string($conn,$_POST['search']);
        $sql="SELECT * FROM $searchFeatureTbl WHERE $searchFeacher LIKE '$search'";
        $result=mysqli_query($conn,$sql);
        $queryResult=mysqli_num_rows($result);

        if($queryResult>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                

                    $strain=$row['strain'];
                    $sqlMain="SELECT * FROM $resultTbl WHERE strain LIKE '$strain'";
                    $resultmain=mysqli_query($conn,$sqlMain);
                    $queryResultMain=mysqli_num_rows($resultmain);

                   

                    if($queryResultMain>0){
                      
                        while($rowMain = mysqli_fetch_assoc($resultmain))
                        {
                            echo "<div class='article-box'>
                            <h3>".$rowMain['strain']."</h3>
                                </div>";
                            
                            if(empty($rowMain['i1'])){
                                echo"Sorry no images to show";
                            
                            }

                            if(!empty($rowMain['i1'])){
                                $img=base64_encode($rowMain['i1']);
                            
                                echo '<img src="data:image/jpeg;base64,'.$img.'"/ height="500" >';
                                //$img = resize_image(‘/path/to/some/image.jpg’, 200, 200);
                            }
                            if(!empty($rowMain['i2'])){
                                $img=base64_encode($rowMain['i2']);
                            
                                echo '<img src="data:image/jpeg;base64,'.$img.'"/ height="500">';        
                            }
                            if(!empty($rowMain['i3'])){
                                $img=base64_encode($rowMain['i3']);
                            
                                echo '<img src="data:image/jpeg;base64,'.$img.'"/ height="500" >';        
                            }
                            if(!empty($rowMain['i4'])){
                                $img=base64_encode($rowMain['i4']);
                            
                                echo '<img src="data:image/jpeg;base64,'.$img.'"/ height="500" >';        
                            }
                            
                            
                        }
                    }  
            }
        }
        else
        {
            echo "There are no result matching your search!";
        }
    }   
?>
</div>