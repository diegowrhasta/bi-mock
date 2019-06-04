<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Bootstrap Profile Page Design - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="data:image/jpeg;base64,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" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Cambiar Foto
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Jon Snow
                                    </h5>
                                    <h6>
                                        Encargado
                                    </h6>
                                    <p class="proile-rating">Denuncias : <span>8</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Info.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar Perfil"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID Usuario</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>1</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Jon</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Apellido</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Snow</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>jon@snow.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Contraseña</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>secret</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Estado</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Activo</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
<script type="text/javascript">

</script>
</body>
</html>
