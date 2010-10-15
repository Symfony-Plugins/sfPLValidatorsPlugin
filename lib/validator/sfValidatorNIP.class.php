<?php

require_once 'Validate/PL.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sfValidatorNIP
 *
 * @author Tomasz Jakub Rup
 */
class sfValidatorNIP extends sfValidatorBase {

	/**
	 * Configures the NIP validator.
	 *
	 * @see sfValidatorBase
	 */
	public function configure($options = array(), $messages = array()) {
		$this->addOption('separator', true);
		$this->setMessage('invalid', 'Invalid.');
	}

	/**
	 * @see sfValidatorBase
	 */
	protected function doClean($value) {
		$clean = (string) $value;

		if(!$this->getOption('separator')) $clean = str_replace('-', '', $clean);

		if (!Validate_PL::nip($clean)) {
			throw new sfValidatorError($this, 'invalid');
		}

		return $clean;
	}

}