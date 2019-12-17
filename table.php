<html>
<head>
<title>
Grid system
</title>
<head>
<script>
    $(document).ready(function ()
    {
        $("<td>").click(function ()
        {
            var baseurl = '<?php echo base_url(); ?>'
            $.ajax({
                url: baseurl + "index.php",
                data: {grid_id: grid_id},
                type: 'POST',
                success: function (data)
                {
                    var dateo = data;
                    if (dateo == 'Yes')
                    {
                        alert("Update sucessfully");

                    }
                }
            });
        });
    });
</script>
</head>
<body>
<table border="2">
<?php
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("grid",$connect);
$sql = "SELECT * FROM `table` WHERE 1"; 
$mysqlresult=(mysql_query($sql));
while($row = mysql_fetch_array($mysqlresult))
{

echo "<tr>";
echo "<td  id='article<?php echo $row['col1'] ?>'>".$row['col1'] ."</td>";
echo "<td id='article<?php echo $row['col2'] ?>'>".$row['col2']."</td>";
echo "<td id='article<?php echo $row['col3'] ?>'>".$row['col3']."</td>";
echo "<td id='article<?php echo $row['col4'] ?>'>".$row['col4']."</td>";
echo "<td id='article<?php echo $row['col5'] ?>'>".$row['col5']."</td>";
echo "<td id='article<?php echo $row['col6'] ?>'>".$row['col6']."</td>";
echo "<td id='article<?php echo $row['col7'] ?>'>".$row['col7']."</td>";
echo "<td id='article<?php echo $row['col8'] ?>'>".$row['col8']."</td>";
echo "</tr>";

}
?>
</table>
</body>
</html>

