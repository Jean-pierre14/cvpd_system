<?php
$output = '';
if(!empty($_FILES['excel_file'])){
    $con = mysqli_connect("localhost", "root", "", "cvpd_db") OR die("Cannot be connect to this DB");
    $file_array = explode(".", $_FILES['excel_file']['name']);
    if($file_array[1] == "xlsx"){
        include('../Classes/PHPExcel/IOFactory.php');
        $output .= '
        <table class="table table-sm table-striped">
            <thead class="">
                <tr class="">
                    <th class="">Customer name</th>
                    <th class="">Address</th>
                    <th class="">City</th>
                    <th class="">Postal code</th>
                    <th class="">Country</th>
                </tr>
            </thead>
        ';
        $object = PHPExcel_IOFactory::load($_FILES['excel_file']['tmp_name']);
        foreach($object->getWorksheetIterator() as $worksheet){
            $highestRow = $worksheet->getHighestRow();
            for($row = 2; $row <= $highestRow; $row++){
                $name = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                $address = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                $city = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                $postal_code = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                $country = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                
                $sql = mysqli_query($con, "INSERT INTO tbl_customer(`CustomerName`, `Address`,`City`,`PostalCode`, `Country`) VALUE('$name', '$address', '$city', '$postal_code', '$country')");
                $output .= '
                    <tr>
                        <td class="">'.$name.'</td>
                        <td class="">'.$address.'</td>
                        <td class="">'.$city.'</td>
                        <td class="">'.$postal_code.'</td>
                        <td class="">'.$country.'</td>
                    </tr>
                </table>
                ';
            }
        }
        print $output;
    }else{
        print "<p class='alert alert-danger'>Invalid file</p>";
    }

}