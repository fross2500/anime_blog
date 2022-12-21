<?php 
    class crud{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the subscriber database
        public function insertSubscribers($fname, $lname, $dob, $email,$contact,$genre,$gender,$address,$avatar_path){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO subscribers (firstname,lastname,dateofbirth,emailaddress,contactnumber,genre_id,gender_id,address,avatar_path,) VALUES (:fname,:lname,:dob,:email,:contact,:genre,:genders,:address,:avatar_path)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':genre',$genre);
                $stmt->bindparam(':genders',$gender);
                $stmt->bindparam(':address',$address);


                $stmt->bindparam(':avatar_path',$avatar_path);
           

                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editSubcribers($id,$fname, $lname, $dob, $email,$contact,$genre,$gender,$address){
           try{ 
                $sql = "UPDATE `subscribers` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:contact,`genre_id`=:genre,`genders`=:gender,`address`=:address
                 WHERE subscriber_id = :id ";
                 
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':genre',$genre);
                $stmt->bindparam(':genders',$gender);

                // execute statement
                $stmt->execute();
                return true;
           }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }
            
        }

        public function getSubscribers(){
            try{
                $sql = "SELECT * FROM `subscribers` a inner join genre s on a.genre_id = s.genre_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getSubscribersDetails($id){
           try{
                $sql = "select * from subscribers a inner join genre s on a.genre_id = s.genre_id 
                where genre_id = :id";
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

        public function deleteSubscribers($id){
           try{
                $sql = "delete from subscribers where subscriber_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getGenre(){
            try{
                $sql = "SELECT * FROM `genre`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getGenreById($id){
            try{
                $sql = "SELECT * FROM `genre` where genre_id = :id";
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