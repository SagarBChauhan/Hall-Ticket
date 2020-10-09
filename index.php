<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
/*            body{
                padding: 0;
                margin: 0;
                color: white;
                font-family: Arial;
                background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('63336.jpg') ;
                background-size: cover;
            }
            input,textArea,select{
                margin: 2px;
                padding: 10px;
                border-radius: 2px 10px;
                border: none;
            }
            input:focus,textArea:focus,select:focus,input:checked{
                border-radius: 2px 10px;
                box-shadow: 1px 1px 20px royalblue, 0 0 25px blue, 0 0 5px white;
            }
            input:hover,textArea:hover,select:hover{
                border-radius: 10px 2px;
                box-shadow: 1px 1px 20px royalblue, 0 0 25px blue, 0 0 5px white;
            }
            input[type=file]
            {
                box-shadow: none    ;
            }
            input[type=submit]{
                margin: 2px;
                padding: 10px;
                border-radius: 10px 10px;
                border: none;
                width: 100px;
                color: white;
                background-color: royalblue;
            }
            input[type=submit]:hover{
                background-color: royalblue;
                color: white;
                border-radius: 10px 2px;
                box-shadow: 1px 1px 20px royalblue, 0 0 25px blue, 0 0 5px white;
                transition: 0.5s ;
                font-weight: bold;
                text-shadow: 1px 1px 20px white, 0 0 25px white, 0 0 5px white;
            }
            input[type=reset]{
                margin: 2px;
                padding: 10px;
                border-radius: 10px 10px;
                border: none;
                width: 100px;
                color: white;
                background-color: red;
            }
            input[type=reset]:hover{
                background-color: red;
                color: white;
                border-radius: 10px 2px;
                box-shadow: 1px 1px 20px red, 0 0 25px red, 0 0 5px white;
                transition: 0.5s ;
                font-weight: bold;      
                text-shadow: 1px 1px 20px white, 0 0 25px white, 0 0 5px white;
            }
            header{
                background-color: royalblue;
                color: white;
                border-radius:10px 2px;
                width:80%;
                margin-left:30px; 
                box-shadow:0px 0px 30px 5px greenyellow ;
            }*/
            
            
            body{
                padding: 0;
                margin: 0;
                color: white;
                background:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.5)), url(img/fancy-background-10898.jpeg) ;
                background-size: cover;
            }
            input[type=submit],input[type=reset]{
                padding-right: 40px;
                border-radius: 10px 10px 0px 10px;
                padding-left: 25px;
                border:  2px solid white;
                background-color: royalblue;
                color: white;
                opacity: 1;
            }
            input[type=submit],input[type=reset]{
                padding-right: 40px; 
                padding-left: 25px;
                background-color: royalblue;
                color: white;
                transition: 0.8s;
                opacity: 1;
            }
            input[type=submit]:hover,input[type=reset]:hover{
                padding-left: 40px; 
                padding-right: 25px;
                background-color: royalblue;
                border-radius: 0px 10px 10px 10px;
                box-shadow: 1px 1px 200px white, 0 0 25px yellow, 0 0 5px white;
                text-shadow: 1px 1px 200px white, 0 0 25px yellow, 0 0 5px white;
                transition: 0.8s;
                opacity: 1;
            }
            input, textArea, select{
                padding: 7px;
                border-radius: 0px 10px 10px 10px;
                border: transparent;
                opacity: 0.7;
            }
            input:hover, textArea:hover, select:hover{
                opacity: 1;
            }
            input:focus, textArea:focus, select:focus, input:checked{
                opacity: 1;
                box-shadow: 1px 1px 200px blue, 0 0 25px blueviolet, 0 0 5px white;
            }
            div.background {
              background:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.5)), url(img/fancy-background-10898.jpeg) ;
              background-size: cover;
            }            
            div.transbox {
                background-color: whitesmoke;
                border: 1px solid black;
                opacity: 0.6;
                filter: alpha(opacity=60);
                
                
            }
            div.transbox h1{
                margin: 4%;
                font-weight: bold;
                color: black;
                font-size: 80px;
                /*text-shadow:inset 3px 4px 5px white;*/
                background-color: #565656;
                color: transparent;
                text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
                -webkit-background-clip: text;
                -moz-background-clip: text;
                 background-clip: text;
            }
            
        </style>         
    </head>
    <body>
        <div class="background">
        <header>
            <div class="background">
            <div class="transbox">
                <h1  style="box-shadow:10px 10px 70px #000000;padding: 20px;font-size:50px;border: solid 5px white;background-color: white; color: royalblue; border-radius:10px 2px; width: fit-content;margin: 4%;font-weight: bold; color: black;
                font-size: 80px;
                /*text-shadow:inset 3px 4px 5px white;*/
                background-color: #565656;
                color: transparent;
                text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
                -webkit-background-clip: text;
                -moz-background-clip: text;
                 background-clip: text;">HALL<b style="color:greenyellow;text-shadow: 4px 4px 10px #000000;">TICKET</b></h1>
            </div>
            </div>
        </header>
        <form action="Hall_Ticket.php" enctype="multipart/form-data" method="post">
            <div align="center" style="padding-bottom: 10.7%; margin-top: 3%; ">
            <table border="0" align="center " >
                <tr>
                    <td>Enrollment Number:</td>
                    <td>
                        <input type="text" name="en" placeholder="enrollment no">          
                    </td>
                </tr>
                   <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name" placeholder="name">
                        <input type="text" name="lname" placeholder="last name">
                    </td>
                </tr>
                <tr>
                    <td>Birth Date:</td>
                    <td><input type="date" name="bdate" placeholder="Birth date"></td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>
                        <input type="text" name="dept"placeholder="department">
                        
                    </td>
                </tr> 
                <tr>
                    <td>Semester</td>
                    <td>
                        <input type="text" name="sem"placeholder="semester">
                    </td>
                </tr>
                 <tr>
                    <td>Exam No:</td>
                    <td>
                        <input type="text" name="Exam"placeholder="exam number">
                        
                    </td>
                </tr>
                 <tr>
                    <td>profile</td>
                    <td>
                         <input type="file" name="image" id="image">                    
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Submit"  >
                        <input type="reset" name="reset" value="Reset"  >
                    </td>             
                </tr>
            </table>
            </div>
  
        </form>
        </div>   
    </body>
</html>
