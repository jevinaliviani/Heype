

    <section class="blog-posts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <!-- The following script dynamically populates the news container -->
                <div id="news-container"></div>
            </div>
        </div>
    </div>
</section> <!-- change design here -->
<!-- End blog-posts Area -->

<script>
    const url = 'https://newsapi.org/v2/everything';
    const apiKey = '42145dd7f9704703a27842e02f332d8c'; //use your own api key
    const queryParams = {
        q: 'healthy food recipe',
        apiKey: apiKey,
    };
    const queryString = Object.entries(queryParams)
        .map(([key, value]) => `${key}=${encodeURIComponent(value)}`)
        .join('&');
    const fullURL = `${url}?${queryString}`;

    fetch(fullURL)
        .then(response => response.json())
        .then(data => {
            const newsContainer = document.getElementById('news-container');

            if (data.status === 'ok' && data.articles && data.articles.length > 0) {
                data.articles.forEach(article => {
                    const articleDiv = document.createElement('div');
                    articleDiv.classList.add('single-post');
                    const img = document.createElement('img');
                    img.classList.add('img-fluid');
                    img.src = article.urlToImage; // Set the image source from the API
                    img.alt = article.title;
                    const tags = document.createElement('ul');
                    tags.classList.add('tags');
                    if (article.tags && Array.isArray(article.tags)) {
                        article.tags.forEach(tag => {
                            const tagItem = document.createElement('li');
                            const tagLink = document.createElement('a');
                            tagLink.href = '#';
                            tagLink.textContent = tag;
                            tagItem.appendChild(tagLink);
                            tags.appendChild(tagItem);
                        });
                    }
                    const titleLink = document.createElement('a');
                    titleLink.href = article.url;
                    const title = document.createElement('h1');
                    title.textContent = article.title;
                    titleLink.appendChild(title);
                    const description = document.createElement('p');
                    description.textContent = article.description;
                    const publishedAt = document.createElement('p');
                    const publishedDate = new Date(article.publishedAt);
                    publishedAt.textContent = `Published at: ${publishedDate.toDateString()}`;
                    const bottomMeta = document.createElement('div');
                    bottomMeta.classList.add('bottom-meta');
                    const userDetails = document.createElement('div');
                    userDetails.classList.add('user-details', 'row', 'align-items-center');
                    const commentWrap = document.createElement('div');
                    commentWrap.classList.add('comment-wrap', 'col-lg-6');
                    const commentsList = document.createElement('ul');
                    const socialWrap = document.createElement('div');
                    socialWrap.classList.add('social-wrap', 'col-lg-6');
                    const socialIcons = document.createElement('ul');
                    commentWrap.appendChild(commentsList);
                    userDetails.appendChild(commentWrap);
                    userDetails.appendChild(socialWrap);
                    bottomMeta.appendChild(userDetails);
                    articleDiv.appendChild(img);
                    articleDiv.appendChild(tags);
                    articleDiv.appendChild(titleLink);
                    articleDiv.appendChild(description);
                    articleDiv.appendChild(publishedAt);
                    articleDiv.appendChild(bottomMeta);

                    newsContainer.appendChild(articleDiv);
                });
            } else {
                newsContainer.innerHTML = '<p>No articles found.</p>';
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
</script>
                <div class="col-12 text-center">
                                    <a href="<?= base_url('User/UploadResep') ?>"  class="btn delicious-btn mt-30" type="submit">Upload</a>
                    </div>
                    
            </div>
        </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->