<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Claus Due <claus@namelesscoder.net>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Trims $content by stripping off $characters (string list
 * of individual chars to strip off, default is all whitespaces).
 *
 * @author Claus Due <claus@namelesscoder.net>
 * @package Vhs
 * @subpackage ViewHelpers\Format
 */
class Tx_Vhs_ViewHelpers_Format_TrimViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Trims content by stripping off $characters
	 *
	 * @param string $content
	 * @param string $characters
	 * @return string
	 */
	public function render($content = NULL, $characters = NULL) {
		if ($content === NULL) {
			$content = $this->renderChildren();
		}
		if ($characters !== NULL) {
			$content = trim($content, $characters);
		} else {
			$content = trim($content);
		}
		return $content;
	}

}
