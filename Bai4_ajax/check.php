<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php 
    session_start();
    require("connect.php");
    $us =$_GET["user"];
    $pw =$_GET["pass"];
    $sql = "select * from sinhvien where masv='{$us}' and matkhau='{$pw}'";
    mysqli_query($con, "SET NAME 'utf8'");
    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs)> 0){
        $row = mysqli_fetch_array($rs);
        $_SESSION["code"]=$row['masv'];
        $_SESSION['info']=$us." - ".$row["hoten"]." - ".$row["lop"];
        echo $us." - ".$row["hoten"]."&nbsp;|&nbsp;<a href=QLSV.php>Next<a>";}
    else{
        echo "ban nhap thong tin sai!";
        mysqli_free_result($rs);
        mysqli_close($con);
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>