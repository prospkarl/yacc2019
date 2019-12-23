<script src="../assets/js/plugins/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="../assets/js/domtoimage.js" charset="utf-8"></script>
<script src="../assets/js/filesaver.js" charset="utf-8"></script>
<?php include 'style.php'; ?>
<div id="wholePage" class="a4">
  <?php foreach ($print as $key => $info): ?>
    <div class="id-container">
      <div class="row">
        <div class="w2">
          <img class="logo" src="<?= base_url() ?>assets/images/idlogo.png" alt="">
        </div>
        <div class="w2" style="text-align:right">
          <img class="avatar" src="<?= base_url() ?>uploads/<?= $info['picture'] ?>" alt="">
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">NAME</label>
          <p class="montserrat"><?= $info['full_name'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">CHURCH</label>
          <p class="montserrat"><?= $info['church'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">PROVINCE</label>
          <p class="montserrat"><?= $info['province'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data" style="width: 550px;margin-right: 0;">
          <label class="montserrat" style=" left: 0; transform: none; ">LECTURE</label>
          <p class="montserrat"></p>
        </div>
        <div class="data" style="width: 300px;margin-left: 65px;">
          <label class="montserrat" style=" right: 0; transform: none; ">HATAK</label>
          <p class="montserrat"><?= $info['group_name'] ?></p>
        </div>
      </div>
      <div class="row bottom">
        <p class="montserrat" style="text-align:right;">CITY OF NAGA, CEBU</p>
        <p class="montserrat" style="color:#F45A25;">NAGA NATIONAL HIGH SCHOOL</p>
        <p class="montserrat" style="text-align:left">DECEMBER 26-30, 20  19</p>
      </div>
      <div class="row footer" style="justify-content:center">
        <div class="row" style="justify-content:flex-end">
          <img style="width:40px; height:40px" src="../assets/images/facebook.png" alt="">
          <p class="montserrat" style="width:336px">YACC 2019 - GRAVITY</p>
        </div>
        <div class="row" style="margin-left:1em">
          <p class="montserrat" style="margin:0; color:#F45920">#</p>
          <p class="montserrat" style="margin:0">YACC2019</p>
          <p class="montserrat" style="margin:0; color:#F45920">GRAVITY</p>
        </div>
      </div>
    </div>
    <div class="id-container">
      <div class="row">
        <div class="w2">
          <img class="logo" src="<?= base_url() ?>assets/images/idlogo.png" alt="">
        </div>
        <div class="w2" style="text-align:right">
          <img class="avatar" src="<?= base_url() ?>uploads/<?= $info['picture'] ?>" alt="">
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">NAME</label>
          <p class="montserrat"><?= $info['full_name'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">CHURCH</label>
          <p class="montserrat"><?= $info['church'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">PROVINCE</label>
          <p class="montserrat"><?= $info['province'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data" style="width: 550px;margin-right: 0;">
          <label class="montserrat" style=" left: 0; transform: none; ">LECTURE</label>
          <p class="montserrat"></p>
        </div>
        <div class="data" style="width: 300px;margin-left: 65px;">
          <label class="montserrat" style=" right: 0; transform: none; ">HATAK</label>
          <p class="montserrat"><?= $info['group_name'] ?></p>
        </div>
      </div>
      <div class="row bottom">
        <p class="montserrat" style="text-align:right;">CITY OF NAGA, CEBU</p>
        <p class="montserrat" style="color:#F45A25;">NAGA NATIONAL HIGH SCHOOL</p>
        <p class="montserrat" style="text-align:left">DECEMBER 26-30, 20  19</p>
      </div>
      <div class="row footer" style="justify-content:center">
        <div class="row" style="justify-content:flex-end">
          <img style="width:40px; height:40px" src="../assets/images/facebook.png" alt="">
          <p class="montserrat" style="width:336px">YACC 2019 - GRAVITY</p>
        </div>
        <div class="row" style="margin-left:1em">
          <p class="montserrat" style="margin:0; color:#F45920">#</p>
          <p class="montserrat" style="margin:0">YACC2019</p>
          <p class="montserrat" style="margin:0; color:#F45920">GRAVITY</p>
        </div>
      </div>
    </div>
    <div class="id-container">
      <div class="row">
        <div class="w2">
          <img class="logo" src="<?= base_url() ?>assets/images/idlogo.png" alt="">
        </div>
        <div class="w2" style="text-align:right">
          <img class="avatar" src="<?= base_url() ?>uploads/<?= $info['picture'] ?>" alt="">
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">NAME</label>
          <p class="montserrat"><?= $info['full_name'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">CHURCH</label>
          <p class="montserrat"><?= $info['church'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">PROVINCE</label>
          <p class="montserrat"><?= $info['province'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data" style="width: 550px;margin-right: 0;">
          <label class="montserrat" style=" left: 0; transform: none; ">LECTURE</label>
          <p class="montserrat"></p>
        </div>
        <div class="data" style="width: 300px;margin-left: 65px;">
          <label class="montserrat" style=" right: 0; transform: none; ">HATAK</label>
          <p class="montserrat"><?= $info['group_name'] ?></p>
        </div>
      </div>
      <div class="row bottom">
        <p class="montserrat" style="text-align:right;">CITY OF NAGA, CEBU</p>
        <p class="montserrat" style="color:#F45A25;">NAGA NATIONAL HIGH SCHOOL</p>
        <p class="montserrat" style="text-align:left">DECEMBER 26-30, 20  19</p>
      </div>
      <div class="row footer" style="justify-content:center">
        <div class="row" style="justify-content:flex-end">
          <img style="width:40px; height:40px" src="../assets/images/facebook.png" alt="">
          <p class="montserrat" style="width:336px">YACC 2019 - GRAVITY</p>
        </div>
        <div class="row" style="margin-left:1em">
          <p class="montserrat" style="margin:0; color:#F45920">#</p>
          <p class="montserrat" style="margin:0">YACC2019</p>
          <p class="montserrat" style="margin:0; color:#F45920">GRAVITY</p>
        </div>
      </div>
    </div>
    <div class="id-container">
      <div class="row">
        <div class="w2">
          <img class="logo" src="<?= base_url() ?>assets/images/idlogo.png" alt="">
        </div>
        <div class="w2" style="text-align:right">
          <img class="avatar" src="<?= base_url() ?>uploads/<?= $info['picture'] ?>" alt="">
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">NAME</label>
          <p class="montserrat"><?= $info['full_name'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">CHURCH</label>
          <p class="montserrat"><?= $info['church'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data">
          <label class="montserrat">PROVINCE</label>
          <p class="montserrat"><?= $info['province'] ?></p>
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <div class="data" style="width: 550px;margin-right: 0;">
          <label class="montserrat" style=" left: 0; transform: none; ">LECTURE</label>
          <p class="montserrat"></p>
        </div>
        <div class="data" style="width: 300px;margin-left: 65px;">
          <label class="montserrat" style=" right: 0; transform: none; ">HATAK</label>
          <p class="montserrat"><?= $info['group_name'] ?></p>
        </div>
      </div>
      <div class="row bottom">
        <p class="montserrat" style="text-align:right;">CITY OF NAGA, CEBU</p>
        <p class="montserrat" style="color:#F45A25;">NAGA NATIONAL HIGH SCHOOL</p>
        <p class="montserrat" style="text-align:left">DECEMBER 26-30, 20  19</p>
      </div>
      <div class="row footer" style="justify-content:center">
        <div class="row" style="justify-content:flex-end">
          <img style="width:40px; height:40px" src="../assets/images/facebook.png" alt="">
          <p class="montserrat" style="width:336px">YACC 2019 - GRAVITY</p>
        </div>
        <div class="row" style="margin-left:1em">
          <p class="montserrat" style="margin:0; color:#F45920">#</p>
          <p class="montserrat" style="margin:0">YACC2019</p>
          <p class="montserrat" style="margin:0; color:#F45920">GRAVITY</p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<img id="result" src="" alt="">

<script>
$(document).ready(function(){
  var node = document.getElementById('wholePage');

  domtoimage.toBlob(node, {quality: 1})
      .then(function (blob) {
          window.saveAs(blob, 'my-node.png');
      });
});
</script>
