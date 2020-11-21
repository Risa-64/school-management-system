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
      <a href="doctosrview.php">View Doctors Info</a>
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
  <div style="padding: 90px;">

  <div class="table"><div id="printableArea">
<h2 align="center"> Patient View From </h2>
<table border="1" align="center">
  
    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_patient";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM  tb_patient";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<tr><th>Patient ID</th><th>Patient Name</th><th>Patient Contact</th><th>Patient Address</th><th>Patient Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["patient_id"]. "</td><td>" . $row["patient_name"]."</td><td>".$row["patient_contract"]."</td><td>" . $row["patient_address"]."</td><td>" . $row["patient_email"]."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table></div>
<input type="button" onclick="printDiv('printableArea')" value="print a div!" />
</div> 

<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>

</div>
<footer>
  <font size="5" style="width:100px;height:45px;"><i><b>Created by:</b><br>
  Mabia Akter <br>
  ID: 16103009<br>
  Section:B</i></font>

</footer>

</div>

</body>
</html>