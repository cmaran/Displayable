<?php

/**
  * Interface Displayable für das HTML-Framework
  *
  * @author     4CHITM
  * @version    1.0
  */
interface Displayable {
	
	/**
	 * addContent: f&uuml;gt einem Container Inhalt hinzu.
	 * 
	 * @author     4CHITM
	 * @version    1.0
	 * @param	$content	der Inhalt, der dem Container hinzugef&uuml;gt wird
	 */
	public function addContent($content);
	
	/**
	 * addContainer: f&uuml;gt einen weiteren Container hinzu.
	 * 
	 * @author     4CHITM
	 * @version    1.0
	 * @param	$container	der Container, der hinzugef&uuml;gt wird
	 */
	public function addContainer($container);
	
}
?>