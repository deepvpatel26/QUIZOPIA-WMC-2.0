<?php
include("connect.php")

function getData(){
    $data = array():
    $data[1] = $_POST['Question'];
    $data[2] = $_POST['optA'];
    $data[3] = $_POST['optB'];
    $data[4] = $_POST['optC'];
    $data[5] = $_POST['optD'];
    $data[6] = $_POST['password'];
    return $data;
}

if(isset($_POST['insert'])){
    $info= getData();
    $insert= "INSERT INTO ([questions] [Question] 
    ,[optA]
    ,[optB]
    ,[optC]
    ,[optD]
    ,[password]) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]')" 
    $result = odbc_exec($connenction, $insert);
}
?>

<!DOCTYPE html>
<html>
    <title>
        Upload Questions
    </title>
    <link rel="stylesheet" href="D:\website\Quiz 0.1\Qform.css">
        
    <body>
        <h1>Welcome to the world of quizes build your quiz</h1>
        
        
       
        <label for="Question">Enter your question here and also select the correct answer</label>
        <p></p>

        <div class="form">
        <form class="ques" action="" method="GET">

            <div class="qfo">
                <label for="question" class="question1">Question : </label>
                <textarea class="question" id="question" rows="2" style="width:70%; vertical-align: top;"></textarea>
            </div>
            
            <div class="a">
            <label for="optA" id="a">A</label>
            <label><input type="radio" name="opt" checked></label>
            <input  class="a"type="text" name="optA" value="" style="width:20%"><br>
            </div>

            <label for="optB" id="b">B</label>
            <label><input type="radio" name="opt" checked></label>
            <input type="text" name="optB" value="" style="width:20%"><br>

            <label for="optC" id="c">C</label>
            <label><input type="radio" name="opt" checked></label>
            <input type="text" name="optC" value="" style="width:20%"><br>

            <label for="optD" id="d">D</label>
            <label><input type="radio" name="opt" checked></label>
            <input type="text" name="optd" value="" style="width:20%"><br>

        </form>
        </div>

        <div class="add">
            <a href="#" class="previous">&laquo; Previous</a>
            <a href="#" class="add_more">Submit and Add More +</a>
            <a href="#" class="submit">Submit</a>

        </div>
        
        <div class="password">
            <label>Do you want to protect your quiz , if yes create a password for your quiz:</label>
            <input type="text" name="pass" placeholder=" enter password here" style="width: 20%;">
            <div class="passsub">
            <input type="submit" name="" value="Submit" style="background-color: #898d0a;">
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary" name="insert">Submit</button>
   
   
   
    </body>
</html>





