<style>

/* Create three equal my_columns that floats next to each other */
.my_column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Content */
.my_content {
  border:1px solid #ccc;
  background-color: #ccc;
  margin: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.my_btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  border-radius:6px;
  background-color: #fff;
  cursor: pointer;
  display: inline;

}

.my_btn:hover {
  background-color: #ddd;
}

.my_btn.active {
  background-color: #666;
  color: #fff;
}
</style>



<div class="container">

<h2>Gallery</h2>
<div class="line-dec-left"></div>
<div class="divider-40"></div>
<div class="row text-center">
  <div id="myBtnContainer" class="col-12">
    <button class="my_btn ml-2 active" onclick="filterSelection('all')"> Show all</button>
    <button class="my_btn ml-2" onclick="filterSelection('images1')"> Images 1</button>
    <button class="my_btn ml-2" onclick="filterSelection('images2')"> Images 2</button>
    <button class="my_btn ml-2" onclick="filterSelection('images3')"> Images 3</button>
  </div>
</div>
<div class="divider-40"></div>
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="col-12">
        <div class="my_column images1">
          <div class="my_content">
            <img src="http://unsplash.it/400/300?image=1" alt="Maharera" style="width:100%">
          </div>
        </div>
        <div class="my_column images1">
          <div class="my_content">
          <img src="http://unsplash.it/400/300?image=7" alt="Maharera" style="width:100%">
          </div>
        </div>
        <div class="my_column images1">
          <div class="my_content">
          <img src="http://unsplash.it/400/300?image=20" alt="Maharera" style="width:100%">
          </div>
        </div>
        
        <div class="my_column images2">
          <div class="my_content">
            <img src="http://unsplash.it/400/300?image=42" alt="Maharera" style="width:100%">
          </div>
        </div>
        <div class="my_column images2">
          <div class="my_content">
          <img src="http://unsplash.it/400/300?image=60" alt="Maharera" style="width:100%">
          </div>
        </div>
        <div class="my_column images2">
          <div class="my_content">
          <img src="http://unsplash.it/400/300?image=1" alt="Maharera" style="width:100%">
          </div>
        </div>

        <div class="my_column images3">
          <div class="my_content">
            <img src="http://unsplash.it/400/300?image=60" alt="Maharera" style="width:100%">
          </div>
        </div>
        <div class="my_column images3">
          <div class="my_content">
          <img src="http://unsplash.it/400/300?image=20" alt="Maharera" style="width:100%">
          </div>
        </div>
        <div class="my_column images3">
          <div class="my_content">
          <img src="http://unsplash.it/400/300?image=20" alt="Maharera" style="width:100%">
          </div>
        </div>
      <!-- END GRID -->
      </div>
    </div>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("my_column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("my_btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>