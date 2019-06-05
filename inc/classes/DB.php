<?php
$db = new DB();
class DB {

	protected static $con;

	private function _construct() {

		try {

			self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_course', 'root', 'root' );
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION );
			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );

		} catch (PDOException $e) {
			echo "Could not connect to database."; exit;
		}
	}

	public static function getConnection() {

		if (!self::$con) {
			new DB();
		}

		return self::$con;
	}
}
?>