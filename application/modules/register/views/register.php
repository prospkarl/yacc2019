<div class="wrapper">
    <form id="regform" method="POST" action="<?= base_url('register/reguser'); ?> " enctype="multipart/form-data" >
        <div id="wizard">
            <div class="title">
                <h1>Gravity 2019</h1>
                <h4>Registration Form</h4>
            </div>

            <!-- SECTION 1 -->
            <?php include('sections/section1.php');?>

            <!-- SECTION 2 -->
            <?php include('sections/section2.php');  ?>

            <!-- SECTION 3 -->
            <?php include('sections/section3.php'); ?>

        </div>
    </form>