<style type="text/css">
    *{margin:0;padding: 0;}
    body{background: #444 url('<?= STATIC_DOMAIN;?>/img/carbon_fibre_big.png')}
    .loginBox{width:420px;height:230px;padding:0 20px;border:1px solid #fff; color:#000; margin-top:40px; border-radius:8px;background: white;box-shadow:0 0 15px #222; background: -moz-linear-gradient(top, #fff, #efefef 8%);background: -webkit-gradient(linear, 0 0, 0 100%, from(#f6f6f6), to(#f4f4f4));font:11px/1.5em 'Microsoft YaHei' ;position: absolute;left:50%;top:50%;margin-left:-210px;margin-top:-115px;}
    .loginBox h2{height:45px;font-size:20px;font-weight:normal;}
    .loginBox .left{border-right:1px solid #ccc;height:100%;padding-right: 20px; }    
</style>
<div class="container">
  <form method='post' action=<?= yii::$app->request->getUrl(); ?>
    <section class="loginBox container-fluid">
      <section class="col-md-3">
        <h2>商户登录</h2>
        <p><input type="text" name="username" /></p>
        <p><input type="text" name="password" /></p>
        <section class="container-fluid">
          <label><input type="checkbox" name="rememberme" />下次自动登录</label>
          <input type="submit" value=" 登录 " class="btn btn-primary">
        </section>
      </section>
    </section><!-- /loginBox -->
  </form>
</div> <!-- /container -->
