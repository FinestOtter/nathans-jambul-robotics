<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2016, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller
{

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */

	function __construct()
	{
		parent::__construct();

		//  Set basic view parameters
		$this->data = array ();
		$this->data['pagetitle'] = 'Criminal Jambul Manufacturers';
		$this->data['ci_version'] = (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>'.CI_VERSION.'</strong>' : '';
	}

	/**
	 * Render this page
	 */
	function render($template = 'template')
	{
            $this->data['headcontent'] = $this->parser->parse('header', $this->data, true);
            $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
            $this->data['footcontent'] = $this->parser->parse('footer', $this->data, true);
            $this->parser->parse('template', $this->data);
	}

}
