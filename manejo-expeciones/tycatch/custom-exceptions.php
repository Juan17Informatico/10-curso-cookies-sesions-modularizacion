<?php 

class MichiException extends Exception
{   
    
        
    public function getMeow(){
        return "Meow! 😼";
    }

}



class ConejitoException extends Exception{

    public function getRabbit(){
        return "Conejito"; 
    }

}



try {

    $exception = readline("Excepción a lanzar: "); 

    if($exception == "michi")
        throw new MichiException("Michi incorrecto"); 
    else
        throw new ConejitoException("Conejo incorrecto"); 
    
} catch (MichiException $e) {

    echo $e->getMessage() . "\n"; 
    echo $e->getMeow();

} catch (ConejitoException $e) {

    echo $e->getMessage() . "\n"; 
    echo $e->getRabbit();

} finally{
    echo "\n perdonado";
}