<?php

$I = new AcceptanceTester($scenario);
initTest::login($I);
$I->amOnPage('/admin/components/run/shop/callbacks/createStatus');
$I->fillField('.//*[@id="Text"]', 'q');
$I->click('.//*[@id="mainContent"]/section/div[1]/div[2]/div/button[1]');
$I->waitForElementVisible('.alert.in.fade.alert-success');
$I->see('Позиция создана');
$I->waitForElementNotVisible('.alert.in.fade.alert-success');
$I->seeInField('.//*[@id="Text"]', 'q');
