<?php
require 'vendor/autoload.php';
require_once 'TestBean.php';

use Gui\Application;
use Gui\Components\Button;
use Gui\Components\Label;
use Gui\Components\ProgressBar;

$application = new Application();
$test = new TestBean();
$application->on('start', function() use ($test, $application) {

	$application->getWindow()->setTitle("Undead 3 Autopatcher");
	$application->getWindow()->setAutoSize(true);
//	$application->alert(['You have been pwened by Goddino', 'Remember...', '', '', 'N O N N T'], 'mammt title');
    $btn_discord = (new Button())
        ->setTop(0)
        ->setValue('Discord')
        ->setAutoSize(true);
	$btn_site = (new Button())
		->setTop(25)
		->setValue('Official site')
		->setAutoSize(true);
	$btn_register = (new Button())
		->setTop(50)
		->setValue('Register')
		->setAutoSize(true);
	$btn_wiki = (new Button())
		->setTop(75)
		->setValue('Official wiki')
		->setAutoSize(true);

	$label_total = (new Label())
		->setTop(125)
		->setLeft(50)
		->setText('Total:');

	$bar_total = (new ProgressBar())
		->setTop(150)
		->setWidth(500)
		->setLeft(50)
		->setMin(0)
		->setMax(100)
		->setPosition(55);

	$label_total = (new Label())
		->setTop(175)
		->setLeft(50)
		->setText('undead3_patch_official_mount:');

	$bar_single = (new ProgressBar())
		->setTop(200)
		->setWidth(500)
		->setLeft(50)
		->setMin(0)
		->setMax(100)
		->setPosition(32);

	$btn_exit = (new Button())
		->setLeft(400)
		->setTop(0)
		->setWidth(200)
		->setValue('Esci');

//    $button->on('click', function() use ($test, $button) {
//		$test->setTest($test->getTest() + 1);
//        $button->setValue('Valore attuale: ' . $test->getTest());
//    });

	$btn_exit->on('click', function() use($application) {
		$application->terminate();
	});
});

$application->run();
