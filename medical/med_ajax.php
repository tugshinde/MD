<?php
$con = mysqli_connect("localhost", "root", "", "medicine_drawer_db") or die("database error ...");

$pid = isset($_POST['pur_id']) ? (int)$_POST['pur_id'] : 0;


// Use prepared statement to avoid SQL injection
$stmt = mysqli_prepare($con, "SELECT p.*, m.*, c.*, d.* FROM purchase p
                                LEFT JOIN medicine_info m ON p.mediid = m.ID
                                LEFT JOIN catagory_name c ON m.catagory = c.ID
                                LEFT JOIN disease_name d ON m.disease = d.ID
                                WHERE p.ID = ?");
mysqli_stmt_bind_param($stmt, "i", $pid);
mysqli_stmt_execute($stmt);

$res = mysqli_stmt_get_result($stmt);

if (!$res) {
    echo "MySQL Error: " . mysqli_error($con);
} else {
    $row = mysqli_fetch_assoc($res);

    if ($row) {
        // Retrieve the company name directly
        $company_info = mysqli_query($con, "SELECT name FROM brand_name WHERE ID = (SELECT company FROM medicine_info WHERE ID = '".$row['mediid']."')");
        $company_row = mysqli_fetch_assoc($company_info);

        // Retrieve the category name directly
        $category_info = mysqli_query($con, "SELECT name FROM catagory_name WHERE ID = (SELECT catagory FROM medicine_info WHERE ID = '".$row['mediid']."')");
        $category_row = mysqli_fetch_assoc($category_info);

        // Retrieve the disease name directly
        $disease_info = mysqli_query($con, "SELECT name FROM disease_name WHERE ID = (SELECT disease FROM medicine_info WHERE ID = '".$row['mediid']."')");
        $disease_row = mysqli_fetch_assoc($disease_info);

        $company = isset($company_row['name']) ? $company_row['name'] : "N/A";
        $category = isset($category_row['name']) ? $category_row['name'] : "N/A";
        $disease = isset($disease_row['name']) ? $disease_row['name'] : "N/A";

        $sumw = mysqli_query($con, "SELECT SUM(quantity) FROM purchase WHERE mediid='" . $row['mediid'] . "'");
        $sum = mysqli_fetch_row($sumw);

        echo "
        <p>Company - $company</p><input type='hidden' value='$company' id='' name='cid'>
        <p>Category - $category</p><input type='hidden' value='$category' id='' name='cat'>
        <p>Disease - $disease</p>
        <p>Price - " . $row['pprice'] . "</p><input type='hidden' value='" . $row['pprice'] . "' id='price' name='price'>
        <p>Expire on - " . $row['expiry_date'] . "</p><input type='hidden' value='" . $row['expiry_date'] . "' id='' name='edate'>
        <p>Stock for this Expire Date  - " . $row['quantity'] . "</p>

        <p ><h4 style='color:orange'>Total Stock  - " . $sum[0] . "</h4></p> <input type='hidden' value='" . $row['pprice'] . "' id='' name='tot'>
        ";
    } else {
        echo "No purchase record found for ID: $pid";
    }
}

// Close the statement
mysqli_stmt_close($stmt);
?>
