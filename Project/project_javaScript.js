// function to display the current date and time
function displayDateTime() {
  const now = new Date();
  const datetime = now.toLocaleString();
  document.getElementById("datetime").innerHTML = "Today is: " + datetime;
}

// call the function to display the initial date and time
displayDateTime();

// refresh the date and time every second
setInterval(displayDateTime, 1000);

function submitFindPet(event) {

  let petType = document.getElementById("type").value;
  let breed = document.getElementById("breed").value;
  let age = document.getElementById("age").value;
  let gender = document.getElementById("gender").value;
  let getAlongDog = document.getElementById("dog").checked;
  let getAlongCat = document.getElementById("cat").checked;
  let getAlongKid = document.getElementById("child").checked;

  let bool = (getAlongDog || getAlongCat || getAlongKid);

  if ((petType == "Option" || breed == "Option" || age == "Option" || gender == "Option" || !bool)) {
    alert("Please Fill Out All the Options And Try Again");
  }
}

function submitGiveAway(event) {

  let petType = document.getElementById("pet_type").value;
  let breed = document.getElementById("pet_breed").value;
  let age = document.getElementById("age").value;
  let gender = document.getElementById("gender").value;
  let getAlongDog = document.getElementById("dog").checked;
  let getAlongCat = document.getElementById("cat").checked;
  let getAlongKid = document.getElementById("child").checked;
  let comment = document.getElementById("comments").value;
  let owner = document.getElementById("owner_name").value;
  let owner_email = document.getElementById("owner_email").value;

  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  let validEmail = re.test(String(owner_email).toLowerCase());

  let bool = (getAlongDog || getAlongCat || getAlongKid);

  if ((petType == "Select_Option" || breed == "Select_Option" || age == "Select_Option" || gender == "Select_Option" || !bool || comment == "" || owner == "" || owner_email == "")) {
    alert("Please Fill Out All the Options And Try Again");
    return false;
  }
  if (!validEmail) {
    alert("Please Enter A Valid Email Format And Try Again");
    return false;
  }
}
