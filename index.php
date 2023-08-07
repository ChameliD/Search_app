

<?php
    include 'header.php';
?>
<div class="form-container">
<form action="search.php" method="POST">




   
<input type="hidden" name="searchBy" 
        value="general_data"
        placeholder="general_data"
>

<dev >    
    <label for="searchFeacherBy">Search by feature</label>    
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

<label for="Search" class="padding">Enter the value </label> 
<input type="text" name="search" placeholder="Search">

</br>
</br>
   <dev>
        <label for="searchOnTbl" class="lable-box">Search Images on </label>
            <select name="searchOnTbl" id="searchOnTbl" class="outputStyle">
            
                <option value="img_c_morphology_7">color morphology after 7 days</option>
                <option value="img_c_morphology_14">color morphology after 14 days</option>
                <option value="img_gel_mat">gel mat</option>
                <option value="img_microscopic_characters">microscopic characters</option>
            </select>
    </dev>
</br>
</br>

    
    <div class="search-box"><button type="submit" name="submit-search">Search</button></class>
    </form>
</div>
</div>

<div><p class="subtitles">Features and values that you can select are as follows.</p></div>
</br>

</body>   
</html>