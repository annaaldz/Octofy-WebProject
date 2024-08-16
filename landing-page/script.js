const faqQuestions = document.querySelectorAll('.faq-question');

// Adiciona um evento de clique para cada botão de pergunta
faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        // Seleciona a resposta correspondente ao botão clicado
        const answer = question.nextElementSibling;
        // Alterna a visibilidade da resposta
        if (answer.style.display === 'block') {
            answer.style.display = 'none'; // Oculta a resposta se ela estiver visível
        } else {
            answer.style.display = 'block'; // Exibe a resposta se ela estiver oculta
        }
    });
});
