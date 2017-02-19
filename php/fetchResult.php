<?php
	require('connect.php');
    $q = $_REQUEST['q'];
	$query = "select * from `SEARCH` where name like '$q%'";
	$res = mysqli_query($connect,$query) or die(mysqli_error($connect));
    $num = mysqli_num_rows($res);
    
    
    echo "<div class='dummy-column full'><h2>Search Results for '$q' - Showing $num Results</h2>";

    while($row=mysqli_fetch_array($res))
    {
        echo "<a class='dummy-media-object' href='".$row['LINK']."'>
                <img class='round' src='".$row['IMAGE']."' alt='founder Image'/>
                <h3>".$row['NAME']."</h3>
             </a>"; 
    }

    echo "</div>";
    
?>