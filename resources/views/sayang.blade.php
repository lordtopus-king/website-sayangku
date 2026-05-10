<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo my princess! ❤️</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap');
        body { font-family: 'Quicksand', sans-serif; }
        .heart-beat {
            animation: beat 0.8s ease infinite;
        }
        @keyframes beat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        .click-effect:active {
            transform: scale(0.97);
        }
        .fade-in {
            animation: fadeIn 0.5s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-pink-100 via-rose-50 to-purple-100 min-h-screen flex items-center justify-center p-4">

    <div class="max-w-2xl w-full">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-pink-200">
            
            <div class="bg-gradient-to-r from-pink-400 to-rose-400 p-6 text-center">
                <div class="inline-block bg-white rounded-full p-4 shadow-lg heart-beat">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-rose-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-white mt-4">
                    Halo my princess! 💕
                </h1>
                <p class="text-pink-100 text-lg mt-2">Klik tombol di bawah untuk semangat ✨</p>
            </div>

            <div class="p-8 text-center">
                <button id="motivationBtn" class="click-effect bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white font-bold py-4 px-8 rounded-full shadow-lg transition duration-300 text-lg md:text-xl flex items-center justify-center gap-3 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    Klik untuk Semangat!
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 heart-beat" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>

                <div id="quoteContainer" class="mt-8 min-h-[180px] flex items-center justify-center">
                    <div id="quoteCard" class="hidden bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl p-6 border-2 border-pink-200 shadow-md w-full fade-in">
                        <div class="flex items-start gap-3">
                            <span class="text-4xl">💪</span>
                            <p id="quoteText" class="text-gray-700 text-lg md:text-xl font-medium leading-relaxed text-left"></p>
                        </div>
                    </div>
                </div>

                <div id="confetti" class="hidden text-2xl mt-4">✨🎉💖✨</div>
            </div>

            <div class="bg-pink-50 px-6 py-3 text-center text-pink-500 text-sm border-t border-pink-100">
                Untuk kamu yang sedang berjuang di mid term ❤️ Semangat terus my princess!
            </div>
        </div>
    </div>

    <script>
        const quotes = @json($quotes);
        let lastIndex = -1;

        function getRandomQuote() {
            let newIndex = lastIndex;
            while (newIndex === lastIndex && quotes.length > 1) {
                newIndex = Math.floor(Math.random() * quotes.length);
            }
            lastIndex = newIndex;
            return quotes[newIndex];
        }

        const btn = document.getElementById('motivationBtn');
        const quoteCard = document.getElementById('quoteCard');
        const quoteText = document.getElementById('quoteText');
        const confettiDiv = document.getElementById('confetti');

        btn.addEventListener('click', function() {
            const newQuote = getRandomQuote();
            quoteText.textContent = newQuote;
            quoteCard.classList.remove('hidden');
            quoteCard.classList.add('fade-in');
            setTimeout(() => {
                quoteCard.classList.remove('fade-in');
            }, 500);
            confettiDiv.classList.remove('hidden');
            setTimeout(() => {
                confettiDiv.classList.add('hidden');
            }, 800);
            if (navigator.vibrate) navigator.vibrate(50);
        });
    </script>
</body>
</html>