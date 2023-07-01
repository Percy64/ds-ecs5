<?php
require_once 'modelo/arbitro.php';
require_once 'modelo/directortecnico.php';
require_once 'modelo/jugador.php';
require_once 'modelo/equipo.php';
require_once 'modelo/partido.php';


$ar= new arbitro();
$ar->id=1;
$ar->nombre='emanuel';
$ar->apellido='merlo';
$ar->gremio='isei';

$dt1=new directortecnico();
$dt1->id=1224;
$dt1->nombre='juan';
$dt1->apellido='messi';

$dt2=new directortecnico();
$dt2->id=1284;
$dt2->nombre='pedro';
$dt2->apellido='chan';

$j1=new jugador();
$j1->id=1;
$j1->nombre='juan';
$j1->apellido='x';

$j2=new jugador();
$j2->id=2;
$j2->nombre='viejo';
$j2->apellido='muy';

$j3=new jugador();
$j3->id=3;
$j3->nombre='manu';
$j3->apellido='perez';

$j4=new jugador();
$j4->id=4;
$j4->nombre='cho';
$j4->apellido='chan';

$e1=new equipo();
$e1->id=754554;
$e1->nombreequipo='river';
$e1->listjugadores[]=$j1;
$e1->listjugadores[]=$j2;
$e1->directortecnico=$dt1;

$e2=new equipo();
$e2->id=745564;
$e2->nombreequipo='boca';
$e2->listjugadores[]=$j3;
$e2->listjugadores[]=$j4;
$e2->directortecnico=$dt2;

$p=new partido();
$p->id=300623;
$p->equipolocal=$e1;
$p->equipovisitante=$e2;
$p->fechapartido='30/06/23';
$p->arbitro=$ar;
$p->mostrardatos();


