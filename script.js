function criarAnimal() {
    const nome = document.getElementById('nome').value;
    const raca = document.getElementById('raca').value;
    const sexo = document.getElementById('sexo').value;
    const cor = document.getElementById('cor').value;
    const nascimento = document.getElementById('nascimento').value;
    const peso = document.getElementById('peso').value;
    const altura = document.getElementById('altura').value;

    // Enviar dados para o backend usando AJAX ou Fetch API
    // Exemplo usando Fetch API:
    fetch('backend.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            action: 'create',
            nome,
            raca,
            sexo,
            cor,
            nascimento,
            peso,
            altura,
        }),
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
    });
}

function listarAnimais() {
    // Enviar requisição para obter a lista de animais do backend
    // Exemplo usando Fetch API:
    fetch('backend.php?action=list')
    .then(response => response.json())
    .then(data => {
        const listaAnimais = document.getElementById('listaAnimais');
        listaAnimais.innerHTML = '';

        data.forEach(animal => {
            const animalInfo = document.createElement('div');
            animalInfo.innerHTML = `
                <p><strong>Nome:</strong> ${animal.nome}</p>
                <p><strong>Raça:</strong> ${animal.raca}</p>
                <p><strong>Sexo:</strong> ${animal.sexo}</p>
                <p><strong>Cor:</strong> ${animal.cor}</p>
                <p><strong>Nascimento:</strong> ${animal.nascimento}</p>
                <p><strong>Peso:</strong> ${animal.peso} kg</p>
                <p><strong>Altura:</strong> ${animal.altura} m</p>
                <hr>
            `;
            listaAnimais.appendChild(animalInfo);
        });
    });
}