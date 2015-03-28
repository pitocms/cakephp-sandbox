<?php
namespace Sandbox\Controller;

use Cake\Event\Event;

/**
 * Start page controller.
 */
class CarbonController extends SandboxAppController {

	public $uses = [];

	public function beforeFilter(Event $event) {
		$this->Auth->allow('index');
	}

	public function index() {
	}

}
