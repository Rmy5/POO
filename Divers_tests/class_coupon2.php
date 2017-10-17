<?php
	interface fixerPromoVoiture{
		function fixerPromoPeriode();
		function fixerPromoStock();
	}

	class bmwPromoVentes implements fixerPromoVoiture{
		private $reduction = 0;
		private $periodeVenteCreuse = true;
		private $stockImportant = true;

		public function fixerPromoPeriode(){
			if ($this->periodeVenteCreuse) return $this->reduction += 6;
			return $this->reduction += 0;
		}

		public function fixerPromoStock(){
			if ($this->stockImportant) return $this->reduction += 1.2;
			return $this ->reduction += 0;
		}
	}


	class mercedesPromoVentes implements fixerPromoVoiture{
		private $reduction = 0;
		private $periodeVenteCreuse = true;
		private $stockImportant = true;

		public function fixerPromoPeriode(){
			if ($this->periodeVenteCreuse) return $this->reduction += 5;
			return $this->reduction += 0;
		}

		public function fixerPromoStock(){
			if ($this->stockImportant) return $this->reduction += 3.9;
			return $this ->reduction += 0;
		}
	}

	class couponElaboration{
		private $promoVoiture;

		public function __construct(fixerPromoVoiture $promoVoiture){
			$this->promoVoiture = $promoVoiture;
		}

		public function getCoupon(){
			$reduction = $this->promoVoiture->fixerPromoPeriode();
			$reductionFinale = $this->promoVoiture->fixerPromoStock();

			return $coupon = 'Super promo de '.$reductionFinale.' sur le prix de votre voiture';
		}
	}

	$couponElab = new couponElaboration(new bmwPromoVentes);
	echo $couponElab->getCoupon();

	echo '<br>';
	
	$couponElab = new couponElaboration(new mercedesPromoVentes);
	echo $couponElab->getCoupon();





?>