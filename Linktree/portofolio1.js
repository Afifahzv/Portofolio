const buttons = [
  {
    name: "Instagram",
    link: "https://instagram.com/afifahzv",
    class: "instagram",
  },
  {
    name: "Youtube",
    link: "https://youtube.com/afifahzv",
    class: "youtube",
  },
  {
    name: "Facebook",
    link: "https://facebook.com/afifahzv",
    class: "facebook",
  },
  {
    name: "Tiktok",
    link: "https://tiktok.com/@afifahzv",
    class: "tiktok",
  },
  {
    name: "Whatsapp",
    link: "https://wa.me/+6289630613548",
    class: "whatsapp",
  },
];

// memanggil button container
const btnContainer = document.getElementById("button-container");

// iterasi/dapatkan masing-masing data button dari array buttons
buttons.forEach((button) => {
  // membuat element button
  const btn = document.createElement("button");

  // mengisi text dari button
  btn.innerText = button.name;

  // menambahkan class btn ke dalam button
  btn.classList.add("btn");

  // menambahkan class untuk merubah warnanya
  btn.classList.add(button.class);

  // tambahkan click menuju link
  btn.addEventListener("click", () => window.open(button.link, "_blank"));

  // masukkan button ke dalam button container
  btnContainer.append(btn);
});
