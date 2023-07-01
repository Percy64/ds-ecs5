<?php
class partido
{
    public $id;
    public $equipolocal;
    public $equipovisitante;
    public $fechapartido;
    public $arbitro;

    public function mostrardatos()
    {
        echo 'id del partido '.$this->id .'<br>';
       
        echo 'id:'.$this->equipolocal->id .'<br>';
        echo 'nombre del equipo:  '.$this->equipolocal->nombreequipo .'<br>';
        echo 'director tecnico id'.$this->equipolocal->directortecnico->id .'<br>';
        echo 'director tecnico nombre :'.$this->equipolocal->directortecnico->nombre .'<br>';
        echo 'director tecnico apellido :'. $this->equipolocal->directortecnico->apellido .'<br>';
        foreach($this->equipolocal->listjugadores as $j)
        {
        echo 'id del jugador: '.$j->id.'<br>';
        echo 'nombre del jugador '.$j->nombre.'<br>';
        echo 'apellido del jugador '.$j->apellido.'<br>';
 }
        echo 'id: '.$this->equipovisitante->id .'<br>';
        echo 'nombre del equipo:  '.$this->equipovisitante->nombreequipo .'<br>';
        echo 'director tecnico id '.$this->equipovisitante->directortecnico->id .'<br>';
        echo 'director tecnico nombre :'.$this->equipovisitante->directortecnico->nombre .'<br>';
        echo 'director tecnico apellido :'.$this->equipovisitante->directortecnico->apellido .'<br>';
        foreach($this->equipovisitante->listjugadores as $j){
        echo 'id del jugador: '. $j->id.'<br>';
        echo 'nombre del jugador '.$j->nombre.'<br>';
        echo 'apellido del jugador '.$j->apellido.'<br>';
    }
    
        echo $this->fechapartido .'<br>';
        echo 'id del arbitro: '.$this->arbitro->id .'<br>';
        echo 'nombre'.$this->arbitro->nombre .'<br>';
        echo 'apeliido: '.$this->arbitro->apellido .'<br>';
        echo 'gremio: '. $this->arbitro->gremio .'<br>';

    }

}