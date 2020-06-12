const form = document.querySelector("form");
const inputArr = document.querySelectorAll("input");
const select = document.querySelector("form select");
const selectArr = ["none", "low", "moderate", "high", "very high", "huge"];
const [inputWeight, inputHeight, inputAge, inputMale, inputFemale] = [
  ...inputArr,
];
const p = document.querySelector(".result");
const loginSel = document.querySelector("#login_user");
const calculateBmr = () => {
  if (inputMale.checked) {
    return (
      66 +
      13.7 * inputWeight.value +
      5 * inputHeight.value -
      6.76 * inputAge.value
    );
  } else if (inputFemale.checked) {
    return (
      655 +
      9.6 * inputWeight.value +
      1.8 * inputHeight.value -
      4.7 * inputAge.value
    );
  }
};

const specifyActivityLevel = () => 1 + selectArr.indexOf(select.value) * 0.2;

const calculateCalories = (e) => {
  e.preventDefault();
  const bmr = calculateBmr();
  const activityLevel = specifyActivityLevel();
  var login = loginSel.value;
  const calories = Math.floor(bmr * activityLevel);
  p.innerHTML = `Twoje zero kaloryczne wynosi: <span>${calories}</span> kcal`;

  $.ajax({
    url: "save.php",
    type: "POST",
    data: {
      login_user: login,
      data: calories,
    },
    cache: false,
    success: function (dataResult) {
      var dataResult = JSON.parse(dataResult);
      if (dataResult.statusCode == 200) {
        alert("Data added successfully !");
      } else if (dataResult.statusCode == 201) {
        alert("Error occured !");
      }
    },
  });
  
  form.reset();
};

form.addEventListener("submit", calculateCalories);

//Mężczyźni	66 + [13,7 x masa ciała (kg)] + [5 x wzrost (cm)] - [6,76 x wiek (lata)]
// Kobiety	655 + [9,6 x masa ciała (kg)] + [1,8 x wzrost (cm)] - [4,7 x wiek (lata)]
