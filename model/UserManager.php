<?php


namespace NotreAgenceWeb\blog_JF\Model;

require_once ('model/Manager.php');

class UserManager extends Manager
{
	public function connect($login, $password) 
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM user WHERE login = ? AND password = ?');
		$req->execute(array($login,$password));
		$req = $req->fetch();
		return $req;
	}
}



