<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js%22%3E"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>
<body>
    <section>
        <div class="banner-main">
            <div class="container">
                <div class="text-bg">
                    <div class="container">
                        <h3>Avion</h3>
                        <select name="avion" id="avion">

                            <?php
                            require_once '../Modele/Avions.php';
                            $avion = new Avions();
                            foreach ($avion->setAvion() as $values){
                                ?>
                                <option><?php echo $values['nom']?></option>

                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../js/select2.js"></script>
    <script >$(document).ready(function()){
            $('#avion').select2()
        })</script>

</body>
</html>
