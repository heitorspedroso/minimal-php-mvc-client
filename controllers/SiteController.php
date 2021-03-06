<?php

namespace app\controllers;

use heitorspedroso\minimalphpmvcframework\Application;
use heitorspedroso\minimalphpmvcframework\Controller;
use heitorspedroso\minimalphpmvcframework\Request;
use heitorspedroso\minimalphpmvcframework\Response;
use app\models\ContactForm;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller{
	public function home() {
		$params = [
			'name' => 'Array é Vida'
		];

		return $this->render('home', $params);
	}

	public function contact(Request $request, Response $response) {
		$contact = new ContactForm();
		if($request->isPost()){
			$contact->loadData($request->getBody());
			if($contact->validate() && $contact->send()){
				Application::$app->session->setFlash('success', 'Thanks for contacting us.');
				return $response->redirect('/contact');
			}
		}
		return $this->render('contact', [
			'model' => $contact
		]);
	}
}