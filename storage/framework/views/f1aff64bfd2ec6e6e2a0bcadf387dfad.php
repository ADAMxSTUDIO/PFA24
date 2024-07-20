<div class="chat-popup" id="myChat">
    <div class="chat-popup-header" onclick="toggleChat()">
        <i class="fa-solid fa-robot"></i> Chat with me
    </div>
    <div class="chat-popup-body">
        <form id="chatForm" onsubmit="submitForm(); return false;">
            <input type="text" id="message" class="chat-popup-input" placeholder="Ask me something..." name="chat">
            <textarea class="form-control mb-3" id="response" cols="30" rows="3" readonly>. . .</textarea>
            <button type="submit" class="chat-popup-submit btn btn-warning">Send</button>
        </form>
    </div>
</div>

<script>
    function toggleChat() {
        var chat = document.getElementById('myChat');
        if (chat.style.display === 'none' || chat.style.display === '') {
            chat.style.display = 'block';
        } else {
            chat.style.display = 'none';
        }
    }

    async function submitForm() {
        const messageInput = document.getElementById('message');
        const responseTextarea = document.getElementById('response');
        const chat = messageInput.value;

        if (!chat) {
            alert('Please enter a message');
            return;
        }

        try {
            const response = await fetch('<?php echo e(route('chatbot')); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                },
                body: JSON.stringify({ chat })
            });

            if (response.ok) {
                const data = await response.json();
                responseTextarea.value = data.response; // || 'Hello there! How can I assist you today?';
            } else {
                responseTextarea.value = 'Error: Failed to fetch data';
            }
        } catch (error) {
            console.error('Error:', error);
            responseTextarea.value = 'Error: An unexpected error occurred';
        }
    }
</script>

<?php /**PATH C:\Users\ADAM\OneDrive\Documents\EMSI\3rd Grade\Phase 2\Projects\PFA\Realisation\app\resources\views/layouts/chatbot.blade.php ENDPATH**/ ?>