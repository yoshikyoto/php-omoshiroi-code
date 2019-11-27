<?php

namespace A {
	class Oya {
		public function __construct($waa) {
			$this->dare = "oya";
			$this->kakegoe = $waa;
		}
	}
}

namespace B {
	class Ko extends \A\Oya{
		private function __construct($waa) {
			$this->dare = "ko";
			$this->kakegoe = $waa;
		}
	}
}
