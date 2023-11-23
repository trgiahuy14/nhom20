<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybds_040320";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT * FROM full_contract";
$result = $conn->query($sql);

// Check for errors in the query
if (!$result) {
    die("Query failed: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hợp đồng - nhóm 20</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div id="header">
        <div class="logo">
            <img src="assets/img/download.png" alt="Logo">
        </div>
    </div>
    
    <div id="nav">
        <ul>
            <li><a href="#">Xem danh sách hợp đồng</a></li>
            <li><a href="">Thêm hợp đồng</a></li>
        </ul>
    </div>
  
    <div id="content">
        <div class="container">
            <div class="content-heading">
                <h1>Xem danh sách hợp đồng</h1>
            </div>

            <div class="content-item">
                <button class="btn-add"><a href="/themhopdong.html">Thêm+</a></button>
            </div>
            
            <div class="contract-list">
                <table class="table table-light table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Full_Contract_Code</th>
                            <th>Customer_Name</th>
                            <th>Year_Of_Birth</th>
                            <th>SSN</th>
                            <th>Customer_Address</th>
                            <th>Mobile</th>
                            <th>Property_ID</th>
                            <th>Date_Of_Contract</th>
                            <th>Price</th>
                            <th>Deposit</th>
                            <th>Remain</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row["ID"]."</td>";
                                echo "<td>".$row["Full_Contract_Code"]."</td>";
                                echo "<td>".$row["Customer_Name"]."</td>";
                                echo "<td>".$row["Year_Of_Birth"]."</td>";
                                echo "<td>".$row["SSN"]."</td>";
                                echo "<td>".$row["Customer_Address"]."</td>";
                                echo "<td>".$row["Mobile"]."</td>";
                                echo "<td>".$row["Property_ID"]."</td>";
                                echo "<td>".$row["Date_Of_Contract"]."</td>";
                                echo "<td>".$row["Price"]."</td>";
                                echo "<td>".$row["Deposit"]."</td>";
                                echo "<td>".$row["Remain"]."</td>";
                                echo "<td>".$row["Status"]."</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='13'>0 results</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>    
        </div>
    </div>

  <div id="footer">
    <p>@copyright by team 20</p>
  </div>

</body>

<?php
// Close the connection
$conn->close();
?>

</html>
