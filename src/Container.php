<?php
abstract class Container implements Displayable{
	private $startTag;
	private $endTag;
	private $output;
	private $content;
	
	/**
	 * Konstruktor: &uuml;bernimmt die Tag Bezeichnung und bildet daraus das Start- und EndTag.
	 *
	 * @author 4CHITM
	 * @version 1.0
	 * @param $content der
	 *        	der dem Container hinzugef&uuml;gt wird
	 */
	public function __construct($tag) {
		$this->startTag = "<" . $tag . ">";
		$this->$endTag = "</" . $tag . ">";
	}
	
	/**
	 * addContent: f&uuml;gt einem Container Inhalt hinzu.
	 *
	 * @author 4CHITM
	 * @version 1.0
	 * @param $content der
	 *        	der dem Container hinzugef&uuml;gt wird
	 * @return $content
	 */
	public function addContent($input) {
		$this->content = $input;
		$this->output = $startTag . $content . $endTag;
		return $output;
	}
	
	/**
	 * addContainer: f&uuml;gt einen weiteren Container hinzu.
	 *
	 * @author 4CHITM
	 * @version 1.0
	 * @param $container der
	 *        	der hinzugef&uuml;gt wird
	 */
	public function addContainer($container) {
		$this->content .= $container;
		addContent ( $his->content );
	}
}