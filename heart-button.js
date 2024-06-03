let heart = document.getElementById("heart");

let getNumberFromText = (text) => {
    match = text.match(/\d+/);
    return match;
}

let heartCount = getNumberFromText(heart.innerText)

heart.addEventListener("click", () => {
    heartCount++
    heart.innerText = `❤️ ${heartCount} ❤️`
})