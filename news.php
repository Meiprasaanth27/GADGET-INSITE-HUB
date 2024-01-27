<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/gadget/mystyle.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .reviews {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd; /* Add a border for better separation */
            border-radius: 10px; /* Optional: Add border-radius for rounded corners */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* Add a background color to header cells */
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #f2f2f2; /* Optional: Add a background color to the footer */
            border-top: 1px solid #ddd; /* Optional: Add a border at the top of the footer */
        }
    </style>
    <title>News - Gadget Review Website</title>
</head>

<body>
    <header>
        <!-- Your header content here -->
    </header>
    
    <div class="reviews">
        <section>
            <h2><u>NEWS - TIME TO KNOW THE TREND</u></h2>

            <table>
                <tr>
                    <th>TITLE</th>
                    <th>CONTENT</th>
                </tr>

                <?php
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "news_dataentry";

                // Create a connection
                $conn = new mysqli($host, $username, $password, $dbname);

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch news from the 'news' table
                $result = $conn->query("SELECT * FROM news");

                // Display news in a table
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["TITLE"] . "</td>";
                        echo "<td>" . $row["CONTENT"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No news available</td></tr>";
                }

                // Close the connection
                $conn->close();
                ?>
            </table>
        </section>
    </div>

    <footer>
        <p>&copy; MSV TECH Gadgets Review Team</p>
    </footer>
</body>

</html>
