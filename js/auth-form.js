const labels = document.querySelectorAll("label");
const inputs = document.querySelectorAll("input");
const msgs = document.querySelectorAll("form div p");
const email = document.querySelector("form div:nth-of-type(1) input");
const password = document.querySelector("form div:nth-of-type(2) input");
const btn = document.querySelector('input[type="submit');
const closeIcons = document.querySelectorAll(".close");

closeIcons[0].addEventListener("click", function () {
  email.value = "";
});

closeIcons[1].addEventListener("click", function () {
  password.value = "";
});

const errFoo = () => {
  setTimeout(() => {
    labels.forEach((label) => label.classList.add("active"));
    inputs.forEach((input) => input.classList.add("active"));
    msgs.forEach((msg) => msg.classList.add("active"));
    closeIcons.forEach((icon) => icon.classList.add("active"));
  }, 100);
};

const auth = async (e) => {
  e.preventDefault();

  const response = await fetch("http://127.0.0.1:8000/api.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      email: email.value,
      password: password.value,
    }),
  });

  if (response.status === 422) {
    errFoo();
  } else if (response.status >= 200 && response.status <= 299) {
    const jwt = await response.text();
    localStorage.setItem("token", jwt);
    email.value = "";
    password.value = "";
    labels.forEach((label) => label.classList.remove("active"));
    inputs.forEach((input) => input.classList.remove("active"));
    msgs.forEach((msg) => msg.classList.remove("active"));
    closeIcons.forEach((icon) => icon.classList.remove("active"));
  }
};

btn.addEventListener("click", auth);
