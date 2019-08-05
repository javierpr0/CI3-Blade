# Codeigniter con Blade

_Este proyecto te permite utilizar Codeigniter de la mano con Blade para que tu codificación sea más practica y sencilla._ 

## Como utilizarlo 🚀

_Es bastante sencillo, solo necesitas descargarlo, montarlo en el servidor de tu preferencia y listo._ Actualmente mis desarrollos en `Codeigniter` los realizo con esta base y mis desarrollos se han vuelto más eficientes, me ha sido más sencillo incluir nuevas librería, incluso trabajar con `Vuejs` haciendo uso de `@{{}}` ya que si usas `{{}}` causa interferencia con `Blade`.

### Pre-requisitos 📋

_Solamente un servidor para montarlo._ _Los archivos de `composer` fueron incluidos para que no fuera necesario que lo instalaras._

## Ajustes ⚙️

_Debido a inconvenientes con algunos parametros de Codeigniter, se te menciona que ahora la forma en la que cargaras tus vistas es con:_

`$this->view('vista', $data);` o `$this->view('vista');`

Todo lo relacionado con `session`, `uri` y más que se usa en `codeigniter` , se tiene que hacer desde el controlador debido a que en el lado del `frontend` te dan error cosas como `$this->uri->segment();`.

Para eso dentro del Controlador (`MY_Controller.php`) que se encuentra en la carpeta core se pueden crear funciones globales para lo que se necesite, por defecto deje definido que si llamas a la función `$this->uris();` te traiga los 3 primeros segmentos de url, esto equivale a:

    $this->uri->segment(1);
    $this->uri->segment(2);
    $this->uri->segment(3);

Al igual algo que es bueno y que no inclui fue el tema de las Flashdata, que únicamente consta de verificar si la flash contiene algo, de no ser así no se agrega al arreglo `$data`.

### Pruebas de codificación ⌨️

_Transformas de:_

```
<select class="form-control">  
 <option value="" disabled selected hidden>Selecciona tu opción</option>  
  <?php foreach ($datos as $dato){ ?>  
  <option value="<?php echo $dato->valor ?>"><?php echo $dato->titulo ?></option>  
  <?php }?>  
</select>
```

a:

```
<select class="form-control">  
 <option value="" disabled selected hidden>Selecciona tu opción</option>  
  @foreach($datos as $dato)  
  <option value="{{ $dato->valor }}">{{ $dato->titulo }}</option>  
  @endforeach  
</select>
```

El codigo se vuelve mas limpio y puedes hacer uso de todo lo que tiene blade.

 - @php
 - @extends
 - @if
 - @else
 - @elseif
 - @elsecan
 - @for
 - @foreach
 - y mucho mas que puedes ver en: [Blade Docs](https://laravel.com/docs/5.8/blade)

## Construido con 🛠️

_Fue creado utilizando la base de Codeigniter con PHP Blade de Coolpraz que se encuentra en [Packagist](https://packagist.org)._

* [Codeigniter v3.1.10](http://www.dropwizard.io/1.0.2/docs/) - El framework web usado
* [PHP Blade](https://packagist.org/packages/coolpraz/) - Paquete de PHP

## Autores ✒️

_Realmente no es algo complicado y que llevara mucho tiempo hacerlo, aunque estaría muy bien desarrollarlo más a fondo para establecer una base solida._

* **Eduardo Javier Maldonado Acevedo** - *Inicial* - [javierpr0]([https://github.com/javierpr0](https://github.com/javierpr0))

## Licencia 📄

Este proyecto está bajo la Licencia (### GNU General Public License v3.0) - mira el archivo [LICENSE.md](LICENSE) para detalles

## Gracias por tu Atención 🎁

* Comenta a otros sobre este proyecto 📢
* Desarrolla tus proyectos con esta base y notaras lo fluido que se vuelve el trabajo.
---
⌨️ con ❤️ por [Javierpr0](https://github.com/javierpr0) 😊
