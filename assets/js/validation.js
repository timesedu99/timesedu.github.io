function validateForm() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const dob = document.getElementById("dob").value;
  const course = document.getElementById("course").value;

  if (!name || !email || !dob || !course) {
    alert("All fields are required.");
    return false;
  }

  if (!validateEmail(email)) {
    alert("Invalid email format.");
    return false;
  }

  if (!confirm("Are you sure you want to submit the form?")) {
    return false;
  }

  return true;
}

function validateEmail(email) {
  const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  return re.test(String(email).toLowerCase());
}
