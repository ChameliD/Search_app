<?php
    include 'header.php';
?>

<h1>Search Page</h1>

<div class="article-container">
<?php
    if(isset($_POST['submit-search']))
    {
        $search=mysqli_real_escape_string($conn,$_POST['search']);
        $sql="SELECT * FROM img_c_morphology_7 WHERE strain LIKE '%$search'";
        $result=mysqli_query($conn,$sql);
        $queryResult=mysqli_num_rows($result);

        if($queryResult>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
               /* echo "<div class='article-box'>
                        <h3>".$row['i1']."</h3>
                    </div>";*/
                    if(!empty($row['i1'])){
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['i1']).'"/>';

                    }
                    if(!empty($row['i2'])){
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['i2']).'"/>';

                    }
                    if(!empty($row['i3'])){
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['i3']).'"/>';

                    }
                    if(!empty($row['i4'])){
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['i4']).'"/>';

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