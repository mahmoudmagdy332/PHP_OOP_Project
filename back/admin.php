<?php



require_once ('database_myadmin.php');
require_once ( 'places.php');
require_once ( 'subject.php');
require_once ('package.php');
  class admin extends database_myadmin{

      public function addplace(places $p){
 
      
        $this->InsertRow("place","place_name,place_description",":a,:c")->bind(
             array(
            
                 "a" => $p->place_name,
                 "c" => $p->place_description
 
             )
             );
      if($this->execute()){
          return true;
      }
     else{
          return false;
     }
 
    }
  
     public function addsubject(subject $s){
                 $this->InsertRow("subject","subject_name,subject_description",":a,:c")->bind(
             array(
            
                 "a" => $s->subject_name,
                 "c" => $s->subject_description

             )
             );
      if($this->execute()){
          return true;
      }
     else{
          return false;
     }
 
    }
    public function addpackage(package $p,$place_n,$subject_n){
   $this->InsertRow("package","package_name,Hotel,going_time,image,"
           . "airline_price,bus_price,train_price,days,subject_name,place_name",":l,:a,:b,:c,:d,:e,:f,:g,:k,:r")->bind(array(
     "l" => $p->package_name,          
     "a" => $p->Hotel,  
     "b" => $p->going_time, 
     "c" => $p->image,
     "d" => $p->airline_price,
     "e" => $p->bus_price,
     "f" => $p->train_price,
     "g" => $p->days,
     "k" => $subject_n, 
     "r" => $place_n
   ));
       if($this->execute()){
          return true;
      }
     else{
          return false;
     }
    }
    public function show_users(){
       $result= $this->getRows("*","user");
    return $result;
        
    }
    public function show_userdata($id){
        $result= $this->getRow("*","user","WHERE user_id=:id",["id"=>$id]);
        return $result;
    }
    
    public function  search_forplace($place){
        $result= $this->getRow("place_name","place","where place_name=:us ",["us" =>$place]);
      
      if($result['place_name']==null)
          return FALSE;
      else 
          return TRUE;  
    }
        public function  search_forsubject($subject){
     $result= $this->getRow("subject_name","subject","where subject_name=:us ",["us" =>$subject]);
      
      if($result['subject_name']==null)
          return true;
      else 
          return FALSE;
   
    }
      public function  search_forpackage($package){
          $result= $this->getRow("package_name","package","where package_name=:us ",["us" =>$package]);
      
      if($result['package_name']==null)
          return FALSE;
      else 
          return TRUE;
    }
    public function get_nameplace(){
        return $this->getRows("place_name","place");
    }
        public function get_namesubject(){
        return $this->getRows("subject_name","subject");
    }
    public function get_nomberuser(){
        return $this->query("user_id","user")->execute()->rowCount();
    }

}
