<?php 
include("config.php");
	
if(isset($_POST['G_STATE_ID']))
{
    // Sanitize the input to prevent SQL injection
    $state_id = intval($_POST['G_STATE_ID']);

    // Prepare the SQL query using a parameterized statement
    $sql = "SELECT CITY_ID, CITY_NAME FROM city WHERE STATE_ID = ?";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        // Bind the state ID parameter
        $stmt->bind_param("i", $state_id);
        
        // Execute the query
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();

        // Check if there are rows returned
        if ($result->num_rows > 0) {
            // Output the default option for selecting a city
            echo '<option value="">Select City</option>';

            // Output options for each city
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['CITY_ID']}'>{$row['CITY_NAME']}</option>";
            }
        } else {
            // Output a message if no cities are found for the selected state
            echo '<option value="">No cities found</option>';
        }

        // Close the statement
        $stmt->close();
    } else {
        // Handle SQL statement preparation error
        echo "Error preparing SQL statement";
    }
}
?>
