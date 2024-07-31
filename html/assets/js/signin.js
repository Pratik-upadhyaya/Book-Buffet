document.getElementById("signin-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    if (username === "user" && password === "password") {
      document.getElementById("message").innerHTML = "Login successful!";
    } else {
      document.getElementById("message").innerHTML = "Invalid username or password";
    }
  });