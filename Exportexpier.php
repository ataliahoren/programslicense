<?php
session_start();
exportMysqlToCsv('Export_Expier_License.csv');	
// export csv
function exportMysqlToCsv($filename = 'export_csv.csv')
{
	include "configFile.php";
		// call export function
		
				if( isset($_GET['lName']) ){		
				$lNameG = $_GET['lName'];}

		
			$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
				if (!$conn) // Check connection
				{	
				    die("Connection failed: " . mysqli_connect_error());
				}
	
				$days = 60*24*60*60; 
				$expiry = time() + $days;
				$sql = "SELECT licenses_contract_219.lName, 
				licenses_contract_219.lcID,
				licenses_contract_219.cID,				
				licenses_contract_219.Amount, 
				licenses_contract_219.startDate, 
				licenses_contract_219.endDate, 
				licenses_contract_219.File, 
				licenses_contract_219.Comments 
				FROM licenses_contract_219 
				where licenses_contract_219.endDate <  $expiry";

    // Gets the data from the database
    $result = $conn->query($sql);

    $f = fopen('php://temp', 'wt');
    $first = true;
    while ($row = $result->fetch_assoc()) {
        if ($first) {
            fputcsv($f, array_keys($row));
            $first = false;
        }
        fputcsv($f, $row);
    } // end while

    $conn->close();

    $size = ftell($f);
    rewind($f);

    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Length: $size");
	
    // Output to browser with appropriate mime type, you choose ;)
    header("Content-type: text/x-csv");
    header("Content-type: text/csv");
    header("Content-type: application/csv");
    header("Content-Disposition: attachment; filename=$filename");
    fpassthru($f);
    exit;

}
?>