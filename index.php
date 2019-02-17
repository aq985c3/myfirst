<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>活動勾選</title>
        <style>
            #header {
                background-color:black;
                color:white;
                text-align:center;
                padding:5px;
            }
            #aside{
                line-height:30px;
                background-color:#eeeeee;
                height:200px;
                width:309px;
                float:left;
                padding:5px;
                overflow: scroll;
            }
            #nav {
                line-height:30px;
                background-color:#eeeeee;
                height:180px;
                width:309px;
                float:left;
                padding:5px;	      
            }
            #section {
                width:900px;
                float:left;
                padding:10px;	 	 
            }
            #article{
                line-height:30px;
                background-color:#eeeeee;
                height:274px;
                width:309px;
                float:left;
                padding:5px;
                overflow: scroll;
            }
            #footer {
                background-color:black;
                color:white;
                clear:both;
                text-align:center;
               padding:5px;	 	 
            }
        </style>
    </head>
    <body>
        <div style="border:2px blue solid;font-size:20px;" id="header">
    <h1><font color="red" size="7" face="DFKai-sb"><em>請勾選要參加的活動及是否訂購午餐</em></font></h1><br>
        </div>
        <?php
        // put your code here
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$id = $_POST['id'];
$pw = $_POST['pw'];

echo '<div style="border:2px blue solid;font-size:20px;" id="section">';
echo "你好 $name  請勾選要參加的活動及是否訂購午餐<br>";
echo '<form method="POST" action="go.php">';

echo "<input type=hidden name=\"name\" value=$name>";
echo "<input type=hidden name=\"phone\" value=$phone>";
echo "<input type=hidden name=\"mail\" value=$mail>";
echo "<input type=hidden name=\"id\" value=$id>";
echo "<input type=hidden name=\"pw\" value=$pw>";
echo 'speech1:10:30~11:15-Driving Outdoor Industry Progress Through Collaboration<br>';
echo '<input type="radio" name="speech1" value="1" checked>參加'
   . '<input type="radio" name="speech1" value="0" checked>不參加<br>';
echo 'speech2:11:15~12:00-Biotechnology Routes to Advanced Fibers in Textiles and
Fabric Discovery in USA
<br>';
echo '<input type="radio" name="speech2" value="1" checked>參加'
   . '<input type="radio" name="speech2" value="0" checked>不參加<br>'; 
echo 'lunch1:12:00~13:30-午餐<br>';
echo '<input type="radio" name="lunch1" value="1" checked>葷食'
   . '<input type="radio" name="lunch1" value="2" checked>素食'
   . '<input type="radio" name="lunch1" value="0" checked>不訂購<br>'; 
echo 'serminar1:13:30~14:15-Building New Business
Ecosystem Around Textile
Recycling<br>';
echo '<input type="radio" name="serminar1" value="1" checked>參加'
   . '<input type="radio" name="serminar1" value="0" checked>不參加<br>';
echo 'serminar2:14:15~15:00-Value Chain Transparency for
Impact<br>';
echo '<input type="radio" name="serminar2" value="1" checked>參加'
   . '<input type="radio" name="serminar2" value="0" checked>不參加<br>';
echo 'serminar3:15:20~16:05-Fibersort - Automated Sorting of
Post Consumer Textiles for High
Value Recycling<br>';
echo '<input type="radio" name="serminar3" value="1" checked>參加'
   . '<input type="radio" name="serminar3" value="0" checked>不參加<br>';
echo 'forum1:16:05~17:05-論壇主題-循環經濟<br>';
echo '<input type="radio" name="forum1" value="1" checked>參加'
   . '<input type="radio" name="forum1" value="0" checked>不參加<br>';
echo 'serminar4:09:00~09:45-Intelligent Functional Textiles
Created by the Application of
Macro-encapsulated Phase
Change Material
<br>';
echo '<input type="radio" name="serminar4" value="1" checked>參加'
   . '<input type="radio" name="serminar4" value="0" checked>不參加<br>';
echo 'serminar5:09:45~10:30-The Role of Conductive Fibres in
Accelerating the Transformation
of the Functional Fibre Industry<br>';
echo '<input type="radio" name="serminar5" value="1" checked>參加'
   . '<input type="radio" name="serminar5" value="0" checked>不參加<br>';
echo 'serminar6:10:45~11:30-Nanotechnology, a Key Enabling
Technology to Functional and
Smart Textiles<br>';
echo '<input type="radio" name="serminar6" value="1" checked>參加'
   . '<input type="radio" name="serminar6" value="0" checked>不參加<br>';
echo 'forum2:11:30~12:30-論壇主題-機能性紡織品<br>';
echo '<input type="radio" name="forum2" value="1" checked>參加'
   . '<input type="radio" name="forum2" value="0" checked>不參加<br>';
echo 'lunch2:12:30~13:30-午餐<br>';
echo '<input type="radio" name="lunch2" value="1" checked>葷食'
   . '<input type="radio" name="lunch2" value="2" checked>素食'
   . '<input type="radio" name="lunch2" value="0" checked>不訂購<br>';
echo 'serminar7:13:30~14:15-Canada’s Wearables Industry:
Challenges and Opportunities
<br>';
echo '<input type="radio" name="serminar7" value="1" checked>參加'
   . '<input type="radio" name="serminar7" value="0" checked>不參加<br>';
echo 'serminar8:14:15~15:00-Smart Textiles: Disrupting the
Textiles Industry and Beyond<br>';
echo '<input type="radio" name="serminar8" value="1" checked>參加'
   . '<input type="radio" name="serminar8" value="0" checked>不參加<br>';
echo 'serminar9:15:20~16:05-Taking E-Textiles From Concept
to Mass Production – How IPC
International Standards for
E-Textiles Will Reduce Costs,
Accelerate Innovation and
Improve Reliability<br>';
echo '<input type="radio" name="serminar9" value="1" checked>參加'
   . '<input type="radio" name="serminar9" value="0" checked>不參加<br>';
echo 'forum3:16:05~17:05-論壇主題-智慧型紡織品<br>';
echo '<input type="radio" name="forum3" value="1" checked>參加'
   . '<input type="radio" name="forum3" value="0" checked>不參加<br>';
echo '<input type="submit" value="報名">';
echo '</form>';        
echo '</div>';
        ?>

    </body>
</html>
