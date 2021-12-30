<div class="am-panel am-panel-default">
    <div class="am-panel-bd">

        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">开放注册<i class="am-text-danger">*</i></label>
                    <label class="am-radio-inline">
                        <input type="radio" value="1" name="open_register" required="" <?= $open_register['value'] == '1' ? 'checked="checked"' : '' ?>> 开启
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" value="0" name="open_register" required="" <?= $open_register['value'] == '0' ? 'checked="checked"' : '' ?>> 关闭
                    </label>
                    <div class="pes-alert pes-alert-info am-text-xs " >
                        <i class="am-icon-lightbulb-o"></i> 关闭注册需要手动添加客户。(微信公众号登录注册不受影响，仅限快速注册)
                    </div>
                </div>
            </div>
        </div>

        <hr class="am-margin-top-0 am-divider-default"/>
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">客户注册是否需要审核<i class="am-text-danger">*</i></label>
                    <label class="am-radio-inline">
                        <input type="radio" value="0" name="member_review" required="" <?= $member_review['value'] == '0' ? 'checked="checked"' : '' ?>> 开启审核
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" value="1" name="member_review" required="" <?= $member_review['value'] == '1' ? 'checked="checked"' : '' ?>> 关闭审核
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" value="2" name="member_review" required="" <?= $member_review['value'] == '2' ? 'checked="checked"' : '' ?>> 邮件激活验证
                    </label>
                    <div class="pes-alert pes-alert-info am-text-xs " >
                        <i class="am-icon-lightbulb-o"></i> 注册的客户是否需要进行审核。选择邮件激活验证的话，用户点击邮件的链接地址则完成审核。
                    </div>
                </div>
            </div>
        </div>

        <hr class="am-margin-top-0 am-divider-default"/>
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">客户登录方式<i class="am-text-danger">*</i></label>
                    <label class="am-radio-inline">
                        <input type="radio" value="0" name="member_login" required="" <?= $member_login['value'] == '0' ? 'checked="checked"' : '' ?>> 邮箱地址
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" value="1" name="member_login" required="" <?= $member_login['value'] == '1' ? 'checked="checked"' : '' ?>> 账号
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" value="2" name="member_login" required="" <?= $member_login['value'] == '2' ? 'checked="checked"' : '' ?>> 手机号码
                    </label>
                </div>
            </div>
        </div>

        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">注册填写选项<i class="am-text-danger">*</i></label>
                    <label class="am-checkbox-inline">
                        <input type="checkbox" value="email" name="register_form[email]"  <?= $register_form['email'] == 'email' ? 'checked="checked"' : '' ?> > 邮箱地址
                    </label>
                    <label class="am-checkbox-inline">
                        <input type="checkbox" value="account" name="register_form[account]"  <?= $register_form['account'] == 'account' ? 'checked="checked"' : '' ?>> 账号
                    </label>
                    <label class="am-checkbox-inline">
                        <input type="checkbox" value="phone" name="register_form[phone]"  <?= $register_form['phone'] == 'phone' ? 'checked="checked"' : '' ?>> 手机号码
                    </label>
                </div>
                <div class="pes-alert pes-alert-info am-text-xs " >
                    <i class="am-icon-lightbulb-o"></i> 更改此选项时，请确认网站当前客户账号审核规则。否则将会导致客户无法完成正常注册流程！
                </div>
            </div>
        </div>

        <hr class="am-margin-top-0 am-divider-default"/>
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">微信公众号注册需要填写完整的用户资料<i class="am-text-danger">*</i></label>
                    <label class="am-radio-inline">
                        <input type="radio" value="0" name="weixinRegister" required="" <?= $weixinRegister['value'] == '0' ? 'checked="checked"' : '' ?>> 关闭
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" value="1" name="weixinRegister" required="" <?= $weixinRegister['value'] == '1' ? 'checked="checked"' : '' ?>> 开启
                    </label>
                    <div class="pes-alert pes-alert-info am-text-xs " >
                        <i class="am-icon-lightbulb-o"></i> 考虑用户体验，默认从微信公众号访问系统的，都开启快速注册和绑定账号。若您希望用户填写完整资料才可以完成账号注册，请选择开启本选项。
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>