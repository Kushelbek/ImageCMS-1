{#
/**
* @file template for displaying login page
*/
#}
 
<!-- Adds meta tag for this page -->
{$this->registerMeta("ROBOTS", "NOINDEX, NOFOLLOW")}
<article class="container">
    <div class="t-a_c">
        <div class="row d_i-b t-a_l">
            <div class="span6">
                <div class="frameGroupsForm">
                    <div class="header_title">
                        {lang('Авторизация','webinger')}
                    </div>
                    <div class="inside_padd">
                        <div class="horizontal_form standart_form">
                            <!-- login form -->
                            <form method="post" id="login_form" onsubmit="ImageCMSApi.formAction('/auth/authapi/login', 'login_form');
                                                return false;">
                                <label>
                                    <span class="title">{lang('Почта','webinger')}</span>
                                    <span class="frame_form_field">
                                        <span class="icon-email"></span>
                                        <!-- input for email -->
                                        <input value="{lang('Введите Ваш логин', 'webinger')}" type="text" name="email" onfocus="if (this.value == '{lang('Введите Ваш логин', 'webinger')}')
                                                    this.value = '';" onblur="if (this.value == '')
                                                    this.value = '{lang('Введите Ваш логин', 'webinger')}';"/>
                                        <!-- validation error container -->
                                        <label id="for_email" class="for_validations"></label>
                                    </span>
                                </label>
                                <label>
                                    <span class="title">{lang('Пароль','webinger')}</span>
                                    <span class="frame_form_field">
                                        <span class="icon-password"></span>
                                        <!-- input for password -->
                                        <input type="password" name="password" value="{lang('Пароль','webinger')}" onfocus="if (this.value == '{lang('Пароль','webinger')}')
                                                    this.value = '';" onblur="if (this.value == '')
                                                    this.value = '{lang('Пароль','webinger')}';"/>
                                        <!-- validation error container -->
                                        <label id="for_password" class="for_validations"></label>
                                    </span>
                                </label>
                                <!-- captcha block -->
                                <lable id="captcha_block">
                                    {if $cap_image}
                                        <span class="title">{lang('Код протекции','webinger')}</span>
                                        <span class="frame_form_field">
                                            {if $captcha_type == 'captcha'}
                                                <input type="text" name="captcha" value="{lang('Код протекции','webinger')}" onfocus="if (this.value == '{lang('Код протекции','webinger')}')
                                                    this.value = '';" onblur="if (this.value == '')
                                                    this.value = '{lang('Код протекции','webinger')}';"/>
                                                <span class="help_inline">{$cap_image}</span>
                                                <label id="for_captcha" class="for_validations"></label>
                                            {/if}
                                        </span>
                                    {/if}
                                </lable>
                                <label>
                                    <span class="title">{lang('Запомнить меня','webinger')}</span>
                                    <span class="frame_form_field">
                                        <!--input for remember me option-->
                                        <input type="checkbox" name="remember" value="1" id="remember" class="d_i v-a_b"/>
                                    </span>
                                </label>
                                <div class="frameLabel">
                                    <span class="title">&nbsp;</span>
                                    <span class="frame_form_field c_n">
                                        <!--forgot password link-->
                                        <a href="/auth/forgot_password" class="d_i v-a_m neigh_btn m-r_45">{lang('Забыли Пароль?','webinger')}</a>
                                        <!--registration link-->
                                        <a href="{site_url($modules.auth . '/register')}" class="d_i v-a_m neigh_btn m-r_45">{lang('Регистрация','webinger')}</a>
                                        <!--submit button-->
                                        <input type="submit" value="{lang('Войти', 'webinger')}" class="btn btn_cart f_r" />
                                    </span>
                                </div>
                                <!--security token-->
                                {form_csrf()}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
