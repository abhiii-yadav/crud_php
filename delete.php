<?php include 'header.php'; 
if(isset($_POST['deletebtn'])){
    include "config.php";
    $stu_id = $_POST['sid'];

    $sql = "DELETE FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("query unsuccessful");

    header("Location: http://localhost:8080/crud/index.php");

    mysql_close($conn);
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid"/>
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
<div id="footer">
    Abhishek@copyright 08-08-2024.
</div>

</div>
</body>
</html>
