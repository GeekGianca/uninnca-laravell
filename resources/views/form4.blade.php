<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('css/aos.css?ver=1.1.0')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css?ver=1.1.0')}}" rel="stylesheet">
    <link href="{{asset('css/main.css?ver=1.1.0')}}" rel="stylesheet">
</head>

<div class="cc-contact-information">
    <div class="container">
        <div class="cc-contact">
            <div class="row">
                <div class="col-md-9">
                    <div class="card mb-0" data-aos="zoom-in">
                        <div class="h4 text-center title">Formulario de registro</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="tdoc">Nombres</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="name" placeholder="Escriba el nombre . . ." required="required" maxlength="50"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="tdoc">Apellidos</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="Subject" placeholder="Escriba el apellidos . . ." required="required" maxlength="50"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="tdoc">Correo electronico</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="email" name="Subject" placeholder="Escriba el correo . . ." required="required"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="tdoc">Tipo de documento</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="" id="" required="required" placeholder="Tipo de documento">
                                                        <option selected></option>
                                                        <option>Cedula de ciudadania</option>
                                                        <option>Cedula de extranjeria</option>
                                                        <option>NIT</option>
                                                        <option>Pasaporte</option>
                                                        <option>Registro civil</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="tdoc">Numero de documento</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="number" name="Subject" placeholder="Escriba el numero de documento" required="required"
                                                           maxlength="10" minlength="8"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="tdoc">Tipo de Solicitud</label>
                                                    <select class="form-control" name="" id="tdoc" required="required">
                                                        <option selected></option>
                                                        <option>Solicitud de documentos</option>
                                                        <option>Reclamos</option>
                                                        <option>Extractos</option>
                                                        <option>Cancalacion de productos</option>
                                                        <option>Solictud de productos</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="tdoc">Detalle de solicitud</label>
                                                <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Detalle aqui su solicitud, maximo 200 caracteres" required="required"
                                      maxlength="200" minlength="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <button class="btn btn-primary " type="submit">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
</div>
<script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
<script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
<script src="js/aos.js?ver=1.1.0"></script>
<script src="scripts/main.js?ver=1.1.0"></script>
</body>
</html>
