document.addEventListener("DOMContentLoaded", function () {
  const newsList = document.getElementById("news-list");

  fetch("https://api.nasa.gov/planetary/apod?api_key=Q7IlVimyvBkrZm2MoGApf141lcaDjNdBiJWBdvHu&count=5")
      .then(response => response.json())
      .then(data => {
          data.forEach(news => {
              const newsItem = document.createElement("div");
              newsItem.classList.add("news-item");
              newsItem.innerHTML = `
                  <h2>${news.title}</h2>
                  <p>${news.explanation}</p>
                  <img src="${news.url}" alt="${news.title}" width="100%">
              `;
              newsList.appendChild(newsItem);
          });
      })
      .catch(error => console.error("Error fetching data:", error));
});

