<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"></h5>
                <button type="button" class="
                close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row no-gutters">

                        <!-- Botones -->
                        <div class="col-6">
                            <button id="login" class="btn btn-block btn-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Login</button>
                        </div>
                        <div class="col-6">
                            <button id="registro" class="btn btn-block btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="#collapseExample ">Registrate</button>
                        </div>

                        <!-- Formularios -->
                        <div class="col-12">
                            <div class="collapse show" id="collapseExample">
                                <div class="card card-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Username or Email</label>
                                            <input type="text" class="form-control" placeholder="Ingresa nombre de usuario" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" class="form-control" placeholder="Ingresa contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="submit" value="Iniciar Sesión" class="btn btn-success btn-block">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="collapse" id="collapseExample2">
                                <div class="card card-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Nombre de usuario</label>
                                            <input type="text" class="form-control" placeholder="Ingresa nombre de usuario" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Ingresa correo electronico" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" class="form-control" placeholder="Ingresa contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Registrarse" class="btn btn-success btn-block">
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