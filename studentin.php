<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

<style>
  div.container {
    width: 100%;
    border: 0px solid gray;
   padding: 0.1px;
    background-color: cyan;
               }
    header, footer {
    padding: 2px;
    color: white;
    background-color: gray;
    clear: right;
    text-align: center;
                  }
    table, th, td {
    padding: .25em;
    color: red;
    background-color: yellow;
    border: 1px solid black;
                 }

 </style>

</head>
<body>

<header>
      <h1>Admit Card Management System</h1>
</header>

<div class="navbar">
  <a href="home.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Insert 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="student.php">Student Info</a>
      <a href="registry.php">Registry Info</a>
      <a href="org.php">Organization Info</a>
      
    </div>
  </div> 

<div class="dropdown">
    <button class="dropbtn">View
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="student.php">Student Info</a>
      <a href="registryview.php">Registry Info</a>
      <a href="orgview.php">Organization Info</a>
    </div>
  </div>
  <a href="search.php">Search</a>
  <a href="news.php">Contact</a>
  <a href="news.php">About</a>
</div>

<div class="container">
<center><h1>Student Information</h1><br>
<big>
<form action="mein.php" method="post">
Student ID:<br>
<input type="int" name="st_id">
<br>
Student Name:<br>
<input type="varchar" name="st_name">
<br>
Student Section:<br>
<input type="varchar" name="st_sec">
<br>
Student Group:<br>
<input type="int" name="st_group">
<br>
Student Contact:<br>
<input type="int" name="st_contact">
<br><br>
<input type="submit">
</form></center>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_admit";

$conn = new mysqli($hostname,$username,$password,$dbname);



if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$aid = $_POST['st_id'];
$cardnumber = $_POST['st_name'];
$atmlocation = $_POST['st_sec'];
$atmbalance = $_POST['st_group'];
$atmbal = $_POST['st_contact'];


$sql = "INSERT INTO tb_student( student_id,student_name,student_section,student_group,student_contact) VALUES('$aid', '$cardnumber','$atmlocation','$atmbalance','$atmbal')";

if ($conn->query($sql) === TRUE) {
    echo "<center><h2>Your Information Saved successfully</h2></center>";
} else {
    if ($aid == "" || $cardnumber == "" || $atmlocation == "" || $location == "" || $atmbal == "") {
         echo "<center><h2>Please input your values! </h2></center>";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<footer>
  <font size="4"><i><big><b>Created by:</b></big><br>
  Rokaiya<br>
  ID: 16203064<br>
  Section: B</i></font>

</footer>
</div>

</body>
</html>