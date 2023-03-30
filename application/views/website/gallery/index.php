<style>
.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}
</style>
   
   <!-- Gallery Page started-->
   <div class="div-sections  divelement-element py-4 position-relative div-sections-boxed div-sections-height-default div-sections-height-default mt-10">
    <div class="div-container div-column-gap-default position-static  ">
        <div class="div-column elementor-col-100 elementor-top-column divelement-element position-static" >
            <div class="p-0 position-static px-md-5 px-xl-0 div-widget-wrap divelement-element-populated">

                <div class="div-sections div-inner-section divelement-element div-sections-boxed div-sections-height-default div-sections-height-default">
                    <div class="div-container div-column-gap-default row align-items-center">
                        
                        <div class="col-12 col-md-12 col-lg-12 order-md-1 p-4">
                            <div class="p-5 div-widget-wrap divelement-element-populated">
                                <div class="divelement-element animated-fast div-widget div-widget-highlighted-heading animated fadeInDown">
                                    <div class="div-widget-container">
                                        <h2 class="gallery h1 mb-1 text-logo-color_siilc" style="text-align:center;"><?php echo $this->lang->line('homepage_Gallery'); ?></h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
   
    <div class="container">
        <div class="row" style="align-items:center;">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="category1">Category 1</button>
            <button class="btn btn-default filter-button" data-filter="category2">Category 2</button>
            <button class="btn btn-default filter-button" data-filter="category3">Category 3</button>
            <button class="btn btn-default filter-button" data-filter="category4">Category 4</button>
        </div>
        
        <div class="row" style="margin-bottom:75px;"></div>

        <div class="row">

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category1">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category2">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category1">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category3">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category4">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category3">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category4">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category3">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category3">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category1">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category4">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category 2">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
        </div>
    </div>
    
    
    
    <script>
        $(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
                
                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
                    
                }
            });
            
            if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
        }
        $(this).addClass("active");
        
        });
    </script>