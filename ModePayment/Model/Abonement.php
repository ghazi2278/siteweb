<?PHP
	class Abonements{
		private  $id = null;
		private  $type = null;
		private  $dure = null;
		private  $nom = null;
		private  $Email = null;
		private  $MotDePasse = null;
		private  $TypeDeCarte = null;
		private  $NumeroDeCarte = null;
		private  $DateDExpiration = null;

		
		
		public function __construct(string $type, string $dure, string $nom, string $Email, String $MotDePasse, string $TypeDeCarte, string $NumeroDeCarte, string $DateDExpiration){
			
			$this->type=$type;
			$this->dure=$dure;
			$this->nom=$nom;
			$this->Email=$Email;
			$this->MotDePasse=$MotDePasse;
			$this->TypeDeCarte=$TypeDeCarte;
			$this->NumeroDeCarte=$NumeroDeCarte;
			$this->DateDExpiration=$DateDExpiration;
			
		}
		
		public function getId() {
			return $this->id;
		}
		public function gettype() {
			return $this->type;
		}
		public function getdure() {
			return $this->dure;
		}
		public function getnom() {
			return $this->nom;
		}
		public function getEmail() {
			return $this->Email;
		}
		public function getMotDePasse() {
			return $this->MotDePasse;
		}
		public function getTypeDeCarte() {
			return $this->TypeDeCarte;
		}
		public function getNumeroDeCarte() {
			return $this->NumeroDeCarte;
		}
		public function getDateDExpiration() {
			return $this->DateDExpiration;
		}
		

		public function settype(string $type) {
			$this->type=$type;
		}
		public function setdure(string $dure) {
			$this->dure=$dure;
		}
		public function setnom(string $nom) {
			$this->nom=$nom;
		}
		public function setEmail(string $Email) {
			$this->Email=$Email;
		}
		public function setMotDePasse(string $MotDePasse) {
			$this->MotDePasse=$MotDePasse;
		}
		public function setTypeDeCarte(string $TypeDeCarte) {
			$this->TypeDeCarte=$TypeDeCarte;
		}
		public function setNumeroDeCarte(string $NumeroDeCarte) {
			$this->NumeroDeCarte=$NumeroDeCarte;
		}
		public function setDateDExpiration(string $DateDExpiration) {
			$this->DateDExpiration=$DateDExpiration;
		}

		
	}
?>