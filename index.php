<!DOCTYPE html>
<html lang="en">
<head>
    <title>Somnia Rentals</title>
    <link rel="icon" href="public/ico/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
            padding: 10px 0 0 0;
        }
        nav {
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
        }
        footer {
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
    <header>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Logo</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="">Dispute</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="">Dispute</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="./login.html">Login</a></li>
                        <li><a href="./register.html">Register</a></li>
                    </ul>
					
					<!-- Dropdown Structure -->
					<ul id="dropdown1" class="dropdown-content">
					  <li><a href="#!">one</a></li>
					  <li><a href="#!">two</a></li>
					  <li class="divider"></li>
					  <li><a href="#!">three</a></li>
					</ul>
					
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 z-depth-5 card-panel">
                    <form action="./search.php" method="POST" class="login-form">
                        <div class="row">
                            <div class="input-field col s12 center">
                                <p class="center login-form-text">Quick Search</p>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input id="search" name="search" type="text" class="validate" />
                                <label for="search" data-error="wrong" data-success="right">Search</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s6">
                                <input id="min_price" name="min_price" type="number" class="validate" />
                                <label for="min_price" data-error="wrong" data-success="right">Min Price</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="max_price" name="max_price" type="number" class="validate" />
                                <label for="max_price" data-error="wrong" data-success="right">Max Price</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s3">
                                <input id="start_date" name="start_date" type="text" class="datepicker" required />
                                <label for="start_date">Start Date</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="start_time" name="start_time" type="text" class="timepicker" />
                                <label for="start_time">Start Time</label>
                            </div>

                            <div class="input-field col s3">
                                <input id="end_date" name="end_date" type="text" class="datepicker" required />
                                <label for="end_date">End Date</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="end_time" name="end_time" type="text" class="timepicker" />
                                <label for="end_time">End Time</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light blue col s12" type="submit" name="action">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="public/img/car_1.jpeg" height="500">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <table class="striped center">
                                <tbody>
                                    <tr>
                                        <td>Experience</td>
                                        <td>3.75/5</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>$5,000.00 per day</td>
                                    </tr>
                                    <tr>
                                        <td>Deposit</td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>Capacity</td>
                                        <td>5 person(s)</td>
                                    </tr>
                                    <tr>
                                        <td>Min Days</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Condition</td>
                                        <td>Good</td>
                                    </tr>
                                    <tr>
                                        <td>Transmission</td>
                                        <td>Manual</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="public/img/car_2.jpeg" height="500">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <table class="striped center">
                                <tbody>
                                <tr>
                                    <td>Experience</td>
                                    <td>3/5</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>$5,000.00 per day</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>$5,000.00</td>
                                </tr>
                                <tr>
                                    <td>Capacity</td>
                                    <td>5 person(s)</td>
                                </tr>
                                <tr>
                                    <td>Min Days</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Condition</td>
                                    <td>Good</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Manual</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="public/img/car_3.jpeg" height="500">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <table class="striped center">
                                <tbody>
                                <tr>
                                    <td>Experience</td>
                                    <td>3/5</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>$5,000.00 per day</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>$5,000.00</td>
                                </tr>
                                <tr>
                                    <td>Capacity</td>
                                    <td>5 person(s)</td>
                                </tr>
                                <tr>
                                    <td>Min Days</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Condition</td>
                                    <td>Good</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Manual</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="public/img/car_4.jpeg" height="500">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <table class="striped center">
                                <tbody>
                                <tr>
                                    <td>Experience</td>
                                    <td>3/5</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>$5,000.00 per day</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>$5,000.00</td>
                                </tr>
                                <tr>
                                    <td>Capacity</td>
                                    <td>5 person(s)</td>
                                </tr>
                                <tr>
                                    <td>Min Days</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Condition</td>
                                    <td>Good</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Manual</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="public/img/car_5.jpeg" height="500">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <table class="striped center">
                                <tbody>
                                <tr>
                                    <td>Experience</td>
                                    <td>3/5</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>$5,000.00 per day</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>$5,000.00</td>
                                </tr>
                                <tr>
                                    <td>Capacity</td>
                                    <td>5 person(s)</td>
                                </tr>
                                <tr>
                                    <td>Min Days</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Condition</td>
                                    <td>Good</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Manual</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="public/img/car_6.jpeg" height="500">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <table class="striped center">
                                <tbody>
                                <tr>
                                    <td>Experience</td>
                                    <td>3/5</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>$5,000.00 per day</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>$5,000.00</td>
                                </tr>
                                <tr>
                                    <td>Capacity</td>
                                    <td>5 person(s)</td>
                                </tr>
                                <tr>
                                    <td>Min Days</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Condition</td>
                                    <td>Good</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Manual</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="public/img/car_7.jpeg" height="500">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <table class="striped center">
                                <tbody>
                                <tr>
                                    <td>Experience</td>
                                    <td>3/5</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>$5,000.00 per day</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>$5,000.00</td>
                                </tr>
                                <tr>
                                    <td>Capacity</td>
                                    <td>5 person(s)</td>
                                </tr>
                                <tr>
                                    <td>Min Days</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Condition</td>
                                    <td>Good</td>
                                </tr>
                                <tr>
                                    <td>Transmission</td>
                                    <td>Manual</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="pagination center">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">Rent any car!</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <span id="copyright"></span>
                <a class="grey-text text-lighten-4 right" href="http://somniadeals.com:8080/resume/">Meet The Developer</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        let year = (new Date()).getFullYear();
        document.getElementById("copyright").innerHTML = "© 2017-" + year +" Copyright JaCarRental - From SomniaChaser";
    </script>
    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.datepicker').each(function () {
                let pickr = $(this).pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 5, // Creates a dropdown of 15 years to control year,
                    today: 'Today',
                    clear: 'Clear',
                    close: 'Ok',
                    closeOnSelect: false, // Close upon selecting a date,
                    editable: true
                });

                $(this).click(function () {
                    pickr.pickadate('open');
                });
            })
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.timepicker').pickatime({
                default: 'now', // Set default time: 'now', '1:30AM', '16:30'
                fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
                twelvehour: true, // Use AM/PM or 24-hour format
                donetext: 'OK', // text for done-button
                cleartext: 'Clear', // text for clear-button
                canceltext: 'Cancel', // Text for cancel-button,
                container: undefined, // ex. 'body' will append picker to body
                autoclose: false, // automatic close timepicker
                ampmclickable: true, // make AM PM clickable
                aftershow: function(){} //Function for after opening timepicker
            });
        });
    </script>
</body>
</html>