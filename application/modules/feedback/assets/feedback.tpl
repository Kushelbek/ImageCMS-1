<div class="frame-inside page-text">
    <div class="container">
        <div class="text">
            <div class="container">
                <div class="content center">
                    <div id="titleExt"><h1>{widget('path')}<span class="ext">{lang('Contacts', 'feedback')}</span></h1></div>
                    <div id="contact">
                        <div class="left">
                            {if $form_errors}
                                <div class="errors">
                                    {$form_errors}
                                </div>
                            {/if}

                            {if $message_sent}
                                <div style="color: green;">
                                    {lang('Your message has been sent.', 'feedback')}
                                </div>
                            {/if}

                            <form action="{site_url('feedback')}" method="post">
                                <div class="textbox" style="margin-top: 15px;">
                                    <label for="name"><b>{lang('Your name', 'feedback')}</b></label>
                                            {if $validation}
                                        <div class="error" style="color: red">
                                            {echo $validation->error('name')}
                                        </div>
                                    {/if}
                                    <input type="text" id="name" name="name" class="text" value="{if $_POST.name}{$_POST.name}{/if}"
                                           placeholder="{lang('Your name', 'feedback')}"/>
                                    <span class="must">*</span>
                                </div>

                                <div class="textbox" style="margin-top: 15px;">
                                    <label for="email"><b>{lang('Email')}</b></label>
                                            {if $validation}
                                        <div class="error" style="color: red">
                                            {echo $validation->error('email')}
                                        </div>
                                    {/if}
                                    <input type="text" id="email" name="email" class="text" value="{if $_POST.email}{$_POST.email}{/if}" placeholder="{lang('Email')}"/>
                                    <span class="must">*</span>
                                </div>

                                <div class="textbox" style="margin-top: 15px;">
                                    <label for="theme"><b>{lang('Subject', 'feedback')}</b></label>
                                            {if $validation}
                                        <div class="error" style="color: red">
                                            {echo $validation->error('theme')}
                                        </div>
                                    {/if}
                                    <input type="text" id="theme" name="theme" class="text" value="{if $_POST.theme}{$_POST.theme}{/if}" placeholder="{lang('Subject', 'feedback')}"/>
                                    <span class="must">*</span>
                                </div>

                                <div class="clearfix"></div>
                                <div class="textbox" style="margin-top: 15px;">
                                    <label for="message"><b>{lang('Message', 'feedback')}</b></label>
                                            {if $validation}
                                        <div class="error" style="color: red">
                                            {echo $validation->error('message')}
                                        </div>
                                    {/if}
                                    <textarea cols="45" rows="10" name="message" id="message" placeholder="{lang('Message text', 'feedback')}">{if $_POST.message}{$_POST.message}{/if}</textarea>
                                    <span class="must_textarea">*</span>
                                </div>

                                <div class="comment_form_info">
                                    {if $captcha_type =='captcha'}
                                        <div class="textbox captcha" style="margin-top: 15px;">
                                            <label for="captcha"><b>{lang('Protection code', 'feedback')}</b></label>
                                            <div>{$cap_image}</div>
                                            {if $validation}
                                                <div class="error" style="color: red">
                                                    {echo $validation->error('captcha')}
                                                </div>
                                            {/if}
                                            <input type="text" name="captcha" style="width: 150px" id="recaptcha_response_field" value="" placeholder="{lang('Enter protection code', 'feedback')}"/>
                                            <span class="must_no_float">*</span>
                                        </div>
                                    {/if}
                                </div>

                                <div style="margin-top: 15px; margin-left: -5px; float: left;">
                                    <div class="btn s-p btn-form m-b_15">
                                        <input type="submit" id="submit" class="submit" value="{lang('Send', 'feedback')}" />
                                    </div>
                                </div>
                        </div>
                        {form_csrf()}
                        </form>
                    </div>
                    <div class="right">
                        <div id="detail">
                            {//widget('contacts')}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>