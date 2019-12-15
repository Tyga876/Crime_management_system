<?php 
    class crud{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the criminal database
        public function insertCriminals($fname, $mname, $lname, $alias, $dob, $gender, $h_address, $offence, $occupation, $idNo, $idType, $email, $contact, $regNo,$ava_path){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO criminal_tb (firstName, middleName, lastName, alias, dob, gender,h_address, offence
                , occupation, idNo, idType_id, email, phone ,regNo,ava_path) 
                VALUES (:fname,:mname,:lname,:alias,:dob,:gender,:h_address,:offence,:occupation,:idNo,:idType,:email,
                :contact, :regNo,:ava_path)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':mname',$mname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':alias',$alias);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':h_address',$h_address);
                $stmt->bindparam(':offence',$offence);
                $stmt->bindparam(':occupation',$occupation);
                $stmt->bindparam(':idNo',$idNo);
                $stmt->bindparam(':idType',$idType);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':regNo',$regNo);
                $stmt->bindparam(':ava_path',$ava_path);

                
                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editCriminals($id, $fname, $mname, $lname, $alias, $dob, $gender, $h_address, $offence, 
                        $occupation, $idNo, $idType, $email, $contact, $regNo){
           try{ 
                $sql = "UPDATE `criminal_tb` SET `firstName`=:fname,`middleName`=:mname,`lastName`=:lname,
                `alias`=:alias,`dob`=:dob,`gender`=:gender,`h_address`=:h_address,`offence`=:offence,
                `occupation`=:occupation,`idNo`=:idNo,`idType_id`=:idType,`email`=:email,`phone`=:contact,
                `regNo`=:regNo WHERE criminal_tb_id= :id ";
                $stmt = $this->db->prepare($sql);
                
                // bind all placeholders to the actual values
              
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':mname',$mname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':alias',$alias);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':h_address',$h_address);
                $stmt->bindparam(':offence',$offence);
                $stmt->bindparam(':occupation',$occupation);
                $stmt->bindparam(':idNo',$idNo);
                $stmt->bindparam(':idType',$idType);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':regNo',$regNo);
                // execute statement
                
                $stmt->execute();
                return true;
                
           }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }
            
        }

        public function getCriminals(){
            try{
                $sql = "SELECT * FROM `criminal_tb` c inner join idtype_tb i on c.idType_id = i.idType_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getCriminalsDetails($id){
           try{
                $sql = "select * from criminal_tb c inner join idtype_tb i on c.idType_id = i.idType_id where criminal_tb_id = :id"; 
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
           }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        

        public function deleteCriminals($id){
           try{
                $sql = "delete from criminal_tb where criminal_tb_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getIdType(){
            try{
                $sql = "SELECT * FROM `idtype_tb`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }
        public function getIdTypeById($id){
            try{
                $sql = "SELECT * FROM `idtype_tb` where idType_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
           
        

        } 
    }
?>