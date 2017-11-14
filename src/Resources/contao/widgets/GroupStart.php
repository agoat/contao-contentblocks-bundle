<?php
 
 /**
 * Contao Open Source CMS - ContentBlocks extension
 *
 * Copyright (c) 2016 Arne Stappen (aGoat)
 *
 *
 * @package   contentblocks
 * @author    Arne Stappen <http://agoat.de>
 * @license	  LGPL-3.0+
 */

namespace Agoat\ContentElements;


/**
 * Provide methods to show an explanation 
 *
 * @param  array   $options
 * @param  boolean $multiple
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class GroupStart extends \Widget
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_widget_rdo';

	
	/**
	 * Generate the widget and return it as string
	 *
	 * @return string
	 */
	public function generate()
	{
		$return = '<div class="tl_group">';
		$return .= '<div class="tl_content_right click2edit">';

		// Add delete button
		$return .= ' <button onclick="AjaxRequest.deleteGroup(this,\'' . $this->pattern . '\',' . $this->gid . ')" type="button" class="delete-handle"' . (($this->delete) ? '' : ' disabled') . '>' . \Image::getHtml('delete.svg', 'delete', 'title="' . $GLOBALS['TL_LANG']['MSC']['group']['delete'] . '"') . '</button>';

		// Add insert button
		$return .= ' <button onclick="AjaxRequest.insertGroup(this,\'' . $this->pattern . '\',' . $this->gid . ',' . $this->max . ')" type="button" class="insert-handle"' . (($this->insert) ? '' : 'disabled') . '>' . \Image::getHtml('new.svg', 'new', 'title="' . $GLOBALS['TL_LANG']['MSC']['group']['new']['after'] . '"') . '</button>';

		// Add move button
		$return .= ' <button type="button" class="drag-handle">' . \Image::getHtml('drag.svg', 'drag', 'title="' . $GLOBALS['TL_LANG']['MSC']['group']['drag'] . '"') . '</button>';
		
		$return .= '</div>';
		$return .= '<h3><label>' . $this->title . '</label></h3>';
		$return .= '<p class="tl_help tl_tip" title="">' . $this->desc . '</p>';	
		$return .= '<div>';
					
		return $return;
	}
}