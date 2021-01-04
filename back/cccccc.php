<?php

include 'admin.php';
include 'user.php';
require_once ( 'places.php');
require_once ( 'subject.php');
require_once ('package.php'); 


$u=new user();

/*
print_r($u->get_amenities());
echo count($u->get_amenities());
*/
/*
print_r($u->searchforpackages(null,"s"));
*/
/*
echo '<br><br><br><br><br><br>';
echo count($u->searchforpackages($p,$s)) ;
 */

/*
$u=new user();
$r=$u->get_amenities();
print_r($r);
 * 
 */

$u->select_package("1","hoksha","tefa",3,"airline_price","3588855");
/*
$a=new admin();

  $r=$a->show_users();
  for($i=0;$i<$a->get_nomberuser();$i++){
      echo $r[$i]['user_fname'];
      echo '<br>';
  }

*/
/*
print_r($u->get_id("cb"));
print_r($u->profiles("19"));
 
echo count($u->profiles("19"));
 * 
 */
/*
$p=new package();
$p->package_name="hoksh";
$p->Hotel="gggggg";
$p->going_time="2019-04-03";
$p->image="ssssssssssss";
$p->airline_price="50";
$p->bus_price="";
$p->train_price="";
$p->days="3";
$a=new admin();
$a->addpackage($p,"p","l");
 */

/*
$s=new subject();
$s->subject_name="bbbbbbbbbb";
$s->subject_description="dssss";
 $a=new admin();
 $a->addsubject($s);

 */
/*
$u=new user();
echo $u->get_nomberuser();
 $r="mahmoudmagdy2@yahoo.com";
 $t="123";
 
 if($u->login($r,$t)){
     echo 'right';
 }
 else {
     echo 'wrong';     
}
 echo '<br><br><br><br><br><br>';
 * 
 */
/*
 print_r($u->getrow("*","user","where user_id=:id",["id"=>1]));
 */
 
/*
$p=new places();

 $p->place_name="jddddddd";
 $p->place_description="jdddddddddddddddddddddd";
  $r=new admin();
 $r->addplace($p);
 */
?>