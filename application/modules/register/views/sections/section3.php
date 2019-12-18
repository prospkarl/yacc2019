<h4></h4>
<section>
    <div class="grid">
        <h3>Smile!</h3>
        <small>This will be your picture on your ID.</small>
        <br>
        <br>
        <input id="upload_input" type="file" accept="image/*" capture="camera" name="picture" onChange="readImage(this);" style="display:none" />
        <div id="upload_image" class="upload_image_container">
            <img id="image" src="" alt="your image" style="display:none" />
            <i id="imageplaceholder" class="fa fa-picture-o"></i>
        </div>

        <!-- <div id="container" name='cont' class="container-fluid no-padding ">
            <video autoplay="true" id="videoElement" width="100%" name='vid'>

            </video>
            <canvas id="CANVAS" name="CANVAS" width="100%">Your browser does not support Canvas.</canvas>
        </div>

        <a id="download" download="face.jpg">
            <button onclick="myFunction()" style="margin: 20px 250px auto " class="btn btn-primary dropdown-toggle" type="button">
                capture
            </button>
        </a> -->
    </div>
</section>