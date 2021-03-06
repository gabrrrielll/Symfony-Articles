const articles = document.getElementById('articles');

if (articles) {
    articles.addEventListener('click', e => {

        if (e.target.className === 'btn btn-danger delete-article') {
            const id = e.target.getAttribute('data-id');
            if (confirm('Delete article with id: ' + id + '?')) {

                fetch(`/article/delete/${id}`, {
                        method: 'DELETE'
                    })
                    .then(res => window.location.reload());
            }
        }
    })
}