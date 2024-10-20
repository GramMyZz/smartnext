<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
<nav>
    <div class="Top">
        <div class="add">
            <h2>YOUR SMART HOME CONTROL</h2>
        </div>
        <div class="main">
            <div class="home">
                <img src="home_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.png" alt="คำอธิบายของรูปภาพ" class="image">
            </div>
            <div class="setting">
                <img src="settings_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.png" alt="คำอธิบายของรูปภาพ" class="image">
            </div>
        </div>
    </div>
</nav> 
<div class="all">
    <div class="left">
        <div class="smart"></div>
    </div>
    <div class="center">
        <div class="home"></div>
        <div class="setting"></div>
    </div>
    <div class="right">
        <div class="info">
            <div class="title"></div>
            <div class="main"></div>
        </div>
    </div>
</div>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "home";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่ามีการส่งคำขอ POST มาหรือไม่
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // ดำเนินการเมื่อได้รับคำขอ POST
    // ตัวอย่างการดึงข้อมูล
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        echo "Received: " . $data; // แสดงข้อมูลที่ได้รับ

        // คุณสามารถบันทึกข้อมูลลงฐานข้อมูลได้ที่นี่ถ้าต้องการ
        // $sql = "INSERT INTO your_table (your_column) VALUES ('$data')";
        // $conn->query($sql);
    } else {
        echo "No data received.";
    }
} else {
    echo "Request method is not POST.";
}

$conn->close(); // ปิดการเชื่อมต่อ
?>
