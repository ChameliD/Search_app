

<?php
    include 'header.php';
?>

<form action="search.php" method="POST">

<?php  $searchFeatureTbl=mysqli_real_escape_string($conn,$_POST['searchBy']);?>


   
<input type="hidden" name="searchBy" 
        value=<?php echo mysqli_real_escape_string($conn,$_POST['searchBy'])?>
        placeholder=<?php echo mysqli_real_escape_string($conn,$_POST['searchBy'])?>
>
    <label for="searchFeacherBy">Search by the Feacher</label>       
        <select name="searchFeacherBy" id="searchFeacherBy">
        
                <?php
                    $searchFeatureTbl=mysqli_real_escape_string($conn,$_POST['searchBy']);
                    $result = mysqli_query($conn,"DESCRIBE $searchFeatureTbl"); 
                    echo "<tr>";
                    while ($header = mysqli_fetch_array($result)) {?>
                    <option value= <?php echo $header['Field']?>><?php echo $header['Field']?></option>
                    <?php
                    }?>

        </select>
   
        <label for="searchOnTbl">Search on </label>
            <select name="searchOnTbl" id="searchOnTbl">
                <option value="img_c_morphology_7">img_c_morphology_7</option>
                <option value="img_c_morphology_14">img_c_morphology_14</option>
                <option value="img_gel_mat">img_gel_mat</option>
                <option value="img_microscopic_characters">img_microscopic_characters</option>
            </select>
    
    <label for="Search">Enter the value</label> 
    <input type="text" name="search" placeholder="Search">


    <button type="submit" name="submit-search">Search</button>
    </form>
</body>   
</html>