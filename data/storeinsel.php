<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from storein";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>入库编号</th>
    <th>装备编号</th>
    <th>生产日期</th>
    <th>装备单价</th>
    <th>装备数量</th>
    <th>仓库编号</th>
    <th>验收人</th>
    <th>经办人</th>
    <th>入库时间</th>
    <th>备注</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['SiId'] . "</td>";
  echo "<td>" . $row['Zbid'] . "</td>";
  echo "<td>" . $row['MakeDate'] . "</td>";
  echo "<td>" . $row['Zbprice'] . "</td>";
  echo "<td>" . $row['Zbnum'] . "</td>";
  echo "<td>" . $row['Sid'] . "</td>";
  echo "<td>" . $row['RynameI'] . "</td>";
  echo "<td>" . $row['Ryname'] . "</td>";
  echo "<td>" . $row['OptDate'] . "</td>";
  echo "<td>" . $row['Memo'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>