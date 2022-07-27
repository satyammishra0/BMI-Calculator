<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        bodY {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);

        }

        .container {
            height: 100vh;
            width: 99vw;
            display: flex;
            /* background-color: rgba(148, 187, 233, 0.2); */
            align-items: center;
            justify-content: center;
        }

        .container>form {
            padding: 3% 4%;
            background-color: #fff;
            border-radius: 14px;
            border: 1.8px solid blue;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }
    </style>
</head>

<body>

    <section class="container">
        <form class="row g-3">
            <h3 style="text-align:center;color:#212529;font-size:22px;">Please Enter following details to calculate BMI</h3>

            <div class="col-md-12">
                <label class="form-label">Name</label>
                <input style="display:block !important;" type="text" class="form-control" id="username">
            </div>
            <div class="col-md-8">
                <label class="form-label">Please enter your Weight in KG</label>
                <input type="text" class="form-control" id="weight">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Weight</label>
                <select class="form-select" aria-label="Default select example" id="weight_unit">
                    <option selected>Choose...</option>
                    <option value="1">Pound</option>
                    <option value="2">KG</option>
                    <option value="3">Gram</option>
                </select>
            </div>
            <div class="col-md-8">
                <label class="form-label">Please enter your Height in Mt.</label>
                <input type="number" class="form-control" id="height">
            </div>

            <div class="col-md-4">
                <label for="inputState" class="form-label">Height</label>
                <select class="form-select" aria-label="Default select example" id="height_unit">
                    <option selected>Choose...</option>
                    <option value="4">CM</option>
                    <option value="5">Meter</option>
                    <option value="6">Foot</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick="calculate()">Calculate</button>
            </div>
        </form>
    </section>


    <script>
        function calculate() {
            var username = document.getElementById("username").value;
            var weight = document.getElementById("weight").value;
            var weight_unit = document.getElementById("weight_unit").value;
            var height = document.getElementById("height").value;
            var height_unit = document.getElementById("height_unit").value;

            if (weight_unit == "1") {
                weight = Math.round(weight / 2.205); //pound
                console.log(weight);
            }
            if (weight_unit == "2") {
                weight = weight; //kg
                console.log(weight);

            }
            if (weight_unit == "3") {
                weight = weight / 1000; //gram
                console.log(weight);

            }

            if (height_unit == "4") {
                height = Math.round(height / 100); //cm
                console.log(height);
            }
            if (height_unit == "5") {
                height = height; //meter
                console.log(height);
            }
            if (height_unit == "6") {
                height = Math.round(height / 3.281); //foot
                console.log(height);
            }
            var BMI_value = Math.round(weight / (height * height));
                console.log(`Your BMI is ${BMI_value}`);
            if (BMI_value < 18) {
                console.log('underweight');

            }

            else if (BMI_value >= 18 || BMI_value<=22) {
                console.log('Weight is OK');
            }
            else {
                console.log('overweight');
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>