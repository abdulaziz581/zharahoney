<?php
class EWebUser extends CWebUser
{
 private $_userTable = array
 (
   0=>'SUPERADMIN',
   1=>'CUSTOMER SERVICE',
   2=>'VERIFIKATOR',
   3=>'BAGIAN PENGIRIMAN',
   4=>'PIMPINAN',
   5=>'SEKRETARIS PIMPINAN',  
   6=>'INVESTOR',
   7=>'ADMINISTRATOR'
 );
 protected $_model;
function isAdmin()
 {
 //Access this via Yii::app()->user->isAdmin()
 
   return (Yii::app()->user->isGuest) ? FALSE : $this->role == 1;
 }
 
 public function isSuperadmin()
 {
 //Access this via Yii::app()->user->isSuperadmin()
   return (Yii::app()->user->isGuest) ? FALSE : $this->role == 0;
 }
 
 public function canAccess($minimumLevel)
 {
 //Access this via Yii::app()->user->canAccess(9)
   return (Yii::app()->user->isGuest) ? FALSE : $this->role >= $minimumLevel;
 }
 
 public function getRoleName()
 {
 //Access this via Yii::app()->user->getRoleName()
   return (Yii::app()->user->isGuest) ? '' : $this->getUserLabel($this->role);
 }
 
 public function getUserLabel($role)
 {
 //Use this for example as a column in CGridView.columns:
 //
 //array('value'=>'Yii::app()->user->getUserLabel($data->level)'),
   return $this->_userTable[$role];
 }
 
 public function getUserLevelsList()
 {
 //Access this via Yii::app()->user->getUserLevelsList()
   return $this->_userTable;
 }

}
?>