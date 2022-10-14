<?php
    class customException extends Exception {
        public function getcustomMessage(){
            $error = '';
            $error .= '<br> loi : '.$this->getmessage();
            $error .= '<br> dong : '.$this->getLine();
            $error .= '<br> code : '.$this->getCode();
            return $error;
        }
        
    }
  
    try {
        //code...
        throw new customException("xoa khong thanh cong");

    } catch (customException $e) {
        
        //xử lí khi xảy ra lỗi logic

        echo 'đã có lỗi xảy ra' . $e->getcustomMessage();

    }