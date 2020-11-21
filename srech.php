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
      <a href="studentview.php">Student Info</a>
      <a href="registryview.php">Registry Info</a>
      <a href="orgview.php">Organization Info</a>
    </div>
  </div>
  <a href="search.php">Search</a>
  <a href="news.php">Contact</a>
  <a href="news.php">About</a>
</div>

<div class="container">


 <form method="POST" style="text-align:center">
<h1>Student Information Search Form</h1>
Search By Student ID:<br>
<input name="search_id" value="" type="number"><br>
<br>



<br><br>
<input value="Search" type="submit">
</form>
<article class="article">
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_admit";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT student_id,student_name,student_section,student_group,student_contact FROM tb_student where student_id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
  echo "<tr><th>Student ID</th><th>Student Name</th><th>Student Section</th><th>Student Group</th><th>Student Contact</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>". $row["student_id"]. "</td><td>" . $row["student_name"]."</td><td>" . $row["student_section"]."</td><td>" . $row["student_group"]."</td><td>" . $row["student_contact"]."</td>";
  echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</article>

<footer>
  <font size="4"><i><big><b>Created by:</b></big><br>
  Rokaiya<br>
  ID: 16203064<br>
  Section: B</i></font>

</footer>
</div>

</body>
</html>