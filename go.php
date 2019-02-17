<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $password='';
        $user ='root';
        $databases = 'exhibition' ;
        $host =  'localhost';
        $con = mysqli_connect($host,$user,$password,$databases);  
        if (mysqli_connect_errno($con))  
        {  
            echo "连接 MySQL 失败: " . mysqli_connect_error();
            echo "<br> 請重新連接";
        }
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$id = $_POST['id'];
$pw = $_POST['pw'];

$speech1 = $_POST['speech1'];
$speech2 = $_POST['speech2'];
$lunch1 = $_POST['lunch1'];
$serminar1 = $_POST['serminar1'];
$serminar2 = $_POST['serminar2'];
$serminar3 = $_POST['serminar3'];
$forum1 = $_POST['forum1'];        
$serminar4 = $_POST['serminar4'];
$serminar5 = $_POST['serminar5'];
$serminar6 = $_POST['serminar6'];
$forum2 = $_POST['forum2'];
$lunch2 = $_POST['lunch2'];
$serminar7 = $_POST['serminar7'];
$serminar8 = $_POST['serminar8'];
$serminar9 = $_POST['serminar9'];
$forum3 = $_POST['forum3'];
/*
echo "$name<br>";   
echo "$phone<br>";
echo "$mail<br>";
echo "$id<br>";
echo "$pw<br>";

echo "$speech1<br>";
echo "$speech2<br>";
echo "$lunch1<br>";
echo "$serminar1<br>";
echo "$serminar2<br>";
echo "$serminar3<br>";
echo "$forum1<br>";
echo "$serminar4<br>";
echo "$serminar5<br>";
echo "$serminar6<br>";
echo "$forum2<br>";
echo "$lunch2<br>";
echo "$serminar7<br>";
echo "$serminar8<br>";
echo "$serminar9<br>";
echo "$forum3<br>";*/

$member = 'member';
$member_participation = 'member_participation';    
$sql = "INSERT INTO $member VALUES ('$name','$phone','$mail','$id','$pw');";
if ($con->query($sql) === TRUE) {
   // echo "新记录插入成功";
} 
else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$cars= array($speech1,$speech2,$lunch1,$serminar1,$serminar2,$serminar3,$forum1,$serminar4,$serminar5,$serminar6,$forum2,$lunch2,$serminar7,$serminar8,$serminar9,$forum3);
$carsvar=array('speech1','speech2','lunch1','serminar1','serminar2','serminar3','forum1','serminar4','serminar5','serminar6','forum2','lunch2','serminar7','serminar8','serminar9','forum3');
for($i=0;$i<count($cars) ;$i++){
    if($cars[$i] !="0"){
   $sql = "INSERT INTO $member_participation VALUES ('$id','$carsvar[$i]');";
    if ($con->query($sql) === TRUE) {
        if($carsvar[$i]=='lunch1'||$carsvar[$i]=='lunch2'){
            $foo =$carsvar[$i]==1?"葷食":"素食";
            echo "$carsvar[$i]:$foo<br>";
        }
        else{
            echo "$carsvar[$i]報名成功<br>";
        }
    } 
    else {
        echo "Error: " . $sql . "<br>" . $con->error. "<br><br>";
    } 
    }
}        
mysqli_close($con);
/*
 member_participation
 mp_account
 mp_Activity_sequence
 */
        ?>
    </body>
</html>
