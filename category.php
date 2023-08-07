

<?php
    include 'header.php';
?>

<form action="search.php" method="POST">

<?php  $searchFeatureTbl="general_data";?>


   
<input type="hidden" name="searchBy" 
        value=<?php echo mysqli_real_escape_string($conn,$_POST['searchBy'])?>
        placeholder=<?php echo mysqli_real_escape_string($conn,$_POST['searchBy'])?>
>

<dev>    
    <label for="searchFeacherBy">Search by the feature</label>      
        <select name="searchFeacherBy" id="searchFeacherBy" class="outputStyle">
        
                <?php
                    $searchFeatureTbl="general_data";
                    $result = mysqli_query($conn,"DESCRIBE $searchFeatureTbl"); 
                    echo "<tr>";
                    while ($header = mysqli_fetch_array($result)) {?>
                    <option value= <?php echo $header['Field']?>><?php echo $header['Field']?></option>
                    <?php
                    }?>
        
        </select>
        
</dev>
<label for="Search">Enter the value</label> 
<input type="text" name="search" placeholder="Search">
   <dev>
        <label for="searchOnTbl">Search on </label>
            <select name="searchOnTbl" id="searchOnTbl" class="outputStyle">
            
                <option value="img_c_morphology_7">color morphology after 7 days</option>
                <option value="img_c_morphology_14">color morphology after 14 days</option>
                <option value="img_gel_mat">gel mat</option>
                <option value="img_microscopic_characters">microscopic characters</option>
            </select>
    </dev>

    
    


    <button type="submit" name="submit-search">Search</button>
    </form>
</body>   
</html>