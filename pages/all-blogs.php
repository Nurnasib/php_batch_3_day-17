<?php include 'header.php';?>

<section class="py-5 bg light">
    <div class="container">
        <div class="row">
            <?php foreach ($allBlogs as $blog) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $blog['image']?>" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $blog['title']?></h4>
                            <span class="text-muted"><?php echo $blog['author']?></span>
                            <p class="text-justify"><?php echo $blog['description']?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>









<?php include 'footer.php';?>
