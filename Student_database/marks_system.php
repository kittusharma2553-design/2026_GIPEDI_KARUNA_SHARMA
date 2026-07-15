<?php
// 1. DATABASE CONNECTION
$conn = new mysqli("localhost", "root", "", "student_db");

// Connection Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. DATA INSERT LOGIC (Jab button dabega toh SQL me jayega)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_btn'])) {
    $name = $_POST['entry_name'];
    $roll = $_POST['entry_no'];
    $sub_no = $_POST['submission_no'];
    $marks = intval($_POST['mark_record']);
    $total = 100; // Total Marks Fixed
    
    // Grade Logic
    if ($marks >= 90) $grade = "A+";
    else if ($marks >= 75) $grade = "A";
    else if ($marks >= 60) $grade = "B";
    else if ($marks >= 50) $grade = "C";
    else if ($marks >= 33) $grade = "D";
    else $grade = "Fail";

    // SQL me data dalne ki query (Hum 'marks_records' table use kar rahe hain)
    $sql = "INSERT INTO marks_records (entry_name, entry_no, submission_no, marks, marks_record, grade) 
            VALUES ('$name', '$roll', '$sub_no', '$marks', '$total', '$grade')";
    
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Entry Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f9; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 12px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #28a745; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; margin-top: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #f8f9fa; }
    </style>
</head>
<body>

<div class="container">
    <h2>Marks Entry Form</h2>
    
    <!-- Real HTML Form jo SQL tak data bhejega -->
    <form action="" method="POST">
        <div class="form-group">
            <label>Entry Name:</label>
            <input type="text" name="entry_name" required placeholder="Enter student name">
        </div>
        <div class="form-group">
            <label>Entry No.:</label>
            <input type="text" name="entry_no" required placeholder="Enter roll number">
        </div>
        <div class="form-group">
            <label>Submission No.:</label>
            <input type="text" name="submission_no" required placeholder="e.g. s1, s2">
        </div>
        <div class="form-group">
            <label>Mark Record (Out of 100):</label>
            <input type="number" name="mark_record" min="0" max="100" required placeholder="0-100">
        </div>
        
        <button type="submit" name="submit_btn">Submit Record</button>
    </form>

    <!-- Display Table: Ye data seedhe SQL Database se khinch kar dikhayega -->
    <table>
        <thead>
            <tr>
                <th>Entry Name</th>
                <th>Entry No.</th>
                <th>Submission No.</th>
                <th>Mark Record</th>
                <th>Total Marks</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // SQL Database se saara data real-time fetch karke table me dikhana
            $result = $conn->query("SELECT * FROM marks_records ORDER BY id DESC");
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['entry_name']."</td>
                            <td>".$row['entry_no']."</td>
                            <td>".$row['submission_no']."</td>
                            <td>".$row['marks']."</td>
                            <td>".$row['marks_record']."</td>
                            <td><strong>".$row['grade']."</strong></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found in database</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
