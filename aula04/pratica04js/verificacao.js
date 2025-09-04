function verificarSenha() {
  
  let user = document.getElementById("user").value;
  let senha = document.getElementById("senha").value;

  if (user === "user" && senha === "pass") 
  {
    alert("Login OK");
    document.querySelectorAll(".dado_login").forEach(div => {
      div.classList.remove("user_pass_fail")
    });
  }
  else
  {
    document.querySelectorAll(".dado_login").forEach(div => {
      div.classList.add("user_pass_fail")
    });
  }
}