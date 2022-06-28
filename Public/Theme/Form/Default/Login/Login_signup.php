<input type="hidden" name="weixin" value="<?= !empty($_POST['weixin']) ? $label->xss($_POST['weixin']) : '' ?>">

<?php if (!empty($registerForm['account'])): ?>
    <div class="loginFlow">
        <input type="text" name="account" class="pes-login-input" placeholder="登录账号" autofocus required="required">
    </div>
<?php endif; ?>


<div class="loginFlow">
    <input type="text" maxlength="10" name="name" class="pes-login-input"
           value="<?= !empty($_POST['name']) ? $label->xss($_POST['name']) : '' ?>" placeholder="用户名称"
           required="required">
</div>

<?php if (!empty($registerForm['email'])): ?>
    <div class="loginFlow">
        <input type="email" name="email" class="pes-login-input" placeholder="邮箱地址" required="required">
    </div>
<?php endif; ?>

<?php if (!empty($registerForm['phone'])): ?>
    <div class="loginFlow">
        <input type="text" name="phone" class="pes-login-input" placeholder="手机号码" required="required">
    </div>
<?php endif; ?>


<div class="loginFlow">
    <input type="password" name="password" class="pes-login-input" placeholder="密码" minlength="6"
           data-am-popover="{trigger:'focus', theme: 'danger sm', content: '请输入不小于6位数的密码'}" required="required">
</div>

<div class="loginFlow">
    <input type="password" name="repassword" class="pes-login-input" placeholder="确认密码" minlength="6"
           data-am-popover="{trigger:'focus', theme: 'danger sm', content: '请输入不小于6位数的密码'}" required="required">
</div>

<div class="login-verify">
    <div class="am-alert am-alert-secondary am-text-center">
        <span class="am-text-xs am-block am-margin-bottom-xs">请将图中的字符输入在验证码输入框</span>
        <img src="<?= $label->url('Index-verify') ?>" class="refresh-verify am-text-center">
    </div>
    <div class="loginFlow">
        <input type="text" class="pes-login-input login-verify" name="verify" placeholder="验证码"
               maxlength="<?= $system['verifyLength'] ?>" autocomplete="off" required>
    </div>
</div>


<div class="am-cf login-options am-text-sm">
    <div class="am-fl">
        已有<?= $system['siteTitle'] ?>账号？<a href="<?= $label->url('Login-index') ?>" class="login-signup-link">立即登录!</a>
    </div>
    <div class="am-fr">

    </div>
</div>


<button type="submit" class="am-btn am-btn-primary am-radius am-btn-sm am-margin-top-sm am-btn-block">注册</button>