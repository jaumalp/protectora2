<?php

namespace Protectora;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    private $specialAbre = "~<";
    private $specialCierra = "~>";

    //Devuelve el codigo HTML con la foto ovalada de la portada (modo enlace en $conLink)
    public function pathToImages(){
        return './images/perros/'.$this->id.'/';
    }

    public function getHTMLFotoPortada($conLink = true){
        $ret = '';
        $ret .= '<img class="rounded-circle img-fluid d-block mx-auto" src="';
        $ret .= $this->getUrlPortada().'" alt="">';

        if ($conLink)
            return '<a href="'.url('/animal/'.$this->id).'">'.$ret.'</a>';
        else
            return $ret;
    }

    //False: No tiene ni la foto de la portada.  Array de objetos resultado en caso de al menos la portada
    //Objeto resultado ->  $objeto->url  y   $objeto->desc
    public function getArrayUrlsFotos($conPortada = true){
        $archivos = scandir($this->pathToImages()); //Todos los nombre de archivos en directorio
        $archivos = array_slice($archivos,2); //Elimino los directorios ./ y ../
        if (count($archivos)>0) {
            $ret = [];
            foreach ($archivos as $archivo) {
                if ($conPortada or strpos(strtoupper($archivo),'PORTADA.')===false)
                    array_push($ret, asset($this->pathToImages().$archivo));
            }
            return $ret;
        } else
            return false;

    }

    public function getUrlPortada(){
        if (file_exists($this->pathToImages().'portada.jpg'))
            return asset($this->pathToImages().'portada.jpg');
        elseif (file_exists($this->pathToImages().'portada.jpeg'))
            return asset($this->pathToImages().'portada.jpeg');
        elseif (file_exists($this->pathToImages().'portada.png'))
            return asset($this->pathToImages().'portada.png');
        else
            return false;
    }

}
