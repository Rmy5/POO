<?php
	// Le BRIDGE permet de découpler une interface et son implémentation, de manière à ce qu'elles puissent évoluer séparément. 
	// Il se compose de :
	// L'ABSTRACTION : définit l'interface abstraite et maintient la référence à l'IMPLEMENTOR
	// La REFINED ABSTRACTION : le BRIDGE. Etend l'ABSTRACTION.
	// L'ABSTRACT IMPLEMENTOR : définit l'interface pour l'implémentation des classes.
	// Le CONCRETE IMPLEMENTOR : les classes...


	/**
	* ABSTRACT IMPLEMENTOR, interface définissant les méthodes des CONCRETE IMPLEMENTORS
	*
	*/

	interface writeHtml {
	    public function writeBold($sWord);
	    public function writeItalic($sWord);
	}

	/**
	* CONCRETE IMPLEMENTOR pour le html récent
	*
	*/

	class writeHtmlNew implements writeHtml {
	    public function writeBold($sWord) {
	        echo htmlspecialchars('<strong>'.$sWord.'</strong>');
	    }
	    
	    public function writeItalic($sWord) {
	        echo htmlspecialchars('<em>'.$sWord.'</em>');
	    }
	}

	/**
	* CONCRETE IMPLEMENTOR pour le vieux html moche
	*
	*/

	class writeHtmlOld implements writeHtml {
	    public function writeBold($sWord) {
	        echo htmlspecialchars('<b>'.$sWord.'</b>');
	    }
	    
	    public function writeItalic($sWord) {
	        echo htmlspecialchars('<i>'.$sWord.'</i>');
	    }
	}

	/**
	* ABSTRACTION, qui définit les méthodes que la REFINED ABSTRACTION utilisera
	*
	*/

	interface htmlTpl {
	    public function writeHtmlBold();
	    public function writeHtmlItalic();
	}

	/**
	* REFINED ABSTRACTION, qui joue le rôle de BRIDGE
	*
	*/

	class htmlTplRefined {
	    private $oHtmlType;
	    private $sWord;
	    
	    public function __construct($sWord, writeHtml $htmlType) {
	        $this ->oHtmlType = $htmlType;
	        $this ->sWord = $sWord;
	    }
	    
	    public function writeHtmlBold() {
	        $this ->oHtmlType ->writeBold($this ->sWord);
	        
	    }
	    public function writeHtmlItalic() {
	        $this ->oHtmlType ->writeItalic($this ->sWord);
	    }
	}





	$oHtmlNew = new htmlTplRefined('test', new writeHtmlNew);
	$oHtmlOld = new htmlTplRefined('test', new writeHtmlOld);




	$oHtmlNew ->writeHtmlBold();
	echo'<br />';

	$oHtmlNew ->writeHtmlItalic();
	echo'<br />';

	$oHtmlOld ->writeHtmlBold();
	echo'<br />';

	$oHtmlOld ->writeHtmlItalic();

?>


