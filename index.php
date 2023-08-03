<?php
    include 'header.php';
?>

    <form action="category.php" method="POST">
        
        <label for="searchBy">Search by</label>
            <select name="searchBy" id="searchBy">
                <option value="color_7_days_old">color_7_days_old</option>
                <option value="color_14_days_old">color_14_days_old</option>
                <option value="general_data">general_data</option>
            </select>

        <button type="submit" name="submit-search">Search</button>
    </form>
</body>   
</html>