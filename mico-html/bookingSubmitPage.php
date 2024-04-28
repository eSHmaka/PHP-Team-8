<?php include "./components/header.php"; ?>

    <section class="submited_section">
    <?php
// all POST variables are set
if (
    isset($_POST["patient_name"]) &&
    isset($_POST["doctor_name"]) &&
    isset($_POST["department_name"]) &&
    isset($_POST["phone_number"]) &&
    isset($_POST["symptoms"]) &&
    isset($_POST["date"])
) {
    // Retrieve form data
    $patient_name = $_POST["patient_name"];
    $doctor_name = $_POST["doctor_name"];
    $department_name = $_POST["department_name"];
    $phone_number = $_POST["phone_number"];
    $symptoms = $_POST["symptoms"];
    $date = $_POST["date"];

    // Output the form data
    echo "<p><strong>Patient Name:</strong> $patient_name</p>";
    echo "<p><strong>Doctor Name:</strong> $doctor_name</p>";
    echo "<p><strong>Department Name:</strong> $department_name</p>";
    echo "<p><strong>Phone Number:</strong> $phone_number</p>";
    echo "<p><strong>Symptoms:</strong> $symptoms</p>";
    echo "<p><strong>Date:</strong> $date</p>";
    echo "<h1>ჯავშანი მიღებულია</h1>";
}
?>
    </section>

    <?php include "./components/footer.php"; ?>