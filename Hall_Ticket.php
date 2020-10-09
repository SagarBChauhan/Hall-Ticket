<html>
    <head>
        <style>
            body{
                padding:0;
                margin: 0;
                background:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.5)), url(img/Hard-money-Loan-Miami-refreshfunding-39707357-720-406.jpg) ;
                background-size: cover;
                font-family: monospace;
            }
            .info_tb table{
                width:80%;
                margin-top:0%;
                margin-left:3%;
            }
            .info_tb td:nth-child(1){
                font-weight: bold;
                width: 30%;
            }
            .time_table table{
                margin-top:0%;
                width:100%;
            }
            table{
                margin-top: 10%;
                background: white;
            }
            input[type=submit]{
                padding-right: 40px;
                border-radius: 10px 10px 0px 10px;
                padding-left: 25px;
                border:  2px solid white;
                background-color: skyblue;
                color: white;
                opacity: 1;
            }
            input[type=submit]{
                padding-right: 40px; 
                padding-left: 25px;
                background-color: skyblue;
                color: white;
                transition: 0.8s;
                opacity: 1;
            }
            input[type=submit]:hover{
                padding-left: 40px; 
                padding-right: 25px;
                background-color: royalblue;
                border-radius: 0px 10px 10px 10px;
                box-shadow: 1px 1px 200px white, 0 0 25px yellow, 0 0 5px white;
                text-shadow: 1px 1px 200px white, 0 0 25px yellow, 0 0 5px white;
                transition: 0.8s;
                opacity: 1;
            }
        </style>
    </head>
    <body>
        <form method="get" >
            <?php

                $errors = array(); 
                $path="./upload/";

                $filename=$_FILES['image']['name'];
                $temp=$_FILES['image']['tmp_name'];
                $file_size=$_FILES['image']['size'];
                $filetype=$_FILES['image']['type'];
                $file_ext=strtolower(pathinfo($filename, PATHINFO_EXTENSION)); 
                $target_file=$path.basename($filename);

                $extensions = array("jpeg", "jpg", "png");

                if (file_exists($target_file)) 
                { 
                    echo "Sorry, file already exists.";
                } 
                if (in_array($filetype, $extensions) === false)
                { 
                    $errors[] = "Extension not allowed,Only allowed JPEG or PNG file.";         
                } 
                if ($file_size <= 4000000) 
                { 
                    $errors[] = 'File size must be excately 4 MB'; 
                } 

                move_uploaded_file($temp, "upload/".$filename);

                $nm=$_POST['name'];
                $lnm=$_POST['lname'];
                $en=$_POST['en'];
                $bd=$_POST['bdate'];
                $dep=$_POST['dept'];
                $sem=$_POST['sem'];
                $ex=$_POST['Exam'];
            ?>
            <table border=1 width='60%' style='padding:3%'>
                    <thead>
                        <tr>
                            <th colspan='2' >
                                <table width='100%' style='margin-top: 1%;'>
                                    <tr>
                                        <th><img src='img/UTU copy.png' width='85' height='100' alt='UTU copy'/></th>
                                        <th style="font-size: 30px;">UKA TARSADIA UNIVERSITY</th>
                                    </tr>
                                </table>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <table border='1' width='100%' style='margin-top: 0%;'>
                                    <tr>
                                        <td>
                                            <div class='info_tb'>
                                            <?php
                                            if(isset($_POST['submit']))
                                                {       
                                                    echo  "<table>"
                                                            . "<tr>"
                                                                . "<td> Name :</td>"
                                                                . "<td> $nm"." "."$lnm </td>"
                                                            . "</tr>"
                                                            . "<tr>"
                                                                . "<td> Enrollment No:</td>"
                                                                . "<td> $en </td>"
                                                            . "</tr>"
                                                            . "<tr>"
                                                                . "<td> Birth Date :</td>"
                                                                . "<td> $bd </td>"
                                                            . "</tr>"
                                                            . "<tr>"
                                                                . "<td> Exam No  :</td>"
                                                                . "<td>$ex </td>"
                                                            . "</tr>"
                                                            . "<tr>"
                                                                . "<td> Department :</td>"
                                                                . "<td> $dep</td>"
                                                            . "</tr>"
                                                            . "<tr>"
                                                                . "<td> Semester No :</td>"
                                                                . "<td> $sem </td>"
                                                            . "</tr>"
                                                         . "</table>";     
                                                }
                                            ?>
                                            </div>
                                        </td>
                                        <td width='10%'><?php echo "<img src=".$target_file." height=150 width=120 />";?></td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td colspan='2'>
                                <div class='time_table'>
                                    <table border='1' cellpadding='10'>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Sign</th>
                                        </tr>
                                        <tr>
                                            <th> PHP </th>
                                            <td>31-12-2028</td>
                                            <td>9:30 A.M - 12:30 P.M</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <th> ANDROID</th>
                                            <td>1-1-2019</td>
                                            <td>9:30 A.M - 12:30 P.M</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <th> SEO</th>
                                            <td>2-1-2019</td>
                                            <td>9:30 A.M - 12:30 P.M</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <th> SPM</th>
                                            <td>3-1-2019</td>
                                            <td>9:30 A.M - 12:30 P.M</td>
                                            <td><input type="text"></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <input type="submit" name="save" value="print" onclick="window.print()">
        </form>
    </body>   
</html>
<?php /*
        if(isset($_GET['save']))
        {
           
    require('phpToPDF.php');

    //It is possible to include a file that outputs html and store it in a variable 
    //using output buffering.
    ob_start();
    include('./Hall_Ticket.php');
   
    $my_html = ob_get_clean();
$a= rand(100, 1000);
    //Set Your Options -- we are saving the PDF as 'my_filename.pdf' to a 'my_pdfs' folder
    $pdf_options = array(
      "source_type" => 'html',
      "source" => $my_html,
      "action" => 'save',
      "save_directory" => 'C:\wamp64\www\Hall_ticket\pdfs',
      "file_name" => $a.'.pdf');

    //Code to generate PDF file from options above
    phptopdf($pdf_options);

        }
        */?>