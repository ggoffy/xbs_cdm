<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author:    Ashley Kitson                                                  //
// Copyright: (c) 2005, Ashley Kitson
// URL:       http://xoobs.net                                               //
// Project:   The XOOPS Project (http://www.xoops.org/)                      //
// Module:    Code Data Management (CDM)                                     //
// ------------------------------------------------------------------------- //
/**
* Change the set and language choices for code lookup block
* 
* @author Ashley Kitson http://xoobs.net
* @copyright 2005 Ashley Kitson, UK
* @package CDM
* @subpackage Blocks
* @version 1
* @access private
*/

/**
 * Xoops mainfile
 */
include_once('../../../mainfile.php');
/**
 * Xoops header
 */
include_once('../../../header.php');

/**
 * Session values
 */
global $_SESSION;
/**
 * Form get variables
 */
global $HTTP_GET_VARS;
/**
 * Server variables
 */
global $_SERVER;

if (isset($HTTP_GET_VARS['cd_set'])) {
	$_SESSION['cdm_blookup_set'] = $HTTP_GET_VARS['cd_set'];
}
if (isset($HTTP_GET_VARS['cd_lang'])) {
	$_SESSION['cdm_blookup_lang'] = $HTTP_GET_VARS['cd_lang'];
}

//and go back to the page we were on
redirect_header($_SERVER['HTTP_REFERER'],1);
?>