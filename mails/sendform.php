<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zwealth_calc";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['infoform_name'];
        $email = $_POST['infoform_email'];
        $phone = $_POST['infoform_phone'];
        $ip_address = $_SERVER['REMOTE_ADDR'];

        // Check for duplicate email
        $stmt = $conn->prepare("SELECT COUNT(*) FROM customers WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $emailCount = $stmt->fetchColumn();

        // Check for duplicate phone
        $stmt = $conn->prepare("SELECT COUNT(*) FROM customers WHERE phone = :phone");
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
        $phoneCount = $stmt->fetchColumn();

        if ($emailCount > 0) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">This email is already with us. No need to submit again or please use a different email.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif ($phoneCount > 0) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">This number is already with us. No need to submit again or please use a different phone number.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } else {
            $stmt = $conn->prepare("INSERT INTO customers (name, email, phone, ip_address) VALUES (:name, :email, :phone, :ip_address)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':ip_address', $ip_address);

            if ($stmt->execute()) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Data sent successfully!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Failed to send data. Please try again.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }
    }
} catch(PDOException $e) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Error: ' . $e->getMessage() . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

}
$conn = null;
?>