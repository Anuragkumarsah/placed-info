<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con) {
        die("Could not connect to database: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $stream = $_POST['stream'];
    $section = $_POST['section'];
    $roll_no = $_POST['roll_no'];
    $skills = $_POST['skills'];
    $tips = $_POST['tips'];

    $sql = "INSERT INTO `placement_info`.`placement_info` (`roll_no`, `name`, `stream`, `section`, `skills`, `tips`, `date_time`) VALUES ('$roll_no', '$name', '$stream', '$section', '$skills', '$tips', current_timestamp());";
    if($con->query($sql) == true) {
        echo "Successfully inserted";
    }
    else {
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&family=Itim&family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./index.css" />
    <title>Placed-Info</title>
  </head>
  <body>
    <div class="container">
      <div class="left">
        <h2>Placement Preparation Tips</h2>
        <p>Please share your placement strategy below </p>
        <form action="ind.php" method="post">
          <label for="name">Enter your name:</label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Enter your name"
          />
          <label for="stream">Enter your stream:</label>
          <input type="text" name="stream" id="stream" placeholder="CSE" />
          <label for="section">Enter your section:</label>
          <input type="text" name="section" id="section" maxlength="1" placeholder="B" />
          <label for="roll_no">Enter your roll number:</label>
          <input
            type="text"
            name="roll_no"
            id="roll_no"
            placeholder="University Roll Number"
            required
          />
          <label for="skills">Enter you skills: </label>
          <input type="text" name="skills" id="skills" placeholder="ReactJs, HTML, CSS, ML" required>
          <label for="tips">Enter some tips for placement preparation:</label>
          <textarea name="tips" id="tips" cols="21" rows="20" placeholder="Tips for placement preparation" required></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>
      <div class="right">
        <img src="./assets/images/Taking notes-pana.svg" alt="Tips and info" />
      </div>
    </div>
    <!-- INSERT INTO `placement_info` (`roll_no`, `name`, `stream`, `section`, `skills`, `tips`, `date_time`) VALUES ('14200120052', 'Anurag Kumar Sah', 'CSE', 'B', 'ReactJS, Express, NodeJS, PHP', 'Use time efficiently', current_timestamp()); -->
  </body>
</html>
