<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="logo2.png" type="image/x-icon">
        <title>Registration form</title>
</head>

<body style="  background: linear-gradient(to top left, #00ffff 0%, #ffffff 100%);">
        <center>
                <h2>Patient Appointment Request Form</h2>
        </center>
        <div style="background: linear-gradient(to right, #ffffff 0%, #66ffff 100%);" class="border border-info"
                id="main">
                <form action="Patientdata.php" method="GET">
                        <span class="label label-default">Patients Name</span>
                        <br>
                        <input type="text" class="form-control" placeholder="Name" name="name" aria-label="Username"
                                aria-describedby="basic-addon1"><br>

                        <span class="label label-default">Email</span>
                        <input type="text" class="form-control" placeholder="Email" name="email" aria-label="Username"
                                aria-describedby="basic-addon1">
                        <br>
                        <span class="label label-default">Phone number</span>
                        <input type="text" class="form-control" placeholder="Phone number" name="contact"
                                aria-label="Username" aria-describedby="basic-addon1">
                        <br>
                        <span class="label label-default">Gender</span>
                        <br>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="gender" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">MALE</label>
                        </div>

                        <div class="my-2"></div>

                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="gender" class="custom-control-input" id="defaultChecked">
                                <label class="custom-control-label" for="defaultChecked">FEMALE</label>
                        </div>
                        <br>
                        <span class="label label-default">Patient address:</span>
                        <br>
                        <br>
                        <input type="text" class="form-control" placeholder="address line 1" name="addr1"
                                aria-label="Username" aria-describedby="basic-addon1"><br>
                        <input type="text" class="form-control" placeholder="address line 2" aria-label="Username"
                                aria-describedby="basic-addon1"><br>
                        <input type="text" class="form-control" placeholder="address line 3" aria-label="Username"
                                aria-describedby="basic-addon1">

                        <br>

                        <span class="label label-default">Diseases suffering from:</span>
                        <input type="text" class="form-control" placeholder="Username" name="disease"
                                aria-label="Username" aria-describedby="basic-addon1">
                        <br>
                        <span class="label label-default">Any symptoms:</span>
                        <input type="text" class="form-control" placeholder="Username" name="symptom"
                                aria-label="Username" aria-describedby="basic-addon1">
                        <br>
                        <span class="label label-default"> What days works best for you?</span>

                        <div class="form-group col-md-4">
                                <select name="day" id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                </select>
                        </div>
                        <br>
                        <label>What time works best for you?</label><br>
                        <div class="form-group col-md-4">
                                <select name="time" id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Morning</option>
                                        <option>Afternoon</option>
                                        <option>Evening</option>
                                </select>
                        </div>
                        <br>
                        <span class="label label-default"> Any specific data/time?</span><br>

                        <input name="date" style="margin-left:20px; padding:10px;border-radius:5px;border-color:black"
                                type="date"><br>
                        <br><br>
                        <span class="label label-default"> What services are you Insterested in?</span><br>
                        <input type="text" class="form-control" placeholder="Lastname" name="services"
                                aria-label="Username" aria-describedby="basic-addon1"><br><br>
                        <span class="label label-default"> Would like to be notified about promotional services. Please
                                note that we do not
                                rent or
                                sell your information to any third parties!</span><br><br>


                        <!-- <div class="custom-control custom-checkbox">
                                <input name="pservice" type="checkbox" class="custom-control-input"
                                        id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">YES</label>
                        </div>

                        <div class="my-2"></div>

                        <div class="custom-control custom-checkbox">
                                <input name="pservice" type="radio" class="custom-control-input" id="defaultChecked">
                                <label class="custom-control-label" for="defaultChecked">NO</label>
                        </div>
                        <br><br> -->
                        <center>
                                <button id="btn" type="submit" class="btn btn-info">Submit</button>
                        </center>
                </form>
        </div>
</body>

</html>