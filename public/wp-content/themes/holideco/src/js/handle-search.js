import axios from "axios";

const handleSearch = (
    searchValue,
    postsContainer,
    eventsContainer,
    galleryContainer
) => {
    axios
        .get(`${siteData.rootUrl}/wp-json/wp/v2/posts?search=${searchValue}`)
        .then(function(response) {
            if (response.data.length) {
                console.log(response.data);
            } else {
                postsContainer.innerHTML = "Geen resultaten";
            }
        })
        .catch(function(error) {
            alert(error.message);
        });
    axios
        .get(`${siteData.rootUrl}/wp-json/wp/v2/event?search=${searchValue}`)
        .then(function(response) {
            if (response.data.length) {
                console.log(response.data);
            } else {
                eventsContainer.innerHTML = "Geen resultaten";
            }
        })
        .catch(function(error) {
            alert(error.message);
        });
    axios
        .get(
            `${siteData.rootUrl}/wp-json/wp/v2/gallery_item?search=${searchValue}`
        )
        .then(function(response) {
            if (response.data.length) {
                console.log(response.data);
            } else {
                galleryContainer.innerHTML = "Geen resultaten";
            }
        })
        .catch(function(error) {
            alert(error.message);
        });
};

document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("search-input");
    const postsContainer = document.querySelector(".posts-container");
    const eventsContainer = document.querySelector(".events-container");
    const galleryContainer = document.querySelector(".gallery-container");

    searchInput.addEventListener("input", (e) =>
        handleSearch(
            e.target.value,
            postsContainer,
            eventsContainer,
            galleryContainer
        )
    );
});
