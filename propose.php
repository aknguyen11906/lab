<!DOCTYPE html>
<html lang="en">

<head>
    <title>Amaris Foundation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrapValidator.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrapValidator.js"></script>
    <script src="js/script.js"></script>

</head>

<body>
    <header>
        <div class="nav-left">
            <div class="hamburger">&#9776;</div>
            <button class="cross">&#735;</button>
        </div>
        <span class="active-menu">Home</span>
        <div class="brand-logo col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <img src="images/amaris_logo.png" alt="Amaris's logo">
        </div>

        <div class="nav-right  hidden-xs">
            <a href="#">Connect</a>
            <a href="#">Contact</a>
        </div>
    </header>

    <div id="menu" class="menu">
        <ul>
            <a href="#">
                <li>Home</li>
            </a>
            <a href="#">
                <li>Amaris</li>
            </a>
            <a href="#">
                <li>Propose a project</li>
            </a>
            <a href="#" class="visible-xs">
                <li>Connect</li>
            </a>
            <a href="#" class="visible-xs">
                <li>Contact</li>
            </a>
        </ul>
    </div>
    <div id="banner">
        <img class="banner" src="images/propose_banner.jpg" alt="">
    </div>
    <div class="main">
        <div class="container">

            <form class="propose form-horizontal" action=" " method="post" id="contact_form">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Propose a project</legend>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Project Name</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="project_name" placeholder="Project Name" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Project Description</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <textarea class="form-control" name="description" placeholder="Project Description"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Keywords</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="keywords" placeholder="Keywords" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name of the organizations/companies/users</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="organizations" placeholder="Organizations/Companies/Users" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Website URL</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="website" placeholder="Website URL" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!--Selection-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Scope of action</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <select name="scope" placeholder="Select a scope of action" class="form-control">
                                    <option value=""></option>
                                    <option value="scope1">Scope 1</option>
                                    <option value="scope2">Scope 2</option>
                                    <option value="scope3">Scope 3</option>
                                    <option value="scope4">Scope 4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!--File upload-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Logo of Project</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="logo" class="form-control" type="file">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-xs-3 control-label">Terms of use</label>
                        <div class="col-xs-9">
                            <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                                <p>Rules for a non-profit organization to be selected:<br>To be selected the project of the non-profit organization needs to:</p>
                                <ol>
                                    <li>Use technology and innovative solutions to help foster independence;</li>
                                    <li>Respect our rules of Ethic : no discrimination of any kind, no promotion of a political or religious organization;</li>
                                    <li>Have a local, concrete and measurable impact. Then submitting a new non-profit organization to the Amaris Foundation is simple: collect all the information required with the non-profit organisation then complete the
                                        form here. For more details and information, take a look at the FAQ and at the Project Proposal Guidelines<br> Any questions? Any doubts? Don't hesitate to contact us at foundation@amaris.com.
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6 col-xs-offset-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="agree" value="" /> Agree with the terms and conditions
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-6 text-center">
                            <button type="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
    <!-- /.container -->
    </div>

    <footer class="footer">
        <div class="container">
            <a class="social-icon col-md-2 col-sm-4 col-xs-4" href="https://www.facebook.com" target="blank">
                <img src="images/facebook.png"></img>
            </a>
            <a class="social-icon col-md-2 col-sm-4 col-xs-4" href="https://www.instagram.com" target="blank">
                <img src="images/instagram.png"></img>
            </a>
            <a class="social-icon col-md-2 col-sm-4 col-xs-4" href="https://vn.linkedin.com" target="blank">
                <img src="images/linkedin.png"></img>
            </a>
            <a class="social-icon col-md-2 col-sm-4 col-xs-4" href="https://www.pinterest.com" target="blank">
                <img src="images/pinterest.png"></img>
            </a>
            <a class="social-icon col-md-2 col-sm-4 col-xs-4" href="https://twitter.com" target="blank">
                <img src="images/twitter.png"></img>
            </a>
            <a class="social-icon col-md-2 col-sm-4 col-xs-4" href="https://www.youtube.com" target="blank">
                <img src="images/youtube.png"></img>
            </a>
            <div class="footer-seperation"></div>
            <div class="nav-footer">
                <a class="col-md-2 col-sm-4 col-xs-4" href="#">Home</a>
                <a class="col-md-2 col-sm-4 col-xs-4" href="#">Goals</a>
                <a class="col-md-2 col-sm-4 col-xs-4" href="#">Porducts</a>
                <a class="col-md-2 col-sm-4 col-xs-4" href="#">About</a>
                <a class="col-md-2 col-sm-4 col-xs-4" href="#">FAQ</a>
                <a class="col-md-2 col-sm-4 col-xs-4" href="#">Contact</a>
            </div>
            <p class="copyright">Collectively crafted with &hearts; for Amaris Foundation</p>

        </div>
    </footer>
</body>

</html>