<?php
// upload2.php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "vtu_notes_system";  // New DB

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload VTU PDF & Subject Info</title>
</head>
<body>
<h2>Upload Google Drive PDF Link with Filters + Subject Info</h2>

<form method="post">
    <label>Scheme:</label>
    <input type="text" name="scheme" required><br><br>

    <label>Department:</label>
    <input type="text" name="department" required><br><br>

    <label>Semester:</label>
    <input type="text" name="semester" required><br><br>

    <label>Subject Short Name:</label>
    <input type="text" name="subject" required><br><br>

    <label>Category:</label>
    <select name="category" required>
        <option value="Notes">Notes</option>
        <option value="PYQ's">PYQ's</option>
        <option value="Model Papers">Model Papers</option>
        <option value="Supplementary">Supplementary</option>
        <option value="Syllabus">Syllabus</option>
        <option value="IMP Questions">IMP Questions</option>
        <option value="Lab Manual">Lab Manual</option>

    </select><br><br>

    <label>Module / Year:</label>
    <input type="text" name="module_or_year" required><br><br>

    <label>Subject Full Name:</label>
    <input type="text" name="subject_full_name" required><br><br>

    <label>Subject Code:</label>
    <input type="text" name="subject_code" required><br><br>

    <label>Google Drive PDF Link:</label>
    <input type="url" name="pdf_url" placeholder="Paste Drive link here" required><br><br>

    <input type="submit" name="upload" value="Upload">
</form>

<?php
if (isset($_POST['upload'])) {
    $scheme = $_POST['scheme'];
    $dept = $_POST['department'];
    $sem = $_POST['semester'];
    $sub_name = $_POST['subject'];
    $cat = $_POST['category'];
    $mod = $_POST['module_or_year'];
    $sub_full = $_POST['subject_full_name'];
    $sub_code = $_POST['subject_code'];
    $pdf_drive_link = $_POST['pdf_url'];

    // Save PDF info
    $stmt1 = $conn->prepare("INSERT INTO resources (scheme, department, semester, subject, category, module_or_year, pdf_path) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt1->bind_param("sssssss", $scheme, $dept, $sem, $sub_name, $cat, $mod, $pdf_drive_link);

    // Save subject info
    $stmt2 = $conn->prepare("INSERT INTO sub (scheme, department, semester, subject, category, subject_full_name, subject_code) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt2->bind_param("sssssss", $scheme, $dept, $sem, $sub_name, $cat, $sub_full, $sub_code);

    if ($stmt1->execute() && $stmt2->execute()) {
        echo "<p style='color:green;'>✅ Drive link saved and subject info added successfully!</p>";
    } else {
        echo "<p style='color:red;'>❌ DB Error: " . $stmt1->error . " / " . $stmt2->error . "</p>";
    }
}
?>
</body>
</html>
