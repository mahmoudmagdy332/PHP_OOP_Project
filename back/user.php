<?php
 require_once ('database_myadmin.php');
 require_once ( 'places.php');
require_once ( 'subject.php');
require_once ( 'amenitie.php');
class user extends database_myadmin {
 
   

    public $user_id,$user_fname,$user_lname,$user_password,$user_email,$user_city,$user_phone ;
  

    public function signup(){
         
        $this->InsertRow("user","user_fname,user_lname,user_password,user_email,user_city,user_phone",":a,:c,:m,:g,:t,:l")->bind(
             array(
                 "a" => $this->user_fname,
                 "c" =>$this->user_lname,
                 "m" => $this->user_password,
                 "g" =>$this->user_email,
                 "t" =>$this->user_city,
                 "l" =>$this->user_phone
             )
             );
      if($this->execute()){
          return true;
      }
     else{
          return false;
     }
 
    }
        public  function addmember(){
         if($this->signup()){
             echo 'regester succesfuly';
         }
         else{
             echo "opps";
         }
     }
     public function login($email,$pass){
         
        $result= $this->getRows("user_email,user_password","user");
        $i=0;
        $f=0;
        while ($i < $this->get_nomberuser()){
            if($email==$result[$i]['user_email']&&$pass==$result[$i]['user_password']){
               $f=1;
        }

            $i++;
        }
        if($f==1){
            return TRUE;
        }
            else {
            return FALSE;    
        }
     }          
 public function searchforpackages($pl,$su){

 if($pl==null){
           $result= $this->getRows("*","package","WHERE package.subject_name=:s",["s"=>$su]);
         }
 elseif ($su==null) {
         $result= $this->getRows("*","package"," WHERE package.place_name=:p",["p"=>$pl]);
     }
       
         
     
 else {
$result= $this->getRows("*","package","where package.place_name=:p && package.subject_name=:s",
        ["s"=>$su,"p"=>$pl]);

}
 
return $result;

 
 }
          
public function  veiwpackages(){
    $result= $this->getRows("*","package");
    return $result;
    
}

public function  profile($id){
 
   
   $r1= $this->getRows("amenities.amenitie_name,package.*","package","package INNER JOIN orders ON package.Package_name=orders.Package_name 
        INNER JOIN amenities ON amenities.amenitie_id=orders.ameniti_id where orders.userID=:id",["id"=>$id]);

   return $r1;
}
public function  profiles($id){
   $r1= $this->getRows("*","orders","where userID=:id",["id"=>$id]);  
   return $r1;
}
public function ticket($id,$pa){
    $r1= $this->getRows("*","orders","where userID=:id && package_name=:pn",["id"=>$id,"pn"=>$pa]);  
   return $r1; 
    
}

public function edit_profile($id){
    
            $this->UpdateRow("user","user_fname=:a,user_lname=:c,user_password=:m,user_email=:g,user_city=:t,user_phone=:l","user_id",":id")->bind(
             array(
                 "a" => $this->user_fname,
                 "c" =>$this->user_lname,
                 "m" => $this->user_password,
                 "g" =>$this->user_email,
                 "t" =>$this->user_city,
                 "l" =>$this->user_phone,
                 "id" => $id 
             )
             );
      if($this->execute()){
          return true;
      }
     else{
          return false;
     }
}

public function  select_package($id,$pack_name,$amen_name,$member_nomber,$sel,$zip){
    $r3=$this->query("amenitie_id","amenities","WHERE amenitie_name=:an")->bind(["an"=>$amen_name])->execute()->fetch();
    $r1=$this->query("amenitie_price","amenities","WHERE amenitie_name=:an")->bind(["an"=>$amen_name])->execute()->fetch();
    if ($sel=="airline_price"){
  
    $r2=$this->query("airline_price","package","WHERE package_name=:an")->bind(["an"=>$pack_name])->execute()->fetch();

    }
 elseif ($sel=="bus_price") {
    $r2=$this->query("bus_price","package","WHERE package_name=:an")->bind(["an"=>$pack_name])->execute()->fetch();
 }
 elseif ($sel=="train_price") {
    
    $r2=$this->query("train_price","package","WHERE package_name=:an")->bind(["an"=>$pack_name])->execute()->fetch();
    }
    $this->InsertRow("orders","package_name,userId,ameniti_id,member_nomber,total_price,to_zip",":a,:b,:c,:d,:f,:g")->bind(array(
      "a" => $pack_name,
      "b" => $id,
      "c" => $r3["amenitie_id"],
      "d" => $member_nomber,
      "f" => ($r1["amenitie_price"]+ $r2[$sel])*$member_nomber,
      "g" => $zip
    ));
          if($this->execute()){
          return true;
      }
     else{
          return false;
     }
    
}
public function veiwpackage($npackage){
    $res= $this->getRow("*","package","where package_name=:pn",["pn"=>$npackage]);
    return $res;
}
public function search_foremail($email){
        $result= $this->getRow("user_email","user","where user_email=:us ",["us" =>$email]);
      
      if($result['user_email']==null)
          return FALSE;
      else 
          return TRUE;
     
  
}
    public function get_nomberpackage(){
        return $this->query("package_name","package")->execute()->rowCount();
    }
        public function get_nomberuser(){
        return $this->query("user_email","user")->execute()->rowCount();
    }
    public function get_amenities(){
        
         return $this->getRows("amenitie_name","amenities");
    }
    public function get_id($email){
        return $this->getRow("user_id","user","where user_email=:u",["u"=>$email]);
    }
    public function get_userdata($e){
      return $this->getRow("*","user","where user_email=:u",["u"=>$e]);  
    }
 public function get_idam($email){
        return $this->getRow("ameniti_id","amenities","where amenitie_name=:u",["u"=>$email]);
    }

    }

