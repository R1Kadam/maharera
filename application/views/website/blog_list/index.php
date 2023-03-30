<div class="mt-11">
<?php 
        
      $blogData = $this->blog->getActiveBlogImage();
    // var_dump($blogData);
?>

    <div class="container p-2">
        <h1>Blogs</h1>
        <!-- <h3> Catogory</h3> -->
        <div style="display:flex; justify-content:space-evenly; flex-wrap: wrap;">
        <?php if($blogData){
                foreach($blogData as $index=>$blog){
                    ?>
            <a href="<?php echo base_url('web/blog'); ?>?id=<?php echo $blog['blogId']?>" >
                <div class="card m-3 blogCard">
                    <img class="card-img-top" src="<?php echo($blog['url']);?>" alt="Maharera">
                    <div class="card-body">
                        <h5 class="card-title ellipseTextAfterOneLine"><?php echo($blog['title']);?></h5>
                        <p class="card-text"><?php echo($blog['blogDate']);?></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </a>

            <?php } ?>
                <?php
                }else{?>
                    <div class="text-center">
                        <h2>No blog found</h2>
                    </div>
                <?php } ?>
            
        </div>

    </div>
</div>