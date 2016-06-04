<!DOCTYPE html>
<?php
    class MyForm{
        public static $name1 = "";
        public static $email1 = "";
        public static $phone1 = "";
        public static $address1 = "";
        public static $gender1 = "";
        public static $nationality1 = "";
        public static $edu1 = "";
        public static $dob1 = "";
        public static $mode1 = "";
        
        public function addContents(){
            self::$name1 = $_POST['name'];
            self::$email1 = $_POST['email'];
            self::$phone1 = $_POST['phone'];
            self::$address1 = $_POST['address'];
            self::$gender1 = $_POST['gender'];
            self::$nationality1 = $_POST['nationality'];
            self::$edu1 = $_POST['edu'];
            self::$dob1 = $_POST['dob'];
            self::$mode1 = $_POST['mode'];
            
            $newdata = array();
            $newdata[0] = self::$name1;
            $newdata[1] = self::$email1;
            $newdata[2] = self::$phone1;
            $newdata[3] = self::$address1;
            $newdata[4] = self::$gender1;
            $newdata[5] = self::$nationality1;
            $newdata[6] = self::$edu1;
            $newdata[7] = self::$dob1;
            $newdata[8] = self::$mode1;
            $myForm_handle = fopen("myform1.csv", "a");
            fputcsv($myForm_handle, $newdata);
            fclose($myForm_handle);
        }
        
        public function getContents(){
            $myForm_handle = fopen("myform1.csv", "r");
            $i = 0;
            $toreturn = array(array());
            while (!feof($myForm_handle) ) {

            $entry = fgetcsv($myForm_handle, 1024); 
            $toreturn[$i] = $entry;
            $i++;
            }
            echo '</table>';
            fclose($myForm_handle);
            return $toreturn;
        }
    }
    