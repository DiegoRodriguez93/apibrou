# apibrou

Proyecto con fines educativos, el objetivo de la aplicación es realizar un proceso de Web scraping en una web para extraer datos
de forma automatizada y generar apis, en este caso se extrae la cotización del dolar y euro contra el peso uruguayo de la página oficial
del brou (Banco de la Republica del Uruguay) sitio oficial https://www.brou.com.uy/ , utilizando php se genera una copia de cuerpo html
de la página, luego se le lee a través de jquery los datos de interés y se mandan por get a una página que genera un JSON.


{"fecha":"2019-09-19 08:39:39","dolar_compra":" 36,00000 ","dolar_venta":" 37,50000 ","euro_compra":" 38,74000 ","euro_venta":" 42,55000"}


Se podría generar una api con un script que varias veces al día guarde la cotización en una db, y luego devolver un JSON desde php y la db.

/////////////////////////////////////////////////////
por contacto escribir a diegorodriguez93@hotmail.com
/////////////////////////////////////////////////////
