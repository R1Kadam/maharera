<style>
.lightboxMy {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  min-height: 100%;
  z-index: 999;
  overflow: auto;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: -webkit-transform .75s ease-out;
  transition: transform .75s ease-out;
}

.lightboxMy img {
  position: fixed;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  max-width: 96%;
  max-height: 96%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
}

input[type="checkbox"]:checked + .lightboxMy {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

input[type="checkbox"]:checked ~ .gridMy { opacity: 0.01; }

.gridMy {
  width: 100%;
  background-color: #222;
  z-index: 0;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-align-items: flex-start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-align-content: flex-start;
  -ms-flex-line-pack: start;
  align-content: flex-start;
  padding: 16px;
  overflow: auto;
  text-align: center;
  -webkit-transition: opacity .75s;
  transition: opacity .75s;
}

.gridMy .gridMy-item {
  width: 25%;
  display: inline-block;
  padding: 16px;
  opacity: .75;
  -webkit-transition: opacity .5s;
  transition: opacity .5s;
}

.gridMy .gridMy-item:hover { opacity: 1; }
@media screen and (max-width: 1024px) {

.gridMy .gridMy-item { width: 50%; }
}
@media screen and (max-width: 480px) {

.gridMy .gridMy-item { width: 100%; }
}

.gridMy img {
  max-width: 100%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
}
</style>
<div class="container">
<h2>Gallery</h2>
    <div class="row">
        <div class="col-12 m-5">
                <input type="checkbox" id="pic-1"/>
                <label for="pic-1" class="lightboxMy"><img src="http://unsplash.it/800/600?image=1"/></label>
                <input type="checkbox" id="pic-2"/>
                <label for="pic-2" class="lightboxMy"><img src="http://unsplash.it/800/600?image=20"/></label>
                <input type="checkbox" id="pic-4"/>
                <label for="pic-4" class="lightboxMy"><img src="http://unsplash.it/800/600?image=42"/></label>
                <input type="checkbox" id="pic-5"/>
                <label for="pic-5" class="lightboxMy"><img src="http://unsplash.it/800/600?image=48"/></label>
                <input type="checkbox" id="pic-6"/>
                <label for="pic-6" class="lightboxMy"><img src="http://unsplash.it/800/600?image=60"/></label>
                <input type="checkbox" id="pic-7"/>
                <label for="pic-7" class="lightboxMy"><img src="http://unsplash.it/800/600?image=201"/></label>
                <input type="checkbox" id="pic-8"/>
                <label for="pic-8" class="lightboxMy"><img src="http://unsplash.it/800/600?image=7"/></label>
                <input type="checkbox" id="pic-9"/>
                <label for="pic-9" class="lightboxMy"><img src="http://unsplash.it/800/600?image=119"/></label>
                <input type="checkbox" id="pic-10"/>
                <label for="pic-10" class="lightboxMy"><img src="http://unsplash.it/800/600?image=180"/></label>
                <input type="checkbox" id="pic-11"/>
                <label for="pic-11" class="lightboxMy"><img src="http://unsplash.it/800/600?image=96"/></label>
                <input type="checkbox" id="pic-12"/>
                <label for="pic-12" class="lightboxMy"><img src="http://unsplash.it/800/600?image=24"/></label>
            <div class="gridMy">
            <label for="pic-1" class="gridMy-item"><img src="http://unsplash.it/400/300?image=1"/></label>
            <label for="pic-2" class="gridMy-item"><img src="http://unsplash.it/400/300?image=20"/></label>
            <label for="pic-4" class="gridMy-item"><img src="http://unsplash.it/400/300?image=42"/></label>
            <label for="pic-5" class="gridMy-item"><img src="http://unsplash.it/400/300?image=48"/></label>
            <label for="pic-6" class="gridMy-item"><img src="http://unsplash.it/400/300?image=60"/></label>
            <label for="pic-7" class="gridMy-item"><img src="http://unsplash.it/400/300?image=201"/></label>
            <label for="pic-8" class="gridMy-item"><img src="http://unsplash.it/400/300?image=7"/></label>
            <label for="pic-9" class="gridMy-item"><img src="http://unsplash.it/400/300?image=119"/></label>
            <label for="pic-10" class="gridMy-item"><img src="http://unsplash.it/400/300?image=180"/></label>
            <label for="pic-11" class="gridMy-item"><img src="http://unsplash.it/400/300?image=96"/></label>
            <label for="pic-12" class="gridMy-item"><img src="http://unsplash.it/400/300?image=24"/></label>
            </div>
        </div>
    <div>
</div>
