<?php 
    require "config.php";

    if(isset($_POST['search'])) {
        $search = $_POST['search'];

        $select = $conn->query("SELECT * FROM posts WHERE title LIKE '{$search}%'");

        $select->execute();

        $rows = $select->fetchAll(PDO::FETCH_OBJ);

       
    }
?>


<?php foreach($rows as $row) : ?>
        <div class="card">
        
            <div class="card-body">
                <h5 class="card-title"><?php echo $row->title; ?></h5>
                <p class="card-text"><?php echo substr($row->body, 0, 80). '.......'; ?></p>
                <a href="show.php?id=<?php echo $row->id; ?>" class="btn btn-primary">More</a>
            </div>
        </div>
        <br>
<?php endforeach; ?>



