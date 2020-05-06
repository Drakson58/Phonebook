<?php


namespace App\Models;

//Importando o modelo de class
use MF\Model\Model;

class Contact extends Model{

    private $id;
    private $name;
    private $number;
    private $email;

    public function __get($attribute){
        return $this->$attribute;
    }

    public function __set($attribute, $value){
        $this->$attribute = $value;
    }

    //Register Contact.
    public function register(){

        $query = "insert into contact(name, number, email) values (:name, :number, :email)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':name', $this->__get('name'));
        $stmt->bindValue(':number', $this->__get('number'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->execute();

        return $this;
    }

    //Validadte Register
    public function validateRegister(){

        $validated = true;
        if(strlen($this->__get('name')) < 3){
            $validated = false;
        }else if(strlen($this->__get('number')) < 7){
            $validated = false;
        }else if(strlen($this->__get('email')) < 3){
            $validated = false;
        }

        return $validated;
    }

    //Check if contact exist
    public function getContactByNumber(){

        $query = "select id, number, email from contact where number = :number";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':number', $this->__get('number'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    //Search for contact
	public function getContact(){
		
		$query = "select id, name, number, email from contact ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function Contact(){

        $query = "select id, name, number, email from contact where name = :name";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(':name', $this->__get('name'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>