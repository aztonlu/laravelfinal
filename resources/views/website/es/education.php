<?php 
	
	class education	{
		private $id;
		private $name;
		private $latitude;
		private $longitude;
		private $conn;
		private $tableName = "tags";

		function setId($id) { $this->id = $id; }
		function getId() { return $this->id; }
		function setName($name) { $this->name = $name; }
		function getName() { return $this->name; }
		function setLat($latitude) { $this->latitude = $latitude; }
		function getLat() { return $this->latitude; }
		function setLng($longitude) { $this->longitude = $longitude; }
		function getLng() { return $this->longitude; }

		public function __construct() {
			require_once('db/DbConnect.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}

		public function getCollegesBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE latitude IS NULL AND longitude IS NULL";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAllColleges() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function updateCollegesWithLatLng() {
			$sql = "UPDATE $this->tableName SET latitude = :latitude, longitude = :longitude WHERE id = :id";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':latitude', $this->latitude);
			$stmt->bindParam(':longitude', $this->longitude);
			$stmt->bindParam(':id', $this->id);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}

?>