<?php
class Circle extends Shape{

	private $_radius;

	public function __construct($radius, $p_coordinates=array( 'x'=>0, 'y'=>0 )){

		parent::__construct($p_coordinates);
		$this->_radius = $radius;
	}

	public function getRadius(){

		return $this->_radius;
	}

	public function area(){

		$area = pi() * pow($this->_radius, 2);
		return  $area;
	}

	public function perimeter(){

		$perimeter = 2 * pi() * $this->_radius;
		return $perimeter;
	}

	public function showInformation() {
		parent::showInformation();
        echo '<fieldset>
	    <legend>' . get_class( $this ) . '</legend>

	    <table>
	        <tr>
	            <td>Rayon</td>
	            <td>' . $this->getRadius() . '</td>
	        </tr>
	        <tr>
	            <td>Aire</td>
	            <td>' . $this->area() . '</td>
	        </tr>
	        <tr>
	            <td>Périmètre</td>
	            <td>' . $this->perimeter() . '</td>
	        </tr>
	    </table>
	</fieldset>';
    }
}