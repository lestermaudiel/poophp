<?php
// DEFINICION DE LA CLASE PRODUCTO
 producto de clase {
    // DEFINICION DE ATRIBUTOS
    público  $ precio ;
    público  $ nombre ;
    público  $ disponible ;

    // DEFINICION DE METODOS

    public  function  mostrarNombreProducto () : void {
        echo  $ esto -> nombre ;
    }

    public  function  mostrarPrecioProducto () : void {
        echo  $ esto -> precio ;
    }

}

// CREACIÓN DE UN OBJETO
// CREAR UNA INSTANCIA
$ mesa = producto nuevo  ();

$ mesa -> nombre = " Mesa ";
$ mesa -> precio = 500 ;
$ mesa -> disponible = true ;

$ silla = producto nuevo  ();

$ mesa -> nombre = " Silla grande ";
$ mesa -> precio = 100 ;
$ mesa -> disponible = false ;



echo " <pre> ";
var_dump( $ mesa );
eco " </pre> ";
echo " <pre> ";
var_dump( $ silla );
eco " </pre> ";

$ mesa -> mostrarNombreProducto ();
$ silla -> mostrar Nombre Producto ();
$ mesa -> mostrarPrecioProducto ();