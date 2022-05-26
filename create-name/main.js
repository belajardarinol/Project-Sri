const keys = document.querySelectorAll(".key");
const keyArray = Array.from(keys);
const reset = document.getElementsByClassName("reset")[0];

const output = document.querySelector(".output");
const text = [];

keyArray.forEach((key) => {
  // get inner text
  const keyText = key.innerText;
  // get key code
  const keyCode = key.dataset.key;
  // add event listener
  key.addEventListener("click", () => {
    // reset output
    if (keyText === "RESET") {
      // reset text array
      text.length = 0;
      // reset output
      output.innerText = "";
    } else {
      // add key to text array
      text.push(keyText);
      // display text
      output.innerText = text.join("");
    }
  });
});
