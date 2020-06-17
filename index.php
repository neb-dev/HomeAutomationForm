<?php
    if($_SERVER["REQUEST_METHOD" == "POST"]) {
        $host = "local";
        $db = "cms";
        $user = "cms_user";
        $pass = "userpass";
        $conn = mysqli_connect($host, $user, $pass, $db) or exit("Unable to connect: " . mysqli_connect_error());

        $sql = "INSERT INTO quote VALUES (
            '". $_POST['first_name'] ."',
            '". $_POST['last_name'] ."',
            '". $_POST['dob'] ."',
            '". $_POST['email'] ."',
            '". $_POST[''] ."',
            '". $_POST['marital_status'] ."',
            '". $_POST[''] ."',
            '". $_POST[''] ."',
            '". $_POST[''] ."',
            '". $_POST[''] ."',
            '". $_POST[''] ."',
            '". $_POST[''] ."',
            '". $_POST[''] ."',
            '". $_POST[''] ."',
            '". $_POST[''] ."'
        )";

        echo $sql;

        $result = mysqli_query($conn, $sql);
        if(!$result) {
            echo mysqli_error($conn) . PHP_EOL;
        } else {
            $id = mysqli_insert_id($conn);
            echo "New Quote ID: $id";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Encompass Insurance Form</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">

            <form>
                <div class="form-row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" id="first_name" placeholder="First name">
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" id="last_name" placeholder="Last name">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <label for="dob" class="col-form-label">Date of Birth</label>
                    <div class="col">
                        <input type="date" class="form-control" id="dob">
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col pt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender-options" id="male-option"
                                value="Male">
                            <label class="form-check-label" for="male-option">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender-options" id="female-option"
                                value="Female">
                            <label class="form-check-label" for="female-option">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <select class="custom-select" id="marital_status">
                            <option selected>Marital Status</option>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" id="city" placeholder="City">
                    </div>
                    <div class="col">
                        <select class="custom-select" id="state">
                            <option selected>State</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Nebraska">Nebraska</option>
                        </select>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" id="zip" placeholder="ZIP">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="county" placeholder="County">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <select class="custom-select" id="drivers-residents">
                            <option selected>Number of Residents</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="custom-select" id="vehicles">
                            <option selected>Number of Vehicles</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <label for="purchase" class="col-form-label">Purchase Date</label>
                    <div class="col">
                        <input type="date" class="form-control" id="purchase">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <label for="purchase" class="col-form-label">Is home rented out?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rented-options" id="rented-yes"
                                value="Male">
                            <label class="form-check-label" for="rented-yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rented-options" id="rented-no"
                                value="Female">
                            <label class="form-check-label" for="rented-no">No</label>
                        </div>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <select class="custom-select" id="sump-pump">
                            <option selected># of Sump Pumps</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3+</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="roof-year" placeholder="Roof Year">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="conditions" class="col-form-label">Do any of the following conditions apply?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="conditions" id="conditions-yes"
                                value="Male">
                            <label class="form-check-label" for="conditions-yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="conditions" id="conditions-no"
                                value="Female">
                            <label class="form-check-label" for="conditions-no">No</label>
                        </div>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <small class="form-text text-muted">&bull; Is foundation Open, on Piers, Pilings, or Stilts?</small>
                        <small class="form-text text-muted">&bull; Is there a trampoline
                            on the premises?</small>
                        <small class="form-text text-muted">&bull; Is there an unfenced pool on the premises?</small>
                        <small class="form-text text-muted">&bull; Is the property in a flood zone area?</small>
                        <small class="form-text text-muted">&bull; Is the property in a wave wash, sinkhole, pollution,
                            landslide, or cave-in area?</small>
                        <small class="form-text text-muted">&bull; Is a corporation, estate, trust or LLC listed as the named insured?</small>
                        <small class="form-text text-muted">&bull; Is there an underground oil tank on the premises?</small>
                        <small class="form-text text-muted">&bull; Is there a woodburning stove on the premises?</small>
                        <small class="form-text text-muted">&bull; Does the insured have any wild or exotic animals?</small>
                    </div>
                </div>

                <!-- <div class="form-row mb-3">
                    <div class="col">

                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">

                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">

                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">

                    </div>
                </div> -->

                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </form>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>