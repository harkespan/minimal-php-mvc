<?php
    namespace Libraries;

    class Bantuan
    {
        function getBulan($month)
        {
            switch($month)
            {
                case '01' : return "Januari";break;
                case '02' : return "Februari";break;
                case '03' : return "Maret";break;
                case '04' : return "April";break;
                case '05' : return "Mei";break;
                case '06' : return "Juni";break;
                case '07' : return "Juli";break;
                case '08' : return "Agustus";break;
                case '09' : return "September";break;
                case '10' : return "Oktober";break;
                case '11' : return "November";break;
                case '12' : return "Desember";break;
                default : return "Januari";break;
            }
        }

        function tgl_indo($tanggal)
        {
            $x = explode("-",$tanggal);
            $bulan = $this->getBulan($x[1]);
            if(isset($x[2]))
            {
                return $x[2]." ".$bulan." ".$x[0]; 
            }
            else
            {
                return $bulan." ".$x[0];
            }
        } 

        function resultToArray($query, $fields)
        {            
            if(is_object($query)){
                $count_arr=$query->rowCount();
            }
            else{
                $count_arr=0;
            }
            if($count_arr>0){
                $rs = $query;
            }
            else{
                $rs=[];
            }
        
            $results = [];
        
            foreach($rs as $row)
            {
                $results += [$row[$fields[0]] => $row[$fields[1]]];
            }
        
            return $results;
        }

    }