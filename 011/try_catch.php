<?php

        $a = 4;
        $b = 0;

        function xoa(){
            throw new Exception("xoa khong thanh cong");
            
        }
        try {
            // code thực thi
            xoa();

            if ($b === 0) {
                throw new Exception("chia cho 0");
            }

            if( !$b ){
                throw new Exception("yeu cau gia tri cua b");
                
            }
            $c = $a / $b;

            echo 'kết quả là ' . $c;

        } catch (\Exception $e) {
            //xử lí khi xảy ra lỗi logic
            echo 'đã có lỗi xảy ra' . $e->getMessage();

        } finally{
            
            echo'<br> finally';
        }
