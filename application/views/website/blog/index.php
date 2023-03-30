<div class="mt-11">
<?php 
        $blogID = $_GET['id'];
      $blogData = $this->blog->getBlogFromId($blogID);
    // var_dump($blogData);
?>

<div class="container p-2">
    <div class="row"> 
        <div class="col-sm-12 col-lg-10 col-md-10 m-auto">   
            <?php if($blogData){
                    foreach($blogData as $index=>$blog){
                        ?>
                <h1> <?php echo $blog['title']; ?> </h1>
                <div class="card mb-3 ">
                    <img class="card-img" src="<?php echo $blog['url']; ?>" alt="Maharera" style="height:300px;">
                    <div class="card-body">
                        <!-- <h5 class="card-title"><?php echo $blog['title']; ?></h5> -->
                        <!-- <p class="card-text"><small class="text-muted">Created date: <?php echo $blog['blogDate']; ?></small></p> -->
                        <p class="card-text" style="text-align:justify;text-justify:inter-word;"><?php echo $blog['description']; ?></p>
                    </div>
                </div>
                <?php } ?>
                        <?php
                        }else{?>
                            <div class="text-center">
                                <h2>No blog found</h2>
                            </div>
                        <?php } ?>

                <!-- Suggested Blogs -->
                <!-- <div class="p-2">
                    <h3>Suggested blogs</h3>
                    <div style="display:flex;flex-direction: row;justify-content:space-evenly;">
                        <a href="<?php echo base_url('web/blog'); ?>">
                            <div class="card m-3 blogCard">
                                <img class="card-img-top" src="<?php echo base_url(); ?>/assets/images/01.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url('web/blog'); ?>">
                            <div class="card m-3 blogCard">
                                <img class="card-img-top" src="<?php echo base_url(); ?>/assets/images/01.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url('web/blog'); ?>">
                            <div class="card m-3 blogCard">
                                <img class="card-img-top" src="<?php echo base_url(); ?>/assets/images/01.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>