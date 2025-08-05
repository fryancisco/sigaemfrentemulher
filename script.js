document.addEventListener('DOMContentLoaded', function () {
    // --- UI Element Event Listeners ---

    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuButton.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    document.querySelectorAll('.mobile-link').forEach(link => link.addEventListener('click', () => mobileMenu.classList.add('hidden')));

    // Mind Map Interactivity
    const violenciaNode = document.getElementById('node-violencia');
    violenciaNode.addEventListener('click', (event) => {
        if (event.target.closest('.mind-map-sub-node')) return;
        violenciaNode.classList.toggle('open');
    });

    // Modal Logic
    window.openModal = (modalId) => document.getElementById(modalId).style.display = 'block';
    document.querySelectorAll('.modal').forEach(modal => {
        modal.querySelector('.close-button').onclick = () => modal.style.display = 'none';
        modal.addEventListener('click', (event) => {
            if (event.target === modal) modal.style.display = 'none';
        });
    });

    // FAQ Accordion
    const faqAccordion = document.getElementById('faq-accordion');
    if (faqAccordion) {
        faqAccordion.addEventListener('click', (e) => {
            const question = e.target.closest('.faq-question');
            if (question) question.parentElement.classList.toggle('open');
        });
    }

    // --- Quiz Logic ---
    const quizContainer = document.getElementById('quiz-container');
    const quizResultContainer = document.getElementById('quiz-result');
    const quizData = [
        {
            question: "Qual a principal lei de proteção à mulher contra a violência doméstica no Brasil?",
            options: ["Estatuto do Idoso", "Lei Maria da Penha", "Código Penal", "Constituição Federal"],
            answer: "Lei Maria da Penha"
        },
        {
            question: "Ameaçar, humilhar e controlar as finanças de uma mulher são considerados tipos de violência?",
            options: ["Não, apenas a agressão física é violência", "Sim, são formas de violência psicológica e patrimonial", "Apenas se houver testemunhas", "Depende da situação"],
            answer: "Sim, são formas de violência psicológica e patrimonial"
        },
        {
            question: "Para qual número uma mulher em situação de perigo imediato deve ligar?",
            options: ["180 (Central de Atendimento)", "190 (Polícia Militar)", "192 (SAMU)", "100 (Direitos Humanos)"],
            answer: "190 (Polícia Militar)"
        }
    ];
    let userAnswers = {};

    function renderQuiz() {
        if (!quizContainer) return;
        quizContainer.innerHTML = '';
        quizData.forEach((q, index) => {
            const questionEl = document.createElement('div');
            questionEl.className = 'mb-6';
            questionEl.innerHTML = `<p class="font-semibold text-lg mb-3">${index + 1}. ${q.question}</p>`;

            const optionsEl = document.createElement('div');
            optionsEl.className = 'space-y-2';
            q.options.forEach(option => {
                const optionEl = document.createElement('div');
                optionEl.className = 'quiz-option p-3 rounded-lg border-2 border-gray-200 cursor-pointer';
                optionEl.textContent = option;
                optionEl.onclick = () => selectOption(index, option, optionEl);
                optionsEl.appendChild(optionEl);
            });
            questionEl.appendChild(optionsEl);
            quizContainer.appendChild(questionEl);
        });

        const submitButton = document.createElement('button');
        submitButton.id = 'quiz-submit';
        submitButton.textContent = 'Verificar Respostas';
        submitButton.className = 'w-full mt-4 bg-brand-pink-dark text-white font-bold py-3 px-4 rounded-lg hover:bg-brand-pink-medium transition-colors';
        submitButton.onclick = showResults;
        quizContainer.appendChild(submitButton);
    }

    function selectOption(qIndex, option, el) {
        userAnswers[qIndex] = option;
        el.parentElement.querySelectorAll('.quiz-option').forEach(child => child.classList.remove('selected'));
        el.classList.add('selected');
    }

    function showResults() {
        let score = 0;
        const questions = quizContainer.querySelectorAll('.mb-6');
        questions.forEach((question, qIndex) => {
            const selectedOption = userAnswers[qIndex];
            const correctAnswer = quizData[qIndex].answer;
            const options = question.querySelectorAll('.quiz-option');

            options.forEach(optionEl => {
                optionEl.onclick = null; // Disable further clicks
                if (optionEl.textContent === correctAnswer) {
                    optionEl.classList.add('correct');
                }
                if (optionEl.textContent === selectedOption && selectedOption !== correctAnswer) {
                    optionEl.classList.add('incorrect');
                }
            });

            if (selectedOption === correctAnswer) {
                score++;
            }
        });

        quizResultContainer.innerHTML = `<h3 class="text-2xl font-bold">Você acertou ${score} de ${quizData.length}!</h3><p class="mt-2">Conhecimento é poder! Continue aprendendo e se fortalecendo conosco.</p>`;
        document.getElementById('quiz-submit').style.display = 'none';
    }

    renderQuiz();
});