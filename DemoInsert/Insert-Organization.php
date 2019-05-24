<!DOCTYPE html>
<html>
<head>
  <title>Insert Results</title>
</head>
<body>
  <h1>Insert Results</h1>
  <?php

    if (!isset($_POST['orgID']) || !isset($_POST['org_name']) 
         || !isset($_POST['branchID'])) {
       echo "<p>You have not entered all the required details.<br />
             Please go back and try again.</p>";
       exit;
    }

    // create short variable names
    $orgID=$_POST['orgID'];
    $orgname=$_POST['org_name'];
    $branchid=$_POST['branchID'];

    @$db = new mysqli('localhost', 'root', '', 'rentapetv3');

    if (mysqli_connect_errno()) {
       echo "<p>Error: Could not connect to database.<br/>
             Please try again later.</p>";
       exit;
    }

    $query = "INSERT INTO Organization VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('isi', $orgID, $orgname, $branchid);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo  "<p>Insert into the database.</p>";
    } else {
        echo "<p>An error has occurred.<br/>
              The item was not added.</p>";
    }
  
    $db->close();
  ?>
</body>
</html>



