<?php 
    function sequenciaCrescente(array $numeros): bool
    {
        if(count($numeros) == 2)
        {
            return true;
        }

        $sequencia = false; 

        for($i = 0; $i < count($numeros); $i++)
        {
            $sequenciaNumeros = $numeros;
            unset($sequenciaNumeros[$i]);
            $seqNum = [];
            $x = 0;

            foreach($sequenciaNumeros as $s){
                $seqNum[$x] = $s;
                $x++;
            }
            
            for($z=0; $z < count($seqNum)-1; $z++){
                if((int) $seqNum[$z+1] > (int) $seqNum[$z] && (int) $seqNum[$z])
                {
                    $sequencia = true;
                }else{
                    $sequencia = false;
                }
            }
            if($sequencia){
                break;
            }
        }
        return $sequencia;
    }
?>