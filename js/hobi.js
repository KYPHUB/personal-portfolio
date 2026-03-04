// TMDb API ile popüler filmleri çekme
const apiKey = 'b705a032e0d108872e63c9defa0c7771';
const url = `https://api.themoviedb.org/3/movie/popular?api_key=${apiKey}&language=tr-TR`;

fetch(url)
  .then(response => {
    if (!response.ok) {
      throw new Error('API isteği başarısız oldu: ' + response.status);
    }
    return response.json();
  })
  .then(data => {
    const movies = data.results;
    let moviesHTML = '';

    movies.forEach(movie => {
      const posterSrc = movie.poster_path
        ? `https://image.tmdb.org/t/p/w500${movie.poster_path}`
        : '';
      const movieHTML = `
        <div class="movie">
          ${posterSrc ? `<img src="${posterSrc}" alt="${movie.title}">` : ''}
          <h2>${movie.title}</h2>
          <p>Rating: ${movie.vote_average}</p>
        </div>
      `;
      moviesHTML += movieHTML;
    });

    document.getElementById('movies').innerHTML = moviesHTML;
  })
  .catch(error => {
    console.error('API Hatası:', error);
    const moviesEl = document.getElementById('movies');
    if (moviesEl) {
      moviesEl.innerHTML = '<p style="text-align:center; color:#aaa;">Film verileri yüklenirken bir hata oluştu.</p>';
    }
  });