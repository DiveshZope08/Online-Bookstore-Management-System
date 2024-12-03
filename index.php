<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
      <!-- Example row of columns -->
      <p class="lead text-center text-muted" style="color:white;padding-bottom:15px;">Latest books</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
      <ul>
      <li style="list-style-type:none; background-color:black;display:inline-flex;border-radius:5px ; margin-top: 50px; margin-left:45%">
			<a href="books.php" style="text-decoration:none;color:white;padding:10px">All Books</a>
		</li>
	</ul>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  // require_once "./template/footer.php";
?>