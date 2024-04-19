const videoSection = document.querySelector(".video-list");
const loader = document.querySelector('.loader-box')

setTimeout(getVideos, 3000);

function getVideos() {
    fetch('https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=15&playlistId=UUzwo7UlGkb-8Pr6svxWo-LA&key=AIzaSyDsy5UpXo2fwxXd8gOHIyd5_E5OFma5jc4')
        .then((res) => res.json())
        .then((data) => {
            loader.style.display = 'none';
            data.items.forEach((el) => {
                const videoId = el.snippet.resourceId.videoId;
                const videoTitle = el.snippet.title;
                const thumbnailUrl = el.snippet.thumbnails.maxres.url;

                const videoContainer = document.createElement('div');
                videoContainer.classList.add('yt-video');

                videoContainer.innerHTML = `
                    <img src="${thumbnailUrl}" alt="${videoTitle}">
                `;

                videoContainer.addEventListener('click', function() {
                    window.open(`https://www.youtube.com/watch?v=${videoId}`, '_blank');
                });

                videoSection.appendChild(videoContainer);
            });
        })
        .catch(err => {
            loader.style.display = 'none';
            console.log(err);
            videoSection.innerHTML = `<h3>Sorry something went wrong, please try again later</h3>`;
        });
}
 

