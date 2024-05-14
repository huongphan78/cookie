function updateDauX2(operation, id) {
    var dauX2 = document.getElementById(id);
    var currentVal = parseInt(dauX2.textContent);

    if (operation === '+') {
        dauX2.textContent = currentVal + 1;
    } else if (operation === '-' && currentVal > 0) {
        dauX2.textContent = currentVal - 1;
    }
}
function increaseChatbox() {
    var chatbox2 = document.getElementById('chatbox2');
    var currentValue = parseInt(chatbox2.textContent);
    chatbox2.textContent = currentValue + 1;
  }
  
