API Endpoints:

1. /api/upload
    Takes: title,release_year,genre,description
    Returns: title,release_year,genre,description,updated_at,created_at,id

2. /api/getMovie/{title}
    Takes: an title
    returns: movie details

3. /api/getReleaseYear/{year}
    Takes: year
    Returns: list of movies
4. /api/getGenre/{genre}
    Takes: genre
    Returns: list of movies in genre
5. /api/deleteMovie/{title}
    Takes: movie title
    Returns: message whether deleted or not