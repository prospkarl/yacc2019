<style media="screen">
.my-button{

  line-height: 2;
  background: #F65924;
  color: #fff;
  border: none;
  font-weight: bold;
  font-size: 15px;
  border-radius: 1em;
  padding: 4px 2em;
  width: 100%
}
</style>
<div class="wrapper">

    <form id="login" method="POST" action="<?= base_url('login/auth'); ?> " enctype="multipart/form-data" >

        <div id="wizard" style="width: 500px; padding: 4em 5em;">

            <div class="title">
                <h1>Login</h1>
            </div>
            <section>
              <div class="form-holder active">
                <input type="text" name="username" placeholder="Username" class="form-control" required>
              </div>
              <div class="form-holder">
                <input type="password" name="password" placeholder="Password" class="form-control" required>
              </div>
              <button class="my-button" type="submit">Login</button>
            </section>
        </div>

    </form>
    <?php if ($this->session->flashdata('error')): ?>
      <script>
        alert('<?= $this->session->flashdata('error') ?>');
      </script>
    <?php endif; ?>
