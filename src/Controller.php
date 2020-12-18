<?php
class Controller {
	function runAction($action) {
		if (method_exists($this, 'runBeforeAction')) {
			$result = $this->runBeforeAction();
			if (!$result) return;
		}

		$actionName = $action . 'Action';
		if (method_exists($this, $actionName)) {			
			$this->$actionName();
		} else {
			include 'view/status-pages/404.html';
		}
	}
}