<?php
 
class DB {
 
	private static 	$_pdo,
					$_query, 
					$_error = false, 
					$_results, 
					$_count = 0;
 
	public static function connect(){
		try{
			self::$_pdo = new PDO('mysql:host=127.0.0.1;dbname=thepeoples' , 'root', '');
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
 
	public static function query($sql, $params = array()){
		
		self::$_error = false;
 
		if(self::$_query = self::$_pdo->prepare($sql)){
			
			$x = 1;
			if(count($params)){
				foreach ($params as $param) {
					self::$_query->bindValue($x, $param);
					$x++;
				}
			}
 
			if(self::$_query->execute()){
				self::$_results = self::$_query->fetchAll(PDO::FETCH_OBJ);
				self::$_count = self::$_query->rowCount();
			}else{
				self::$_error = true;
			}
 
		}
 
		return true;
	}
 
	public static function action($action, $table, $where = array()){
		if(count($where) === 3){
			$operators = array('=', '>', '<', '>=', '<=');
 
			$field 		= $where[0];
			$operator 	= $where[1];
			$value 		= $where[2];
 
			if(in_array($operator, $operators)){
				$sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
				
				self::query($sql, array($value));
				if(!self::error()){
					return true;
				}
			}
		}
 
		return false;
	}
 
	public static function get($table, $where){
		return self::action('SELECT *', $table, $where);
	}
 
	public static function delete($table, $where){
		return self::action('DELETE', $table, $where);
	}
 
	public static function insert($table, $fields = array()){
		if(count($fields)){
			$keys = array_keys($fields);
			$values = '';
			$x = 1;
 
			foreach ($fields as $field) {
				$values .= '?';
				if($x < count($fields)){
					$values .= ', ';
				}
				$x++;
			}
 
			$sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ({$values});";
			self::query($sql, $fields);
			if(!self::error()){
				return true;
			}
		}
 
		return false;
	}
 
	public static function update($table, $id, $fields){
		$set = '';
		$x = 1;
 
		foreach ($fields as $name => $value) {
			$set .= "{$name} = ?";
			if($x < count($fields)){
				$set .= ',';
			}
			$x++;
		}
 
		$sql = "UPDATE {$table} SET {$set} WHERE id = {$id};";
		self::query($sql, $fields);
		if(!self::error()){
			return true;
		}
 
		return false;
	}
 
	public static function results(){
		return self::$_results;
	}
 
	public static function first(){
		$results = self::results();
		return $results[0];
	}
 
	public static function error(){
		return self::$_error;
	}
 
	public static function count(){
		return self::$_count;
	}
}