<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Request Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{asset('css/custom.css')}}'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container px-5 my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 rounded-3 shadow-lg">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="h1 fw-light">Request Form</div>
                        <p class="mb-4 text-muted">We provide you with security in every process we run.!</p>
                        <br>
                        <div class="text-center">
                            <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="logo">
                        </div>
                        <br>
                    </div>
                    <form id="contactForm">
                        <!-- Name Input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Name" required />
                            <label for="name">Name</label>
                            <div id="nameFeed" class="invalid-feedback">Name is required.</div>
                        </div>

                        <!-- Last Name Input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="lastname" type="text" placeholder="Last Name"
                                   required />
                            <label for="lastname">Last Name</label>
                            <div class="invalid-feedback">Last Name is
                                required.
                            </div>
                        </div>

                        <select id="documentType" class="form-select mb-3" aria-label="Default select example" required>
                            <option selected disabled>Tipo de documento</option>
                            <option value="CC">Cedula de ciudadania</option>
                            <option value="RC">Registro civil</option>
                            <option value="TI">Tarjeta de identidad</option>
                            <option value="PE">Pasaporte extranjero</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>

                        <!-- Email Input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="document" type="number" placeholder="Document"
                                   data-sb-validations="required,number" />
                            <label for="document">Document</label>
                            <div class="invalid-feedback" data-sb-feedback="document:required">Document number is
                                required.</div>
                            <div class="invalid-feedback" data-sb-feedback="document:email">Document
                                is not valid.</div>
                        </div>

                        <!-- Email Input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"
                                   data-sb-validations="required,email" />
                            <label for="emailAddress">Email Address</label>
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is
                                required.</div>
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email
                                is not valid.</div>
                        </div>

                        <select id="requestType" class="form-select mb-3" aria-label="Default select request">
                            <option selected disabled>Request type</option>
                            <option value="1">Queja</option>
                            <option value="2">Solicitud</option>
                            <option value="3">Otra</option>
                        </select>

                        <!-- Message Input -->
                        <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Message"
                                          style="height: 10rem;" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.
                            </div>
                        </div>

                        <!-- Submit success message -->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <p>Thank you for sending your request, we will be giving you notice soon</p>
                            </div>
                        </div>

                        <!-- Submit error message -->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>

                        <!-- Submit button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg disabled" id="submitButton"
                                    type="submit">Submit</button>
                        </div>
                    </form>
                    <!-- End of contact form -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- CDN Link to SB Forms Scripts -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/jquery-3.6.0.min.map"></script>
<script src="js/validations.js"></script>
</body>

</html>
