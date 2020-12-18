<?php
class ContactController extends Controller
{
	function runBeforeAction() {
		if ($_SESSION['has_submitted'] ?? 0 == 1) {
			include 'view/contact/contact-already-submitted.html';
			return false;
		}
		return true;
	}

	function defaultAction() {
		include 'view/contact/contact.html';
	}

	function submitFormAction() {
		//validate
		//store data
		//send email
		$_SESSION['has_submitted'] = 1;
		include 'view/contact/contact-thank-you.html';
	}
}