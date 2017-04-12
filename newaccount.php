<!DOCTYPE html>
<html>

<head>
    <meta type="content" charset="utf-8" />
    <title>Nouveau Compte</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- CSS --><!-- 
  <link rel="stylesheet" href="assets/css/main.css" />  -->
</head>

<body id="body">
    <!-- Form -->
        <section id="form">


            <div class="container">
                <h3>Création d'un nouveau compte:</h3>
                <form>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="nom" class="form-control" id="nom" placeholder="Pseudo">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="password" placeholder="Password" >
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                                <input type="password2" class="form-control" id="password" placeholder="Password (confirmation)" >
                            </div>
                        </div>
                    
                     <div class="col-sm-12">
                            <div class="form-group">
                                <input type="nom" class="form-control" id="nom" placeholder="Mail">
                            </div>
                        </div>
                    
</div>
                    <button type="submit" class="btn btn-primary" onclick="Create();">Create</button>

                    <button class="btn btn-default" onclick="backHome();" type="button">
     Retour</button>


                </form>
            </div>

        </section>
    


<!-- jQuery & JS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/javascript.js"></script>

</body>
</html>

    