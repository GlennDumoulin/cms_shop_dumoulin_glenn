import axios from "axios";

const handleSearch = (searchValue) => {
    axios
        .get(`${siteData.rootUrl}/wp-json/wp/v2/posts?search=${searchValue}`)
        .then(function(response) {
            if (response.data.length) {
                console.log(response.data);
            } else {
                console.log("Geen resultaten");
            }
        })
        .catch(function(error) {
            alert(error.message);
        });
};

document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("search-input");

    searchInput.addEventListener("input", (e) => handleSearch(e.target.value));
});
