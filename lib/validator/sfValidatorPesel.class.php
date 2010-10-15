<?php

require_once 'Validate/PL.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sfValidatorPesel
 *
 * @author Tomasz Jakub Rup
 */
class sfValidatorPesel extends sfValidatorBase {

	/**
	 * Configures the Pesel validator.
	 *
	 * @see sfValidatorBase
	 */
	public function configure($options = array(), $messages = array()) {
		$this->setMessage('invalid', 'Invalid.');
	}

	/**
	 * @see sfValidatorBase
	 */
	protected function doClean($value) {
		$clean = (string) $value;
		$tmp = '';

		if (!Validate_PL::pesel($clean, $tmp)) {
			throw new sfValidatorError($this, 'invalid');
		}

		return $clean;
	}

}