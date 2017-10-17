<?php
class Square extends Rectangle{

 	public function __construct( $p_width , $p_height, $p_coordinates=array( 'x'=>0, 'y'=>0 ) ) {

 		parent::__construct( $p_width , $p_height, $p_coordinates);
    }
} 