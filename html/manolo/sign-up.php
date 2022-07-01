<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="bg-light container-fluid vh-100">
        <br></br>
        <br></br>
        <div class="card col-md-8 offset-md-2 col-xl-8 offset-xl-2">
            <form method="post">
                <h2 class="text-center">Time to find your DREAM HOUSE</h2>
                <div class="mb-3"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 offset-md-3 col-xxl-8"><label class="col-form-label">Firstname</label><input class="form-control" name="first_name" type="text"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 offset-md-3 col-xxl-8"><label class="col-form-label">Lastname</label><input class="form-control" name="last_name" type="text"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <label class="col-form-label">Date of birth</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="day" class="form-select">
                                    <optgroup label="Day">
                                        <option value="12" selected=""></option>
                                        <?php for($i=1;$i<32;$i++){
                                            echo "<option value='".$i."' >".$i."</option>";
                                        } ?>
                                    </optgroup>
                                </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="month" class="form-select">
                                    <optgroup label="Month">
                                        <option value="12" selected=""></option>
                                        <?php for($i=1;$i<=12;$i++){
                                            echo "<option value='".$i."' >".$i."</option>";
                                        } ?>
                                    </optgroup>
                                </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="year" class="form-select">
                                <optgroup label="Year">
                                <option value="12" selected=""></option>
                                <?php for($i=1989;$i<2022;$i++){
                                    echo "<option value='".$i."' >".$i."</option>";
                                } ?>
                                </optgroup>
                            </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <label class="col-form-label">Phone number</label>
                            <div class="row">   
                                <div class="col-md-4">
                                    <select class="form-select">
                                        <optgroup label="This is a group">
                                            <option value="+26134"  selected="">+26134</option>
                                            <option value="+26133">+26133</option>
                                            <option value="+26132">+26132</option>
                                        </optgroup>
                                    </select>
                                </div>                    
                                <div class="col-md-8">
                                    <input class="form-control" type="text">
                                </div>                    
                            </div>                    
                        </div>                    
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 offset-md-3 col-xxl-8"><label class="col-form-label">Email</label><input  name="email" class="form-control" type="text"></div>
                        <div class="col-md-6 offset-md-3 col-xxl-8"><label class="col-form-label">Password</label><input name="password" class="form-control" type="text"></div>
                        <div class="col-md-6 offset-md-3 col-xxl-8"><label class="col-form-label">Confirm password</label><input name="confirm_password" class="form-control" type="text">
                            <a href="#"><br>I already have an account&nbsp;<br><br><br></a>
                        </div>
                        <div class="col-md-6 offset-md-3" ><button class="btn btn-primary" type="button" style="margin: 0px ;">Sign up</button></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div></div>
    <section></section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>