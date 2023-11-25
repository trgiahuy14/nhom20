<<<<<<< HEAD
=======
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

$conn->close();
?>
>>>>>>> ac243ca (final)

<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm hợp đồng
  </title>
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
            <li><a href="index.php">Xem danh sách hợp đồng</a></li>
            <li><a href="#">Thêm hợp đồng</a></li>
        </ul>
    </div>
  
=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm hợp đồng</title>
    <link rel="stylesheet" href="./assets/css/themhopdong.css">
    <link rel="stylesheet" href="./assets/img/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div id="main">

    <div id="main">
            <nav class="navbar">
                    <div class="logo">
                        <a href="/"><img src="./assets/img/logo.png" alt=""></a>
                    </div>
                <div class="nav-menu">
                    <ul>
                        <li ><a href="xemhopdong.php">Xem hợp đồng</a></li>
                        <li class="active"><a href="#">Thêm hợp đồng</a></li>
                    </ul>
                </div>
            
            </nav>
>>>>>>> ac243ca (final)
    <div id="content">
        <div class="container">
            <div class="content-heading">
                <h1>Thêm hợp đồng</h1>
            </div>
<<<<<<< HEAD
  <form action="themhopdong.php" method="post">
    
    <label for="Customer_Name">Customer Name:</label>
    <input type="text" id="Customer_Name" name="Customer_Name" required> 
    <br>
    <label for="Year_Of_Birth">Year of Birth:</label>
    <input type="text" id="Year_Of_Birth" name="Year_Of_Birth" required>
    <br>
    <label for="SSN">SSN:</label>
    <input type="text" id="SSN" name="SSN" required>
    <br>
    <label for="Customer_Address">Customer Address:</label>
    <input type="text" id="Customer_Address" name="Customer_Address" required>
    <br>
    <label for="Mobile">Mobile:</label>
    <input type="text" id="Mobile" name="Mobile" required>
    <br>
    <label for="Property_ID">Property ID:</label>
    <input type="text" id="Property_ID" name="Property_ID" required>
    <br>
    <label for="Date_Of_Contract">Date of Contract:</label>
    <input type="date" id="Date_Of_Contract" name="Date_Of_Contract" required>
    <br>
    <label for="Price">Price:</label>
    <input type="text" id="Price" name="Price" required>
    <br>
    <label for="Deposit">Deposit:</label>
    <input type="text" id="Deposit" name="Deposit" required>
    <br>
    <label for="Remain">Remain:</label>
    <input type="text" id="Remain" name="Remain" required>
    <br>
    <label for="Status">Status:</label>
    <input type="text" id="Status" name="Status" required>
    <br>
    <button type="submit" name="add_contract">Add Contract</button>
  </form>  
        </div>
    </div>

  <div id="footer">
    <p>@copyright by team 20</p>
  </div>

</body>
</html>

=======


            <form action="themhopdong.php" method="post">
    <div class="form-container">
        <div class="form-column">
            <!-- Cột đầu tiên của form -->
            <label for="Customer_Name">Họ và tên khách hàng:</label>
            <input type="text" id="Customer_Name" name="Customer_Name" required>
            <br>
            <label for="Year_Of_Birth">Năm sinh:</label>
            <input type="text" id="Year_Of_Birth" name="Year_Of_Birth" required>
            <br>
            <label for="SSN">Số SSN:</label>
            <input type="text" id="SSN" name="SSN" required>
            <br>
            <label for="Customer_Address">Địa chỉ khách hàng:</label>
            <input type="text" id="Customer_Address" name="Customer_Address" required>
            <br>
            <label for="Mobile">Số điện thoại:</label>
            <input type="text" id="Mobile" name="Mobile" required>
            <br>
        </div>
        <!-- Cột thứ hai -->
        <div class="form-column">
            <label for="Property_ID">Mã bất động sản:</label>
            <input type="text" id="Property_ID" name="Property_ID" required>
            <br>
            <label for="Date_Of_Contract">Ngày hợp đồng:</label>
            <input type="date" id="Date_Of_Contract" name="Date_Of_Contract" required>
            <br>
            <label for="Price">Giá tiền:</label>
            <input type="text" id="Price" name="Price" oninput="formatNumber(this)" required>
            <label for="Deposit">Tiền cọc:</label>
            <input type="text" id="Deposit" name="Deposit" oninput="formatNumber(this)" required>
            <br>
            <label for="Remain">Còn lại:</label>
            <input type="text" id="Remain" name="Remain" oninput="formatNumber(this)" required>
            <br>
            <label for="Status">Trạng thái:</label>
            <input type="text" id="Status" name="Status" oninput="formatNumber(this)" required>
            <br>
        </div>
        <script>
            function formatNumber(input) {
                // Xóa các ký tự không phải số
                let value = input.value.replace(/\D/g, '');
                
                // Định dạng số với dấu chấm ngăn cách hàng nghìn
                value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                // Cập nhật giá trị vào trường input
                input.value = value;
            }
        </script>
    </div>
    <div class="btn-add">
        <button type="submit" name="add_contract">Lưu Hợp Đồng</button>
    </div>
</form>


                

  
        </div>
    </div>

            <div id="footer">
            <p>@copyright by team 20</p>
        </div>
    </div>
    

    
</body>

</html>


>>>>>>> ac243ca (final)
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

if (isset($_POST['add_contract'])) {
<<<<<<< HEAD
    // Retrieve form data (adjust field names based on your form)
=======
    
>>>>>>> ac243ca (final)
    $Customer_Name = isset($_POST['Customer_Name']) ? $_POST['Customer_Name'] : '';
    $Year_Of_Birth = $_POST['Year_Of_Birth'] ?? '';
    $SSN = $_POST['SSN'] ?? '';
    $Customer_Address = $_POST['Customer_Address'] ?? '';
    $Mobile = $_POST['Mobile'] ?? '';
    $Property_ID = $_POST['Property_ID'] ?? '';
    $Date_Of_Contract = $_POST['Date_Of_Contract'] ?? '';
    $Price = $_POST['Price'] ?? '';
    $Deposit = $_POST['Deposit'] ?? '';
    $Remain = $_POST['Remain'] ?? '';
    $Status = $_POST['Status'] ?? '';

<<<<<<< HEAD
    // SQL query to insert data into the database (adjust table and field names)
=======
    
>>>>>>> ac243ca (final)
    $sql = "INSERT INTO full_contract (Customer_Name, Year_Of_Birth, 
    SSN, Customer_Address, Mobile, Property_ID, Date_Of_Contract, Price, Deposit, Remain, 
    Status) VALUES ('$Customer_Name', '$Year_Of_Birth', '$SSN', '$Customer_Address', '$Mobile', '$Property_ID', '$Date_Of_Contract', '$Price', '$Deposit', '$Remain', '$Status')";
    $result = $conn->query($sql);

<<<<<<< HEAD
    // Check if the query was successful
    if ($result) {
        
        header("Location: index.php");
        exit(); // Make sure to exit after a header redirect
=======
   
    if ($result) {
        
        echo "<script>alert('Hợp đồng đã được thêm thành công!'); window.location.href = 'xemhopdong.php';</script>";
        exit(); 
>>>>>>> ac243ca (final)
    } else {
        echo "Error adding contract: " . $conn->error;
    }
}

$conn->close();
?>
<<<<<<< HEAD


=======
>>>>>>> ac243ca (final)
