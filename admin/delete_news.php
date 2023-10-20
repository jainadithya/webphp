<?php
    include 'connection.php';			// establishes db connection

    /* Delete PHP Function */
    if(isset($_GET["newsID"])){
        $news_id = $_GET["newsID"];		// retrieves the value of 'news_id'

        $delete_news_query = "DELETE FROM news WHERE newsID = '$newsID'";		// query to delete from newsID
        $sql_run = mysqli_query($con, $delete_news_query);

        if($sql_run){
            echo "<script>alert('News Successfully Deleted')</script>";		// displays a JavaScript alert indicating successful deletion of news
            echo "<script>window.location.href='news.php'</script>";		// redirects the user to the 'news.php' page using JavaScript
        }
        else{
            echo "<script>alert('News Not Deleted')</script>";				// displays a JavaScript alert indicating that the news was not deleted
            echo "<script>window.location.href='news.php'</script>";		// redirects the user to the 'news.php' page using JavaScript
        }
    }
    /* End of Delete PHP Function */
?>