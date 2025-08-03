<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'customer db');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Pagination and search setup
$limit = 10; // records per page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

$start = ($page - 1) * $limit;

// Search condition
$searchQuery = "";
if (!empty($search)) {
    $search = $conn->real_escape_string($search);
    $searchQuery = "WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR city LIKE '%$search%' OR country LIKE '%$search%'";
}

// Count total records
$countSql = "SELECT COUNT(*) as total FROM customers $searchQuery";
$countResult = $conn->query($countSql);
$totalRecords = $countResult->fetch_assoc()['total'];

$totalPages = ceil($totalRecords / $limit);

// Fetch records
$sql = "SELECT * FROM customers $searchQuery ORDER BY id ASC LIMIT $start, $limit";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Customer List with Pagination and Search</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
        }

        .pagination a {
            padding: 8px 12px;
            text-decoration: none;
            border: 1px solid #000;
            margin: 0 2px;
        }

        .pagination a.active {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body>

    <h2>Customer List</h2>

    <form method="GET" action="">
        <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>"
            placeholder="Search customers">
        <button type="submit">Search</button>
        <a href="customers.php"><button type="button">Reset</button></a>
    </form>

    <br>

    <table>
        <thead>
            <tr>
                <th>Serial No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Country</th>
                <th>Mobile Number</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $serial = $start + 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$serial}</td>";
                    echo "<td>{$row['first_name']}</td>";
                    echo "<td>{$row['last_name']}</td>";
                    echo "<td>{$row['city']}</td>";
                    echo "<td>{$row['country']}</td>";
                    echo "<td>{$row['mobile_number']}</td>";
                    echo "<td>{$row['created_at']}</td>";
                    echo "</tr>";
                    $serial++;
                }
            } else {
                echo "<tr><td colspan='7' style='text-align:center;'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <br>

    </table>

<br>

<br>

<!-- Pagination Links -->
<div class="pagination">
    <?php
    if ($totalPages > 1) {
        // Previous Button
        if ($page > 1) {
            echo '<a href="?page='.($page-1).($search ? '&search='.urlencode($search) : '').'">Previous</a>';
        }

        // Number Buttons
        for ($i = 1; $i <= $totalPages; $i++) {
            $active = ($i == $page) ? 'active' : '';
            echo "<a class='$active' href='?page=$i".($search ? "&search=".urlencode($search) : "")."'>$i</a>";
        }

        // Next Button
        if ($page < $totalPages) {
            echo '<a href="?page='.($page+1).($search ? '&search='.urlencode($search) : '').'">Next</a>';
        }
    }
    ?>
</div>


</body>
</html>

<?php
$conn->close();
?>