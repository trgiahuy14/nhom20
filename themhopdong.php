<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nhóm 20</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #169bd5;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    form {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    input[type="date"] {
      /* Additional styling for date input */
      -webkit-appearance: none;
      appearance: none;
      padding: 8px;
    }

    button {
      background-color: #169bd5;
      color: #fff;
      padding: 10px;
      border: none;
      cursor: pointer;
      width: 100%;
      box-sizing: border-box;
    }

    .footer-container{
      margin-top: 10em;
      padding: 0 2em;
      background-color: white;
    }

    .text-center{
      text-align: center;
      margin-bottom: 1em;
    }

    /* Add more styling as needed */
  </style>
</head>
<body>

  <header>
    <h1>Contract Management</h1>
  </header>

  <form action="taohd.php" method="post">
    <h2 class='text-center'>Add Contract</h2>
    <label for="Customer_Name">Customer Name:</label>
    <input type="text" id="Customer_Name" name="Customer_Name" required>

    <label for="Year_Of_Birth">Year of Birth:</label>
    <input type="text" id="Year_Of_Birth" name="Year_Of_Birth" required>

    <label for="SSN">SSN:</label>
    <input type="text" id="SSN" name="SSN" required>

    <label for="Customer_Address">Customer Address:</label>
    <input type="text" id="Customer_Address" name="Customer_Address" required>

    <label for="Mobile">Mobile:</label>
    <input type="text" id="Mobile" name="Mobile" required>

    <label for="Property_ID">Property ID:</label>
    <input type="text" id="Property_ID" name="Property_ID" required>

    <label for="Date_Of_Contract">Date of Contract:</label>
    <input type="date" id="Date_Of_Contract" name="Date_Of_Contract" required>

    <label for="Price">Price:</label>
    <input type="text" id="Price" name="Price" required>

    <label for="Deposit">Deposit:</label>
    <input type="text" id="Deposit" name="Deposit" required>

    <label for="Remain">Remain:</label>
    <input type="text" id="Remain" name="Remain" required>

    <label for="Status">Status:</label>
    <input type="text" id="Status" name="Status" required>

    <button type="submit" name="add_contract">Add Contract</button>
  </form>

  <div class="container-fluid footer-container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
      <div class="col mb-3">
        <p class="text-body-secondary">Copyright © 2007 - 2023 Perfectproperty.com.vn</p>
        <p>Giấy ĐKKD số 0123456789 do Sở KHĐT TP Hà Nội cấp lần đầu ngày 10/10/2023</p>
        <p>Giấy phép thiết lập trang thông tin điện tử tổng hợp trên mạng số 191/GP-TTĐT do Sở TTTT Hà Nội cấp ngày 13/10/2023</p>
      </div>

      <div class="col mb-3">
        <p class="text-body-secondary">Chịu trách nhiệm nội dung GP ICP: Ông Lê Phạm Minh Tài</p>
        <p>Chịu trách nhiệm sàn GDTMĐT: Ông Hà Trung Hiếu</p>
        <p>Quy chế, quy định giao dịch có hiệu lực từ 08/08/2023</p>
        <p>Ghi rõ nguồn "Perfectproperty.com.vn" khi phát hành lại thông tin từ website này.</p>
      </div>
     
    </footer>
  </div>

</body>
</html>

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
    // Retrieve form data (adjust field names based on your form)
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

    // SQL query to insert data into the database (adjust table and field names)
    $sql = "INSERT INTO full_contract (Customer_Name, Year_Of_Birth, 
    SSN, Customer_Address, Mobile, Property_ID, Date_Of_Contract, Price, Deposit, Remain, 
    Status) VALUES ('$Customer_Name', '$Year_Of_Birth', '$SSN', '$Customer_Address', '$Mobile', '$Property_ID', '$Date_Of_Contract', '$Price', '$Deposit', '$Remain', '$Status')";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Redirect to qlhd.php
        header("Location: index.php");
        exit(); // Make sure to exit after a header redirect
    } else {
        echo "Error adding contract: " . $conn->error;
    }
}

$conn->close();
?>
