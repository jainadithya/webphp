<?php
    include 'connection.php';			// establishing connection with db

    if(isset($_POST["add_news"]))		
	{
    $newstitle = $_POST['newstitle'];		// retrieves the value
    $newsdetails = $_POST['newsdetails'];	// retrieves the value
    $newsarticle = $_POST['newsarticle'];	// retrieves the value

    $news_query = "INSERT into news(postTitle, postDetails, postArticle) 
    VALUES('$newstitle','$newsdetails','$newsarticle')";		// query to insert intp table
    $news_query_run = mysqli_query($con, $news_query);

    if($news_query_run)						// if it is true then it displays a success message using JavaScript alert() function and redirects the user to the 'news.php' page
	{
        echo "<script>alert('News Added Successfully')</script>";
        echo "<script>window.location.href='news.php'</script>";
    }
    else									//if it is false then it displays an error message using JavaScript alert() function and redirects the user to the 'news.php' page
	{
        echo "<script>alert('News Not Added')</script>";
        echo "<script>window.location.href='news.php'</script>";
    }
    }
?>