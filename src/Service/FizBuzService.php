<?php 

namespace Service;

Class FizBuzService{

	public function parse()
	{
		for($i=1; $i<=100; $i++) {

			if( $i%3 == 0 ) echo "Fizz";

			if( $i%5 == 0 ) echo "Buzz";

			if( ($i%3 != 0) and ($i%5 != 0) ) echo $i;

			echo "<br />";
		}


		exit;
	}
}