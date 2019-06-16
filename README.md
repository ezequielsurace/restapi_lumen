# restapi_lumen

## Instalación

### Requisitos
``` bash
PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
```

### Descargar Lumen
``` bash
composer global require "laravel/lumen-installer"
```

### Archivo .env
``` bash
Tomar de ejemplo el archivo .env.example para configurar el acceso a la BD. Tienes que crear un archivo que sea .env solo.
```

### Ejecutar las Migraciones
``` bash
php artisan migrate
```


###  Ejecutar Servidor Local
``` bash
php -S localhost:8000 -t public
```

## Endpoints

### Get All Aulas
``` bash
GET /aula
```
### Get Single Aula
``` bash
GET /aula/{id}
```

### Delete Aula
``` bash
DELETE /aula/{id}
```

### Create Aula
``` bash
POST /aula

# Request sample
#{
#  "aire": true,
#  "ventilador" : true,
#  "calefaccion" : false
#}
```

### Update Aula
``` bash
PUT /aula/{id}

# Request sample
#{
#  "aire": true,
#  "ventilador" : true,
#  "calefaccion" : false
#}


### Get All Personas
``` bash
GET /persona
```
### Get Single Persona
``` bash
GET /persona/{id}
```

### Delete Persona
``` bash
DELETE /persona/{id}
```

### Create Persona
``` bash
POST /persona

# Request sample
#{
#"nombre" : "Juan", 
#"apellido" : "Perez", 
#"tipo_doc": 1, 
#"nro_doc" : 30567890, 
#"sexo" : "M", 
#"fec_nacimiento" : "21-04-1987"
#}
```

### Update Persona
``` bash
PUT /persona/{id}

# Request sample
#{
#"nombre" : "Juan", 
#"apellido" : "Perez", 
#"tipo_doc": 1, 
#"nro_doc" : 30567890, 
#"sexo" : "M", 
#"fec_nacimiento" : "21-04-1987"
#}

### Get All Clases
``` bash
GET /clase
```
### Get Single Clase
``` bash
GET /clase/{id}
```

### Delete Clase
``` bash
DELETE /clase/{id}
```

### Create Clase
``` bash
POST /clase

# Request sample
#{
#"nombre" : "Programación", 
#"idProfesor" : 1, 
#"idAlumno": 2, 
#"fecha" : "2019-07-01",
#"hora" : "19:00", 
#"idAula" : 1
#}
```

### Update Clase
``` bash
PUT /clase/{id}

# Request sample
#{
#"nombre" : "Programación", 
#"idProfesor" : 1, 
#"idAlumno": 2, 
#"fecha" : "2019-07-01",
#"hora" : "19:00", 
#"idAula" : 1
#}

```
