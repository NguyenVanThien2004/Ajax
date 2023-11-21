<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OOP with PHP</title>
<link href="style/style.css" rel="stylesheet"></link>
</head>
<body>
<h1>OOP with PHP</h1>
<select id="chon" onChange="ajax();">
  <option value="">Chọn Bảng</option>
  <option value="giaovien">Giáo viên</option>
  <option value="sinhvien">Sinh viên</option>
  <option value="hocphan">Học phần</option>
</select>
<script>
function ajax() {
  var obj = document.getElementById("info");
  obj.style.display = "block";
  var value = document.getElementById("chon").value; // Declare 'value' variable
  var xml = new XMLHttpRequest();
  xml.onreadystatechange = function() { // Corrected syntax here
    if (xml.readyState == 4 && xml.status == 200) { // Check for successful response
      obj.innerHTML = xml.responseText;
    }
  };
  var url = "showTable.php?chon=" + value;
  xml.open("GET", url, true); // Set the third parameter to true for asynchronous request
  xml.send();
}
</script>
<hr>
<div id="info" style="display:none;"></div>
</body>
</html>
