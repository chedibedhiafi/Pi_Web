<?php
if(!class_exists('CaptchaConfiguration'))
{
    return;
}

return ['ExampleCaptchaUserRegistration' => ['userInputID' => 'captchaCode', 'ImageWidth' => 250, 'ImageHeight' => 50,],];
