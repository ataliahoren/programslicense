<?php
session_start();
exportMysqlToCsv('Export_Projects_without_licences.csv');	
// export csv
function exportMysqlToCsv($filename = 'export_csv_Expier.csv')
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
	
				$sql = "SELECT projects_219.pName,
						projects_219.pID,
						projects_219.StartDate,
						projects_219.EndDate,
						projects_219.Client,
						projects_219.Country,
						projects_219.Comments,
						projects_219.Status,
						licenses_proj_219.lcID, 
						licenses_proj_219.lcAmount, 
						licenses_proj_219.pID, 
						licenses_proj_219.pAmount 
						FROM projects_219
						join licenses_proj_219 ON projects_219.pID = licenses_proj_219.pID 
						WHERE licenses_proj_219.lcID = 0 AND licenses_proj_219.pAmount = 0 ";
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