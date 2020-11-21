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
    height: 20px;
               }
    header, footer {
    padding: 1em;
    color: orange;
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
      <h1>Patient Management System</h1>
</header>

<div class="navbar">
  <a href="home.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Insert 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="bill.php">Bill Info</a>
      <a href="doc.php">Doctors Info</a>
      <a href="pat.php">Patient Info</a>
      <a href="ro.php">Room Info</a>
      <a href="em.php">Employee Info</a>
    </div>
  </div> 

<div class="dropdown">
    <button class="dropbtn">View
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="billview.php">View Bill Info</a>
      <a href="doctorsview.php">View Doctors Info</a>
      <a href="patientview.php">View Patient Info</a>
      <a href="roomview.php">View Room Info</a>
      <a href="employeeview.php">View Employee Info</a>
    </div>
  </div>
  <a href="search.php">Search</a>
  <a href="news.php">Contact</a>
  <a href="news.php">About</a>
</div>

<div class="container">


  

<center><h1>Patient Information</h1><br>
<big>
<form action="pin.php" method="post">
Patient ID:<br>
<input type="int" name="pat_id">
<br>
Patient Name:<br>
<input type="varchar" name="pat_name">
<br>
Patient contact:<br>
<input type="varchar" name="pat_contract">
<br>
Patient Address:<br>
<input type="int" name="pat_address">
<br>
Patient Mail:<br>
<input type="varchar" name="pat_email">
<br><br>
<input type="submit">
</form>

<p>Check every form then click submit.</p></center></big>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_patient";

$conn = new mysqli($hostname,$username,$password,$dbname);



if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$aid = $_POST['pat_id'];
$cardnumber = $_POST['pat_name'];
$atmlocation = $_POST['pat_contract'];
$atmbalance = $_POST['pat_address'];
$atmbal = $_POST['pat_email'];

$sql = "INSERT INTO tb_patient(patient_id,patient_name,patient_contract,patient_address,patient_email 
) VALUES('$aid', '$cardnumber','$atmlocation','$atmbalance','$atmbal')";

if ($conn->query($sql) === TRUE) {
    echo "<center>Your Information Saved successfully</center>";
} else {
    if ($aid == "" || $cardnumber == "" || $atmlocation == "" || $atmbalance == "" || $atmbal == "") {
         echo "<center>Please input your values!</center> ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>



<footer>
  <font size="4"><i><big><b>Created by:</b></big><br>
  Mabia Akter<br>
  ID: 16103009<br>
  Section: B</i></font>

</footer>
</div>

</body>
</html>