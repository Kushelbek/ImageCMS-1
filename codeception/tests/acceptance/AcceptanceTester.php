<?php //[STAMP] d3beeaef08e713f57e9617f36c35210c

use Codeception\Module\AcceptanceHelper;
use Codeception\Module\WebDriver;
use Codeception\Module\Db;
use Codeception\Module\Cli;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void haveFriend($name)
*/
class AcceptanceTester extends \Codeception\Actor
{
   
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\AcceptanceHelper::grabTagCount()
     */
    public function grabTagCount($I, $tags, $position = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabTagCount', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are equal.
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     *
     * @return mixed
     * @see \Codeception\Module\AcceptanceHelper::assertEquals()
     */
    public function assertEquals($expected, $actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertEquals', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fails the test with message.
     *
     * @param $message
     * @see \Codeception\Module\AcceptanceHelper::fail()
     */
    public function fail($message) {
        return $this->scenario->runStep(new \Codeception\Step\Action('fail', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\AcceptanceHelper::grabClassCount()
     */
    public function grabClassCount($I, $class) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabClassCount', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\AcceptanceHelper::scrollToElement()
     */
    public function scrollToElement($I, $CSSelement) {
        return $this->scenario->runStep(new \Codeception\Step\Action('scrollToElement', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grab text from all elements selected with JQUERY
     * and write them to array
     * 
     * @todo normalize 
     * 
     * @param   AcceptanceTester    $I                  controller
     * @param   string              $JQuerySelector     JQueryCssSelector     
     * @return  array               Texts from elements
     * 
     * div.body_category div.row-category div.share_alt a.pjax
     * @see \Codeception\Module\AcceptanceHelper::grabTextFromAllElements()
     */
    public function grabTextFromAllElements($I, $JQuerySelector) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabTextFromAllElements', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * click all finded buttons together
     * can click n times if pased $clicktimes
     * can set the wait between clicks
     * 
     * @param AcceptanceTester  $I              controller
     * @param string            $JQeryElements  JQ_CSS_Slecector  
     * @param int               $clickTimes     times
     * @param int               $deelay         pause between clicks
     * @return null null
     * 
     * .btn.expandButton
     * @see \Codeception\Module\AcceptanceHelper::clickAllElements()
     */
    public function clickAllElements($I, $JQeryElements, $clickTimes = null, $deelay = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('clickAllElements', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grab amount of el-ts selected by JQuery
     * 
     * @param   AcceptanceTester    $I
     * @param   string              $JQerySelector
     * @return  string              Amount of elements
     * @see \Codeception\Module\AcceptanceHelper::grabCCSAmount()
     */
    public function grabCCSAmount($I, $JQerySelector) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabCCSAmount', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sets 'url' configuration parameter to hosts subdomain.
     * It does not open a page on subdomain. Use `amOnPage` for that
     *
     * ``` php
     * <?php
     * // If config is: 'http://mysite.com'
     * // or config is: 'http://www.mysite.com'
     * // or config is: 'http://company.mysite.com'
     *
     * $I->amOnSubdomain('user');
     * $I->amOnPage('/');
     * // moves to http://user.mysite.com/
     * ?>
     * ```
     *
     * @param $subdomain
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::amOnSubdomain()
     */
    public function amOnSubdomain($subdomain) {
        return $this->scenario->runStep(new \Codeception\Step\Condition('amOnSubdomain', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Makes a screenshot of current window and saves it to `tests/_log/debug`.
     *
     * ``` php
     * <?php
     * $I->amOnPage('/user/edit');
     * $I->makeScreenshot('edit_page');
     * // saved to: tests/_log/debug/edit_page.png
     * ?>
     * ```
     *
     * @param $name
     * @see \Codeception\Module\WebDriver::makeScreenshot()
     */
    public function makeScreenshot($name) {
        return $this->scenario->runStep(new \Codeception\Step\Action('makeScreenshot', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Resize current window
     *
     * Example:
     * ``` php
     * <?php
     * $I->resizeWindow(800, 600);
     *
     * ```
     *
     * @param int $width
     * @param int $height
     * @see \Codeception\Module\WebDriver::resizeWindow()
     */
    public function resizeWindow($width, $height) {
        return $this->scenario->runStep(new \Codeception\Step\Action('resizeWindow', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that cookie is set.
     *
     * @param $cookie
     *
     * @return mixed
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeCookie()
     */
    public function canSeeCookie($cookie) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeCookie', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that cookie is set.
     *
     * @param $cookie
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::seeCookie()
     */
    public function seeCookie($cookie) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeCookie', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that cookie doesn't exist
     *
     * @param $cookie
     *
     * @return mixed
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeCookie()
     */
    public function cantSeeCookie($cookie) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeCookie', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that cookie doesn't exist
     *
     * @param $cookie
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::dontSeeCookie()
     */
    public function dontSeeCookie($cookie) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeCookie', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sets a cookie.
     *
     * @param $cookie
     * @param $value
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::setCookie()
     */
    public function setCookie($cookie, $value) {
        return $this->scenario->runStep(new \Codeception\Step\Action('setCookie', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Unsets cookie
     *
     * @param $cookie
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::resetCookie()
     */
    public function resetCookie($cookie) {
        return $this->scenario->runStep(new \Codeception\Step\Action('resetCookie', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grabs a cookie value.
     *
     * @param $cookie
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::grabCookie()
     */
    public function grabCookie($cookie) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabCookie', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opens the page.
     * Requires relative uri as parameter
     *
     * Example:
     *
     * ``` php
     * <?php
     * // opens front page
     * $I->amOnPage('/');
     * // opens /register page
     * $I->amOnPage('/register');
     * ?>
     * ```
     *
     * @param $page
     * @see \Codeception\Module\WebDriver::amOnPage()
     */
    public function amOnPage($page) {
        return $this->scenario->runStep(new \Codeception\Step\Condition('amOnPage', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check if current page contains the text specified.
     * Specify the css selector to match only specific region.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->see('Logout'); // I can suppose user is logged in
     * $I->see('Sign Up','h1'); // I can suppose it's a signup page
     * $I->see('Sign Up','//body/h1'); // with XPath
     * ?>
     * ```
     *
     * @param      $text
     * @param null $selector
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::see()
     */
    public function canSee($text, $selector = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('see', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check if current page contains the text specified.
     * Specify the css selector to match only specific region.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->see('Logout'); // I can suppose user is logged in
     * $I->see('Sign Up','h1'); // I can suppose it's a signup page
     * $I->see('Sign Up','//body/h1'); // with XPath
     * ?>
     * ```
     *
     * @param      $text
     * @param null $selector
     * @see \Codeception\Module\WebDriver::see()
     */
    public function see($text, $selector = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('see', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check if current page doesn't contain the text specified.
     * Specify the css selector to match only specific region.
     *
     * Examples:
     *
     * ```php
     * <?php
     * $I->dontSee('Login'); // I can suppose user is already logged in
     * $I->dontSee('Sign Up','h1'); // I can suppose it's not a signup page
     * $I->dontSee('Sign Up','//body/h1'); // with XPath
     * ?>
     * ```
     *
     * @param      $text
     * @param null $selector
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSee()
     */
    public function cantSee($text, $selector = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSee', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check if current page doesn't contain the text specified.
     * Specify the css selector to match only specific region.
     *
     * Examples:
     *
     * ```php
     * <?php
     * $I->dontSee('Login'); // I can suppose user is already logged in
     * $I->dontSee('Sign Up','h1'); // I can suppose it's not a signup page
     * $I->dontSee('Sign Up','//body/h1'); // with XPath
     * ?>
     * ```
     *
     * @param      $text
     * @param null $selector
     * @see \Codeception\Module\WebDriver::dontSee()
     */
    public function dontSee($text, $selector = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSee', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that page source contains text.
     *
     * ```php
     * <?php
     * $I->seeInPageSource('<link rel="apple-touch-icon"');
     * ```
     *
     * @param $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeInPageSource()
     */
    public function canSeeInPageSource($text) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeInPageSource', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that page source contains text.
     *
     * ```php
     * <?php
     * $I->seeInPageSource('<link rel="apple-touch-icon"');
     * ```
     *
     * @param $text
     * @see \Codeception\Module\WebDriver::seeInPageSource()
     */
    public function seeInPageSource($text) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeInPageSource', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that page source does not contain text.
     *
     * @param $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeInPageSource()
     */
    public function cantSeeInPageSource($text) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInPageSource', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that page source does not contain text.
     *
     * @param $text
     * @see \Codeception\Module\WebDriver::dontSeeInPageSource()
     */
    public function dontSeeInPageSource($text) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeInPageSource', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Perform a click on link or button.
     * Link or button are found by their names or CSS selector.
     * Submits a form if button is a submit type.
     *
     * If link is an image it's found by alt attribute value of image.
     * If button is image button is found by it's value
     * If link or button can't be found by name they are searched by CSS selector.
     *
     * The second parameter is a context: CSS or XPath locator to narrow the search.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * // simple link
     * $I->click('Logout');
     * // button of form
     * $I->click('Submit');
     * // CSS button
     * $I->click('#form input[type=submit]');
     * // XPath
     * $I->click('//form/*[@type=submit]');
     * // link in context
     * $I->click('Logout', '#nav');
     * // using strict locator
     * $I->click(['link' => 'Login'])'
     * ?>
     * ```
     *
     * @param $link
     * @param $context
     * @see \Codeception\Module\WebDriver::click()
     */
    public function click($link, $context = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('click', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if there is a link with text specified.
     * Specify url to match link with exact this url.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->seeLink('Logout'); // matches <a href="#">Logout</a>
     * $I->seeLink('Logout','/logout'); // matches <a href="/logout">Logout</a>
     * ?>
     * ```
     *
     * @param      $text
     * @param null $url
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeLink()
     */
    public function canSeeLink($text, $url = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeLink', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if there is a link with text specified.
     * Specify url to match link with exact this url.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->seeLink('Logout'); // matches <a href="#">Logout</a>
     * $I->seeLink('Logout','/logout'); // matches <a href="/logout">Logout</a>
     * ?>
     * ```
     *
     * @param      $text
     * @param null $url
     * @see \Codeception\Module\WebDriver::seeLink()
     */
    public function seeLink($text, $url = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeLink', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if page doesn't contain the link with text specified.
     * Specify url to narrow the results.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->dontSeeLink('Logout'); // I suppose user is not logged in
     * ?>
     * ```
     *
     * @param      $text
     * @param null $url
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeLink()
     */
    public function cantSeeLink($text, $url = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeLink', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if page doesn't contain the link with text specified.
     * Specify url to narrow the results.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->dontSeeLink('Logout'); // I suppose user is not logged in
     * ?>
     * ```
     *
     * @param      $text
     * @param null $url
     * @see \Codeception\Module\WebDriver::dontSeeLink()
     */
    public function dontSeeLink($text, $url = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeLink', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current uri contains a value
     *
     * ``` php
     * <?php
     * // to match: /home/dashboard
     * $I->seeInCurrentUrl('home');
     * // to match: /users/1
     * $I->seeInCurrentUrl('/users/');
     * ?>
     * ```
     *
     * @param $uri
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeInCurrentUrl()
     */
    public function canSeeInCurrentUrl($uri) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeInCurrentUrl', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current uri contains a value
     *
     * ``` php
     * <?php
     * // to match: /home/dashboard
     * $I->seeInCurrentUrl('home');
     * // to match: /users/1
     * $I->seeInCurrentUrl('/users/');
     * ?>
     * ```
     *
     * @param $uri
     * @see \Codeception\Module\WebDriver::seeInCurrentUrl()
     */
    public function seeInCurrentUrl($uri) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeInCurrentUrl', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current url is equal to value.
     * Unlike `seeInCurrentUrl` performs a strict check.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlEquals('/');
     * ?>
     * ```
     *
     * @param $uri
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeCurrentUrlEquals()
     */
    public function canSeeCurrentUrlEquals($uri) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeCurrentUrlEquals', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current url is equal to value.
     * Unlike `seeInCurrentUrl` performs a strict check.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlEquals('/');
     * ?>
     * ```
     *
     * @param $uri
     * @see \Codeception\Module\WebDriver::seeCurrentUrlEquals()
     */
    public function seeCurrentUrlEquals($uri) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeCurrentUrlEquals', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current url is matches a RegEx value
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlMatches('~$/users/(\d+)~');
     * ?>
     * ```
     *
     * @param $uri
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeCurrentUrlMatches()
     */
    public function canSeeCurrentUrlMatches($uri) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeCurrentUrlMatches', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current url is matches a RegEx value
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlMatches('~$/users/(\d+)~');
     * ?>
     * ```
     *
     * @param $uri
     * @see \Codeception\Module\WebDriver::seeCurrentUrlMatches()
     */
    public function seeCurrentUrlMatches($uri) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeCurrentUrlMatches', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current uri does not contain a value
     *
     * ``` php
     * <?php
     * $I->dontSeeInCurrentUrl('/users/');
     * ?>
     * ```
     *
     * @param $uri
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeInCurrentUrl()
     */
    public function cantSeeInCurrentUrl($uri) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInCurrentUrl', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current uri does not contain a value
     *
     * ``` php
     * <?php
     * $I->dontSeeInCurrentUrl('/users/');
     * ?>
     * ```
     *
     * @param $uri
     * @see \Codeception\Module\WebDriver::dontSeeInCurrentUrl()
     */
    public function dontSeeInCurrentUrl($uri) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeInCurrentUrl', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current url is not equal to value.
     * Unlike `dontSeeInCurrentUrl` performs a strict check.
     *
     * ``` php
     * <?php
     * // current url is not root
     * $I->dontSeeCurrentUrlEquals('/');
     * ?>
     * ```
     *
     * @param $uri
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeCurrentUrlEquals()
     */
    public function cantSeeCurrentUrlEquals($uri) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeCurrentUrlEquals', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current url is not equal to value.
     * Unlike `dontSeeInCurrentUrl` performs a strict check.
     *
     * ``` php
     * <?php
     * // current url is not root
     * $I->dontSeeCurrentUrlEquals('/');
     * ?>
     * ```
     *
     * @param $uri
     * @see \Codeception\Module\WebDriver::dontSeeCurrentUrlEquals()
     */
    public function dontSeeCurrentUrlEquals($uri) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeCurrentUrlEquals', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current url does not match a RegEx value
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->dontSeeCurrentUrlMatches('~$/users/(\d+)~');
     * ?>
     * ```
     *
     * @param $uri
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeCurrentUrlMatches()
     */
    public function cantSeeCurrentUrlMatches($uri) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeCurrentUrlMatches', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current url does not match a RegEx value
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->dontSeeCurrentUrlMatches('~$/users/(\d+)~');
     * ?>
     * ```
     *
     * @param $uri
     * @see \Codeception\Module\WebDriver::dontSeeCurrentUrlMatches()
     */
    public function dontSeeCurrentUrlMatches($uri) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeCurrentUrlMatches', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Takes a parameters from current URI by RegEx.
     * If no url provided returns full URI.
     *
     * ``` php
     * <?php
     * $user_id = $I->grabFromCurrentUrl('~$/user/(\d+)/~');
     * $uri = $I->grabFromCurrentUrl();
     * ?>
     * ```
     *
     * @param null $uri
     *
     * @internal param $url
     * @return mixed
     * @see \Codeception\Module\WebDriver::grabFromCurrentUrl()
     */
    public function grabFromCurrentUrl($uri = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabFromCurrentUrl', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Assert if the specified checkbox is checked.
     * Use css selector or xpath to match.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeCheckboxIsChecked('#agree'); // I suppose user agreed to terms
     * $I->seeCheckboxIsChecked('#signup_form input[type=checkbox]'); // I suppose user agreed to terms, If there is only one checkbox in form.
     * $I->seeCheckboxIsChecked('//form/input[@type=checkbox and @name=agree]');
     * ?>
     * ```
     *
     * @param $checkbox
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeCheckboxIsChecked()
     */
    public function canSeeCheckboxIsChecked($checkbox) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeCheckboxIsChecked', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Assert if the specified checkbox is checked.
     * Use css selector or xpath to match.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeCheckboxIsChecked('#agree'); // I suppose user agreed to terms
     * $I->seeCheckboxIsChecked('#signup_form input[type=checkbox]'); // I suppose user agreed to terms, If there is only one checkbox in form.
     * $I->seeCheckboxIsChecked('//form/input[@type=checkbox and @name=agree]');
     * ?>
     * ```
     *
     * @param $checkbox
     * @see \Codeception\Module\WebDriver::seeCheckboxIsChecked()
     */
    public function seeCheckboxIsChecked($checkbox) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeCheckboxIsChecked', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Assert if the specified checkbox is unchecked.
     * Use css selector or xpath to match.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->dontSeeCheckboxIsChecked('#agree'); // I suppose user didn't agree to terms
     * $I->seeCheckboxIsChecked('#signup_form input[type=checkbox]'); // I suppose user didn't check the first checkbox in form.
     * ?>
     * ```
     *
     * @param $checkbox
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeCheckboxIsChecked()
     */
    public function cantSeeCheckboxIsChecked($checkbox) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeCheckboxIsChecked', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Assert if the specified checkbox is unchecked.
     * Use css selector or xpath to match.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->dontSeeCheckboxIsChecked('#agree'); // I suppose user didn't agree to terms
     * $I->seeCheckboxIsChecked('#signup_form input[type=checkbox]'); // I suppose user didn't check the first checkbox in form.
     * ?>
     * ```
     *
     * @param $checkbox
     * @see \Codeception\Module\WebDriver::dontSeeCheckboxIsChecked()
     */
    public function dontSeeCheckboxIsChecked($checkbox) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeCheckboxIsChecked', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that an input field or textarea contains value.
     * Field is matched either by label or CSS or Xpath
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeInField('Body','Type your comment here');
     * $I->seeInField('form textarea[name=body]','Type your comment here');
     * $I->seeInField('form input[type=hidden]','hidden_value');
     * $I->seeInField('#searchform input','Search');
     * $I->seeInField('//form/*[@name=search]','Search');
     * $I->seeInField(['name' => 'search'], 'Search');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeInField()
     */
    public function canSeeInField($field, $value) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeInField', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that an input field or textarea contains value.
     * Field is matched either by label or CSS or Xpath
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeInField('Body','Type your comment here');
     * $I->seeInField('form textarea[name=body]','Type your comment here');
     * $I->seeInField('form input[type=hidden]','hidden_value');
     * $I->seeInField('#searchform input','Search');
     * $I->seeInField('//form/*[@name=search]','Search');
     * $I->seeInField(['name' => 'search'], 'Search');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \Codeception\Module\WebDriver::seeInField()
     */
    public function seeInField($field, $value) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeInField', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that an input field or textarea doesn't contain value.
     * Field is matched either by label or CSS or Xpath
     * Example:
     *
     * ``` php
     * <?php
     * $I->dontSeeInField('Body','Type your comment here');
     * $I->dontSeeInField('form textarea[name=body]','Type your comment here');
     * $I->dontSeeInField('form input[type=hidden]','hidden_value');
     * $I->dontSeeInField('#searchform input','Search');
     * $I->dontSeeInField('//form/*[@name=search]','Search');
     * $I->seeInField(['name' => 'search'], 'Search');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeInField()
     */
    public function cantSeeInField($field, $value) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInField', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that an input field or textarea doesn't contain value.
     * Field is matched either by label or CSS or Xpath
     * Example:
     *
     * ``` php
     * <?php
     * $I->dontSeeInField('Body','Type your comment here');
     * $I->dontSeeInField('form textarea[name=body]','Type your comment here');
     * $I->dontSeeInField('form input[type=hidden]','hidden_value');
     * $I->dontSeeInField('#searchform input','Search');
     * $I->dontSeeInField('//form/*[@name=search]','Search');
     * $I->seeInField(['name' => 'search'], 'Search');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \Codeception\Module\WebDriver::dontSeeInField()
     */
    public function dontSeeInField($field, $value) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeInField', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Selects an option in select tag or in radio button group.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->selectOption('form select[name=account]', 'Premium');
     * $I->selectOption('form input[name=payment]', 'Monthly');
     * $I->selectOption('//form/select[@name=account]', 'Monthly');
     * ?>
     * ```
     *
     * Can select multiple options if second argument is array:
     *
     * ``` php
     * <?php
     * $I->selectOption('Which OS do you use?', array('Windows','Linux'));
     * ?>
     * ```
     *
     * @param $select
     * @param $option
     * @see \Codeception\Module\WebDriver::selectOption()
     */
    public function selectOption($select, $option) {
        return $this->scenario->runStep(new \Codeception\Step\Action('selectOption', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\WebDriver::unselectOption()
     */
    public function unselectOption($select, $option) {
        return $this->scenario->runStep(new \Codeception\Step\Action('unselectOption', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Ticks a checkbox.
     * For radio buttons use `selectOption` method.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->checkOption('#agree');
     * ?>
     * ```
     *
     * @param $option
     * @see \Codeception\Module\WebDriver::checkOption()
     */
    public function checkOption($option) {
        return $this->scenario->runStep(new \Codeception\Step\Action('checkOption', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Unticks a checkbox.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->uncheckOption('#notify');
     * ?>
     * ```
     *
     * @param $option
     * @see \Codeception\Module\WebDriver::uncheckOption()
     */
    public function uncheckOption($option) {
        return $this->scenario->runStep(new \Codeception\Step\Action('uncheckOption', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fills a text field or textarea with value.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->fillField("//input[@type='text']", "Hello World!");
     * $I->fillField(['name' => 'email'], 'jon@mail.com');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \Codeception\Module\WebDriver::fillField()
     */
    public function fillField($field, $value) {
        return $this->scenario->runStep(new \Codeception\Step\Action('fillField', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Attaches file from Codeception data directory to upload field.
     *
     * Example:
     *
     * ``` php
     * <?php
     * // file is stored in 'tests/_data/prices.xls'
     * $I->attachFile('input[@type="file"]', 'prices.xls');
     * ?>
     * ```
     *
     * @param $field
     * @param $filename
     * @see \Codeception\Module\WebDriver::attachFile()
     */
    public function attachFile($field, $filename) {
        return $this->scenario->runStep(new \Codeception\Step\Action('attachFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return string
     * @see \Codeception\Module\WebDriver::getVisibleText()
     */
    public function getVisibleText() {
        return $this->scenario->runStep(new \Codeception\Step\Action('getVisibleText', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Finds and returns text contents of element.
     * Element is searched by CSS selector, XPath or matcher by regex.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $heading = $I->grabTextFrom('h1');
     * $heading = $I->grabTextFrom('descendant-or-self::h1');
     * $value = $I->grabTextFrom('~<input value=(.*?)]~sgi');
     * ?>
     * ```
     *
     * @param $cssOrXPathOrRegex
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::grabTextFrom()
     */
    public function grabTextFrom($cssOrXPathOrRegex) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabTextFrom', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grabs attribute value from an element.
     * Fails if element is not found.
     *
     * ``` php
     * <?php
     * $I->grabAttributeFrom('#tooltip', 'title');
     * ?>
     * ```
     *
     *
     * @param $cssOrXpath
     * @param $attribute
     * @internal param $element
     * @return mixed
     * @see \Codeception\Module\WebDriver::grabAttributeFrom()
     */
    public function grabAttributeFrom($cssOrXpath, $attribute) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabAttributeFrom', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Finds and returns field and returns it's value.
     * Searches by field name, then by CSS, then by XPath
     *
     * Example:
     *
     * ``` php
     * <?php
     * $name = $I->grabValueFrom('Name');
     * $name = $I->grabValueFrom('input[name=username]');
     * $name = $I->grabValueFrom('descendant-or-self::form/descendant::input[@name = 'username']');
     * $name = $I->grabValueFrom(['name' => 'username']);
     * ?>
     * ```
     *
     * @param $field
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::grabValueFrom()
     */
    public function grabValueFrom($field) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabValueFrom', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks for a visible element on a page, matching it by CSS or XPath
     *
     * ``` php
     * <?php
     * $I->seeElement('.error');
     * $I->seeElement('//form/input[1]');
     * ?>
     * ```
     * @param $selector
     * @param array $attributes
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeElement()
     */
    public function canSeeElement($selector, $attributes = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeElement', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks for a visible element on a page, matching it by CSS or XPath
     *
     * ``` php
     * <?php
     * $I->seeElement('.error');
     * $I->seeElement('//form/input[1]');
     * ?>
     * ```
     * @param $selector
     * @param array $attributes
     * @see \Codeception\Module\WebDriver::seeElement()
     */
    public function seeElement($selector, $attributes = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeElement', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that element is invisible or not present on page.
     *
     * ``` php
     * <?php
     * $I->dontSeeElement('.error');
     * $I->dontSeeElement('//form/input[1]');
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeElement()
     */
    public function cantSeeElement($selector, $attributes = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeElement', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that element is invisible or not present on page.
     *
     * ``` php
     * <?php
     * $I->dontSeeElement('.error');
     * $I->dontSeeElement('//form/input[1]');
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @see \Codeception\Module\WebDriver::dontSeeElement()
     */
    public function dontSeeElement($selector, $attributes = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeElement', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if element exists on a page even it is invisible.
     *
     * ``` php
     * <?php
     * $I->seeElementInDOM('//form/input[type=hidden]');
     * ?>
     * ```
     *
     * @param $selector
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeElementInDOM()
     */
    public function canSeeElementInDOM($selector, $attributes = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeElementInDOM', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if element exists on a page even it is invisible.
     *
     * ``` php
     * <?php
     * $I->seeElementInDOM('//form/input[type=hidden]');
     * ?>
     * ```
     *
     * @param $selector
     * @see \Codeception\Module\WebDriver::seeElementInDOM()
     */
    public function seeElementInDOM($selector, $attributes = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeElementInDOM', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opposite to `seeElementInDOM`.
     *
     * @param $selector
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeElementInDOM()
     */
    public function cantSeeElementInDOM($selector, $attributes = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeElementInDOM', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opposite to `seeElementInDOM`.
     *
     * @param $selector
     * @see \Codeception\Module\WebDriver::dontSeeElementInDOM()
     */
    public function dontSeeElementInDOM($selector, $attributes = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeElementInDOM', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if option is selected in select field.
     *
     * ``` php
     * <?php
     * $I->seeOptionIsSelected('#form input[name=payment]', 'Visa');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeOptionIsSelected()
     */
    public function canSeeOptionIsSelected($selector, $optionText) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeOptionIsSelected', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if option is selected in select field.
     *
     * ``` php
     * <?php
     * $I->seeOptionIsSelected('#form input[name=payment]', 'Visa');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::seeOptionIsSelected()
     */
    public function seeOptionIsSelected($selector, $optionText) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeOptionIsSelected', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if option is not selected in select field.
     *
     * ``` php
     * <?php
     * $I->dontSeeOptionIsSelected('#form input[name=payment]', 'Visa');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeOptionIsSelected()
     */
    public function cantSeeOptionIsSelected($selector, $optionText) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeOptionIsSelected', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if option is not selected in select field.
     *
     * ``` php
     * <?php
     * $I->dontSeeOptionIsSelected('#form input[name=payment]', 'Visa');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::dontSeeOptionIsSelected()
     */
    public function dontSeeOptionIsSelected($selector, $optionText) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeOptionIsSelected', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that page title contains text.
     *
     * ``` php
     * <?php
     * $I->seeInTitle('Blog - Post #1');
     * ?>
     * ```
     *
     * @param $title
     *
     * @return mixed
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeInTitle()
     */
    public function canSeeInTitle($title) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeInTitle', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that page title contains text.
     *
     * ``` php
     * <?php
     * $I->seeInTitle('Blog - Post #1');
     * ?>
     * ```
     *
     * @param $title
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::seeInTitle()
     */
    public function seeInTitle($title) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeInTitle', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that page title does not contain text.
     *
     * @param $title
     *
     * @return mixed
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::dontSeeInTitle()
     */
    public function cantSeeInTitle($title) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInTitle', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that page title does not contain text.
     *
     * @param $title
     *
     * @return mixed
     * @see \Codeception\Module\WebDriver::dontSeeInTitle()
     */
    public function dontSeeInTitle($title) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeInTitle', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Accepts JavaScript native popup window created by `window.alert`|`window.confirm`|`window.prompt`.
     * Don't confuse it with modal windows, created by [various libraries](http://jster.net/category/windows-modals-popups).
     *
     * @see \Codeception\Module\WebDriver::acceptPopup()
     */
    public function acceptPopup() {
        return $this->scenario->runStep(new \Codeception\Step\Action('acceptPopup', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Dismisses active JavaScript popup created by `window.alert`|`window.confirm`|`window.prompt`.
     * @see \Codeception\Module\WebDriver::cancelPopup()
     */
    public function cancelPopup() {
        return $this->scenario->runStep(new \Codeception\Step\Action('cancelPopup', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that active JavaScript popup created by `window.alert`|`window.confirm`|`window.prompt` contain text.
     *
     * @param $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\WebDriver::seeInPopup()
     */
    public function canSeeInPopup($text) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeInPopup', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that active JavaScript popup created by `window.alert`|`window.confirm`|`window.prompt` contain text.
     *
     * @param $text
     * @see \Codeception\Module\WebDriver::seeInPopup()
     */
    public function seeInPopup($text) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeInPopup', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Enters text into native JavaScript prompt popup created by `window.prompt`.
     *
     * @param $keys
     * @see \Codeception\Module\WebDriver::typeInPopup()
     */
    public function typeInPopup($keys) {
        return $this->scenario->runStep(new \Codeception\Step\Action('typeInPopup', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Reloads current page
     * @see \Codeception\Module\WebDriver::reloadPage()
     */
    public function reloadPage() {
        return $this->scenario->runStep(new \Codeception\Step\Action('reloadPage', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Moves back in history
     * @see \Codeception\Module\WebDriver::moveBack()
     */
    public function moveBack() {
        return $this->scenario->runStep(new \Codeception\Step\Action('moveBack', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Moves forward in history
     * @see \Codeception\Module\WebDriver::moveForward()
     */
    public function moveForward() {
        return $this->scenario->runStep(new \Codeception\Step\Action('moveForward', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Submits a form located on page.
     * Specify the form by it's css or xpath selector.
     * Fill the form fields values as array. Hidden fields can't be accessed.
     *
     * This command itself triggers the request to form's action.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->submitForm('#login', array('login' => 'davert', 'password' => '123456'));
     *
     * ```
     *
     * For sample Sign Up form:
     *
     * ``` html
     * <form action="/sign_up">
     *     Login: <input type="text" name="user[login]" /><br/>
     *     Password: <input type="password" name="user[password]" /><br/>
     *     Do you agree to out terms? <input type="checkbox" name="user[agree]" /><br/>
     *     Select pricing plan <select name="plan"><option value="1">Free</option><option value="2" selected="selected">Paid</option></select>
     *     <input type="submit" value="Submit" />
     * </form>
     * ```
     * You can write this:
     *
     * ``` php
     * <?php
     * $I->submitForm('#userForm', array('user' => array('login' => 'Davert', 'password' => '123456', 'agree' => true)));
     *
     * ```
     *
     * @param $selector
     * @param $params
     * @throws \Codeception\Exception\ElementNotFound
     * @see \Codeception\Module\WebDriver::submitForm()
     */
    public function submitForm($selector, $params) {
        return $this->scenario->runStep(new \Codeception\Step\Action('submitForm', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits for element to change or for $timeout seconds to pass. Element "change" is determined
     * by a callback function which is called repeatedly until the return value evaluates to true.
     *
     * ``` php
     * <?php
     * $I->waitForElementChange('#menu', function(\WebDriverElement $el) {
     *     return $el->isDisplayed();
     * }, 100);
     * ?>
     * ```
     *
     * @param $element
     * @param \Closure $callback
     * @param int $timeout seconds
     * @throws \Codeception\Exception\ElementNotFound
     * @see \Codeception\Module\WebDriver::waitForElementChange()
     */
    public function waitForElementChange($element, $callback, $timeout = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('waitForElementChange', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits for element to appear on page for $timeout seconds to pass.
     * If element not appears, timeout exception is thrown.
     *
     * ``` php
     * <?php
     * $I->waitForElement('#agree_button', 30); // secs
     * $I->click('#agree_button');
     * ?>
     * ```
     *
     * @param $element
     * @param int $timeout seconds
     * @throws \Exception
     * @see \Codeception\Module\WebDriver::waitForElement()
     */
    public function waitForElement($element, $timeout = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('waitForElement', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits for element to be visible on the page for $timeout seconds to pass.
     * If element doesn't appear, timeout exception is thrown.
     *
     * ``` php
     * <?php
     * $I->waitForElementVisible('#agree_button', 30); // secs
     * $I->click('#agree_button');
     * ?>
     * ```
     *
     * @param $element
     * @param int $timeout seconds
     * @throws \Exception
     * @see \Codeception\Module\WebDriver::waitForElementVisible()
     */
    public function waitForElementVisible($element, $timeout = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('waitForElementVisible', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits for element to not be visible on the page for $timeout seconds to pass.
     * If element stays visible, timeout exception is thrown.
     *
     * ``` php
     * <?php
     * $I->waitForElementNotVisible('#agree_button', 30); // secs
     * ?>
     * ```
     *
     * @param $element
     * @param int $timeout seconds
     * @throws \Exception
     * @see \Codeception\Module\WebDriver::waitForElementNotVisible()
     */
    public function waitForElementNotVisible($element, $timeout = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('waitForElementNotVisible', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits for text to appear on the page for a specific amount of time.
     * Can also be passed a selector to search in.
     * If text does not appear, timeout exception is thrown.
     *
     * ``` php
     * <?php
     * $I->waitForText('foo', 30); // secs
     * $I->waitForText('foo', 30, '.title'); // secs
     * ?>
     * ```
     *
     * @param string $text
     * @param int $timeout seconds
     * @param null $selector
     * @throws \Exception
     * @internal param string $element
     * @see \Codeception\Module\WebDriver::waitForText()
     */
    public function waitForText($text, $timeout = null, $selector = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('waitForText', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Explicit wait.
     *
     * @param int $timeout secs
     * @throws \Codeception\Exception\TestRuntime
     * @see \Codeception\Module\WebDriver::wait()
     */
    public function wait($timeout) {
        return $this->scenario->runStep(new \Codeception\Step\Action('wait', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Low-level API method.
     * If Codeception commands are not enough, use Selenium WebDriver methods directly
     *
     * ``` php
     * $I->executeInSelenium(function(\WebDriver $webdriver) {
     *   $webdriver->get('http://google.com');
     * });
     * ```
     *
     * Use [WebDriver Session API](https://github.com/facebook/php-webdriver)
     * Not recommended this command too be used on regular basis.
     * If Codeception lacks important Selenium methods implement then and submit patches.
     *
     * @param callable $function
     * @see \Codeception\Module\WebDriver::executeInSelenium()
     */
    public function executeInSelenium($function) {
        return $this->scenario->runStep(new \Codeception\Step\Action('executeInSelenium', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Switch to another window identified by its name.
     *
     * The window can only be identified by its name. If the $name parameter is blank it will switch to the parent window.
     *
     * Example:
     * ``` html
     * <input type="button" value="Open window" onclick="window.open('http://example.com', 'another_window')">
     * ```
     *
     * ``` php
     * <?php
     * $I->click("Open window");
     * # switch to another window
     * $I->switchToWindow("another_window");
     * # switch to parent window
     * $I->switchToWindow();
     * ?>
     * ```
     *
     * If the window has no name, the only way to access it is via the `executeInSelenium()` method like so:
     *
     * ``` php
     * <?php
     * $I->executeInSelenium(function (\Webdriver $webdriver) {
     *      $handles=$webdriver->getWindowHandles();
     *      $last_window = end($handles);
     *      $webdriver->switchTo()->window($last_window);
     * });
     * ?>
     * ```
     *
     * @param string|null $name
     * @see \Codeception\Module\WebDriver::switchToWindow()
     */
    public function switchToWindow($name = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('switchToWindow', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Switch to another frame
     *
     * Example:
     * ``` html
     * <iframe name="another_frame" src="http://example.com">
     *
     * ```
     *
     * ``` php
     * <?php
     * # switch to iframe
     * $I->switchToIFrame("another_frame");
     * # switch to parent page
     * $I->switchToIFrame();
     *
     * ```
     *
     * @param string|null $name
     * @see \Codeception\Module\WebDriver::switchToIFrame()
     */
    public function switchToIFrame($name = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('switchToIFrame', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Executes JavaScript and waits for it to return true or for the timeout.
     *
     * In this example we will wait for all jQuery ajax requests are finished or 60 secs otherwise.
     *
     * ``` php
     * <?php
     * $I->waitForJS("return $.active == 0;", 60);
     * ?>
     * ```
     *
     * @param string $script
     * @param int $timeout seconds
     * @see \Codeception\Module\WebDriver::waitForJS()
     */
    public function waitForJS($script, $timeout = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('waitForJS', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Executes custom JavaScript
     *
     * @param $script
     * @return mixed
     * @see \Codeception\Module\WebDriver::executeJS()
     */
    public function executeJS($script) {
        return $this->scenario->runStep(new \Codeception\Step\Action('executeJS', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Maximizes current window
     * @see \Codeception\Module\WebDriver::maximizeWindow()
     */
    public function maximizeWindow() {
        return $this->scenario->runStep(new \Codeception\Step\Action('maximizeWindow', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Performs a simple mouse drag and drop operation.
     *
     * ``` php
     * <?php
     * $I->dragAndDrop('#drag', '#drop');
     * ?>
     * ```
     *
     * @param string $source (CSS ID or XPath)
     * @param string $target (CSS ID or XPath)
     * @see \Codeception\Module\WebDriver::dragAndDrop()
     */
    public function dragAndDrop($source, $target) {
        return $this->scenario->runStep(new \Codeception\Step\Action('dragAndDrop', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Move mouse over the first element matched by css or xPath on page
     *
     * https://code.google.com/p/selenium/wiki/JsonWireProtocol#/session/:sessionId/moveto
     *
     * @param string $cssOrXPath css or xpath of the web element
     * @param int $offsetX
     * @param int $offsetY
     *
     * @throws \Codeception\Exception\ElementNotFound
     * @return null
     * @see \Codeception\Module\WebDriver::moveMouseOver()
     */
    public function moveMouseOver($cssOrXPath, $offsetX = null, $offsetY = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('moveMouseOver', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Performs contextual click with right mouse button on element matched by CSS or XPath.
     *
     * @param $cssOrXPath
     * @throws \Codeception\Exception\ElementNotFound
     * @see \Codeception\Module\WebDriver::clickWithRightButton()
     */
    public function clickWithRightButton($cssOrXPath) {
        return $this->scenario->runStep(new \Codeception\Step\Action('clickWithRightButton', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Pauses test execution in debug mode.
     * To proceed test press "ENTER" in console.
     *
     * This method is recommended to use in test development, for additional page analysis, locator searing, etc.
     * @see \Codeception\Module\WebDriver::pauseExecution()
     */
    public function pauseExecution() {
        return $this->scenario->runStep(new \Codeception\Step\Action('pauseExecution', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Performs a double click on element matched by CSS or XPath.
     *
     * @param $cssOrXPath
     * @throws \Codeception\Exception\ElementNotFound
     * @see \Codeception\Module\WebDriver::doubleClick()
     */
    public function doubleClick($cssOrXPath) {
        return $this->scenario->runStep(new \Codeception\Step\Action('doubleClick', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Presses key on element found by css, xpath is focused
     * A char and modifier (ctrl, alt, shift, meta) can be provided.
     * For special keys use key constants from \WebDriverKeys class.
     *
     * Example:
     *
     * ``` php
     * <?php
     * // <input id="page" value="old" />
     * $I->pressKey('#page','a'); // => olda
     * $I->pressKey('#page',array('ctrl','a'),'new'); //=> new
     * $I->pressKey('#page',array('shift','111'),'1','x'); //=> old!!!1x
     * $I->pressKey('descendant-or-self::*[@id='page']','u'); //=> oldu
     * $I->pressKey('#name', array('ctrl', 'a'), WebDriverKeys::DELETE); //=>''
     * ?>
     * ```
     *
     * @param $element
     * @param $char can be char or array with modifier. You can provide several chars.
     * @throws \Codeception\Exception\ElementNotFound
     * @see \Codeception\Module\WebDriver::pressKey()
     */
    public function pressKey($element, $char) {
        return $this->scenario->runStep(new \Codeception\Step\Action('pressKey', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Append text to an element
     * Can add another selection to a select box
     *
     * ``` php
     * <?php
     * $I->appendField('#mySelectbox', 'SelectValue');
     * $I->appendField('#myTextField', 'appended');
     * ?>
     * ```
     *
     * @param string $field
     * @param string $value
     * @throws \Codeception\Exception\ElementNotFound
     * @see \Codeception\Module\WebDriver::appendField()
     */
    public function appendField($field, $value) {
        return $this->scenario->runStep(new \Codeception\Step\Action('appendField', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
<<<<<<< HEAD
=======
     * Inserts SQL record into database. This record will be erased after the test.
     *
     * ``` php
     * <?php
     * $I->haveInDatabase('users', array('name' => 'miles', 'email' => 'miles@davis.com'));
     * ?>
     * ```
     *
     * @param $table
     * @param array $data
     * @return integer $id
     * @see \Codeception\Module\Db::haveInDatabase()
     */
    public function haveInDatabase($table, $data) {
        return $this->scenario->runStep(new \Codeception\Step\Action('haveInDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if a row with given column values exists.
     * Provide table name and column values.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeInDatabase('users', array('name' => 'Davert', 'email' => 'davert@mail.com'));
     *
     * ```
     * Will generate:
     *
     * ``` sql
     * SELECT COUNT(*) FROM `users` WHERE `name` = 'Davert' AND `email` = 'davert@mail.com'
     * ```
     * Fails if no such user found.
     *
     * @param       $table
     * @param array $criteria
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Db::seeInDatabase()
     */
    public function canSeeInDatabase($table, $criteria = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeInDatabase', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if a row with given column values exists.
     * Provide table name and column values.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeInDatabase('users', array('name' => 'Davert', 'email' => 'davert@mail.com'));
     *
     * ```
     * Will generate:
     *
     * ``` sql
     * SELECT COUNT(*) FROM `users` WHERE `name` = 'Davert' AND `email` = 'davert@mail.com'
     * ```
     * Fails if no such user found.
     *
     * @param       $table
     * @param array $criteria
     * @see \Codeception\Module\Db::seeInDatabase()
     */
    public function seeInDatabase($table, $criteria = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeInDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Effect is opposite to ->seeInDatabase
     *
     * Checks if there is no record with such column values in database.
     * Provide table name and column values.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->dontSeeInDatabase('users', array('name' => 'Davert', 'email' => 'davert@mail.com'));
     *
     * ```
     * Will generate:
     *
     * ``` sql
     * SELECT COUNT(*) FROM `users` WHERE `name` = 'Davert' AND `email` = 'davert@mail.com'
     * ```
     * Fails if such user was found.
     *
     * @param       $table
     * @param array $criteria
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Db::dontSeeInDatabase()
     */
    public function cantSeeInDatabase($table, $criteria = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInDatabase', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Effect is opposite to ->seeInDatabase
     *
     * Checks if there is no record with such column values in database.
     * Provide table name and column values.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->dontSeeInDatabase('users', array('name' => 'Davert', 'email' => 'davert@mail.com'));
     *
     * ```
     * Will generate:
     *
     * ``` sql
     * SELECT COUNT(*) FROM `users` WHERE `name` = 'Davert' AND `email` = 'davert@mail.com'
     * ```
     * Fails if such user was found.
     *
     * @param       $table
     * @param array $criteria
     * @see \Codeception\Module\Db::dontSeeInDatabase()
     */
    public function dontSeeInDatabase($table, $criteria = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeInDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fetches a single column value from a database.
     * Provide table name, desired column and criteria.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $mail = $I->grabFromDatabase('users', 'email', array('name' => 'Davert'));
     *
     * ```
     *
     * @version 1.1
     *
     * @param       $table
     * @param       $column
     * @param array $criteria
     *
     * @return mixed
     * @see \Codeception\Module\Db::grabFromDatabase()
     */
    public function grabFromDatabase($table, $column, $criteria = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabFromDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
>>>>>>> 37fc0c050e438e631ec5170bc0bc0a26c2d3cd6f
     * Executes a shell command
     *
     * @param $command
     * @see \Codeception\Module\Cli::runShellCommand()
     */
    public function runShellCommand($command) {
        return $this->scenario->runStep(new \Codeception\Step\Action('runShellCommand', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that output from last executed command contains text
     *
     * @param $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Cli::seeInShellOutput()
     */
    public function canSeeInShellOutput($text) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeInShellOutput', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that output from last executed command contains text
     *
     * @param $text
     * @see \Codeception\Module\Cli::seeInShellOutput()
     */
    public function seeInShellOutput($text) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeInShellOutput', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that output from latest command doesn't contain text
     *
     * @param $text
     *
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Cli::dontSeeInShellOutput()
     */
    public function cantSeeInShellOutput($text) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInShellOutput', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that output from latest command doesn't contain text
     *
     * @param $text
     *
     * @see \Codeception\Module\Cli::dontSeeInShellOutput()
     */
    public function dontSeeInShellOutput($text) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeInShellOutput', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Cli::seeShellOutputMatches()
     */
    public function canSeeShellOutputMatches($regex) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeShellOutputMatches', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Cli::seeShellOutputMatches()
     */
    public function seeShellOutputMatches($regex) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeShellOutputMatches', func_get_args()));
    }
}
