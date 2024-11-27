function openTopicForm(category) {
    document.getElementById('topicFormModal').style.display = 'block';
    document.getElementById('selectedCategory').value = category;
}

function closeTopicForm() {
    document.getElementById('topicFormModal').style.display = 'none';
    document.getElementById('createTopicForm').reset();
}

function toggleAdminOptions() {
    const role = document.getElementById('userRole').value;
    const adminOptions = document.getElementById('adminOptions');
    if (role === 'admin') {
        adminOptions.style.display = 'block';
    } else {
        adminOptions.style.display = 'none';
    }
}

document.getElementById('createTopicForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const role = document.getElementById('userRole').value;
    const title = document.getElementById('topicTitle').value;
    const content = document.getElementById('topicContent').value;
    const detailedContent = document.getElementById('detailedContent').value;
    const category = document.getElementById('selectedCategory').value;

    const post = document.createElement('div');
    post.className = 'post';
    post.innerHTML = `
        <h4>${title} (${role === 'admin' ? 'Admin' : 'User'})</h4>
        <p>${content}</p>
        ${role === 'admin' && detailedContent ? `<p><strong>Detalhes:</strong> ${detailedContent}</p>` : ''}
        <p><em>Categoria:</em> ${category === 'general' ? 'Discussão Geral' : 'Dicas e Tutoriais'}</p>
    `;

    document.getElementById('postsBox').appendChild(post);

    closeTopicForm();
});


