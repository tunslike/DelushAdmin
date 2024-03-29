<?php
class Home extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function faq() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('website/faq', $data);
    }

    public function privacy_policy() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('website/privacyPolicy', $data);
    }
}
