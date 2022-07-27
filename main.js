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

      } else if (BMI_value >= 18 || BMI_value <= 22) {
          console.log('Weight is OK');
      } else {
          console.log('overweight');
      }
  }