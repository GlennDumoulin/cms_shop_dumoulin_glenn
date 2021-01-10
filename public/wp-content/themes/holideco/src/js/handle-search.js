import axios from "axios";

const handleSearch = (
    searchValue,
    pagesContainer,
    postsContainer,
    eventsContainer
) => {
    axios
        .get(`${siteData.rootUrl}/wp-json/wp/v2/pages?search=${searchValue}`)
        .then(function(response) {
            if (response.data.length) {
                pagesContainer.innerHTML = `
                <h2>Pagina's</h2>
                <ul class="all-results">
                  ${response.data
                      .map(
                          (result) => `
                      <li class="result">
                          <a href="${result.link}">
                              ${result.title.rendered}
                          </a>
                      </li>`
                      )
                      .join("")}
                </ul>
                `;
            } else {
                pagesContainer.innerHTML = `
                <h2>Pagina's</h2>
                <p>Geen resultaten</p>
                `;
            }
        })
        .catch(function(error) {
            alert(error.message);
        });
    axios
        .get(`${siteData.rootUrl}/wp-json/wp/v2/posts?search=${searchValue}`)
        .then(function(response) {
            if (response.data.length) {
                console.log(response.data);
                postsContainer.innerHTML = `
                <h2>Posts</h2>
                <ul class="all-results">
                  ${response.data
                      .map(
                          (result) => `
                      <li class="result">
                          <a href="${result.link}">
                              ${result.title.rendered}
                          </a>
                      </li>`
                      )
                      .join("")}
                </ul>
                `;
            } else {
                postsContainer.innerHTML = `
                <h2>Posts</h2>
                <p>Geen resultaten</p>
                `;
            }
        })
        .catch(function(error) {
            alert(error.message);
        });
    axios
        .get(`${siteData.rootUrl}/wp-json/wp/v2/event?search=${searchValue}`)
        .then(function(response) {
            if (response.data.length) {
                eventsContainer.innerHTML = `
                <h2>Events</h2>
                <ul class="all-results">
                  ${response.data
                      .map(
                          (result) => `
                      <li class="result">
                          <a href="${result.link}">
                              ${result.title.rendered}
                          </a>
                      </li>`
                      )
                      .join("")}
                </ul>
                `;
            } else {
                eventsContainer.innerHTML = `
                <h2>Events</h2>
                <p>Geen resultaten</p>
                `;
            }
        })
        .catch(function(error) {
            alert(error.message);
        });
};

const debounce = (callback, wait) => {
    let timerId;
    return (...args) => {
        clearTimeout(timerId);
        timerId = setTimeout(() => {
            callback(...args);
        }, wait);
    };
};

document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("search-input");
    const pagesContainer = document.querySelector(".pages-container");
    const postsContainer = document.querySelector(".posts-container");
    const eventsContainer = document.querySelector(".events-container");

    searchInput.addEventListener("input", (e) =>
        debounce(
            handleSearch(
                e.target.value,
                pagesContainer,
                postsContainer,
                eventsContainer
            ),
            500
        )
    );
});
