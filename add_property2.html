<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homewize - Real Estate</title>
    <link rel="stylesheet" href="styles1.css">
    <style>
        /* Additional CSS for property card */
        .property {
            border: 2px solid #0e0d0d; /* Add a border for better visualization */
            padding: 20px; /* Add padding to provide space around the content */
            margin-bottom: 20px; /* Add margin to separate each property card */
            width: 300px;
            border-radius: 10px;
        }
        .property h3 {
            margin-top: 0;
        }
        .property p {
            font-weight:bolder;
            font-size:small;
            margin: 5px 0;
            font-size: large;
        }
        .property img {
            max-width: 100%; /* Ensure images don't exceed container width */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Prevent any extra space caused by baseline alignment */
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Homewize - Real Estate</h1>
    </header>
    
    <main>
        <section id="addProperty">
            <?php
            session_start();
            include("db1.php");

            // Function to retrieve property data from the database
            function getPropertyData($con) {
                $query = "SELECT * FROM listing";
                $result = mysqli_query($con, $query);
                $properties = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $properties[] = $row;
                }
                return $properties;
            }

            // Check if form is submitted
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $PropertyImage = $_POST['PropertyImage'];
                $PropertyDescription = $_POST['PropertyDescription'];
                $OwnersName = $_POST['OwnersName'];
                $OwnersContact = $_POST['OwnersContact'];
                $PropertyType = $_POST['PropertyType'];
                $Location = $_POST['Location'];

                if (!empty($PropertyDescription) && !empty($OwnersName)) {
                    // Handle file upload
                    $targetDir = "uploads/";
                    $targetFile = $targetDir . basename($_FILES["propertyImage"]["name"]);
                    move_uploaded_file($_FILES["propertyImage"]["tmp_name"], $targetFile);

                    $query = "INSERT INTO listing (PropertyImage, PropertyDescription, OwnersName, OwnersContact, PropertyType, Location) 
                             VALUES ('$targetFile','$PropertyDescription', '$OwnersName', '$OwnersContact', '$PropertyType', '$Location')";
                    mysqli_query($con, $query);
                    echo "<script type='text/javascript'> alert('Property Listed Successfully!!')</script>";
                } else {
                    echo "<script type='text/javascript'> alert('Please Enter Some Valid Information!!')</script>";
                }
            }

            // Retrieve property data
            $properties = getPropertyData($con);
            ?>
            <h2>Add Property</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="propertyImage">Property Image:</label>
                    <input type="file" id="propertyImage" name="propertyImage" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="propertyDescription">Property Description:</label>
                    <textarea id="propertyDescription" rows="4" name="PropertyDescription" required></textarea>
                </div>
                <div class="form-group">
                    <label for="ownerName">Owner's Name:</label>
                    <input type="text" id="ownerName" name="OwnersName" required>
                </div>
                <div class="form-group">
                    <label for="ownerContact">Owner's Contact:</label>
                    <input type="tel" id="ownerContact" name="OwnersContact" required>
                </div>
                <div class="form-group">
                    <label for="propertyType">Property Type:</label>
                    <input type="text" id="propertyType" name="PropertyType">
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="Location">
                </div>
                <button type="submit">Add property</button>
                <button id="logoutButton">Logout</button>
            </form>
        </section>
        
        <section id="sell">
            <h2>Sell:</h2>
            <div id="propertyList">
                <?php foreach ($properties as $property) { ?>
                    <div class="property">
                        <p>Property Image:
                        <img src="<?php echo $property['PropertyImage']; ?>" alt="Property Image"></p>
                        <p>Property Description:</p><?php echo $property['PropertyDescription']; ?>
                        <p>Owner's Name:</p><?php echo $property['OwnersName']; ?>
                        <p>Owner's Contact:</p><?php echo $property['OwnersContact']; ?>
                        <p>Property Type:</p><?php echo $property['PropertyType']; ?>
                        <p>Location:</p><?php echo $property['Location']; ?>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>

    <script>
        document.getElementById("logoutButton").addEventListener("click", function() {
            window.location.href = "index.php";
        });
    </script>
</body>
</html>
