<?php 
include("../Ajax/inc/inc/connect.inc");
$lop = $_GET['lop'];

$sql = "SELECT * FROM sinhvien WHERE lop = '$lop'";
$rs = mysqli_query($con, $sql);

if ($rs) {
    $str = "<table>
    <tr class='hd'>
    <td>TT</td>
    <td>Ma So</td>
    <td>Ho Ten</td>
    <td>Dia Chi</td>
    </tr>";
    $tt = 1;
    
    while ($row = mysqli_fetch_array($rs)) {
        $str .= "<tr>
        <td>{$tt}</td>
        <td>{$row['masv']}</td>
        <td>{$row['hoten']}</td>
        <td>{$row['diachi']}</td>
        </tr>";
        $tt++;
    }
    
    $str .= "</table>";
    echo $str;
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>