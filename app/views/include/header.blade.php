 <div id="header" class="clearfix">
    <div id="header-wrapper" class="clearfix ">
        <div class="float-right mrg20R mrg20T">
            <a href="#" class="btn medium hover-green popover-button black-modal-80" title="" >
                <span class="button-content font-white">Login</span>
            </a>
            <div class="hide login-pop" id="black-modal-80" title="Login">
                <div class="pad10A">
                   {{ Form::open() }}
                        <div class="content-box-wrapper">

                            <div class="form-row">
                                <div class="form-label col-md-3">
                                    {{ Form::label('Email')}}
                                </div>
                                <div class="form-input">
                                    <input placeholder="" class="col-md-8" type="text" name="id" id="" value="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label col-md-3">
                                    {{ Form::label('Password')}}
                                </div>
                                <div class="form-input">
                                    <input placeholder="" class="col-md-8" type="password" name="id" id="" value="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    {{ Form::label('')}}
                                </div>
                                <div class="form-checkbox-radio col-md-4">
                                    <div class="checker" id="uniform-remember-password"><span class="ui-state-default btn radius-all-4"><input type="checkbox" class="custom-checkbox" name="remember-password" id="remember-password"><i class="glyph-icon icon-check"></i></span></div>
                                    <label for="remember-password" class="pad5L">Remember</label>
                                </div>
                                <div class="form-checkbox-radio text-right col-md-6">
                                    <a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Forgot your password?</a>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label col-md-3">
                                    <label></label>
                                </div>
                                <div class="form-input" align="center">
                                    <button type="submit" href="#" class="btn medium bg-orange" >
                                        <span class="button-content">Login</span>
                                    </button><br/>
                                    OR
                                    <br/>
                                    <a href="javascript:;" class="btn small bg-facebook">
                                        <span class="glyph-icon icon-separator">
                                            <i class="glyph-icon icon-facebook"></i>
                                        </span>
                                        <span class="button-content">
                                            Login with Facebook
                                        </span>
                                    </a>
                                    <a href="javascript:;" class="btn small bg-google">
                                        <span class="glyph-icon icon-separator">
                                            <i class="glyph-icon icon-google"></i>
                                        </span>
                                        <span class="button-content">
                                            Login with Google
                                        </span>
                                    </a>
                                </div>
                            </div>
                        <!-- Select Basic -->
                        </div>
                        {{ Form::close() }}
                </div>
                <div class="ui-dialog mrg15T hide" id="login-forgot" style="position: relative !important;">
                    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                        <span class="ui-dialog-title">Recover password</span>
                    </div>
                        <div class="pad20A ui-dialog-content ui-widget-content">
                                                        <div class="form-row">
                                <div class="form-label col-md-3">
                                    <label for="">
                                        Email address:
                                    </label>
                                </div>
                                <div class="form-input col-md-8">
                                    <div class="form-input">
                                        <input placeholder="Email address" type="text" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui-dialog-buttonpane text-center">
                            <a href="#" class="btn medium bg-red" title="">
                                <span class="button-content">Recovery</span>
                            </a>                           
                        </div>
                    </div>
            </div>

            <span class="font-white">|</span>
            <a href="#" class="btn medium hover-green black-modal-60" title="">
                <span class="button-content font-white">Signup</span>
            </a>
            <div class="hide login-pop" id="black-modal-60" title="Register">
                <div class="pad10A">
                   {{ Form::open() }}
                        <div class="content-box-wrapper">

                            <div class="form-row">
                                <div class="form-label col-md-3">
                                    {{ Form::label('Email')}}
                                </div>
                                <div class="form-input">
                                    <input placeholder="" class="col-md-8" type="text" name="id" id="" value="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label col-md-3">
                                    {{ Form::label('Password')}}
                                </div>
                                <div class="form-input">
                                    <input placeholder="" class="col-md-8" type="password" name="id" id="" value="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    {{ Form::label('')}}
                                </div>
                                <div class="form-checkbox-radio col-md-4">
                                    <div class="checker" id="uniform-remember-password"><span class="ui-state-default btn radius-all-4"><input type="checkbox" class="custom-checkbox" name="remember-password" id="remember-password"><i class="glyph-icon icon-check"></i></span></div>
                                    <label for="remember-password" class="pad5L">Remember</label>
                                </div>
                                <div class="form-checkbox-radio text-right col-md-6">
                                    <a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Forgot your password?</a>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label col-md-3">
                                    <label></label>
                                </div>
                                <div class="form-input">
                                    <button type="submit" href="#" class="btn medium bg-orange" >
                                        <span class="button-content">Login</span>
                                    </button>
                                    <a href="javascript:;" class="btn medium bg-facebook">
                                        <span class="glyph-icon icon-separator">
                                            <i class="glyph-icon icon-facebook"></i>
                                        </span>
                                        <span class="button-content">
                                            Login with Facebook
                                        </span>
                                    </a>
                                </div>
                            </div>
                        <!-- Select Basic -->
                        </div>
                        {{ Form::close() }}
                </div>
                <div class="ui-dialog mrg15T hide" id="login-forgot" style="position: relative !important;">
                    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                        <span class="ui-dialog-title">Recover password</span>
                    </div>
                        <div class="pad20A ui-dialog-content ui-widget-content">
                                                        <div class="form-row">
                                <div class="form-label col-md-3">
                                    <label for="">
                                        Email address:
                                    </label>
                                </div>
                                <div class="form-input col-md-8">
                                    <div class="form-input">
                                        <input placeholder="Email address" type="text" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui-dialog-buttonpane text-center">
                            <a href="#" class="btn medium bg-red" title="">
                                <span class="button-content">Recovery</span>
                            </a>                           
                        </div>
                    </div>
            </div>
        </div>
        <div class="logo">{{HTML::image('img/logo.png')}}</div>
        
    </div>
   
</div><!-- #page-header -->