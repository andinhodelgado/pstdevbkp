<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('../dbutil/Conn.class.php');
/**
 * Description of TurnoDAO
 *
 * @author anderson
 */
class TurnoDAO extends Conn {
    //put your code here
    
    public function dados() {

        $select = " SELECT "
                    . " ID AS \"idTurno\" "
                    . " , DESCR AS \"descrTurno\" "
                . " FROM " 
                    . " PAC_TURNO_TB_PROVISORIA " 
                . " ORDER BY " 
                    . " ID "
                . " ASC ";
        
        $this->Conn = parent::getConn();
        $this->Read = $this->Conn->prepare($select);
        $this->Read->setFetchMode(PDO::FETCH_ASSOC);
        $this->Read->execute();
        $result = $this->Read->fetchAll();

        return $result;
        
    }
    
}
