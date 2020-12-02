# Sistema Web NF

Este sistema fue creado econ el proposito de que los estudiantes del E.T. "Francisco Fajardo" puedan visualizar sus notas.

## Funcionamiento

Sube en la carpeta `public/img/notas/` las imagenes con las notas de los estudiantes, con el siguiente formato de archivo:
```
Año.Mención.Sección.extensión
```

Ejemplos:
```
4to.Informática.U.png
5to.Construcción-Civil.A.jpg
1er.Turismo.U.jpeg
```

## Compilación

Primero instala las dependencias:

```sh
npm install
```

Luego compila el proyecto en modo producción:

```sh
npm run build-prod
```

Para crear una versión en modo desarrollo ejecuta esto:

```sh
npm run build-dev
```

## Licencia

Este proyecto esta bajo los términos de la Licencia de [Apache](https://github.com/francisco-fajardo/inicio/blob/master/LICENSE).
