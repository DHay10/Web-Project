<?php
namespace app\controllers;

class Main extends \app\core\Controller {
		
    // Home Page
    public function index() {
        $this->view('Main/index');
    }

    // About Us Page
    public function aboutUs() {
        $this->view('Main/aboutUs');
    }

    // FAQ Page
    public function faq() {
        $this->view('Main/faq');
    }

    // Contact Us page
    #[\app\filters\User]
    public function contactUs() {
        $this->view('Main/contactUs');
    }

}
