<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 80%;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 150px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <header>
        <h1>Rainbow Inkwave Tattoo Shop</h1>
        <nav>
          <ul>
           
             
              <li><a href="Tattoogallery.html">Tattoos</a></li>
              <li><a href="store.html">Store</a></li>
              <li><a href="booking.html">Book Appointment</a></li>
              <li><a href="Faq.html">FAQ</a></li>
              <li><a href="contact.html">Contact Us</a></li>
          </ul>
      </nav>
        <div class="logo">
          			
          				<img src="images/logo.jpg" width="580" height="400" alt="" >
          			
          	</div>
    </header>
    <main>
      
  

  <div class="reviews">
    <h3>Customer Reviews</h3>
    <ul>
      <li>
        <p>Ankle tattoos are so cute! I got a small star on my ankle and it's perfect. The tattoo artist was very professional and made sure I was comfortable throughout the process.</p>
        <p class="rating">
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          Rating: 5/5
        </p>
      </li>
      <li>
        <p>I was a bit nervous about getting a tattoo on my arm, but it was totally worth it. The design turned out amazing and I've gotten so many compliments. The only reason I didn't give it 5 stars is because it was a bit more painful than I expected.</p>
        <p class="rating">
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star">&#x2605;</span>
          Rating: 4/5
        </p>
      </li>
      <li>
        <p>I've always wanted a tattoo, and I'm so glad I chose to get one on my leg. It's a great conversation starter and I love the way it looks. The tattoo artist was very talented and made sure I was happy with the final result.</p>
        <p class="rating">
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          Rating: 5/5
        </p>
      </li>
      <li>
        <p>I was a bit skeptical about getting a tattoo on my wrist, but I'm so glad I did. It's a great way to express myself and I love the way it looks. The tattoo artist was very professional and made sure I was comfortable throughout the process.</p>
        <p class="rating">
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          <span class="star active">&#x2605;</span>
          Rating: 5/5
        </p>
      </li>
    </ul>
  </div>

                  
                
                  </main>
                  
                  <footer>
                    <p>&copy; 2024 Rainbow Inkwave Tattoo Shop</p>
                  </footer>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Customer Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM customers";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Email</th>";
                            echo "<th>Phone</th>";
                            echo "<th>Date</th>";
                            echo "<th>Time</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>" . $row['time'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
