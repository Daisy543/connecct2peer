document.getElementById('chat-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const chatInput = document.getElementById('chat-input');
    const chatMessages = document.getElementById('chat-messages');

    if (chatInput.value.trim()) {
        const message = document.createElement('div');
        message.textContent = chatInput.value;
        chatMessages.appendChild(message);
        chatInput.value = '';
    }
});


function focusBox(selectedBox) {

    const boxes = document.querySelectorAll('.about-box');
    
    boxes.forEach(box => {
        box.classList.remove('focused');
    });

    selectedBox.classList.add('focused');
}
